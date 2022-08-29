<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class InventoryLowQuantityNotificationApiSourceItemConfigurationsSaveV1ExecutePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    /**
     *
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InventoryLowQuantityNotificationPostBody $inventoryLowQuantityNotificationApiSourceItemConfigurationsSaveV1ExecutePostBody
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1InventoryLowQuantityNotificationPostBody $inventoryLowQuantityNotificationApiSourceItemConfigurationsSaveV1ExecutePostBody)
    {
        $this->body = $inventoryLowQuantityNotificationApiSourceItemConfigurationsSaveV1ExecutePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/inventory/low-quantity-notification';
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
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryLowQuantityNotificationApiSourceItemConfigurationsSaveV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\InventoryLowQuantityNotificationApiSourceItemConfigurationsSaveV1ExecutePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
