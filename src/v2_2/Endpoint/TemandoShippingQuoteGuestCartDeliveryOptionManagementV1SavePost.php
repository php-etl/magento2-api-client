<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class TemandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Handle selected delivery option.
     *
     * @param string $cartId The shopping cart ID.
     * @param \Kiboko\Magento\v2_2\Model\V1GuestCartsCartIdDeliveryOptionPostBody $temandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePostBody
     */
    public function __construct(string $cartId, \Kiboko\Magento\v2_2\Model\V1GuestCartsCartIdDeliveryOptionPostBody $temandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePostBody)
    {
        $this->cartId = $cartId;
        $this->body = $temandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/delivery-option');
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
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}