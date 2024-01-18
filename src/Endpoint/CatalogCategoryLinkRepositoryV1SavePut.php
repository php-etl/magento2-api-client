<?php

namespace Kiboko\Magento\Endpoint;

class CatalogCategoryLinkRepositoryV1SavePut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $categoryId;
    /**
     * Assign a product to the required category
     *
     * @param string $categoryId 
     * @param \Kiboko\Magento\Model\V1CategoriesCategoryIdProductsPutBody $catalogCategoryLinkRepositoryV1SavePutBody 
     */
    public function __construct(string $categoryId, \Kiboko\Magento\Model\V1CategoriesCategoryIdProductsPutBody $catalogCategoryLinkRepositoryV1SavePutBody)
    {
        $this->categoryId = $categoryId;
        $this->body = $catalogCategoryLinkRepositoryV1SavePutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
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
     * @throws \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1SavePutBadRequestException
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
            throw new \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}