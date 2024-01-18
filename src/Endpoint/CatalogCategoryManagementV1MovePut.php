<?php

namespace Kiboko\Magento\Endpoint;

class CatalogCategoryManagementV1MovePut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $categoryId;
    /**
     * Move category
     *
     * @param int $categoryId 
     * @param \Kiboko\Magento\Model\V1CategoriesCategoryIdMovePutBody $catalogCategoryManagementV1MovePutBody 
     */
    public function __construct(int $categoryId, \Kiboko\Magento\Model\V1CategoriesCategoryIdMovePutBody $catalogCategoryManagementV1MovePutBody)
    {
        $this->categoryId = $categoryId;
        $this->body = $catalogCategoryManagementV1MovePutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{categoryId}'), array($this->categoryId), '/V1/categories/{categoryId}/move');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CatalogCategoryManagementV1MovePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryManagementV1MovePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryManagementV1MovePutBadRequestException
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
            throw new \Kiboko\Magento\Exception\CatalogCategoryManagementV1MovePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogCategoryManagementV1MovePutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogCategoryManagementV1MovePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}