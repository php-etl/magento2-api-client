<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class SalesRuleCouponManagementV1DeleteByIdsPost extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    /**
     * Delete coupon by coupon ids.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CouponsDeleteByIdsPostBody $$body 
     */
    public function __construct(\Kiboko\Magento\v2_1\Model\V1CouponsDeleteByIdsPostBody $$body)
    {
        $this->body = $$body;
    }
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/coupons/deleteByIds';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponManagementV1DeleteByIdsPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponManagementV1DeleteByIdsPostBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponManagementV1DeleteByIdsPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesRuleDataCouponMassDeleteResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\SalesRuleDataCouponMassDeleteResultInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\SalesRuleCouponManagementV1DeleteByIdsPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\SalesRuleCouponManagementV1DeleteByIdsPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\SalesRuleCouponManagementV1DeleteByIdsPostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}