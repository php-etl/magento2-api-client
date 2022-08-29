<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CustomerGroupManagementV1GetDefaultGroupGet extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $storeId;
    /**
     * Get default customer group.
     *
     * @param int $storeId
     */
    public function __construct(int $storeId)
    {
        $this->storeId = $storeId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{storeId}'), array($this->storeId), '/V1/customerGroups/default/{storeId}');
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
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1GetDefaultGroupGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1GetDefaultGroupGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1GetDefaultGroupGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CustomerDataGroupInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CustomerDataGroupInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1GetDefaultGroupGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1GetDefaultGroupGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1GetDefaultGroupGetInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
