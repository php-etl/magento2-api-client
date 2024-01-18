<?php

namespace Kiboko\Magento\Endpoint;

class MSPTwoFactorAuthTfaV1SetProvidersCodesPut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $userId;
    /**
     * Set providers
     *
     * @param int $userId 
     * @param \Kiboko\Magento\Model\V1Msp2faUserProvidersUserIdPutBody $mSPTwoFactorAuthTfaV1SetProvidersCodesPutBody 
     */
    public function __construct(int $userId, \Kiboko\Magento\Model\V1Msp2faUserProvidersUserIdPutBody $mSPTwoFactorAuthTfaV1SetProvidersCodesPutBody)
    {
        $this->userId = $userId;
        $this->body = $mSPTwoFactorAuthTfaV1SetProvidersCodesPutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
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
     * @throws \Kiboko\Magento\Exception\MSPTwoFactorAuthTfaV1SetProvidersCodesPutUnauthorizedException
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
            throw new \Kiboko\Magento\Exception\MSPTwoFactorAuthTfaV1SetProvidersCodesPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}