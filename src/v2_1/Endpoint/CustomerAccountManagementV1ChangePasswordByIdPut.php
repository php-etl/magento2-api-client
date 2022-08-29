<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class CustomerAccountManagementV1ChangePasswordByIdPut extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return '/V1/customers/me/password';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ChangePasswordByIdPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ChangePasswordByIdPutInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ChangePasswordByIdPutUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ChangePasswordByIdPutInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
