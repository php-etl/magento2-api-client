<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class ConfigurableProductLinkManagementV1GetChildrenGet extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $sku;
    /**
     * Get all children for Configurable product
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
        return str_replace(array('{sku}'), array($this->sku), '/V1/configurable-products/{sku}/children');
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
     * @throws \Kiboko\Magento\v2_4\Exception\ConfigurableProductLinkManagementV1GetChildrenGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\CatalogDataProductInterface[]|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\CatalogDataProductInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\ConfigurableProductLinkManagementV1GetChildrenGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
