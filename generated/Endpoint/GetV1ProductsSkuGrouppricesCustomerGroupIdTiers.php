<?php

namespace Kiboko\Magento\Endpoint;

class GetV1ProductsSkuGrouppricesCustomerGroupIdTiers extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
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
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
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
     * @throws \Kiboko\Magento\Exception\GetV1ProductsSkuGrouppricesCustomerGroupIdTiersBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductTierPriceInterface[]|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\CatalogDataProductTierPriceInterface[]', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\GetV1ProductsSkuGrouppricesCustomerGroupIdTiersBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}