<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CatalogProductAttributeRepositoryV1SavePut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $attributeCode;
    /**
     * Save attribute data
     *
     * @param string $attributeCode
     * @param \Kiboko\Magento\v2_2\Model\V1ProductsAttributesAttributeCodePutBody $catalogProductAttributeRepositoryV1SavePutBody
     */
    public function __construct(string $attributeCode, \Kiboko\Magento\v2_2\Model\V1ProductsAttributesAttributeCodePutBody $catalogProductAttributeRepositoryV1SavePutBody)
    {
        $this->attributeCode = $attributeCode;
        $this->body = $catalogProductAttributeRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{attributeCode}'), array($this->attributeCode), '/V1/products/attributes/{attributeCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CatalogDataProductAttributeInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
