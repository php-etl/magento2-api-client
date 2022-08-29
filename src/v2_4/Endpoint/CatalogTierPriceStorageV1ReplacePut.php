<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class CatalogTierPriceStorageV1ReplacePut extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    /**
     * Remove existing tier prices and replace them with the new ones. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from replace list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_4\Model\V1ProductsTierPricesPutBody $catalogTierPriceStorageV1ReplacePutBody
     */
    public function __construct(\Kiboko\Magento\v2_4\Model\V1ProductsTierPricesPutBody $catalogTierPriceStorageV1ReplacePutBody)
    {
        $this->body = $catalogTierPriceStorageV1ReplacePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return '/V1/products/tier-prices';
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
     * @throws \Kiboko\Magento\v2_4\Exception\CatalogTierPriceStorageV1ReplacePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\CatalogDataPriceUpdateResultInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CatalogTierPriceStorageV1ReplacePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
