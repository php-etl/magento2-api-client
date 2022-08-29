<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class CompanyCompanyHierarchyV1GetCompanyHierarchyGet extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     * Returns the list of teams and company users in the company structure.
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/V1/hierarchy/{id}');
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
     * @throws \Kiboko\Magento\v2_4\Exception\CompanyCompanyHierarchyV1GetCompanyHierarchyGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\CompanyDataHierarchyInterface[]|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\CompanyDataHierarchyInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CompanyCompanyHierarchyV1GetCompanyHierarchyGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
