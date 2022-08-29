<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class ConfigurableProductOptionRepositoryV1SavePost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $sku;
    /**
     * Save option
     *
     * @param string $sku
     * @param \Kiboko\Magento\v2_4\Model\V1ConfigurableProductsSkuOptionsPostBody $configurableProductOptionRepositoryV1SavePostBody
     */
    public function __construct(string $sku, \Kiboko\Magento\v2_4\Model\V1ConfigurableProductsSkuOptionsPostBody $configurableProductOptionRepositoryV1SavePostBody)
    {
        $this->sku = $sku;
        $this->body = $configurableProductOptionRepositoryV1SavePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}'), array($this->sku), '/V1/configurable-products/{sku}/options');
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
     * @throws \Kiboko\Magento\v2_4\Exception\ConfigurableProductOptionRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\ConfigurableProductOptionRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_4\Exception\ConfigurableProductOptionRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\ConfigurableProductOptionRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\ConfigurableProductOptionRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\ConfigurableProductOptionRepositoryV1SavePostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
