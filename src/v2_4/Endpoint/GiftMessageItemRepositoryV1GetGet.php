<?php

namespace Kiboko\Magento\V2_4\Endpoint;

class GiftMessageItemRepositoryV1GetGet extends \Kiboko\Magento\V2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_4\Runtime\Client\EndpointTrait;
    protected $itemId;
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param int $itemId The item ID.
     */
    public function __construct(int $itemId)
    {
        $this->itemId = $itemId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{itemId}'), array($this->itemId), '/V1/carts/mine/gift-message/{itemId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2_4\Exception\GiftMessageItemRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2_4\Exception\GiftMessageItemRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2_4\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\V2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_4\\Model\\GiftMessageDataMessageInterface', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_4\Exception\GiftMessageItemRepositoryV1GetGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_4\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_4\Exception\GiftMessageItemRepositoryV1GetGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_4\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_4\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
