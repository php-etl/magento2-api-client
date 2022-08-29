<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class ConfigurableProductOptionRepositoryV1SavePut extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $sku;
    protected $id;
    /**
     * Save option
     *
     * @param string $sku
     * @param string $id
     * @param \Kiboko\Magento\v2_4\Model\V1ConfigurableProductsSkuOptionsIdPutBody $configurableProductOptionRepositoryV1SavePutBody
     */
    public function __construct(string $sku, string $id, \Kiboko\Magento\v2_4\Model\V1ConfigurableProductsSkuOptionsIdPutBody $configurableProductOptionRepositoryV1SavePutBody)
    {
        $this->sku = $sku;
        $this->id = $id;
        $this->body = $configurableProductOptionRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}', '{id}'), array($this->sku, $this->id), '/V1/configurable-products/{sku}/options/{id}');
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
     * @throws \Kiboko\Magento\v2_4\Exception\ConfigurableProductOptionRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\ConfigurableProductOptionRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_4\Exception\ConfigurableProductOptionRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\ConfigurableProductOptionRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\ConfigurableProductOptionRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\ConfigurableProductOptionRepositoryV1SavePutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
