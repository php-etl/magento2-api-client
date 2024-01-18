<?php

namespace Kiboko\Magento\Endpoint;

class GiftMessageItemRepositoryV1SavePostWithCartId extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $cartId;
    protected $itemId;
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param int $itemId The item ID.
     * @param \Kiboko\Magento\Model\V1CartsCartIdGiftMessageItemIdPostBody $giftMessageItemRepositoryV1SavePostBody 
     */
    public function __construct(int $cartId, int $itemId, \Kiboko\Magento\Model\V1CartsCartIdGiftMessageItemIdPostBody $giftMessageItemRepositoryV1SavePostBody)
    {
        $this->cartId = $cartId;
        $this->itemId = $itemId;
        $this->body = $giftMessageItemRepositoryV1SavePostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{cartId}', '{itemId}'), array($this->cartId, $this->itemId), '/V1/carts/{cartId}/gift-message/{itemId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\GiftMessageItemRepositoryV1SavePostWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GiftMessageItemRepositoryV1SavePostWithCartIdBadRequestException
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
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\GiftMessageItemRepositoryV1SavePostWithCartIdUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\GiftMessageItemRepositoryV1SavePostWithCartIdBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}