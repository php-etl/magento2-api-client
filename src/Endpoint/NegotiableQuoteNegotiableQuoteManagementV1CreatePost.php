<?php

namespace Kiboko\Magento\V2\Endpoint;

class NegotiableQuoteNegotiableQuoteManagementV1CreatePost extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    /**
     * Create a B2B quote based on a regular Magento quote. If the B2B quote requires a shipping address (for negotiation or tax calculations), add it to the regular quote before you create a B2B quote.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1NegotiableQuoteRequestPostBody $requestBody 
     */
    public function __construct(?\Kiboko\Magento\V2\Model\V1NegotiableQuoteRequestPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/negotiableQuote/request';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Kiboko\Magento\V2\Model\V1NegotiableQuoteRequestPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\V2\Model\V1NegotiableQuoteRequestPostBody) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteNegotiableQuoteManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\NegotiableQuoteNegotiableQuoteManagementV1CreatePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}