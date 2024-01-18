<?php

namespace Kiboko\Magento\Endpoint;

class CheckoutGuestShippingInformationManagementV1SaveAddressInformationPost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $cartId;
    /**
     * 
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdShippingInformationPostBody $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody 
     */
    public function __construct(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdShippingInformationPostBody $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/shipping-information');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
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
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}