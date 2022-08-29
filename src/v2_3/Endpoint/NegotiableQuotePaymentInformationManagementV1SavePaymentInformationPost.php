<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Set payment information for a specified cart.
     *
     * @param int $cartId
     * @param \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdSetPaymentInformationPostBody $negotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBody
     */
    public function __construct(int $cartId, \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdSetPaymentInformationPostBody $negotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $negotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/negotiable-carts/{cartId}/set-payment-information');
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
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
