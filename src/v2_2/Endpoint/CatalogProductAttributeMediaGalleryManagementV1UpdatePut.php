<?php

namespace Kiboko\Magento\V2_2\Endpoint;

class CatalogProductAttributeMediaGalleryManagementV1UpdatePut extends \Kiboko\Magento\V2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_2\Runtime\Client\EndpointTrait;
    protected $sku;
    protected $entryId;
    /**
     * Update gallery entry
     *
     * @param string $sku
     * @param string $entryId
     * @param null|\Kiboko\Magento\V2_2\Model\V1ProductsSkuMediaEntryIdPutBody $requestBody
     */
    public function __construct(string $sku, string $entryId, ?\Kiboko\Magento\V2_2\Model\V1ProductsSkuMediaEntryIdPutBody $requestBody = null)
    {
        $this->sku = $sku;
        $this->entryId = $entryId;
        $this->body = $requestBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}', '{entryId}'), array($this->sku, $this->entryId), '/V1/products/{sku}/media/{entryId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Kiboko\Magento\V2_2\Model\V1ProductsSkuMediaEntryIdPutBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\V2_2\Model\V1ProductsSkuMediaEntryIdPutBody) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutBadRequestException
     * @throws \Kiboko\Magento\V2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_2\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_2\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_2\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
