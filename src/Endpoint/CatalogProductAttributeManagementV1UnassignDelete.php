<?php

namespace Kiboko\Magento\Endpoint;

class CatalogProductAttributeManagementV1UnassignDelete extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $attributeSetId;
    protected $attributeCode;
    /**
     * Remove attribute from attribute set
     *
     * @param string $attributeSetId 
     * @param string $attributeCode 
     */
    public function __construct(string $attributeSetId, string $attributeCode)
    {
        $this->attributeSetId = $attributeSetId;
        $this->attributeCode = $attributeCode;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{attributeSetId}', '{attributeCode}'), array($this->attributeSetId, $this->attributeCode), '/V1/products/attribute-sets/{attributeSetId}/attributes/{attributeCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeManagementV1UnassignDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeManagementV1UnassignDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogProductAttributeManagementV1UnassignDeleteUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogProductAttributeManagementV1UnassignDeleteBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}