<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/carts/mine/checkout-fields';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostUnauthorizedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostUnauthorizedException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
