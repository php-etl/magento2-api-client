<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class CatalogInventoryStockRegistryV1UpdateStockItemBySkuPut extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    protected $productSku;
    protected $itemId;
    /**
     * 
     *
     * @param string $productSku 
     * @param string $itemId 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsProductSkuStockItemsItemIdPutBody $$body 
     */
    public function __construct(string $productSku, string $itemId, \Kiboko\Magento\v2_1\Model\V1ProductsProductSkuStockItemsItemIdPutBody $$body)
    {
        $this->productSku = $productSku;
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
        return str_replace(array('{productSku}', '{itemId}'), array($this->productSku, $this->itemId), '/V1/products/{productSku}/stockItems/{itemId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}