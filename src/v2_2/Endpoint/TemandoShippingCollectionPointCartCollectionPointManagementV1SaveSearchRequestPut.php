<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return '/V1/carts/mine/collection-point/search-request';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
