<?php

namespace Kiboko\Magento\Endpoint;

class GetV1InventoryAreproductsalableforrequestedqty extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Get whether products are salable in requested Qty for given set of SKUs in specified stock.
     *
     * @param array $queryParameters {
     *     @var string $skuRequests[0][sku] Product sku.
     *     @var float $skuRequests[0][qty] Product quantity.
     *     @var int $stockId 
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/V1/inventory/are-product-salable-for-requested-qty/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('skuRequests[0][sku]', 'skuRequests[0][qty]', 'stockId'));
        $optionsResolver->setRequired(array('stockId'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('skuRequests[0][sku]', array('string'));
        $optionsResolver->addAllowedTypes('skuRequests[0][qty]', array('float'));
        $optionsResolver->addAllowedTypes('stockId', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\GetV1InventoryAreproductsalableforrequestedqtyUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1InventoryAreproductsalableforrequestedqtyInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventorySalesApiDataIsProductSalableForRequestedQtyResultInterface[]|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\InventorySalesApiDataIsProductSalableForRequestedQtyResultInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\GetV1InventoryAreproductsalableforrequestedqtyUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\GetV1InventoryAreproductsalableforrequestedqtyInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}