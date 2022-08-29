<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class BundleProductLinkManagementV1AddChildByProductSkuPost extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    protected $sku;
    protected $optionId;
    /**
     * Add child product to specified Bundle option by product sku
     *
     * @param string $sku 
     * @param int $optionId 
     * @param \Kiboko\Magento\v2_1\Model\V1BundleProductsSkuLinksOptionIdPostBody $$body 
     */
    public function __construct(string $sku, int $optionId, \Kiboko\Magento\v2_1\Model\V1BundleProductsSkuLinksOptionIdPostBody $$body)
    {
        $this->sku = $sku;
        $this->optionId = $optionId;
        $this->body = $$body;
    }
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{sku}', '{optionId}'), array($this->sku, $this->optionId), '/V1/bundle-products/{sku}/links/{optionId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1AddChildByProductSkuPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1AddChildByProductSkuPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1AddChildByProductSkuPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1AddChildByProductSkuPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}