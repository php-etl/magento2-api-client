<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param string $cartId
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdEstimateShippingMethodsPostBody $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody
     */
    public function __construct(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdEstimateShippingMethodsPostBody $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/estimate-shipping-methods');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\QuoteDataShippingMethodInterface[]', 'json');
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
