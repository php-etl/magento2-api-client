<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class CatalogInventoryStockRegistryV1GetStockStatusBySkuGet extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    protected $productSku;
    /**
     *
     *
     * @param string $productSku
     * @param array $queryParameters {
     *     @var int $scopeId
     * }
     */
    public function __construct(string $productSku, array $queryParameters = array())
    {
        $this->productSku = $productSku;
        $this->queryParameters = $queryParameters;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{productSku}'), array($this->productSku), '/V1/stockStatuses/{productSku}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('scopeId'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('scopeId', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogInventoryStockRegistryV1GetStockStatusBySkuGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogInventoryStockRegistryV1GetStockStatusBySkuGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogInventoryDataStockStatusInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\CatalogInventoryDataStockStatusInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CatalogInventoryStockRegistryV1GetStockStatusBySkuGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CatalogInventoryStockRegistryV1GetStockStatusBySkuGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}