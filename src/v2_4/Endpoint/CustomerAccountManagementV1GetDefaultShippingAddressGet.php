<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class CustomerAccountManagementV1GetDefaultShippingAddressGet extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/V1/customers/me/shippingAddress';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_4\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_4\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
