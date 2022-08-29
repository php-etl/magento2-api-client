<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     *
     *
     * @param int $cartId
     * @param \Kiboko\Magento\v2_2\Model\V1NegotiableCartsCartIdGiftCardsPostBody $negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostBody
     */
    public function __construct(int $cartId, \Kiboko\Magento\v2_2\Model\V1NegotiableCartsCartIdGiftCardsPostBody $negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/negotiable-carts/{cartId}/giftCards');
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
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
