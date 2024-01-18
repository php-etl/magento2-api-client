<?php

namespace Kiboko\Magento\Endpoint;

class CatalogProductAttributeGroupRepositoryV1GetListGet extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Retrieve list of attribute groups
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
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
        return '/V1/products/attribute-sets/groups/list';
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
        $optionsResolver->setDefined(array('searchCriteria[filterGroups][0][filters][0][field]', 'searchCriteria[filterGroups][0][filters][0][value]', 'searchCriteria[filterGroups][0][filters][0][conditionType]', 'searchCriteria[sortOrders][0][field]', 'searchCriteria[sortOrders][0][direction]', 'searchCriteria[pageSize]', 'searchCriteria[currentPage]'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][0][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][0][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][0][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][0][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][0][direction]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[pageSize]', array('int'));
        $optionsResolver->addAllowedTypes('searchCriteria[currentPage]', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeGroupRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeGroupSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\EavDataAttributeGroupSearchResultsInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogProductAttributeGroupRepositoryV1GetListGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}