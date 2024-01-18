<?php

namespace Kiboko\Magento\Endpoint;

class SalesRefundInvoiceV1ExecutePost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $invoiceId;
    /**
     * Create refund for invoice
     *
     * @param int $invoiceId 
     * @param \Kiboko\Magento\Model\V1InvoiceInvoiceIdRefundPostBody $salesRefundInvoiceV1ExecutePostBody 
     */
    public function __construct(int $invoiceId, \Kiboko\Magento\Model\V1InvoiceInvoiceIdRefundPostBody $salesRefundInvoiceV1ExecutePostBody)
    {
        $this->invoiceId = $invoiceId;
        $this->body = $salesRefundInvoiceV1ExecutePostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{invoiceId}'), array($this->invoiceId), '/V1/invoice/{invoiceId}/refund');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\SalesRefundInvoiceV1ExecutePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\SalesRefundInvoiceV1ExecutePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}