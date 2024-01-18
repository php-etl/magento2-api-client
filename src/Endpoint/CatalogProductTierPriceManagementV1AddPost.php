<?php

namespace Kiboko\Magento\Endpoint;

class CatalogProductTierPriceManagementV1AddPost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
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
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{sku}', '{customerGroupId}', '{price}', '{qty}'), array($this->sku, $this->customerGroupId, $this->price, $this->qty), '/V1/products/{sku}/group-prices/{customerGroupId}/tiers/{qty}/price/{price}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CatalogProductTierPriceManagementV1AddPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductTierPriceManagementV1AddPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogProductTierPriceManagementV1AddPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogProductTierPriceManagementV1AddPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}