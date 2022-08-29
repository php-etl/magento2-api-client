<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPut extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $quoteId;
    /**
     * Updates the shipping method on a negotiable quote.
     *
     * @param int $quoteId Negotiable Quote id
     * @param \Kiboko\Magento\v2_4\Model\V1NegotiableQuoteQuoteIdShippingMethodPutBody $negotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutBody
     */
    public function __construct(int $quoteId, \Kiboko\Magento\v2_4\Model\V1NegotiableQuoteQuoteIdShippingMethodPutBody $negotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutBody)
    {
        $this->quoteId = $quoteId;
        $this->body = $negotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{quoteId}'), array($this->quoteId), '/V1/negotiableQuote/{quoteId}/shippingMethod');
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
     * @throws \Kiboko\Magento\v2_4\Exception\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_4\Exception\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
