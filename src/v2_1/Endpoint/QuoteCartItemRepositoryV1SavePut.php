<?php

namespace Kiboko\Magento\V2_1\Endpoint;

class QuoteCartItemRepositoryV1SavePut extends \Kiboko\Magento\V2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_1\Runtime\Client\EndpointTrait;
    protected $itemId;
    /**
     * Add/update the specified cart item.
     *
     * @param string $itemId
     * @param null|\Kiboko\Magento\V2_1\Model\V1CartsMineItemsItemIdPutBody $requestBody
     */
    public function __construct(string $itemId, ?\Kiboko\Magento\V2_1\Model\V1CartsMineItemsItemIdPutBody $requestBody = null)
    {
        $this->itemId = $itemId;
        $this->body = $requestBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{itemId}'), array($this->itemId), '/V1/carts/mine/items/{itemId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Kiboko\Magento\V2_1\Model\V1CartsMineItemsItemIdPutBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\V2_1\Model\V1CartsMineItemsItemIdPutBody) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2_1\Exception\QuoteCartItemRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2_1\Exception\QuoteCartItemRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2_1\Model\QuoteDataCartItemInterface|\Kiboko\Magento\V2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\QuoteDataCartItemInterface', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_1\Exception\QuoteCartItemRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_1\Exception\QuoteCartItemRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
