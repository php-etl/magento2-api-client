<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class CatalogProductLinkManagementV1SetProductLinksPost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $sku;
    /**
     * Assign a product link to another product
     *
     * @param string $sku
     * @param \Kiboko\Magento\v2_4\Model\V1ProductsSkuLinksPostBody $catalogProductLinkManagementV1SetProductLinksPostBody
     */
    public function __construct(string $sku, \Kiboko\Magento\v2_4\Model\V1ProductsSkuLinksPostBody $catalogProductLinkManagementV1SetProductLinksPostBody)
    {
        $this->sku = $sku;
        $this->body = $catalogProductLinkManagementV1SetProductLinksPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}'), array($this->sku), '/V1/products/{sku}/links');
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
     * @throws \Kiboko\Magento\v2_4\Exception\CatalogProductLinkManagementV1SetProductLinksPostBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\CatalogProductLinkManagementV1SetProductLinksPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CatalogProductLinkManagementV1SetProductLinksPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CatalogProductLinkManagementV1SetProductLinksPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}