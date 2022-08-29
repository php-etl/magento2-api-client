<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CustomerAddressMetadataV1GetCustomAttributesMetadataGet extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/V1/attributeMetadata/customerAddress/custom';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetCustomAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetCustomAttributesMetadataGetInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetCustomAttributesMetadataGetUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetCustomAttributesMetadataGetInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
