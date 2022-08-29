<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class GiftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    protected $cartId;
    protected $giftCardCode;
    /**
     * Remove GiftCard Account entity
     *
     * @param string $cartId
     * @param string $giftCardCode
     */
    public function __construct(string $cartId, string $giftCardCode)
    {
        $this->cartId = $cartId;
        $this->giftCardCode = $giftCardCode;
    }
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}', '{giftCardCode}'), array($this->cartId, $this->giftCardCode), '/V1/carts/guest-carts/{cartId}/giftCards/{giftCardCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
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
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
