<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CustomerAddressMetadataV1GetAllAttributesMetadataGet extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/V1/attributeMetadata/customerAddress';
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
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\CustomerDataAttributeMetadataInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}