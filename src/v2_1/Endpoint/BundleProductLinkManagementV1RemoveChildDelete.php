<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class BundleProductLinkManagementV1RemoveChildDelete extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    protected $sku;
    protected $optionId;
    protected $childSku;
    /**
     * Remove product from Bundle product option
     *
     * @param string $sku
     * @param int $optionId
     * @param string $childSku
     */
    public function __construct(string $sku, int $optionId, string $childSku)
    {
        $this->sku = $sku;
        $this->optionId = $optionId;
        $this->childSku = $childSku;
    }
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}', '{optionId}', '{childSku}'), array($this->sku, $this->optionId, $this->childSku), '/V1/bundle-products/{sku}/options/{optionId}/children/{childSku}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1RemoveChildDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1RemoveChildDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1RemoveChildDeleteUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1RemoveChildDeleteBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}