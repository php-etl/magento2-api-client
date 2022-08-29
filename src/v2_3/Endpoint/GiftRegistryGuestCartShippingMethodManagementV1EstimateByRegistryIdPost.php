<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/guest-giftregistry/{cartId}/estimate-shipping-methods';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
