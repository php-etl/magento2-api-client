<?php

namespace Kiboko\Magento\Endpoint;

class PostV1TfaProviderAuthyAuthenticateonetouch extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Authenticate using the present one touch response and get an admin token
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderAuthyAuthenticateOnetouchPostBody $postV1TfaProviderAuthyAuthenticateonetouchBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1TfaProviderAuthyAuthenticateOnetouchPostBody $postV1TfaProviderAuthyAuthenticateonetouchBody)
    {
        $this->body = $postV1TfaProviderAuthyAuthenticateonetouchBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/tfa/provider/authy/authenticate-onetouch';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}