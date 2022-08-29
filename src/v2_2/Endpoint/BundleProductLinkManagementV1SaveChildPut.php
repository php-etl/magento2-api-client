<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class BundleProductLinkManagementV1SaveChildPut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $sku;
    protected $id;
    /**
     *
     *
     * @param string $sku
     * @param string $id
     * @param \Kiboko\Magento\v2_2\Model\V1BundleProductsSkuLinksIdPutBody $bundleProductLinkManagementV1SaveChildPutBody
     */
    public function __construct(string $sku, string $id, \Kiboko\Magento\v2_2\Model\V1BundleProductsSkuLinksIdPutBody $bundleProductLinkManagementV1SaveChildPutBody)
    {
        $this->sku = $sku;
        $this->id = $id;
        $this->body = $bundleProductLinkManagementV1SaveChildPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}', '{id}'), array($this->sku, $this->id), '/V1/bundle-products/{sku}/links/{id}');
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
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductLinkManagementV1SaveChildPutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductLinkManagementV1SaveChildPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\BundleProductLinkManagementV1SaveChildPutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\BundleProductLinkManagementV1SaveChildPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
