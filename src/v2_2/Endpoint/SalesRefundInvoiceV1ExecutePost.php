<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class SalesRefundInvoiceV1ExecutePost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $invoiceId;
    /**
     * Create refund for invoice
     *
     * @param int $invoiceId
     * @param \Kiboko\Magento\v2_2\Model\V1InvoiceInvoiceIdRefundPostBody $salesRefundInvoiceV1ExecutePostBody
     */
    public function __construct(int $invoiceId, \Kiboko\Magento\v2_2\Model\V1InvoiceInvoiceIdRefundPostBody $salesRefundInvoiceV1ExecutePostBody)
    {
        $this->invoiceId = $invoiceId;
        $this->body = $salesRefundInvoiceV1ExecutePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{invoiceId}'), array($this->invoiceId), '/V1/invoice/{invoiceId}/refund');
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
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRefundInvoiceV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\SalesRefundInvoiceV1ExecutePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
