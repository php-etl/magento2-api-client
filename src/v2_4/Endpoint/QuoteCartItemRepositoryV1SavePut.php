<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class QuoteCartItemRepositoryV1SavePut extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $cartId;
    protected $itemId;
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId
     * @param string $itemId
     * @param \Kiboko\Magento\v2_4\Model\V1CartsCartIdItemsItemIdPutBody $quoteCartItemRepositoryV1SavePutBody
     */
    public function __construct(string $cartId, string $itemId, \Kiboko\Magento\v2_4\Model\V1CartsCartIdItemsItemIdPutBody $quoteCartItemRepositoryV1SavePutBody)
    {
        $this->cartId = $cartId;
        $this->itemId = $itemId;
        $this->body = $quoteCartItemRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}', '{itemId}'), array($this->cartId, $this->itemId), '/V1/carts/{cartId}/items/{itemId}');
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
     * @throws \Kiboko\Magento\v2_4\Exception\QuoteCartItemRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\QuoteCartItemRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\QuoteDataCartItemInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\QuoteCartItemRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\QuoteCartItemRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
