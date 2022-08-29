<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class CustomerGroupManagementV1IsReadonlyGet extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     * Check if customer group can be deleted.
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
        return str_replace(array('{id}'), array($this->id), '/V1/customerGroups/{id}/permissions');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupManagementV1IsReadonlyGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupManagementV1IsReadonlyGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupManagementV1IsReadonlyGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CustomerGroupManagementV1IsReadonlyGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CustomerGroupManagementV1IsReadonlyGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CustomerGroupManagementV1IsReadonlyGetInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
