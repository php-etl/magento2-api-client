<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class GiftMessageGuestItemRepositoryV1SavePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $cartId;
    protected $itemId;
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param int $itemId The item ID.
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdGiftMessageItemIdPostBody $giftMessageGuestItemRepositoryV1SavePostBody
     */
    public function __construct(string $cartId, int $itemId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdGiftMessageItemIdPostBody $giftMessageGuestItemRepositoryV1SavePostBody)
    {
        $this->cartId = $cartId;
        $this->itemId = $itemId;
        $this->body = $giftMessageGuestItemRepositoryV1SavePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}', '{itemId}'), array($this->cartId, $this->itemId), '/V1/guest-carts/{cartId}/gift-message/{itemId}');
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
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageGuestItemRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\GiftMessageGuestItemRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
