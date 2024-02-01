<?php

namespace Kiboko\Magento\Endpoint;

class PostV1ConfigurableproductsSkuOptions extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $sku;
    /**
     * Save option
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ConfigurableProductsSkuOptionsPostBody $postV1ConfigurableproductsSkuOptionsBody 
     */
    public function __construct(string $sku, \Kiboko\Magento\Model\V1ConfigurableProductsSkuOptionsPostBody $postV1ConfigurableproductsSkuOptionsBody)
    {
        $this->sku = $sku;
        $this->body = $postV1ConfigurableproductsSkuOptionsBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{sku}'), array($this->sku), '/V1/configurable-products/{sku}/options');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\PostV1ConfigurableproductsSkuOptionsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ConfigurableproductsSkuOptionsBadRequestException
     * @throws \Kiboko\Magento\Exception\PostV1ConfigurableproductsSkuOptionsInternalServerErrorException
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
            throw new \Kiboko\Magento\Exception\PostV1ConfigurableproductsSkuOptionsUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\PostV1ConfigurableproductsSkuOptionsBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\PostV1ConfigurableproductsSkuOptionsInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}