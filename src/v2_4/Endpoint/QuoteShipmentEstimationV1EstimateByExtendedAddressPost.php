<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class QuoteShipmentEstimationV1EstimateByExtendedAddressPost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param string $cartId
     * @param \Kiboko\Magento\v2_4\Model\V1CartsCartIdEstimateShippingMethodsPostBody $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody
     */
    public function __construct(string $cartId, \Kiboko\Magento\v2_4\Model\V1CartsCartIdEstimateShippingMethodsPostBody $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/{cartId}/estimate-shipping-methods');
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
     * @throws \Kiboko\Magento\v2_4\Exception\QuoteShipmentEstimationV1EstimateByExtendedAddressPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\QuoteDataShippingMethodInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\QuoteShipmentEstimationV1EstimateByExtendedAddressPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}