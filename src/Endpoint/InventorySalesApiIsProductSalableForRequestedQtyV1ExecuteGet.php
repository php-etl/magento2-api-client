<?php

namespace Kiboko\Magento\Endpoint;

class InventorySalesApiIsProductSalableForRequestedQtyV1ExecuteGet extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
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
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{sku}', '{stockId}', '{requestedQty}'), array($this->sku, $this->stockId, $this->requestedQty), '/V1/inventory/is-product-salable-for-requested-qty/{sku}/{stockId}/{requestedQty}');
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
     * @throws \Kiboko\Magento\Exception\InventorySalesApiIsProductSalableForRequestedQtyV1ExecuteGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\InventorySalesApiIsProductSalableForRequestedQtyV1ExecuteGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventorySalesApiDataProductSalableResultInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\InventorySalesApiDataProductSalableResultInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\InventorySalesApiIsProductSalableForRequestedQtyV1ExecuteGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\InventorySalesApiIsProductSalableForRequestedQtyV1ExecuteGetInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}