<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class InventoryApiStockSourceLinksSaveV1ExecutePost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    /**
     * Save StockSourceLink list data
     *
     * @param \Kiboko\Magento\v2_4\Model\V1InventoryStockSourceLinksPostBody $inventoryApiStockSourceLinksSaveV1ExecutePostBody
     */
    public function __construct(\Kiboko\Magento\v2_4\Model\V1InventoryStockSourceLinksPostBody $inventoryApiStockSourceLinksSaveV1ExecutePostBody)
    {
        $this->body = $inventoryApiStockSourceLinksSaveV1ExecutePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/inventory/stock-source-links';
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
     * @throws \Kiboko\Magento\v2_4\Exception\InventoryApiStockSourceLinksSaveV1ExecutePostBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\InventoryApiStockSourceLinksSaveV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\InventoryApiStockSourceLinksSaveV1ExecutePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\InventoryApiStockSourceLinksSaveV1ExecutePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
