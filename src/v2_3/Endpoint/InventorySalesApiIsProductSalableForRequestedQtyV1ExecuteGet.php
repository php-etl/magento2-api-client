<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class InventorySalesApiIsProductSalableForRequestedQtyV1ExecuteGet extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $sku;
    protected $stockId;
    protected $requestedQty;
    /**
     * Get is product salable for given SKU in a given Stock for a certain Qty
     *
     * @param string $sku
     * @param int $stockId
     * @param float $requestedQty
     */
    public function __construct(string $sku, int $stockId, float $requestedQty)
    {
        $this->sku = $sku;
        $this->stockId = $stockId;
        $this->requestedQty = $requestedQty;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}', '{stockId}', '{requestedQty}'), array($this->sku, $this->stockId, $this->requestedQty), '/V1/inventory/is-product-salable-for-requested-qty/{sku}/{stockId}/{requestedQty}');
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
     * @throws \Kiboko\Magento\v2_3\Exception\InventorySalesApiIsProductSalableForRequestedQtyV1ExecuteGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\InventorySalesApiIsProductSalableForRequestedQtyV1ExecuteGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventorySalesApiDataProductSalableResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\InventorySalesApiDataProductSalableResultInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\InventorySalesApiIsProductSalableForRequestedQtyV1ExecuteGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\InventorySalesApiIsProductSalableForRequestedQtyV1ExecuteGetInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}