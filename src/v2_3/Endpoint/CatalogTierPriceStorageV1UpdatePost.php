<?php

namespace Kiboko\Magento\V2_3\Endpoint;

class CatalogTierPriceStorageV1UpdatePost extends \Kiboko\Magento\V2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_3\Runtime\Client\EndpointTrait;
    /**
     * Add or update product prices. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param null|\Kiboko\Magento\V2_3\Model\V1ProductsTierPricesPostBody $requestBody
     */
    public function __construct(?\Kiboko\Magento\V2_3\Model\V1ProductsTierPricesPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/products/tier-prices';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Kiboko\Magento\V2_3\Model\V1ProductsTierPricesPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\V2_3\Model\V1ProductsTierPricesPostBody) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2_3\Exception\CatalogTierPriceStorageV1UpdatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2_3\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\V2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataPriceUpdateResultInterface[]', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_3\Exception\CatalogTierPriceStorageV1UpdatePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_3\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_3\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
