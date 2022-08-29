<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class BundleProductOptionRepositoryV1GetListGet extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $sku;
    /**
     * Get all options for bundle product
     *
     * @param string $sku
     */
    public function __construct(string $sku)
    {
        $this->sku = $sku;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}'), array($this->sku), '/V1/bundle-products/{sku}/options/all');
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
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductOptionRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductOptionRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\BundleDataOptionInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\BundleDataOptionInterface[]', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\BundleProductOptionRepositoryV1GetListGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\BundleProductOptionRepositoryV1GetListGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
