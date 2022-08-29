<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class CatalogCategoryLinkManagementV1GetAssignedProductsGet extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $categoryId;
    /**
     * Get products assigned to category
     *
     * @param int $categoryId
     */
    public function __construct(int $categoryId)
    {
        $this->categoryId = $categoryId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{categoryId}'), array($this->categoryId), '/V1/categories/{categoryId}/products');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_4\Exception\CatalogCategoryLinkManagementV1GetAssignedProductsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\CatalogDataCategoryProductLinkInterface[]|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\CatalogDataCategoryProductLinkInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CatalogCategoryLinkManagementV1GetAssignedProductsGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
