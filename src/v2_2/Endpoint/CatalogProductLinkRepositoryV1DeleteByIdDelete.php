<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CatalogProductLinkRepositoryV1DeleteByIdDelete extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
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
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}', '{type}', '{linkedProductSku}'), array($this->sku, $this->type, $this->linkedProductSku), '/V1/products/{sku}/links/{type}/{linkedProductSku}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductLinkRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductLinkRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductLinkRepositoryV1DeleteByIdDeleteBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductLinkRepositoryV1DeleteByIdDeleteUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}