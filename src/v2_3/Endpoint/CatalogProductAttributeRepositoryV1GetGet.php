<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CatalogProductAttributeRepositoryV1GetGet extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $attributeCode;
    /**
     * Retrieve specific attribute
     *
     * @param string $attributeCode
     */
    public function __construct(string $attributeCode)
    {
        $this->attributeCode = $attributeCode;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{attributeCode}'), array($this->attributeCode), '/V1/products/attributes/{attributeCode}');
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
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataProductAttributeInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeRepositoryV1GetGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeRepositoryV1GetGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}