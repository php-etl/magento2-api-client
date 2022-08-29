<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class NegotiableQuoteNegotiableCartRepositoryV1SavePut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $quoteId;
    /**
     * Save quote
     *
     * @param string $quoteId
     * @param \Kiboko\Magento\v2_2\Model\V1NegotiableQuoteQuoteIdPutBody $negotiableQuoteNegotiableCartRepositoryV1SavePutBody
     */
    public function __construct(string $quoteId, \Kiboko\Magento\v2_2\Model\V1NegotiableQuoteQuoteIdPutBody $negotiableQuoteNegotiableCartRepositoryV1SavePutBody)
    {
        $this->quoteId = $quoteId;
        $this->body = $negotiableQuoteNegotiableCartRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{quoteId}'), array($this->quoteId), '/V1/negotiableQuote/{quoteId}');
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
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteNegotiableCartRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\NegotiableQuoteNegotiableCartRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
