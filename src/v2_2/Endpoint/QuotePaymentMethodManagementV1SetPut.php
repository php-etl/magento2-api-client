<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class QuotePaymentMethodManagementV1SetPut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Adds a specified payment method to a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_2\Model\V1CartsCartIdSelectedPaymentMethodPutBody $quotePaymentMethodManagementV1SetPutBody
     */
    public function __construct(int $cartId, \Kiboko\Magento\v2_2\Model\V1CartsCartIdSelectedPaymentMethodPutBody $quotePaymentMethodManagementV1SetPutBody)
    {
        $this->cartId = $cartId;
        $this->body = $quotePaymentMethodManagementV1SetPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/{cartId}/selected-payment-method');
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
     * @throws \Kiboko\Magento\v2_2\Exception\QuotePaymentMethodManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuotePaymentMethodManagementV1SetPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\QuotePaymentMethodManagementV1SetPutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\QuotePaymentMethodManagementV1SetPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
