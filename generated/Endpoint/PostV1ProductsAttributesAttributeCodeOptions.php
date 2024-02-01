<?php

namespace Kiboko\Magento\Endpoint;

class PostV1ProductsAttributesAttributeCodeOptions extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $attributeCode;
    /**
     * Add option to attribute
     *
     * @param string $attributeCode 
     * @param \Kiboko\Magento\Model\V1ProductsAttributesAttributeCodeOptionsPostBody $postV1ProductsAttributesAttributeCodeOptionsBody 
     */
    public function __construct(string $attributeCode, \Kiboko\Magento\Model\V1ProductsAttributesAttributeCodeOptionsPostBody $postV1ProductsAttributesAttributeCodeOptionsBody)
    {
        $this->attributeCode = $attributeCode;
        $this->body = $postV1ProductsAttributesAttributeCodeOptionsBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
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
     * @throws \Kiboko\Magento\Exception\PostV1ProductsAttributesAttributeCodeOptionsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsAttributesAttributeCodeOptionsBadRequestException
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
            throw new \Kiboko\Magento\Exception\PostV1ProductsAttributesAttributeCodeOptionsUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\PostV1ProductsAttributesAttributeCodeOptionsBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}