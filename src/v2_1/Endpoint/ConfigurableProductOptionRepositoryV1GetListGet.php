<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class ConfigurableProductOptionRepositoryV1GetListGet extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    protected $sku;
    /**
     * Get all options for configurable product
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
        return str_replace(array('{sku}'), array($this->sku), '/V1/configurable-products/{sku}/options/all');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ConfigurableProductDataOptionInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ConfigurableProductDataOptionInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1GetListGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1GetListGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}