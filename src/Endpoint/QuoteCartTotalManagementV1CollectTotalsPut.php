<?php

namespace Kiboko\Magento\Endpoint;

class QuoteCartTotalManagementV1CollectTotalsPut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Set shipping/billing methods and additional data for cart and collect totals.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineCollectTotalsPutBody $quoteCartTotalManagementV1CollectTotalsPutBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1CartsMineCollectTotalsPutBody $quoteCartTotalManagementV1CollectTotalsPutBody)
    {
        $this->body = $quoteCartTotalManagementV1CollectTotalsPutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/V1/carts/mine/collect-totals';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\QuoteCartTotalManagementV1CollectTotalsPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\QuoteDataTotalsInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\QuoteCartTotalManagementV1CollectTotalsPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}