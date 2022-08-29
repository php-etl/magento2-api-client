<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CatalogProductWebsiteLinkRepositoryV1SavePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    protected $sku;
    /**
     * Assign a product to the website
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSkuWebsitesPostBody $catalogProductWebsiteLinkRepositoryV1SavePostBody 
     */
    public function __construct(string $sku, \Kiboko\Magento\v2_3\Model\V1ProductsSkuWebsitesPostBody $catalogProductWebsiteLinkRepositoryV1SavePostBody)
    {
        $this->sku = $sku;
        $this->body = $catalogProductWebsiteLinkRepositoryV1SavePostBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{sku}'), array($this->sku), '/V1/products/{sku}/websites');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductWebsiteLinkRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductWebsiteLinkRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogProductWebsiteLinkRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogProductWebsiteLinkRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}