<?php

namespace Kiboko\Magento\V2\Endpoint;

class NegotiableQuoteCommentLocatorV1GetListForQuoteGet extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    protected $quoteId;
    /**
     * Returns comments for a specified negotiable quote.
     *
     * @param int $quoteId Negotiable Quote ID.
     */
    public function __construct(int $quoteId)
    {
        $this->quoteId = $quoteId;
    }
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{quoteId}'), array($this->quoteId), '/V1/negotiableQuote/{quoteId}/comments');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteCommentLocatorV1GetListForQuoteGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteCommentLocatorV1GetListForQuoteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\NegotiableQuoteDataCommentInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\NegotiableQuoteDataCommentInterface[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\NegotiableQuoteCommentLocatorV1GetListForQuoteGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\NegotiableQuoteCommentLocatorV1GetListForQuoteGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
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