<?php

namespace Kiboko\Magento\V2\Endpoint;

class CatalogProductAttributeGroupRepositoryV1SavePut extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    protected $attributeSetId;
    /**
     * Save attribute group
     *
     * @param string $attributeSetId 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $requestBody 
     */
    public function __construct(string $attributeSetId, ?\Kiboko\Magento\V2\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $requestBody = null)
    {
        $this->attributeSetId = $attributeSetId;
        $this->body = $requestBody;
    }
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
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
        if ($this->body instanceof \Kiboko\Magento\V2\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\V2\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeGroupRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\EavDataAttributeGroupInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\EavDataAttributeGroupInterface', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\CatalogProductAttributeGroupRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}