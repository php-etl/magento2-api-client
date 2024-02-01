<?php

namespace Kiboko\Magento\Endpoint;

class PutV1ProductsAttributesAttributeCodeOptionsOptionId extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $attributeCode;
    protected $optionId;
    /**
     * Update attribute option
     *
     * @param string $attributeCode 
     * @param int $optionId 
     * @param \Kiboko\Magento\Model\V1ProductsAttributesAttributeCodeOptionsOptionIdPutBody $putV1ProductsAttributesAttributeCodeOptionsOptionIdBody 
     */
    public function __construct(string $attributeCode, int $optionId, \Kiboko\Magento\Model\V1ProductsAttributesAttributeCodeOptionsOptionIdPutBody $putV1ProductsAttributesAttributeCodeOptionsOptionIdBody)
    {
        $this->attributeCode = $attributeCode;
        $this->optionId = $optionId;
        $this->body = $putV1ProductsAttributesAttributeCodeOptionsOptionIdBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{attributeCode}', '{optionId}'), array($this->attributeCode, $this->optionId), '/V1/products/attributes/{attributeCode}/options/{optionId}');
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
     * @throws \Kiboko\Magento\Exception\PutV1ProductsAttributesAttributeCodeOptionsOptionIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1ProductsAttributesAttributeCodeOptionsOptionIdBadRequestException
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
            throw new \Kiboko\Magento\Exception\PutV1ProductsAttributesAttributeCodeOptionsOptionIdUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\PutV1ProductsAttributesAttributeCodeOptionsOptionIdBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}