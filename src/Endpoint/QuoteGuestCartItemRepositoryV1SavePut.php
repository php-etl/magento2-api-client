<?php

namespace Kiboko\Magento\V2\Endpoint;

class QuoteGuestCartItemRepositoryV1SavePut extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    protected $cartId;
    protected $itemId;
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId 
     * @param string $itemId 
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdItemsItemIdPutBody $requestBody 
     */
    public function __construct(string $cartId, string $itemId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdItemsItemIdPutBody $requestBody = null)
    {
        $this->cartId = $cartId;
        $this->itemId = $itemId;
        $this->body = $requestBody;
    }
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{cartId}', '{itemId}'), array($this->cartId, $this->itemId), '/V1/guest-carts/{cartId}/items/{itemId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Kiboko\Magento\V2\Model\V1GuestCartsCartIdItemsItemIdPutBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\V2\Model\V1GuestCartsCartIdItemsItemIdPutBody) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestCartItemRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataCartItemInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\QuoteDataCartItemInterface', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\QuoteGuestCartItemRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}