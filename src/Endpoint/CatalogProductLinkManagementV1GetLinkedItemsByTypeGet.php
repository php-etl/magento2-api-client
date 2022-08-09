<?php

namespace Kiboko\Magento\V2\Endpoint;

class CatalogProductLinkManagementV1GetLinkedItemsByTypeGet extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
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
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{sku}', '{type}'), array($this->sku, $this->type), '/V1/products/{sku}/links/{type}');
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
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductLinkManagementV1GetLinkedItemsByTypeGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductLinkInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\CatalogDataProductLinkInterface[]', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\CatalogProductLinkManagementV1GetLinkedItemsByTypeGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
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