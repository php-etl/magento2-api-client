<?php

namespace Kiboko\Magento\Endpoint;

class ConfigurableProductOptionRepositoryV1SavePost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $sku;
    /**
     * Save option
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ConfigurableProductsSkuOptionsPostBody $configurableProductOptionRepositoryV1SavePostBody 
     */
    public function __construct(string $sku, \Kiboko\Magento\Model\V1ConfigurableProductsSkuOptionsPostBody $configurableProductOptionRepositoryV1SavePostBody)
    {
        $this->sku = $sku;
        $this->body = $configurableProductOptionRepositoryV1SavePostBody;
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
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1SavePostInternalServerErrorException
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
            throw new \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1SavePostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}