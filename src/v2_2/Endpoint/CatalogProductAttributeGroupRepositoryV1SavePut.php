<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CatalogProductAttributeGroupRepositoryV1SavePut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $attributeSetId;
    /**
     * Save attribute group
     *
     * @param string $attributeSetId
     * @param \Kiboko\Magento\v2_2\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $catalogProductAttributeGroupRepositoryV1SavePutBody
     */
    public function __construct(string $attributeSetId, \Kiboko\Magento\v2_2\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $catalogProductAttributeGroupRepositoryV1SavePutBody)
    {
        $this->attributeSetId = $attributeSetId;
        $this->body = $catalogProductAttributeGroupRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{attributeSetId}'), array($this->attributeSetId), '/V1/products/attribute-sets/{attributeSetId}/groups');
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
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeGroupRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\EavDataAttributeGroupInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\EavDataAttributeGroupInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeGroupRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
