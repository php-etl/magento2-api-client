<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/giftregistry/mine/estimate-shipping-methods';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_4\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostUnauthorizedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostUnauthorizedException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
