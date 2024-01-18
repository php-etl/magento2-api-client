<?php

namespace Kiboko\Magento\Endpoint;

class CatalogInventoryStockRegistryV1GetLowStockItemsGet extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Retrieves a list of SKU's with low inventory qty
     *
     * @param array $queryParameters {
     *     @var int $scopeId 
     *     @var float $qty 
     *     @var int $currentPage 
     *     @var int $pageSize 
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
        return '/V1/stockItems/lowStock/';
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
        $optionsResolver->setDefined(array('scopeId', 'qty', 'currentPage', 'pageSize'));
        $optionsResolver->setRequired(array('scopeId', 'qty'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('scopeId', array('int'));
        $optionsResolver->addAllowedTypes('qty', array('float'));
        $optionsResolver->addAllowedTypes('currentPage', array('int'));
        $optionsResolver->addAllowedTypes('pageSize', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CatalogInventoryStockRegistryV1GetLowStockItemsGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogInventoryDataStockItemCollectionInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\CatalogInventoryDataStockItemCollectionInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogInventoryStockRegistryV1GetLowStockItemsGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}