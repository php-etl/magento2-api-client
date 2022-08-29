<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CatalogSpecialPriceStorageV1DeletePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    /**
     * Delete product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from delete list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the delete exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSpecialPriceDeletePostBody $catalogSpecialPriceStorageV1DeletePostBody 
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1ProductsSpecialPriceDeletePostBody $catalogSpecialPriceStorageV1DeletePostBody)
    {
        $this->body = $catalogSpecialPriceStorageV1DeletePostBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/products/special-price-delete';
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
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogSpecialPriceStorageV1DeletePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogSpecialPriceStorageV1DeletePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataPriceUpdateResultInterface[]', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogSpecialPriceStorageV1DeletePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogSpecialPriceStorageV1DeletePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}