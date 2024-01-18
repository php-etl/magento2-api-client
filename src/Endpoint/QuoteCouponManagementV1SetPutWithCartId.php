<?php

namespace Kiboko\Magento\Endpoint;

class QuoteCouponManagementV1SetPutWithCartId extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $cartId;
    protected $couponCode;
    /**
     * Adds a coupon by code to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     */
    public function __construct(int $cartId, string $couponCode)
    {
        $this->cartId = $cartId;
        $this->couponCode = $couponCode;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{cartId}', '{couponCode}'), array($this->cartId, $this->couponCode), '/V1/carts/{cartId}/coupons/{couponCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\QuoteCouponManagementV1SetPutWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCouponManagementV1SetPutWithCartIdBadRequestException
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
            throw new \Kiboko\Magento\Exception\QuoteCouponManagementV1SetPutWithCartIdUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\QuoteCouponManagementV1SetPutWithCartIdBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}