<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CheckoutGuestShippingInformationManagementV1SaveAddressInformationPost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     *
     *
     * @param string $cartId
     * @param \Kiboko\Magento\v2_2\Model\V1GuestCartsCartIdShippingInformationPostBody $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody
     */
    public function __construct(string $cartId, \Kiboko\Magento\v2_2\Model\V1GuestCartsCartIdShippingInformationPostBody $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/shipping-information');
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
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CheckoutDataPaymentDetailsInterface', 'json');
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
