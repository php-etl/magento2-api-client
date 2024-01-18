<?php

namespace Kiboko\Magento\Endpoint;

class QuotePaymentMethodManagementV1GetGetWithCartId extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
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
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/{cartId}/selected-payment-method');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1GetGetWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1GetGetWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataPaymentInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\QuoteDataPaymentInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1GetGetWithCartIdUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1GetGetWithCartIdBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}