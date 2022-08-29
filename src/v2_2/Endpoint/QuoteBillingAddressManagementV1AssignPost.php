<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class QuoteBillingAddressManagementV1AssignPost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Assigns a specified billing address to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_2\Model\V1CartsCartIdBillingAddressPostBody $quoteBillingAddressManagementV1AssignPostBody
     */
    public function __construct(int $cartId, \Kiboko\Magento\v2_2\Model\V1CartsCartIdBillingAddressPostBody $quoteBillingAddressManagementV1AssignPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $quoteBillingAddressManagementV1AssignPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/{cartId}/billing-address');
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
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteBillingAddressManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteBillingAddressManagementV1AssignPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\QuoteBillingAddressManagementV1AssignPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\QuoteBillingAddressManagementV1AssignPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}