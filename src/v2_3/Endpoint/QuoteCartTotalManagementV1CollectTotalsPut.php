<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class QuoteCartTotalManagementV1CollectTotalsPut extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    /**
     * Set shipping/billing methods and additional data for cart and collect totals.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineCollectTotalsPutBody $quoteCartTotalManagementV1CollectTotalsPutBody
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1CartsMineCollectTotalsPutBody $quoteCartTotalManagementV1CollectTotalsPutBody)
    {
        $this->body = $quoteCartTotalManagementV1CollectTotalsPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return '/V1/carts/mine/collect-totals';
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
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartTotalManagementV1CollectTotalsPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\QuoteDataTotalsInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\QuoteCartTotalManagementV1CollectTotalsPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
