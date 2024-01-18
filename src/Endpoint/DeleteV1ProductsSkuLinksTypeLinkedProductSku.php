<?php

namespace Kiboko\Magento\Endpoint;

class DeleteV1ProductsSkuLinksTypeLinkedProductSku extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $sku;
    protected $type;
    protected $linkedProductSku;
    /**
     * 
     *
     * @param string $sku 
     * @param string $type 
     * @param string $linkedProductSku 
     */
    public function __construct(string $sku, string $type, string $linkedProductSku)
    {
        $this->sku = $sku;
        $this->type = $type;
        $this->linkedProductSku = $linkedProductSku;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{sku}', '{type}', '{linkedProductSku}'), array($this->sku, $this->type, $this->linkedProductSku), '/V1/products/{sku}/links/{type}/{linkedProductSku}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsSkuLinksTypeLinkedProductSkuUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsSkuLinksTypeLinkedProductSkuBadRequestException
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
            throw new \Kiboko\Magento\Exception\DeleteV1ProductsSkuLinksTypeLinkedProductSkuUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\DeleteV1ProductsSkuLinksTypeLinkedProductSkuBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}