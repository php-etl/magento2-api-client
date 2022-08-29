<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class NegotiableQuoteShippingInformationManagementV1SaveAddressInformationPost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     *
     *
     * @param int $cartId
     * @param \Kiboko\Magento\v2_2\Model\V1NegotiableCartsCartIdShippingInformationPostBody $negotiableQuoteShippingInformationManagementV1SaveAddressInformationPostBody
     */
    public function __construct(int $cartId, \Kiboko\Magento\v2_2\Model\V1NegotiableCartsCartIdShippingInformationPostBody $negotiableQuoteShippingInformationManagementV1SaveAddressInformationPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $negotiableQuoteShippingInformationManagementV1SaveAddressInformationPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/negotiable-carts/{cartId}/shipping-information');
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
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteShippingInformationManagementV1SaveAddressInformationPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CheckoutDataPaymentDetailsInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\NegotiableQuoteShippingInformationManagementV1SaveAddressInformationPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
