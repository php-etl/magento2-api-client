<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Set payment information and place order for a specified cart.
     *
     * @param int $cartId
     * @param \Kiboko\Magento\v2_4\Model\V1NegotiableCartsCartIdPaymentInformationPostBody $negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody
     */
    public function __construct(int $cartId, \Kiboko\Magento\v2_4\Model\V1NegotiableCartsCartIdPaymentInformationPostBody $negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/negotiable-carts/{cartId}/payment-information');
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
     * @throws \Kiboko\Magento\v2_4\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
