<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    protected $cartId;
    /**
     * Set payment information for a specified cart.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdSetPaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody 
     */
    public function __construct(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdSetPaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/set-payment-information');
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
     * @throws \Kiboko\Magento\v2_3\Exception\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}