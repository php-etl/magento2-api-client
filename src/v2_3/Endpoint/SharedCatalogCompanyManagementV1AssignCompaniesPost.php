<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class SharedCatalogCompanyManagementV1AssignCompaniesPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    protected $sharedCatalogId;
    /**
     * Assign companies to a shared catalog.
     *
     * @param int $sharedCatalogId 
     * @param \Kiboko\Magento\v2_3\Model\V1SharedCatalogSharedCatalogIdAssignCompaniesPostBody $sharedCatalogCompanyManagementV1AssignCompaniesPostBody 
     */
    public function __construct(int $sharedCatalogId, \Kiboko\Magento\v2_3\Model\V1SharedCatalogSharedCatalogIdAssignCompaniesPostBody $sharedCatalogCompanyManagementV1AssignCompaniesPostBody)
    {
        $this->sharedCatalogId = $sharedCatalogId;
        $this->body = $sharedCatalogCompanyManagementV1AssignCompaniesPostBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{sharedCatalogId}'), array($this->sharedCatalogId), '/V1/sharedCatalog/{sharedCatalogId}/assignCompanies');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogCompanyManagementV1AssignCompaniesPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogCompanyManagementV1AssignCompaniesPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\SharedCatalogCompanyManagementV1AssignCompaniesPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\SharedCatalogCompanyManagementV1AssignCompaniesPostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}