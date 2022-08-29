<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CatalogInventoryStockRegistryV1GetLowStockItemsGet extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
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
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/V1/stockItems/lowStock/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('scopeId', 'qty', 'currentPage', 'pageSize'));
        $optionsResolver->setRequired(array('scopeId', 'qty'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('scopeId', array('int'));
        $optionsResolver->setAllowedTypes('qty', array('float'));
        $optionsResolver->setAllowedTypes('currentPage', array('int'));
        $optionsResolver->setAllowedTypes('pageSize', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogInventoryStockRegistryV1GetLowStockItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogInventoryDataStockItemCollectionInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\CatalogInventoryDataStockItemCollectionInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogInventoryStockRegistryV1GetLowStockItemsGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
