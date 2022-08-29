<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class InventoryLowQuantityNotificationApiGetSourceItemConfigurationV1ExecuteGet extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    protected $sourceCode;
    protected $sku;
    /**
     * Get the source item configuration
     *
     * @param string $sourceCode 
     * @param string $sku 
     */
    public function __construct(string $sourceCode, string $sku)
    {
        $this->sourceCode = $sourceCode;
        $this->sku = $sku;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{sourceCode}', '{sku}'), array($this->sourceCode, $this->sku), '/V1/inventory/low-quantity-notification/{sourceCode}/{sku}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryLowQuantityNotificationApiGetSourceItemConfigurationV1ExecuteGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryLowQuantityNotificationApiGetSourceItemConfigurationV1ExecuteGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\InventoryLowQuantityNotificationApiGetSourceItemConfigurationV1ExecuteGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\InventoryLowQuantityNotificationApiGetSourceItemConfigurationV1ExecuteGetInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}