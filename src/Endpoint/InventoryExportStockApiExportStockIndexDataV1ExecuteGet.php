<?php

namespace Kiboko\Magento\Endpoint;

class InventoryExportStockApiExportStockIndexDataV1ExecuteGet extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
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
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{salesChannelType}', '{salesChannelCode}'), array($this->salesChannelType, $this->salesChannelCode), '/V1/inventory/dump-stock-index-data/{salesChannelType}/{salesChannelCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\InventoryExportStockApiExportStockIndexDataV1ExecuteGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryExportStockApiDataProductStockIndexDataInterface[]|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\InventoryExportStockApiDataProductStockIndexDataInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\InventoryExportStockApiExportStockIndexDataV1ExecuteGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}