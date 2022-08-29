<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class SharedCatalogCompanyManagementV1UnassignCompaniesPost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/sharedCatalog/{sharedCatalogId}/unassignCompanies';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_4\Exception\SharedCatalogCompanyManagementV1UnassignCompaniesPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_4\Exception\SharedCatalogCompanyManagementV1UnassignCompaniesPostInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\SharedCatalogCompanyManagementV1UnassignCompaniesPostUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\SharedCatalogCompanyManagementV1UnassignCompaniesPostInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
