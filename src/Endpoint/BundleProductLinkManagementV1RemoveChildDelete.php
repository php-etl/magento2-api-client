<?php

namespace Kiboko\Magento\Endpoint;

class BundleProductLinkManagementV1RemoveChildDelete extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
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
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{sku}', '{optionId}', '{childSku}'), array($this->sku, $this->optionId, $this->childSku), '/V1/bundle-products/{sku}/options/{optionId}/children/{childSku}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\BundleProductLinkManagementV1RemoveChildDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\BundleProductLinkManagementV1RemoveChildDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\BundleProductLinkManagementV1RemoveChildDeleteUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\BundleProductLinkManagementV1RemoveChildDeleteBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}