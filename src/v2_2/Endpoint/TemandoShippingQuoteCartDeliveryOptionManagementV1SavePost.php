<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class TemandoShippingQuoteCartDeliveryOptionManagementV1SavePost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/carts/mine/delivery-option';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartDeliveryOptionManagementV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartDeliveryOptionManagementV1SavePostInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartDeliveryOptionManagementV1SavePostUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartDeliveryOptionManagementV1SavePostInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
