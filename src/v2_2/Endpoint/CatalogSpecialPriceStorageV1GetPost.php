<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CatalogSpecialPriceStorageV1GetPost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    /**
     * Return product's special price. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_2\Model\V1ProductsSpecialPriceInformationPostBody $catalogSpecialPriceStorageV1GetPostBody
     */
    public function __construct(\Kiboko\Magento\v2_2\Model\V1ProductsSpecialPriceInformationPostBody $catalogSpecialPriceStorageV1GetPostBody)
    {
        $this->body = $catalogSpecialPriceStorageV1GetPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/products/special-price-information';
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
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogSpecialPriceStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogSpecialPriceStorageV1GetPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CatalogDataSpecialPriceInterface[]|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CatalogDataSpecialPriceInterface[]', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogSpecialPriceStorageV1GetPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogSpecialPriceStorageV1GetPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
