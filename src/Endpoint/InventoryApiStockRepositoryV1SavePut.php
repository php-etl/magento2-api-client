<?php

namespace Kiboko\Magento\Endpoint;

class InventoryApiStockRepositoryV1SavePut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $stockId;
    /**
     * Save Stock data
     *
     * @param string $stockId 
     * @param \Kiboko\Magento\Model\V1InventoryStocksStockIdPutBody $inventoryApiStockRepositoryV1SavePutBody 
     */
    public function __construct(string $stockId, \Kiboko\Magento\Model\V1InventoryStocksStockIdPutBody $inventoryApiStockRepositoryV1SavePutBody)
    {
        $this->stockId = $stockId;
        $this->body = $inventoryApiStockRepositoryV1SavePutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{stockId}'), array($this->stockId), '/V1/inventory/stocks/{stockId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\InventoryApiStockRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\InventoryApiStockRepositoryV1SavePutBadRequestException
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
            throw new \Kiboko\Magento\Exception\InventoryApiStockRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\InventoryApiStockRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}