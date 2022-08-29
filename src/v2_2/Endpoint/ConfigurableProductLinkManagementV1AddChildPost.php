<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class ConfigurableProductLinkManagementV1AddChildPost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $sku;
    /**
     *
     *
     * @param string $sku
     * @param \Kiboko\Magento\v2_2\Model\V1ConfigurableProductsSkuChildPostBody $configurableProductLinkManagementV1AddChildPostBody
     */
    public function __construct(string $sku, \Kiboko\Magento\v2_2\Model\V1ConfigurableProductsSkuChildPostBody $configurableProductLinkManagementV1AddChildPostBody)
    {
        $this->sku = $sku;
        $this->body = $configurableProductLinkManagementV1AddChildPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}'), array($this->sku), '/V1/configurable-products/{sku}/child');
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
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductLinkManagementV1AddChildPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\ConfigurableProductLinkManagementV1AddChildPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
