<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class CatalogProductAttributeMediaGalleryManagementV1UpdatePut extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    protected $sku;
    protected $entryId;
    /**
     * Update gallery entry
     *
     * @param string $sku 
     * @param string $entryId 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsSkuMediaEntryIdPutBody $$body 
     */
    public function __construct(string $sku, string $entryId, \Kiboko\Magento\v2_1\Model\V1ProductsSkuMediaEntryIdPutBody $$body)
    {
        $this->sku = $sku;
        $this->entryId = $entryId;
        $this->body = $$body;
    }
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{sku}', '{entryId}'), array($this->sku, $this->entryId), '/V1/products/{sku}/media/{entryId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}