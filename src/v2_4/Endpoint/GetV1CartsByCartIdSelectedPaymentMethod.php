<?php

namespace Kiboko\Magento\V2_4\Endpoint;

class GetV1CartsByCartIdSelectedPaymentMethod extends \Kiboko\Magento\V2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_4\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Returns the payment method for a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     */
    public function __construct(int $cartId)
    {
        $this->cartId = $cartId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/{cartId}/selected-payment-method');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2_4\Exception\GetV1CartsByCartIdSelectedPaymentMethodBadRequestException
     * @throws \Kiboko\Magento\V2_4\Exception\GetV1CartsByCartIdSelectedPaymentMethodUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2_4\Model\QuoteDataPaymentInterface|\Kiboko\Magento\V2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_4\\Model\\QuoteDataPaymentInterface', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_4\Exception\GetV1CartsByCartIdSelectedPaymentMethodBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_4\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_4\Exception\GetV1CartsByCartIdSelectedPaymentMethodUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_4\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_4\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}