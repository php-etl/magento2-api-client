<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CustomerCustomerMetadataV1GetAttributeMetadataGet extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/V1/attributeMetadata/customer/attribute/{attributeCode}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
