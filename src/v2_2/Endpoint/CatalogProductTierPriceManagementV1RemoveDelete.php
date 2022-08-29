<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CatalogProductTierPriceManagementV1RemoveDelete extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $sku;
    protected $customerGroupId;
    protected $qty;
    /**
     * Remove tier price from product
     *
     * @param string $sku
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param float $qty
     */
    public function __construct(string $sku, string $customerGroupId, float $qty)
    {
        $this->sku = $sku;
        $this->customerGroupId = $customerGroupId;
        $this->qty = $qty;
    }
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}', '{customerGroupId}', '{qty}'), array($this->sku, $this->customerGroupId, $this->qty), '/V1/products/{sku}/group-prices/{customerGroupId}/tiers/{qty}');
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
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductTierPriceManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductTierPriceManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductTierPriceManagementV1RemoveDeleteBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductTierPriceManagementV1RemoveDeleteUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
