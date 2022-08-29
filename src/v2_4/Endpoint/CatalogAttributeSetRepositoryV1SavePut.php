<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class CatalogAttributeSetRepositoryV1SavePut extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $attributeSetId;
    /**
     * Save attribute set data
     *
     * @param string $attributeSetId
     * @param \Kiboko\Magento\v2_4\Model\V1ProductsAttributeSetsAttributeSetIdPutBody $catalogAttributeSetRepositoryV1SavePutBody
     */
    public function __construct(string $attributeSetId, \Kiboko\Magento\v2_4\Model\V1ProductsAttributeSetsAttributeSetIdPutBody $catalogAttributeSetRepositoryV1SavePutBody)
    {
        $this->attributeSetId = $attributeSetId;
        $this->body = $catalogAttributeSetRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{attributeSetId}'), array($this->attributeSetId), '/V1/products/attribute-sets/{attributeSetId}');
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
     * @throws \Kiboko\Magento\v2_4\Exception\CatalogAttributeSetRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\CatalogAttributeSetRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_4\Exception\CatalogAttributeSetRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\EavDataAttributeSetInterface|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\EavDataAttributeSetInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CatalogAttributeSetRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CatalogAttributeSetRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CatalogAttributeSetRepositoryV1SavePutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
