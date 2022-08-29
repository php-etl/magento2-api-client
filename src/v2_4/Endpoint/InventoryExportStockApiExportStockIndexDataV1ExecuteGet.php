<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class InventoryExportStockApiExportStockIndexDataV1ExecuteGet extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $salesChannelType;
    protected $salesChannelCode;
    /**
     * Provides stock index export from inventory_stock_% table
     *
     * @param string $salesChannelType
     * @param string $salesChannelCode
     */
    public function __construct(string $salesChannelType, string $salesChannelCode)
    {
        $this->salesChannelType = $salesChannelType;
        $this->salesChannelCode = $salesChannelCode;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{salesChannelType}', '{salesChannelCode}'), array($this->salesChannelType, $this->salesChannelCode), '/V1/inventory/dump-stock-index-data/{salesChannelType}/{salesChannelCode}');
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
     * @throws \Kiboko\Magento\v2_4\Exception\InventoryExportStockApiExportStockIndexDataV1ExecuteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\InventoryExportStockApiDataProductStockIndexDataInterface[]|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\InventoryExportStockApiDataProductStockIndexDataInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\InventoryExportStockApiExportStockIndexDataV1ExecuteGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
