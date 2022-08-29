<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class SalesRuleCouponManagementV1DeleteByCodesPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
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
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponManagementV1DeleteByCodesPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponManagementV1DeleteByCodesPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponManagementV1DeleteByCodesPostInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\SalesRuleCouponManagementV1DeleteByCodesPostBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\SalesRuleCouponManagementV1DeleteByCodesPostUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\SalesRuleCouponManagementV1DeleteByCodesPostInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
