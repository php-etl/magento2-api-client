<?php

namespace Kiboko\Magento\V2_4\Runtime\Client;

use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriFactoryInterface;
use Symfony\Component\Serializer\SerializerInterface;

abstract class Client
{
    public const FETCH_RESPONSE = 'response';
    public const FETCH_OBJECT = 'object';

    public function __construct(
        private ClientInterface $httpClient,
        private RequestFactoryInterface $requestFactory,
        private UriFactoryInterface $uriFactory,
        private SerializerInterface $serializer,
        private StreamFactoryInterface $streamFactory,
        private string $accessToken,
        private string $username,
        private string $password,
    ) {
    }

    public function executeEndpoint(Endpoint $endpoint, string $fetch = self::FETCH_OBJECT)
    {
        if (self::FETCH_RESPONSE === $fetch) {
            trigger_deprecation('jane-php/open-api-common', '7.3', 'Using %s::%s method with $fetch parameter equals to response is deprecated, use %s::%s instead.', __CLASS__, __METHOD__, __CLASS__, 'executeRawEndpoint');
            return $this->executeRawEndpoint($endpoint);
        }
        return $endpoint->parseResponse($this->processEndpoint($endpoint), $this->serializer, $fetch);
    }
    public function executeRawEndpoint(Endpoint $endpoint): ResponseInterface
    {
        return $this->processEndpoint($endpoint);
    }
    private function processEndpoint(Endpoint $endpoint): ResponseInterface
    {
        [$bodyHeaders, $body] = $endpoint->getBody($this->serializer, $this->streamFactory);
        $queryString = $endpoint->getQueryString();
        $uriGlue = false === strpos($endpoint->getUri(), '?') ? '?' : '&';
        $uri = $queryString !== '' ? $endpoint->getUri() . $uriGlue . $queryString : $endpoint->getUri();
        $request = $this->requestFactory->createRequest($endpoint->getMethod(), $uri);
        if ($body) {
            if ($body instanceof StreamInterface) {
                $request = $request->withBody($body);
            } elseif (is_resource($body)) {
                $request = $request->withBody($this->streamFactory->createStreamFromResource($body));
            } elseif (strlen($body) <= 4000 && @file_exists($body)) {
                // more than 4096 chars will trigger an error
                $request = $request->withBody($this->streamFactory->createStreamFromFile($body));
            } else {
                $request = $request->withBody($this->streamFactory->createStream($body));
            }
        }
        foreach ($endpoint->getHeaders($bodyHeaders) as $name => $value) {
            $request = $request->withHeader($name, $value);
        }
        if (count($endpoint->getAuthenticationScopes()) > 0) {
            $scopes = [];
            foreach ($endpoint->getAuthenticationScopes() as $scope) {
                $scopes[] = $scope;
            }
            $request = $request->withHeader(AuthenticationRegistry::SCOPES_HEADER, $scopes);
        }
        return $this->sendRequest($request);
    }

    private function sendRequest(RequestInterface $request): ResponseInterface
    {
        $response = $this->tryRequest($request);
        if ($response->getStatusCode() === 401) {
            $this->refreshToken();

            $response = $this->tryRequest($request);
        }

        return $response;
    }

    private function tryRequest(RequestInterface $request): ResponseInterface
    {
        $request = $request->withHeader('Authorization', sprintf('Bearer %s', $this->accessToken));

        return $this->httpClient->sendRequest($request);
    }

    private function refreshToken(): void
    {
        $response = $this->httpClient->sendRequest(
            $this->requestFactory->createRequest(
                'POST',
                $this->uriFactory->createUri()->withPath('V1/integration/admin/token')
            )
                ->withHeader('Content-Type', 'application/json')
                ->withBody(
                $this->streamFactory->createStream(json_encode([
                    'username' => $this->username,
                    'password' => $this->password,
                ]))
            )
        );

        if ($response->getStatusCode() !== 200) {
            throw new AccessDeniedException('Something went wrong while refreshing your credentials. Please check your information.');
        }

        $this->accessToken = json_decode($response->getBody(), true);
    }
}
