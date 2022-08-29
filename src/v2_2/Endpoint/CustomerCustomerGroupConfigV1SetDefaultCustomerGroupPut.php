<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return '/V1/customerGroups/default/{id}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
