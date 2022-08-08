<?php

namespace Kiboko\Magento\V2\Endpoint;

class TemandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPost extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     *
     *
     * @param string $cartId
     * @param \Kiboko\Magento\V2\Model\V1GuestCartsCartIdCheckoutFieldsPostBody $temandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBody
     */
    public function __construct(string $cartId, \Kiboko\Magento\V2\Model\V1GuestCartsCartIdCheckoutFieldsPostBody $temandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $temandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/checkout-fields');
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
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (400 === $status) {
            throw new \Kiboko\Magento\V2\Exception\TemandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
