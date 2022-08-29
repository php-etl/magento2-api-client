<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class MSPTwoFactorAuthTrustedManagerV1RevokeTrustedDeviceDelete extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $tokenId;
    /**
     * Revoke trusted device
     *
     * @param int $tokenId
     */
    public function __construct(int $tokenId)
    {
        $this->tokenId = $tokenId;
    }
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{tokenId}'), array($this->tokenId), '/V1/msp-2fa/trusted-devices/{tokenId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTrustedManagerV1RevokeTrustedDeviceDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTrustedManagerV1RevokeTrustedDeviceDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTrustedManagerV1RevokeTrustedDeviceDeleteBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTrustedManagerV1RevokeTrustedDeviceDeleteUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
