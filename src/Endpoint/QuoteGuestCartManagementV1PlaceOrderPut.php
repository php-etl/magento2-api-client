<?php

namespace Kiboko\Magento\Endpoint;

class QuoteGuestCartManagementV1PlaceOrderPut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $cartId;
    /**
     * Place an order for a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdOrderPutBody $quoteGuestCartManagementV1PlaceOrderPutBody 
     */
    public function __construct(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdOrderPutBody $quoteGuestCartManagementV1PlaceOrderPutBody)
    {
        $this->cartId = $cartId;
        $this->body = $quoteGuestCartManagementV1PlaceOrderPutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/order');
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
     * @throws \Kiboko\Magento\Exception\QuoteGuestCartManagementV1PlaceOrderPutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\QuoteGuestCartManagementV1PlaceOrderPutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}