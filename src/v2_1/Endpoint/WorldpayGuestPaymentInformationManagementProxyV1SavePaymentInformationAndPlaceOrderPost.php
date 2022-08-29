<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/worldpay-guest-carts/{cartId}/payment-information';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBadRequestException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
