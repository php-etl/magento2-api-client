<?php

namespace Kiboko\Magento\Endpoint;

class CheckoutShippingInformationManagementV1SaveAddressInformationPostWithCartId extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $cartId;
    /**
     * 
     *
     * @param int $cartId 
     * @param \Kiboko\Magento\Model\V1CartsCartIdShippingInformationPostBody $checkoutShippingInformationManagementV1SaveAddressInformationPostBody 
     */
    public function __construct(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdShippingInformationPostBody $checkoutShippingInformationManagementV1SaveAddressInformationPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $checkoutShippingInformationManagementV1SaveAddressInformationPostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/{cartId}/shipping-information');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CheckoutShippingInformationManagementV1SaveAddressInformationPostWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\CheckoutDataPaymentDetailsInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\CheckoutShippingInformationManagementV1SaveAddressInformationPostWithCartIdUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}