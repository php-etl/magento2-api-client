<?php

namespace Kiboko\Magento\Endpoint;

class PostV1TfaProviderAuthyConfigure extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Get the information required to configure google
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderAuthyConfigurePostBody $postV1TfaProviderAuthyConfigureBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1TfaProviderAuthyConfigurePostBody $postV1TfaProviderAuthyConfigureBody)
    {
        $this->body = $postV1TfaProviderAuthyConfigureBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/tfa/provider/authy/configure';
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
     * @return \Kiboko\Magento\Model\TwoFactorAuthDataAuthyRegistrationPromptResponseInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\TwoFactorAuthDataAuthyRegistrationPromptResponseInterface', 'json');
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}