<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class InventoryApiGetSourcesAssignedToStockOrderedByPriorityV1ExecuteGet extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $stockId;
    /**
     * Get Sources assigned to Stock ordered by priority If Stock with given id doesn't exist then return an empty array
     *
     * @param int $stockId
     */
    public function __construct(int $stockId)
    {
        $this->stockId = $stockId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{stockId}'), array($this->stockId), '/V1/inventory/get-sources-assigned-to-stock-ordered-by-priority/{stockId}');
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
     * @throws \Kiboko\Magento\v2_4\Exception\InventoryApiGetSourcesAssignedToStockOrderedByPriorityV1ExecuteGetBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\InventoryApiGetSourcesAssignedToStockOrderedByPriorityV1ExecuteGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_4\Exception\InventoryApiGetSourcesAssignedToStockOrderedByPriorityV1ExecuteGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\InventoryApiDataSourceInterface[]|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\InventoryApiDataSourceInterface[]', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\InventoryApiGetSourcesAssignedToStockOrderedByPriorityV1ExecuteGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\InventoryApiGetSourcesAssignedToStockOrderedByPriorityV1ExecuteGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\InventoryApiGetSourcesAssignedToStockOrderedByPriorityV1ExecuteGetInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
