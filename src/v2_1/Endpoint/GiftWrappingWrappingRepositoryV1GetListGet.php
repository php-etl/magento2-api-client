<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class GiftWrappingWrappingRepositoryV1GetListGet extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    /**
     * Return list of gift wrapping data objects based on search criteria
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
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
        return '/V1/gift-wrappings';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('searchCriteria[filterGroups][][filters][][field]', 'searchCriteria[filterGroups][][filters][][value]', 'searchCriteria[filterGroups][][filters][][conditionType]', 'searchCriteria[sortOrders][][field]', 'searchCriteria[sortOrders][][direction]', 'searchCriteria[pageSize]', 'searchCriteria[currentPage]'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('searchCriteria[filterGroups][][filters][][field]', array('string'));
        $optionsResolver->setAllowedTypes('searchCriteria[filterGroups][][filters][][value]', array('string'));
        $optionsResolver->setAllowedTypes('searchCriteria[filterGroups][][filters][][conditionType]', array('string'));
        $optionsResolver->setAllowedTypes('searchCriteria[sortOrders][][field]', array('string'));
        $optionsResolver->setAllowedTypes('searchCriteria[sortOrders][][direction]', array('string'));
        $optionsResolver->setAllowedTypes('searchCriteria[pageSize]', array('int'));
        $optionsResolver->setAllowedTypes('searchCriteria[currentPage]', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\GiftWrappingWrappingRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\GiftWrappingDataWrappingSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\GiftWrappingDataWrappingSearchResultsInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\GiftWrappingWrappingRepositoryV1GetListGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}