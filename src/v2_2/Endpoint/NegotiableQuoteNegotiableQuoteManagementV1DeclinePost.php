<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class NegotiableQuoteNegotiableQuoteManagementV1DeclinePost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    /**
     * Decline the B2B quote. All custom pricing will be removed from this quote. The buyer will be able to place an order using their standard catalog prices and discounts.
     *
     * @param \Kiboko\Magento\v2_2\Model\V1NegotiableQuoteDeclinePostBody $negotiableQuoteNegotiableQuoteManagementV1DeclinePostBody
     */
    public function __construct(\Kiboko\Magento\v2_2\Model\V1NegotiableQuoteDeclinePostBody $negotiableQuoteNegotiableQuoteManagementV1DeclinePostBody)
    {
        $this->body = $negotiableQuoteNegotiableQuoteManagementV1DeclinePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/negotiableQuote/decline';
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
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteNegotiableQuoteManagementV1DeclinePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\NegotiableQuoteNegotiableQuoteManagementV1DeclinePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
