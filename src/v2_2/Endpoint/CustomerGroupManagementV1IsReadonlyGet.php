<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CustomerGroupManagementV1IsReadonlyGet extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/V1/customerGroups/{id}/permissions';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1IsReadonlyGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1IsReadonlyGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1IsReadonlyGetInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1IsReadonlyGetBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1IsReadonlyGetUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1IsReadonlyGetInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
