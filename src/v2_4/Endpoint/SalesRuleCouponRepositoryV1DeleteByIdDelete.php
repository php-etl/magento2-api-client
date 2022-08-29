<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class SalesRuleCouponRepositoryV1DeleteByIdDelete extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return '/V1/coupons/{couponId}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_4\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_4\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
