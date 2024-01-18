<?php

namespace Kiboko\Magento\Endpoint;

class CatalogCategoryLinkRepositoryV1SavePost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $categoryId;
    /**
     * Assign a product to the required category
     *
     * @param string $categoryId 
     * @param \Kiboko\Magento\Model\V1CategoriesCategoryIdProductsPostBody $catalogCategoryLinkRepositoryV1SavePostBody 
     */
    public function __construct(string $categoryId, \Kiboko\Magento\Model\V1CategoriesCategoryIdProductsPostBody $catalogCategoryLinkRepositoryV1SavePostBody)
    {
        $this->categoryId = $categoryId;
        $this->body = $catalogCategoryLinkRepositoryV1SavePostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{categoryId}'), array($this->categoryId), '/V1/categories/{categoryId}/products');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1SavePostBadRequestException
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
            throw new \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}