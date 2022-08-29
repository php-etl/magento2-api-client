<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class CatalogProductCustomOptionRepositoryV1SavePut extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    protected $optionId;
    /**
     * Save Custom Option
     *
     * @param string $optionId 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsOptionsOptionIdPutBody $$body 
     */
    public function __construct(string $optionId, \Kiboko\Magento\v2_1\Model\V1ProductsOptionsOptionIdPutBody $$body)
    {
        $this->optionId = $optionId;
        $this->body = $$body;
    }
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{optionId}'), array($this->optionId), '/V1/products/options/{optionId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductCustomOptionRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\CatalogDataProductCustomOptionInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CatalogProductCustomOptionRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}