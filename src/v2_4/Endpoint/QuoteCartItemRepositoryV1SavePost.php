<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class QuoteCartItemRepositoryV1SavePost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $quoteId;
    /**
     * Add/update the specified cart item.
     *
     * @param string $quoteId
     * @param \Kiboko\Magento\v2_4\Model\V1CartsQuoteIdItemsPostBody $quoteCartItemRepositoryV1SavePostBody
     */
    public function __construct(string $quoteId, \Kiboko\Magento\v2_4\Model\V1CartsQuoteIdItemsPostBody $quoteCartItemRepositoryV1SavePostBody)
    {
        $this->quoteId = $quoteId;
        $this->body = $quoteCartItemRepositoryV1SavePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{quoteId}'), array($this->quoteId), '/V1/carts/{quoteId}/items');
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
     * @throws \Kiboko\Magento\v2_4\Exception\QuoteCartItemRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\QuoteCartItemRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\QuoteDataCartItemInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\QuoteCartItemRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\QuoteCartItemRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
