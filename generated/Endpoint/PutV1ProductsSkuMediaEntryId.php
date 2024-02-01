<?php

namespace Kiboko\Magento\Endpoint;

class PutV1ProductsSkuMediaEntryId extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $sku;
    protected $entryId;
    /**
     * Update gallery entry
     *
     * @param string $sku 
     * @param string $entryId 
     * @param \Kiboko\Magento\Model\V1ProductsSkuMediaEntryIdPutBody $putV1ProductsSkuMediaEntryIdBody 
     */
    public function __construct(string $sku, string $entryId, \Kiboko\Magento\Model\V1ProductsSkuMediaEntryIdPutBody $putV1ProductsSkuMediaEntryIdBody)
    {
        $this->sku = $sku;
        $this->entryId = $entryId;
        $this->body = $putV1ProductsSkuMediaEntryIdBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{sku}', '{entryId}'), array($this->sku, $this->entryId), '/V1/products/{sku}/media/{entryId}');
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
     * @throws \Kiboko\Magento\Exception\PutV1ProductsSkuMediaEntryIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1ProductsSkuMediaEntryIdBadRequestException
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
            throw new \Kiboko\Magento\Exception\PutV1ProductsSkuMediaEntryIdUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\PutV1ProductsSkuMediaEntryIdBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}