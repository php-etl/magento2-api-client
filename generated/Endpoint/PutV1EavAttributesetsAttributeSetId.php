<?php

namespace Kiboko\Magento\Endpoint;

class PutV1EavAttributesetsAttributeSetId extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $attributeSetId;
    /**
     * Save attribute set data
     *
     * @param string $attributeSetId 
     * @param \Kiboko\Magento\Model\V1EavAttributeSetsAttributeSetIdPutBody $putV1EavAttributesetsAttributeSetIdBody 
     */
    public function __construct(string $attributeSetId, \Kiboko\Magento\Model\V1EavAttributeSetsAttributeSetIdPutBody $putV1EavAttributesetsAttributeSetIdBody)
    {
        $this->attributeSetId = $attributeSetId;
        $this->body = $putV1EavAttributesetsAttributeSetIdBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{attributeSetId}'), array($this->attributeSetId), '/V1/eav/attribute-sets/{attributeSetId}');
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
     * @throws \Kiboko\Magento\Exception\PutV1EavAttributesetsAttributeSetIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1EavAttributesetsAttributeSetIdBadRequestException
     * @throws \Kiboko\Magento\Exception\PutV1EavAttributesetsAttributeSetIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\EavDataAttributeSetInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\PutV1EavAttributesetsAttributeSetIdUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\PutV1EavAttributesetsAttributeSetIdBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\PutV1EavAttributesetsAttributeSetIdInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}