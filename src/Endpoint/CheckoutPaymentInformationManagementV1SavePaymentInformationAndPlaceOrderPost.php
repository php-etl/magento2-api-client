<?php

namespace Kiboko\Magento\Endpoint;

class CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Set payment information and place order for a specified cart.
     *
     * @param \Kiboko\Magento\Model\V1CartsMinePaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1CartsMinePaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody)
    {
        $this->body = $checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/carts/mine/payment-information';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}