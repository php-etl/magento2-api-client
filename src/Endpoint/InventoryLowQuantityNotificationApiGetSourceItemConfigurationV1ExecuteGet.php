<?php

namespace Kiboko\Magento\Endpoint;

class InventoryLowQuantityNotificationApiGetSourceItemConfigurationV1ExecuteGet extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
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
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
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
     * @throws \Kiboko\Magento\Exception\InventoryLowQuantityNotificationApiGetSourceItemConfigurationV1ExecuteGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\InventoryLowQuantityNotificationApiGetSourceItemConfigurationV1ExecuteGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\InventoryLowQuantityNotificationApiGetSourceItemConfigurationV1ExecuteGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\InventoryLowQuantityNotificationApiGetSourceItemConfigurationV1ExecuteGetInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}