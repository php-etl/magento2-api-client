<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class QuoteCartItemRepositoryV1SavePut extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    protected $itemId;
    /**
     * Add/update the specified cart item.
     *
     * @param string $itemId 
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMineItemsItemIdPutBody $$body 
     */
    public function __construct(string $itemId, \Kiboko\Magento\v2_1\Model\V1CartsMineItemsItemIdPutBody $$body)
    {
        $this->itemId = $itemId;
        $this->body = $$body;
    }
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{itemId}'), array($this->itemId), '/V1/carts/mine/items/{itemId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\QuoteDataCartItemInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}