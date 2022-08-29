<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class ConfigurableProductConfigurableProductManagementV1GenerateVariationPut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    /**
     * Generate variation based on same product
     *
     * @param \Kiboko\Magento\v2_2\Model\V1ConfigurableProductsVariationPutBody $configurableProductConfigurableProductManagementV1GenerateVariationPutBody
     */
    public function __construct(\Kiboko\Magento\v2_2\Model\V1ConfigurableProductsVariationPutBody $configurableProductConfigurableProductManagementV1GenerateVariationPutBody)
    {
        $this->body = $configurableProductConfigurableProductManagementV1GenerateVariationPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return '/V1/configurable-products/variation';
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
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductConfigurableProductManagementV1GenerateVariationPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CatalogDataProductInterface[]|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CatalogDataProductInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\ConfigurableProductConfigurableProductManagementV1GenerateVariationPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
