<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class CatalogTierPriceStorageV1GetPost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    /**
     * Return product prices. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_4\Model\V1ProductsTierPricesInformationPostBody $catalogTierPriceStorageV1GetPostBody
     */
    public function __construct(\Kiboko\Magento\v2_4\Model\V1ProductsTierPricesInformationPostBody $catalogTierPriceStorageV1GetPostBody)
    {
        $this->body = $catalogTierPriceStorageV1GetPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/products/tier-prices-information';
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
     * @throws \Kiboko\Magento\v2_4\Exception\CatalogTierPriceStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\CatalogTierPriceStorageV1GetPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\CatalogDataTierPriceInterface[]|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\CatalogDataTierPriceInterface[]', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CatalogTierPriceStorageV1GetPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CatalogTierPriceStorageV1GetPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
