<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    protected $cartId;
    /**
     * Estimate shipping
     *
     * @param string $cartId The shopping cart ID.
     * @param \Kiboko\Magento\v2_1\Model\V1GuestGiftregistryCartIdEstimateShippingMethodsPostBody $$body 
     */
    public function __construct(string $cartId, \Kiboko\Magento\v2_1\Model\V1GuestGiftregistryCartIdEstimateShippingMethodsPostBody $$body)
    {
        $this->cartId = $cartId;
        $this->body = $$body;
    }
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-giftregistry/{cartId}/estimate-shipping-methods');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\QuoteDataShippingMethodInterface[]', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}