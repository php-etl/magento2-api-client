<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CatalogProductAttributeOptionManagementV1AddPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    protected $attributeCode;
    /**
     * Add option to attribute
     *
     * @param string $attributeCode 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsAttributesAttributeCodeOptionsPostBody $catalogProductAttributeOptionManagementV1AddPostBody 
     */
    public function __construct(string $attributeCode, \Kiboko\Magento\v2_3\Model\V1ProductsAttributesAttributeCodeOptionsPostBody $catalogProductAttributeOptionManagementV1AddPostBody)
    {
        $this->attributeCode = $attributeCode;
        $this->body = $catalogProductAttributeOptionManagementV1AddPostBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{attributeCode}'), array($this->attributeCode), '/V1/products/attributes/{attributeCode}/options');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeOptionManagementV1AddPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeOptionManagementV1AddPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeOptionManagementV1AddPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeOptionManagementV1AddPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}