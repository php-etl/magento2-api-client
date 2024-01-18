<?php

namespace Kiboko\Magento\Endpoint;

class QuoteCartItemRepositoryV1SavePut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $itemId;
    /**
     * Add/update the specified cart item.
     *
     * @param string $itemId 
     * @param \Kiboko\Magento\Model\V1CartsMineItemsItemIdPutBody $quoteCartItemRepositoryV1SavePutBody 
     */
    public function __construct(string $itemId, \Kiboko\Magento\Model\V1CartsMineItemsItemIdPutBody $quoteCartItemRepositoryV1SavePutBody)
    {
        $this->itemId = $itemId;
        $this->body = $quoteCartItemRepositoryV1SavePutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
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
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\QuoteDataCartItemInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}