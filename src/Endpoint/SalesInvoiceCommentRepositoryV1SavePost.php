<?php

namespace Kiboko\Magento\Endpoint;

class SalesInvoiceCommentRepositoryV1SavePost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Performs persist operations for a specified invoice comment.
     *
     * @param \Kiboko\Magento\Model\V1InvoicesCommentsPostBody $salesInvoiceCommentRepositoryV1SavePostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1InvoicesCommentsPostBody $salesInvoiceCommentRepositoryV1SavePostBody)
    {
        $this->body = $salesInvoiceCommentRepositoryV1SavePostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/invoices/comments';
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
     * @throws \Kiboko\Magento\Exception\SalesInvoiceCommentRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesInvoiceCommentRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataInvoiceCommentInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\SalesDataInvoiceCommentInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\SalesInvoiceCommentRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\SalesInvoiceCommentRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}