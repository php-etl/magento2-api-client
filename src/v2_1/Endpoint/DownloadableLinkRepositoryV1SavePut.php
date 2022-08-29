<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class DownloadableLinkRepositoryV1SavePut extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    protected $sku;
    protected $id;
    /**
     * Update downloadable link of the given product (link type and its resources cannot be changed)
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsSkuDownloadableLinksIdPutBody $$body 
     */
    public function __construct(string $sku, string $id, \Kiboko\Magento\v2_1\Model\V1ProductsSkuDownloadableLinksIdPutBody $$body)
    {
        $this->sku = $sku;
        $this->id = $id;
        $this->body = $$body;
    }
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{sku}', '{id}'), array($this->sku, $this->id), '/V1/products/{sku}/downloadable-links/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\DownloadableLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\DownloadableLinkRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}