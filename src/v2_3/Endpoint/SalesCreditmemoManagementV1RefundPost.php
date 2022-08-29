<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class SalesCreditmemoManagementV1RefundPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    /**
     * Prepare creditmemo to refund and save it.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CreditmemoRefundPostBody $salesCreditmemoManagementV1RefundPostBody 
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1CreditmemoRefundPostBody $salesCreditmemoManagementV1RefundPostBody)
    {
        $this->body = $salesCreditmemoManagementV1RefundPostBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/creditmemo/refund';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\SalesCreditmemoManagementV1RefundPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\SalesDataCreditmemoInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\SalesCreditmemoManagementV1RefundPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}