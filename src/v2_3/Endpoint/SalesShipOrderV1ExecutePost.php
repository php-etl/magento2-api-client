<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class SalesShipOrderV1ExecutePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $orderId;
    /**
     * Creates new Shipment for given Order.
     *
     * @param int $orderId
     * @param \Kiboko\Magento\v2_3\Model\V1OrderOrderIdShipPostBody $salesShipOrderV1ExecutePostBody
     */
    public function __construct(int $orderId, \Kiboko\Magento\v2_3\Model\V1OrderOrderIdShipPostBody $salesShipOrderV1ExecutePostBody)
    {
        $this->orderId = $orderId;
        $this->body = $salesShipOrderV1ExecutePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{orderId}'), array($this->orderId), '/V1/order/{orderId}/ship');
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
     * @throws \Kiboko\Magento\v2_3\Exception\SalesShipOrderV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\SalesShipOrderV1ExecutePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
