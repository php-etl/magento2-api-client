<?php

namespace Kiboko\Magento\V2\Endpoint;

class SharedCatalogCompanyManagementV1AssignCompaniesPost extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $sharedCatalogId;
    /**
     * Assign companies to a shared catalog.
     *
     * @param int $sharedCatalogId
     * @param \Kiboko\Magento\V2\Model\V1SharedCatalogSharedCatalogIdAssignCompaniesPostBody $sharedCatalogCompanyManagementV1AssignCompaniesPostBody
     */
    public function __construct(int $sharedCatalogId, \Kiboko\Magento\V2\Model\V1SharedCatalogSharedCatalogIdAssignCompaniesPostBody $sharedCatalogCompanyManagementV1AssignCompaniesPostBody)
    {
        $this->sharedCatalogId = $sharedCatalogId;
        $this->body = $sharedCatalogCompanyManagementV1AssignCompaniesPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{sharedCatalogId}'), array($this->sharedCatalogId), '/V1/sharedCatalog/{sharedCatalogId}/assignCompanies');
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
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogCompanyManagementV1AssignCompaniesPostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogCompanyManagementV1AssignCompaniesPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\SharedCatalogCompanyManagementV1AssignCompaniesPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\V2\Exception\SharedCatalogCompanyManagementV1AssignCompaniesPostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
