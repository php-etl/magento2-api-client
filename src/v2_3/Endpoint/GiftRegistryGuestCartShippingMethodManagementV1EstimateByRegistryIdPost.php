<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    protected $cartId;
    /**
     * Estimate shipping
     *
     * @param string $cartId The shopping cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1GuestGiftregistryCartIdEstimateShippingMethodsPostBody $giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBody 
     */
    public function __construct(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestGiftregistryCartIdEstimateShippingMethodsPostBody $giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
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
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\QuoteDataShippingMethodInterface[]', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}