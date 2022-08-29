<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class CatalogProductAttributeMediaGalleryManagementV1RemoveDelete extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $sku;
    protected $entryId;
    /**
     * Remove gallery entry
     *
     * @param string $sku
     * @param int $entryId
     */
    public function __construct(string $sku, int $entryId)
    {
        $this->sku = $sku;
        $this->entryId = $entryId;
    }
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}', '{entryId}'), array($this->sku, $this->entryId), '/V1/products/{sku}/media/{entryId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_4\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
