<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class TemandoShippingCollectionPointGuestCartCollectionPointManagementV1DeleteSearchRequestDelete extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return '/V1/guest-carts/{cartId}/collection-point/search-request';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1DeleteSearchRequestDeleteInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1DeleteSearchRequestDeleteInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
