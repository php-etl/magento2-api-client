<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class QuoteShippingMethodManagementV1EstimateByAddressIdPost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Estimate shipping
     *
     * @param int $cartId The shopping cart ID.
     * @param \Kiboko\Magento\v2_2\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody $quoteShippingMethodManagementV1EstimateByAddressIdPostBody
     */
    public function __construct(int $cartId, \Kiboko\Magento\v2_2\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody $quoteShippingMethodManagementV1EstimateByAddressIdPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $quoteShippingMethodManagementV1EstimateByAddressIdPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/{cartId}/estimate-shipping-methods-by-address-id');
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
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteShippingMethodManagementV1EstimateByAddressIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\QuoteDataShippingMethodInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\QuoteShippingMethodManagementV1EstimateByAddressIdPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
