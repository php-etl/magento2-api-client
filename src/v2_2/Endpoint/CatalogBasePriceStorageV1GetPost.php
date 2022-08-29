<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CatalogBasePriceStorageV1GetPost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    /**
     * Return product prices. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_2\Model\V1ProductsBasePricesInformationPostBody $catalogBasePriceStorageV1GetPostBody
     */
    public function __construct(\Kiboko\Magento\v2_2\Model\V1ProductsBasePricesInformationPostBody $catalogBasePriceStorageV1GetPostBody)
    {
        $this->body = $catalogBasePriceStorageV1GetPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/products/base-prices-information';
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
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogBasePriceStorageV1GetPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CatalogDataBasePriceInterface[]|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CatalogDataBasePriceInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogBasePriceStorageV1GetPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
