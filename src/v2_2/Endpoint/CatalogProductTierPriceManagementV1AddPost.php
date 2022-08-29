<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CatalogProductTierPriceManagementV1AddPost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $sku;
    protected $customerGroupId;
    protected $price;
    protected $qty;
    /**
     * Create tier price for product
     *
     * @param string $sku
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param float $price
     * @param float $qty
     */
    public function __construct(string $sku, string $customerGroupId, float $price, float $qty)
    {
        $this->sku = $sku;
        $this->customerGroupId = $customerGroupId;
        $this->price = $price;
        $this->qty = $qty;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}', '{customerGroupId}', '{price}', '{qty}'), array($this->sku, $this->customerGroupId, $this->price, $this->qty), '/V1/products/{sku}/group-prices/{customerGroupId}/tiers/{qty}/price/{price}');
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
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductTierPriceManagementV1AddPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductTierPriceManagementV1AddPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductTierPriceManagementV1AddPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductTierPriceManagementV1AddPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
