<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class InventoryLowQuantityNotificationApiDeleteSourceItemsConfigurationV1ExecutePost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    /**
     * Delete multiple source items configuration for low quantity
     *
     * @param \Kiboko\Magento\v2_4\Model\V1InventoryLowQuantityNotificationsDeletePostBody $inventoryLowQuantityNotificationApiDeleteSourceItemsConfigurationV1ExecutePostBody
     */
    public function __construct(\Kiboko\Magento\v2_4\Model\V1InventoryLowQuantityNotificationsDeletePostBody $inventoryLowQuantityNotificationApiDeleteSourceItemsConfigurationV1ExecutePostBody)
    {
        $this->body = $inventoryLowQuantityNotificationApiDeleteSourceItemsConfigurationV1ExecutePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/inventory/low-quantity-notifications-delete';
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
     * @throws \Kiboko\Magento\v2_4\Exception\InventoryLowQuantityNotificationApiDeleteSourceItemsConfigurationV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\InventoryLowQuantityNotificationApiDeleteSourceItemsConfigurationV1ExecutePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}