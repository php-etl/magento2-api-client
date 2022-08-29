<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class CatalogProductLinkManagementV1GetLinkedItemsByTypeGet extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    protected $sku;
    protected $type;
    /**
     * Provide the list of links for a specific product
     *
     * @param string $sku
     * @param string $type
     */
    public function __construct(string $sku, string $type)
    {
        $this->sku = $sku;
        $this->type = $type;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}', '{type}'), array($this->sku, $this->type), '/V1/products/{sku}/links/{type}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductLinkManagementV1GetLinkedItemsByTypeGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductLinkInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\CatalogDataProductLinkInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CatalogProductLinkManagementV1GetLinkedItemsByTypeGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
