<?php

namespace Kiboko\Magento\V2\Endpoint;

class SalesCreditmemoManagementV1RefundPost extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    /**
     * Prepare creditmemo to refund and save it.
     *
     * @param \Kiboko\Magento\V2\Model\V1CreditmemoRefundPostBody $salesCreditmemoManagementV1RefundPostBody
     */
    public function __construct(\Kiboko\Magento\V2\Model\V1CreditmemoRefundPostBody $salesCreditmemoManagementV1RefundPostBody)
    {
        $this->body = $salesCreditmemoManagementV1RefundPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/creditmemo/refund';
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
     * @throws \Kiboko\Magento\V2\Exception\SalesCreditmemoManagementV1RefundPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\SalesDataCreditmemoInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\SalesCreditmemoManagementV1RefundPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
