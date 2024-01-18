<?php

namespace Kiboko\Magento\Endpoint;

class CatalogCategoryLinkRepositoryV1DeleteByIdsDelete extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
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
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
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
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteBadRequestException
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
            throw new \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}