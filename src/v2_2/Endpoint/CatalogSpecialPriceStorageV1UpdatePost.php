<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CatalogSpecialPriceStorageV1UpdatePost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    /**
     * Add or update product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_2\Model\V1ProductsSpecialPricePostBody $catalogSpecialPriceStorageV1UpdatePostBody
     */
    public function __construct(\Kiboko\Magento\v2_2\Model\V1ProductsSpecialPricePostBody $catalogSpecialPriceStorageV1UpdatePostBody)
    {
        $this->body = $catalogSpecialPriceStorageV1UpdatePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/products/special-price';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogSpecialPriceStorageV1UpdatePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogSpecialPriceStorageV1UpdatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CatalogDataPriceUpdateResultInterface[]', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogSpecialPriceStorageV1UpdatePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogSpecialPriceStorageV1UpdatePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
