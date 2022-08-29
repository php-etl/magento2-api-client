<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class CatalogAttributeSetManagementV1CreatePost extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    /**
     * Create attribute set from data
     *
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsAttributeSetsPostBody $$body 
     */
    public function __construct(\Kiboko\Magento\v2_1\Model\V1ProductsAttributeSetsPostBody $$body)
    {
        $this->body = $$body;
    }
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/products/attribute-sets';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogAttributeSetManagementV1CreatePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogAttributeSetManagementV1CreatePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\EavDataAttributeSetInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\EavDataAttributeSetInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CatalogAttributeSetManagementV1CreatePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CatalogAttributeSetManagementV1CreatePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}