<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CompanyCreditCreditHistoryManagementV1GetListGet extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    /**
     * Returns the credit history for one or more companies.
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
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/V1/companyCredits/history';
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
        $optionsResolver->setDefined(array('searchCriteria[filterGroups][0][filters][0][field]', 'searchCriteria[filterGroups][0][filters][0][value]', 'searchCriteria[filterGroups][0][filters][0][conditionType]', 'searchCriteria[sortOrders][0][field]', 'searchCriteria[sortOrders][0][direction]', 'searchCriteria[pageSize]', 'searchCriteria[currentPage]'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('searchCriteria[filterGroups][0][filters][0][field]', array('string'));
        $optionsResolver->setAllowedTypes('searchCriteria[filterGroups][0][filters][0][value]', array('string'));
        $optionsResolver->setAllowedTypes('searchCriteria[filterGroups][0][filters][0][conditionType]', array('string'));
        $optionsResolver->setAllowedTypes('searchCriteria[sortOrders][0][field]', array('string'));
        $optionsResolver->setAllowedTypes('searchCriteria[sortOrders][0][direction]', array('string'));
        $optionsResolver->setAllowedTypes('searchCriteria[pageSize]', array('int'));
        $optionsResolver->setAllowedTypes('searchCriteria[currentPage]', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditHistoryManagementV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditHistoryManagementV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CompanyCreditDataHistorySearchResultsInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CompanyCreditDataHistorySearchResultsInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditHistoryManagementV1GetListGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditHistoryManagementV1GetListGetInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}