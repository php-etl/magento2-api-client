<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CompanyRoleRepositoryV1SavePut extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     * Create or update a role for a selected company.
     *
     * @param string $id
     * @param \Kiboko\Magento\v2_3\Model\V1CompanyRoleIdPutBody $companyRoleRepositoryV1SavePutBody
     */
    public function __construct(string $id, \Kiboko\Magento\v2_3\Model\V1CompanyRoleIdPutBody $companyRoleRepositoryV1SavePutBody)
    {
        $this->id = $id;
        $this->body = $companyRoleRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/V1/company/role/{id}');
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
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyRoleRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyRoleRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyDataRoleInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\CompanyDataRoleInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CompanyRoleRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CompanyRoleRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
