<?php

namespace Kiboko\Magento\Endpoint;

class CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $cartId;
    /**
     * Set payment information for a specified cart.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdSetPaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody 
     */
    public function __construct(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdSetPaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/set-payment-information');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}