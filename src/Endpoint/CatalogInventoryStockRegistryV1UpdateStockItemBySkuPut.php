<?php

namespace Kiboko\Magento\Endpoint;

class CatalogInventoryStockRegistryV1UpdateStockItemBySkuPut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $productSku;
    protected $itemId;
    /**
     * 
     *
     * @param string $productSku 
     * @param string $itemId 
     * @param \Kiboko\Magento\Model\V1ProductsProductSkuStockItemsItemIdPutBody $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody 
     */
    public function __construct(string $productSku, string $itemId, \Kiboko\Magento\Model\V1ProductsProductSkuStockItemsItemIdPutBody $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody)
    {
        $this->productSku = $productSku;
        $this->itemId = $itemId;
        $this->body = $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
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
     * @throws \Kiboko\Magento\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}