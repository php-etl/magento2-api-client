<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class MSPTwoFactorAuthTfaV1SetDefaultProviderCodePut extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    protected $userId;
    /**
     * Set default provider code
     *
     * @param int $userId 
     * @param \Kiboko\Magento\v2_3\Model\V1Msp2faDefaultProviderCodeUserIdPutBody $\MSPTwoFactorAuthTfaV1SetDefaultProviderCodePutBody 
     */
    public function __construct(int $userId, \Kiboko\Magento\v2_3\Model\V1Msp2faDefaultProviderCodeUserIdPutBody $\MSPTwoFactorAuthTfaV1SetDefaultProviderCodePutBody)
    {
        $this->userId = $userId;
        $this->body = $\MSPTwoFactorAuthTfaV1SetDefaultProviderCodePutBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{userId}'), array($this->userId), '/V1/msp-2fa/default-provider-code/{userId}');
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
     * @throws \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTfaV1SetDefaultProviderCodePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTfaV1SetDefaultProviderCodePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}