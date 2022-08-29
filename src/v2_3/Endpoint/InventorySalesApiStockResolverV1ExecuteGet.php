<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class InventorySalesApiStockResolverV1ExecuteGet extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $type;
    protected $code;
    /**
     * Resolve Stock by Sales Channel type and code
     *
     * @param string $type
     * @param string $code
     */
    public function __construct(string $type, string $code)
    {
        $this->type = $type;
        $this->code = $code;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{type}', '{code}'), array($this->type, $this->code), '/V1/inventory/stock-resolver/{type}/{code}');
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
     * @throws \Kiboko\Magento\v2_3\Exception\InventorySalesApiStockResolverV1ExecuteGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventorySalesApiStockResolverV1ExecuteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventoryApiDataStockInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\InventoryApiDataStockInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\InventorySalesApiStockResolverV1ExecuteGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\InventorySalesApiStockResolverV1ExecuteGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
