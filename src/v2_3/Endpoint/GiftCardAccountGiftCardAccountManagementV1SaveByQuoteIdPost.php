<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    /**
     * Add gift card to the cart.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineGiftCardsPostBody $giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostBody
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1CartsMineGiftCardsPostBody $giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostBody)
    {
        $this->body = $giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/carts/mine/giftCards';
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
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
