<?php

namespace Kiboko\Magento\V2_2\Endpoint;

class QuoteGuestCartManagementV1PlaceOrderPut extends \Kiboko\Magento\V2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Place an order for a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param null|\Kiboko\Magento\V2_2\Model\V1GuestCartsCartIdOrderPutBody $requestBody
     */
    public function __construct(string $cartId, ?\Kiboko\Magento\V2_2\Model\V1GuestCartsCartIdOrderPutBody $requestBody = null)
    {
        $this->cartId = $cartId;
        $this->body = $requestBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/order');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Kiboko\Magento\V2_2\Model\V1GuestCartsCartIdOrderPutBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\V2_2\Model\V1GuestCartsCartIdOrderPutBody) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2_2\Exception\QuoteGuestCartManagementV1PlaceOrderPutBadRequestException
     *
     * @return null|\Kiboko\Magento\V2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_2\Exception\QuoteGuestCartManagementV1PlaceOrderPutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_2\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_2\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
