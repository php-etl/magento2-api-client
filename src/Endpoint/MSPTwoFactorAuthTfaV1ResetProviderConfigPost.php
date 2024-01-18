<?php

namespace Kiboko\Magento\Endpoint;

class MSPTwoFactorAuthTfaV1ResetProviderConfigPost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $userId;
    protected $providerCode;
    /**
     * Reset default provider code
     *
     * @param int $userId 
     * @param string $providerCode 
     */
    public function __construct(int $userId, string $providerCode)
    {
        $this->userId = $userId;
        $this->providerCode = $providerCode;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{userId}', '{providerCode}'), array($this->userId, $this->providerCode), '/V1/msp-2fa/reset-provider/{userId}/{providerCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\MSPTwoFactorAuthTfaV1ResetProviderConfigPostUnauthorizedException
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
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\MSPTwoFactorAuthTfaV1ResetProviderConfigPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}