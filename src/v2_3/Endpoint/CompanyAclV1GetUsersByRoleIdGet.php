<?php

namespace Kiboko\Magento\V2_3\Endpoint;

class CompanyAclV1GetUsersByRoleIdGet extends \Kiboko\Magento\V2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_3\Runtime\Client\EndpointTrait;
    protected $roleId;
    /**
     * View the list of company users assigned to a specified role.
     *
     * @param int $roleId
     */
    public function __construct(int $roleId)
    {
        $this->roleId = $roleId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{roleId}'), array($this->roleId), '/V1/company/role/{roleId}/users');
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
     * @throws \Kiboko\Magento\V2_3\Exception\CompanyAclV1GetUsersByRoleIdGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2_3\Model\CustomerDataCustomerInterface[]|\Kiboko\Magento\V2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_3\\Model\\CustomerDataCustomerInterface[]', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_3\Exception\CompanyAclV1GetUsersByRoleIdGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_3\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_3\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
