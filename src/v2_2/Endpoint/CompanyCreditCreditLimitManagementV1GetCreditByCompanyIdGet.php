<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CompanyCreditCreditLimitManagementV1GetCreditByCompanyIdGet extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $companyId;
    /**
     * Returns data on the credit limit for a specified company.
     *
     * @param int $companyId
     */
    public function __construct(int $companyId)
    {
        $this->companyId = $companyId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{companyId}'), array($this->companyId), '/V1/companyCredits/company/{companyId}');
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
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditLimitManagementV1GetCreditByCompanyIdGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CompanyCreditDataCreditLimitInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CompanyCreditDataCreditLimitInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditLimitManagementV1GetCreditByCompanyIdGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
