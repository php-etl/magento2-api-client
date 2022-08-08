<?php

namespace Kiboko\Magento\V2\Endpoint;

class CheckoutGuestTotalsInformationManagementV1CalculatePost extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param string $cartId
     * @param \Kiboko\Magento\V2\Model\V1GuestCartsCartIdTotalsInformationPostBody $checkoutGuestTotalsInformationManagementV1CalculatePostBody
     */
    public function __construct(string $cartId, \Kiboko\Magento\V2\Model\V1GuestCartsCartIdTotalsInformationPostBody $checkoutGuestTotalsInformationManagementV1CalculatePostBody)
    {
        $this->cartId = $cartId;
        $this->body = $checkoutGuestTotalsInformationManagementV1CalculatePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/totals-information');
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
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataTotalsInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\QuoteDataTotalsInterface', 'json');
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
