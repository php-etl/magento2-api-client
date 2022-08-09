<?php

namespace Kiboko\Magento\V2\Endpoint;

class CatalogProductTierPriceManagementV1GetListGet extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    protected $sku;
    protected $customerGroupId;
    /**
     * Get tier price of product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     */
    public function __construct(string $sku, string $customerGroupId)
    {
        $this->sku = $sku;
        $this->customerGroupId = $customerGroupId;
    }
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{sku}', '{customerGroupId}'), array($this->sku, $this->customerGroupId), '/V1/products/{sku}/group-prices/{customerGroupId}/tiers');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductTierPriceManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductTierPriceManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductTierPriceInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\CatalogDataProductTierPriceInterface[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\CatalogProductTierPriceManagementV1GetListGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\CatalogProductTierPriceManagementV1GetListGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}