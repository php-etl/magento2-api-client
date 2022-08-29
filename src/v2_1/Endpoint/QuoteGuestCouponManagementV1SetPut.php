<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class QuoteGuestCouponManagementV1SetPut extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    protected $cartId;
    protected $couponCode;
    /**
     * Add a coupon by code to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     */
    public function __construct(string $cartId, string $couponCode)
    {
        $this->cartId = $cartId;
        $this->couponCode = $couponCode;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}', '{couponCode}'), array($this->cartId, $this->couponCode), '/V1/guest-carts/{cartId}/coupons/{couponCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestCouponManagementV1SetPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\QuoteGuestCouponManagementV1SetPutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
