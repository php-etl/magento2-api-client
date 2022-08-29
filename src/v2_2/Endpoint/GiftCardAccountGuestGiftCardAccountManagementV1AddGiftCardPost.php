<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     *
     *
     * @param string $cartId
     * @param \Kiboko\Magento\v2_2\Model\V1CartsGuestCartsCartIdGiftCardsPostBody $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody
     */
    public function __construct(string $cartId, \Kiboko\Magento\v2_2\Model\V1CartsGuestCartsCartIdGiftCardsPostBody $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/guest-carts/{cartId}/giftCards');
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
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
