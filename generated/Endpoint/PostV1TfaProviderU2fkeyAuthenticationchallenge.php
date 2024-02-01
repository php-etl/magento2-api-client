<?php

namespace Kiboko\Magento\Endpoint;

class PostV1TfaProviderU2fkeyAuthenticationchallenge extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Get the information to initiate a WebAuthn registration ceremony
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderU2fkeyAuthenticationChallengePostBody $postV1TfaProviderU2fkeyAuthenticationchallengeBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1TfaProviderU2fkeyAuthenticationChallengePostBody $postV1TfaProviderU2fkeyAuthenticationchallengeBody)
    {
        $this->body = $postV1TfaProviderU2fkeyAuthenticationchallengeBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/tfa/provider/u2fkey/authentication-challenge';
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
     * @return \Kiboko\Magento\Model\TwoFactorAuthDataU2fWebAuthnRequestInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\TwoFactorAuthDataU2fWebAuthnRequestInterface', 'json');
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}