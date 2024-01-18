<?php

namespace Kiboko\Magento\Endpoint;

class GetV1InventoryInstorepickupPickuplocations extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Get Pickup Locations according to the results of filtration by Search Request.
     *
     * @param array $queryParameters {
     *     @var int $searchRequest[area][radius] Search radius in KM.
     *     @var string $searchRequest[area][searchTerm] Search term string.
     *     @var string $searchRequest[filters][country][value] Value.
     *     @var string $searchRequest[filters][country][conditionType] Condition Type.
     *     @var string $searchRequest[filters][postcode][value] Value.
     *     @var string $searchRequest[filters][postcode][conditionType] Condition Type.
     *     @var string $searchRequest[filters][region][value] Value.
     *     @var string $searchRequest[filters][region][conditionType] Condition Type.
     *     @var string $searchRequest[filters][regionId][value] Value.
     *     @var string $searchRequest[filters][regionId][conditionType] Condition Type.
     *     @var string $searchRequest[filters][city][value] Value.
     *     @var string $searchRequest[filters][city][conditionType] Condition Type.
     *     @var string $searchRequest[filters][street][value] Value.
     *     @var string $searchRequest[filters][street][conditionType] Condition Type.
     *     @var string $searchRequest[filters][name][value] Value.
     *     @var string $searchRequest[filters][name][conditionType] Condition Type.
     *     @var string $searchRequest[filters][pickupLocationCode][value] Value.
     *     @var string $searchRequest[filters][pickupLocationCode][conditionType] Condition Type.
     *     @var int $searchRequest[pageSize] Page size.
     *     @var int $searchRequest[currentPage] Current page.
     *     @var string $searchRequest[scopeType] Sales Channel Type.
     *     @var string $searchRequest[scopeCode] Sales Channel code.
     *     @var string $searchRequest[sort][0][field] Sorting field.
     *     @var string $searchRequest[sort][0][direction] Sorting direction.
     *     @var string $searchRequest[extensionAttributes][productsInfo][0][sku] Product SKU.
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
        return '/V1/inventory/in-store-pickup/pickup-locations/';
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
        $optionsResolver->setDefined(array('searchRequest[area][radius]', 'searchRequest[area][searchTerm]', 'searchRequest[filters][country][value]', 'searchRequest[filters][country][conditionType]', 'searchRequest[filters][postcode][value]', 'searchRequest[filters][postcode][conditionType]', 'searchRequest[filters][region][value]', 'searchRequest[filters][region][conditionType]', 'searchRequest[filters][regionId][value]', 'searchRequest[filters][regionId][conditionType]', 'searchRequest[filters][city][value]', 'searchRequest[filters][city][conditionType]', 'searchRequest[filters][street][value]', 'searchRequest[filters][street][conditionType]', 'searchRequest[filters][name][value]', 'searchRequest[filters][name][conditionType]', 'searchRequest[filters][pickupLocationCode][value]', 'searchRequest[filters][pickupLocationCode][conditionType]', 'searchRequest[pageSize]', 'searchRequest[currentPage]', 'searchRequest[scopeType]', 'searchRequest[scopeCode]', 'searchRequest[sort][0][field]', 'searchRequest[sort][0][direction]', 'searchRequest[extensionAttributes][productsInfo][0][sku]'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('searchRequest[area][radius]', array('int'));
        $optionsResolver->addAllowedTypes('searchRequest[area][searchTerm]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][country][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][country][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][postcode][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][postcode][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][region][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][region][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][regionId][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][regionId][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][city][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][city][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][street][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][street][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][name][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][name][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][pickupLocationCode][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[filters][pickupLocationCode][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[pageSize]', array('int'));
        $optionsResolver->addAllowedTypes('searchRequest[currentPage]', array('int'));
        $optionsResolver->addAllowedTypes('searchRequest[scopeType]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[scopeCode]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[sort][0][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[sort][0][direction]', array('string'));
        $optionsResolver->addAllowedTypes('searchRequest[extensionAttributes][productsInfo][0][sku]', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryInStorePickupApiDataSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchResultInterface', 'json');
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}