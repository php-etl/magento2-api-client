<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class NegotiableQuoteNegotiableQuoteManagementV1CreatePost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    /**
     * Create a B2B quote based on a regular Magento quote. If the B2B quote requires a shipping address (for negotiation or tax calculations), add it to the regular quote before you create a B2B quote.
     *
     * @param \Kiboko\Magento\v2_2\Model\V1NegotiableQuoteRequestPostBody $negotiableQuoteNegotiableQuoteManagementV1CreatePostBody
     */
    public function __construct(\Kiboko\Magento\v2_2\Model\V1NegotiableQuoteRequestPostBody $negotiableQuoteNegotiableQuoteManagementV1CreatePostBody)
    {
        $this->body = $negotiableQuoteNegotiableQuoteManagementV1CreatePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/negotiableQuote/request';
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
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteNegotiableQuoteManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\NegotiableQuoteNegotiableQuoteManagementV1CreatePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
