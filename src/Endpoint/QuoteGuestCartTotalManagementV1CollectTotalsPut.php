<?php

namespace Kiboko\Magento\V2\Endpoint;

class QuoteGuestCartTotalManagementV1CollectTotalsPut extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Set shipping/billing methods and additional data for cart and collect totals for guest.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\V2\Model\V1GuestCartsCartIdCollectTotalsPutBody $quoteGuestCartTotalManagementV1CollectTotalsPutBody
     */
    public function __construct(string $cartId, \Kiboko\Magento\V2\Model\V1GuestCartsCartIdCollectTotalsPutBody $quoteGuestCartTotalManagementV1CollectTotalsPutBody)
    {
        $this->cartId = $cartId;
        $this->body = $quoteGuestCartTotalManagementV1CollectTotalsPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/collect-totals');
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
