<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CatalogProductCustomOptionRepositoryV1SavePut extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $optionId;
    /**
     * Save Custom Option
     *
     * @param string $optionId
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsOptionsOptionIdPutBody $catalogProductCustomOptionRepositoryV1SavePutBody
     */
    public function __construct(string $optionId, \Kiboko\Magento\v2_3\Model\V1ProductsOptionsOptionIdPutBody $catalogProductCustomOptionRepositoryV1SavePutBody)
    {
        $this->optionId = $optionId;
        $this->body = $catalogProductCustomOptionRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{optionId}'), array($this->optionId), '/V1/products/options/{optionId}');
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
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductCustomOptionRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\CatalogDataProductCustomOptionInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogProductCustomOptionRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
