<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class MSPTwoFactorAuthTfaV1SetProvidersCodesPut extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    protected $userId;
    /**
     * Set providers
     *
     * @param int $userId 
     * @param \Kiboko\Magento\v2_4\Model\V1Msp2faUserProvidersUserIdPutBody $\MSPTwoFactorAuthTfaV1SetProvidersCodesPutBody 
     */
    public function __construct(int $userId, \Kiboko\Magento\v2_4\Model\V1Msp2faUserProvidersUserIdPutBody $\MSPTwoFactorAuthTfaV1SetProvidersCodesPutBody)
    {
        $this->userId = $userId;
        $this->body = $\MSPTwoFactorAuthTfaV1SetProvidersCodesPutBody;
    }
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{userId}'), array($this->userId), '/V1/msp-2fa/user-providers/{userId}');
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
     * @throws \Kiboko\Magento\v2_4\Exception\MSPTwoFactorAuthTfaV1SetProvidersCodesPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\MSPTwoFactorAuthTfaV1SetProvidersCodesPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}