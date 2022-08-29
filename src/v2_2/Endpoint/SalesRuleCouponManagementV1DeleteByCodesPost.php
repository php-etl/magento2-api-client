<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class SalesRuleCouponManagementV1DeleteByCodesPost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    /**
     * Delete coupon by coupon codes.
     *
     * @param \Kiboko\Magento\v2_2\Model\V1CouponsDeleteByCodesPostBody $salesRuleCouponManagementV1DeleteByCodesPostBody
     */
    public function __construct(\Kiboko\Magento\v2_2\Model\V1CouponsDeleteByCodesPostBody $salesRuleCouponManagementV1DeleteByCodesPostBody)
    {
        $this->body = $salesRuleCouponManagementV1DeleteByCodesPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/coupons/deleteByCodes';
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
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponManagementV1DeleteByCodesPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponManagementV1DeleteByCodesPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponManagementV1DeleteByCodesPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\SalesRuleDataCouponMassDeleteResultInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\SalesRuleDataCouponMassDeleteResultInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\SalesRuleCouponManagementV1DeleteByCodesPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\SalesRuleCouponManagementV1DeleteByCodesPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\SalesRuleCouponManagementV1DeleteByCodesPostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
