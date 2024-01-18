<?php

namespace Kiboko\Magento\Endpoint;

class CheckoutTotalsInformationManagementV1CalculatePost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineTotalsInformationPostBody $checkoutTotalsInformationManagementV1CalculatePostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1CartsMineTotalsInformationPostBody $checkoutTotalsInformationManagementV1CalculatePostBody)
    {
        $this->body = $checkoutTotalsInformationManagementV1CalculatePostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/carts/mine/totals-information';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CheckoutTotalsInformationManagementV1CalculatePostUnauthorizedException
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
            throw new \Kiboko\Magento\Exception\CheckoutTotalsInformationManagementV1CalculatePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}