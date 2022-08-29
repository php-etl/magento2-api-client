<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class InventoryApiStockRepositoryV1DeleteByIdDelete extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $stockId;
    /**
     * Delete the Stock data by stockId. If stock is not found do nothing
     *
     * @param int $stockId
     */
    public function __construct(int $stockId)
    {
        $this->stockId = $stockId;
    }
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{stockId}'), array($this->stockId), '/V1/inventory/stocks/{stockId}');
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
     * @throws \Kiboko\Magento\v2_4\Exception\InventoryApiStockRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\InventoryApiStockRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\InventoryApiStockRepositoryV1DeleteByIdDeleteBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\InventoryApiStockRepositoryV1DeleteByIdDeleteUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
