<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class DownloadableSampleRepositoryV1SavePut extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $sku;
    protected $id;
    /**
     * Update downloadable sample of the given product
     *
     * @param string $sku
     * @param string $id
     * @param \Kiboko\Magento\v2_4\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody $downloadableSampleRepositoryV1SavePutBody
     */
    public function __construct(string $sku, string $id, \Kiboko\Magento\v2_4\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody $downloadableSampleRepositoryV1SavePutBody)
    {
        $this->sku = $sku;
        $this->id = $id;
        $this->body = $downloadableSampleRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}', '{id}'), array($this->sku, $this->id), '/V1/products/{sku}/downloadable-links/samples/{id}');
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
     * @throws \Kiboko\Magento\v2_4\Exception\DownloadableSampleRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\DownloadableSampleRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
