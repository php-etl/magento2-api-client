<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CustomerAddressMetadataV1GetAttributeMetadataGet extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/V1/attributeMetadata/customerAddress/attribute/{attributeCode}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
