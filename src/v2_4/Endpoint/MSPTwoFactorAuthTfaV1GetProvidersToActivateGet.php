<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class MSPTwoFactorAuthTfaV1GetProvidersToActivateGet extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $userId;
    /**
     * Returns a list of providers to configure/enroll
     *
     * @param int $userId
     */
    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{userId}'), array($this->userId), '/V1/msp-2fa/providers-to-activate/{userId}');
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
     * @throws \Kiboko\Magento\v2_4\Exception\MSPTwoFactorAuthTfaV1GetProvidersToActivateGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\MSpTwoFactorAuthProviderInterface[]|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\MSpTwoFactorAuthProviderInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\MSPTwoFactorAuthTfaV1GetProvidersToActivateGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
