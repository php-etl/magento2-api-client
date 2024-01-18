<?php

namespace Kiboko\Magento\Endpoint;

class CheckoutPaymentInformationManagementV1SavePaymentInformationPost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Set payment information for a specified cart.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineSetPaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationPostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1CartsMineSetPaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationPostBody)
    {
        $this->body = $checkoutPaymentInformationManagementV1SavePaymentInformationPostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/carts/mine/set-payment-information';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationPostBadRequestException
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
            throw new \Kiboko\Magento\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}