<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class SalesRuleCouponRepositoryV1SavePut extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    protected $couponId;
    /**
     * Save a coupon.
     *
     * @param string $couponId 
     * @param \Kiboko\Magento\v2_1\Model\V1CouponsCouponIdPutBody $$body 
     */
    public function __construct(string $couponId, \Kiboko\Magento\v2_1\Model\V1CouponsCouponIdPutBody $$body)
    {
        $this->couponId = $couponId;
        $this->body = $$body;
    }
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{couponId}'), array($this->couponId), '/V1/coupons/{couponId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\SalesRuleDataCouponInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1SavePutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}