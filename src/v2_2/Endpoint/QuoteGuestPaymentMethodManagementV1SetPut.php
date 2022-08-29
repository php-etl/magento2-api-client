<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class QuoteGuestPaymentMethodManagementV1SetPut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Add a specified payment method to a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\v2_2\Model\V1GuestCartsCartIdSelectedPaymentMethodPutBody $quoteGuestPaymentMethodManagementV1SetPutBody
     */
    public function __construct(string $cartId, \Kiboko\Magento\v2_2\Model\V1GuestCartsCartIdSelectedPaymentMethodPutBody $quoteGuestPaymentMethodManagementV1SetPutBody)
    {
        $this->cartId = $cartId;
        $this->body = $quoteGuestPaymentMethodManagementV1SetPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/selected-payment-method');
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
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestPaymentMethodManagementV1SetPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\QuoteGuestPaymentMethodManagementV1SetPutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
