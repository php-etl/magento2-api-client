<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class SharedCatalogCompanyManagementV1UnassignCompaniesPost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $sharedCatalogId;
    /**
     * Unassign companies from a shared catalog.
     *
     * @param int $sharedCatalogId
     * @param \Kiboko\Magento\v2_4\Model\V1SharedCatalogSharedCatalogIdUnassignCompaniesPostBody $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody
     */
    public function __construct(int $sharedCatalogId, \Kiboko\Magento\v2_4\Model\V1SharedCatalogSharedCatalogIdUnassignCompaniesPostBody $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody)
    {
        $this->sharedCatalogId = $sharedCatalogId;
        $this->body = $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{sharedCatalogId}'), array($this->sharedCatalogId), '/V1/sharedCatalog/{sharedCatalogId}/unassignCompanies');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_4\Exception\SharedCatalogCompanyManagementV1UnassignCompaniesPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_4\Exception\SharedCatalogCompanyManagementV1UnassignCompaniesPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\SharedCatalogCompanyManagementV1UnassignCompaniesPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\SharedCatalogCompanyManagementV1UnassignCompaniesPostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
