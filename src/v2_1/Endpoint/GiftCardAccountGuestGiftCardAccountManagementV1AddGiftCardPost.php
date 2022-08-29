<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    protected $cartId;
    /**
     * 
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_1\Model\V1CartsGuestCartsCartIdGiftCardsPostBody $$body 
     */
    public function __construct(string $cartId, \Kiboko\Magento\v2_1\Model\V1CartsGuestCartsCartIdGiftCardsPostBody $$body)
    {
        $this->cartId = $cartId;
        $this->body = $$body;
    }
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/guest-carts/{cartId}/giftCards');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}