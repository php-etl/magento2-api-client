<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    /**
     *
     *
     * @param \Kiboko\Magento\v2_2\Model\V1CartsMineCheckoutFieldsPostBody $temandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBody
     */
    public function __construct(\Kiboko\Magento\v2_2\Model\V1CartsMineCheckoutFieldsPostBody $temandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBody)
    {
        $this->body = $temandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBody;
    }
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
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
