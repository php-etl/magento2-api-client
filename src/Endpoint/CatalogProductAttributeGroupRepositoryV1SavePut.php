<?php

namespace Kiboko\Magento\Endpoint;

class CatalogProductAttributeGroupRepositoryV1SavePut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $attributeSetId;
    /**
     * Save attribute group
     *
     * @param string $attributeSetId 
     * @param \Kiboko\Magento\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $catalogProductAttributeGroupRepositoryV1SavePutBody 
     */
    public function __construct(string $attributeSetId, \Kiboko\Magento\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $catalogProductAttributeGroupRepositoryV1SavePutBody)
    {
        $this->attributeSetId = $attributeSetId;
        $this->body = $catalogProductAttributeGroupRepositoryV1SavePutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
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
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeGroupRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeGroupInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\EavDataAttributeGroupInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogProductAttributeGroupRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}