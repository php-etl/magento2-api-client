<?php

namespace Kiboko\Magento\V2\Endpoint;

class CatalogCategoryLinkRepositoryV1DeleteByIdsDelete extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    protected $categoryId;
    protected $sku;
    /**
     * Remove the product assignment from the category by category id and sku
     *
     * @param string $categoryId 
     * @param string $sku 
     */
    public function __construct(string $categoryId, string $sku)
    {
        $this->categoryId = $categoryId;
        $this->sku = $sku;
    }
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{categoryId}', '{sku}'), array($this->categoryId, $this->sku), '/V1/categories/{categoryId}/products/{sku}');
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
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
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