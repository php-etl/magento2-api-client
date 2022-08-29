<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CatalogProductAttributeMediaGalleryManagementV1CreatePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $sku;
    /**
     * Create new gallery entry
     *
     * @param string $sku
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSkuMediaPostBody $catalogProductAttributeMediaGalleryManagementV1CreatePostBody
     */
    public function __construct(string $sku, \Kiboko\Magento\v2_3\Model\V1ProductsSkuMediaPostBody $catalogProductAttributeMediaGalleryManagementV1CreatePostBody)
    {
        $this->sku = $sku;
        $this->body = $catalogProductAttributeMediaGalleryManagementV1CreatePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}'), array($this->sku), '/V1/products/{sku}/media');
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
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeMediaGalleryManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeMediaGalleryManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeMediaGalleryManagementV1CreatePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeMediaGalleryManagementV1CreatePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
