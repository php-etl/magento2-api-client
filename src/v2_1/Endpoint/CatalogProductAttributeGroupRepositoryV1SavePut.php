<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class CatalogProductAttributeGroupRepositoryV1SavePut extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    protected $attributeSetId;
    /**
     * Save attribute group
     *
     * @param string $attributeSetId 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $$body 
     */
    public function __construct(string $attributeSetId, \Kiboko\Magento\v2_1\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $$body)
    {
        $this->attributeSetId = $attributeSetId;
        $this->body = $$body;
    }
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{attributeSetId}'), array($this->attributeSetId), '/V1/products/attribute-sets/{attributeSetId}/groups');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeGroupRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\EavDataAttributeGroupInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\EavDataAttributeGroupInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeGroupRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}