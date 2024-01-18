<?php

namespace Kiboko\Magento\Endpoint;

class QuoteShippingMethodManagementV1EstimateByAddressIdPost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Estimate shipping
     *
     * @param \Kiboko\Magento\Model\V1CartsMineEstimateShippingMethodsByAddressIdPostBody $quoteShippingMethodManagementV1EstimateByAddressIdPostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1CartsMineEstimateShippingMethodsByAddressIdPostBody $quoteShippingMethodManagementV1EstimateByAddressIdPostBody)
    {
        $this->body = $quoteShippingMethodManagementV1EstimateByAddressIdPostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/carts/mine/estimate-shipping-methods-by-address-id';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\QuoteShippingMethodManagementV1EstimateByAddressIdPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\QuoteDataShippingMethodInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\QuoteShippingMethodManagementV1EstimateByAddressIdPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}