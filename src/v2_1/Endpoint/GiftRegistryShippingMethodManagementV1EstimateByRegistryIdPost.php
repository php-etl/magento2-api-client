<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPost extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    /**
     * Estimate shipping
     *
     * @param \Kiboko\Magento\v2_1\Model\V1GiftregistryMineEstimateShippingMethodsPostBody $$body 
     */
    public function __construct(\Kiboko\Magento\v2_1\Model\V1GiftregistryMineEstimateShippingMethodsPostBody $$body)
    {
        $this->body = $$body;
    }
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/giftregistry/mine/estimate-shipping-methods';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\QuoteDataShippingMethodInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}