<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class NegotiableQuoteNegotiableQuoteManagementV1AdminSendPost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    /**
     * Submit the B2B quote to the customer. The quote status for the customer will be changed to 'Updated', and the customer can work with the quote.
     *
     * @param \Kiboko\Magento\v2_4\Model\V1NegotiableQuoteSubmitToCustomerPostBody $negotiableQuoteNegotiableQuoteManagementV1AdminSendPostBody
     */
    public function __construct(\Kiboko\Magento\v2_4\Model\V1NegotiableQuoteSubmitToCustomerPostBody $negotiableQuoteNegotiableQuoteManagementV1AdminSendPostBody)
    {
        $this->body = $negotiableQuoteNegotiableQuoteManagementV1AdminSendPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/negotiableQuote/submitToCustomer';
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
     * @throws \Kiboko\Magento\v2_4\Exception\NegotiableQuoteNegotiableQuoteManagementV1AdminSendPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\NegotiableQuoteNegotiableQuoteManagementV1AdminSendPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
