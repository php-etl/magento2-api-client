<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CatalogInventoryStockRegistryV1UpdateStockItemBySkuPut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $productSku;
    protected $itemId;
    /**
     *
     *
     * @param string $productSku
     * @param string $itemId
     * @param \Kiboko\Magento\v2_2\Model\V1ProductsProductSkuStockItemsItemIdPutBody $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody
     */
    public function __construct(string $productSku, string $itemId, \Kiboko\Magento\v2_2\Model\V1ProductsProductSkuStockItemsItemIdPutBody $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody)
    {
        $this->productSku = $productSku;
        $this->itemId = $itemId;
        $this->body = $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{productSku}', '{itemId}'), array($this->productSku, $this->itemId), '/V1/products/{productSku}/stockItems/{itemId}');
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
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
