<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Proxy handler for guest place order
     *
     * @param string $cartId
     * @param \Kiboko\Magento\v2_3\Model\V1WorldpayGuestCartsCartIdPaymentInformationPostBody $worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBody
     */
    public function __construct(string $cartId, \Kiboko\Magento\v2_3\Model\V1WorldpayGuestCartsCartIdPaymentInformationPostBody $worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/worldpay-guest-carts/{cartId}/payment-information');
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
     * @throws \Kiboko\Magento\v2_3\Exception\WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
