<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class InventoryApiSourceRepositoryV1SavePut extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $sourceCode;
    /**
     * Save Source data
     *
     * @param string $sourceCode
     * @param \Kiboko\Magento\v2_3\Model\V1InventorySourcesSourceCodePutBody $inventoryApiSourceRepositoryV1SavePutBody
     */
    public function __construct(string $sourceCode, \Kiboko\Magento\v2_3\Model\V1InventorySourcesSourceCodePutBody $inventoryApiSourceRepositoryV1SavePutBody)
    {
        $this->sourceCode = $sourceCode;
        $this->body = $inventoryApiSourceRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{sourceCode}'), array($this->sourceCode), '/V1/inventory/sources/{sourceCode}');
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
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\InventoryApiSourceRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\InventoryApiSourceRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
