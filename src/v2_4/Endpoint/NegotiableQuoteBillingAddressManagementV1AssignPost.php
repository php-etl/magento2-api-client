<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class NegotiableQuoteBillingAddressManagementV1AssignPost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Assigns a specified billing address to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_4\Model\V1NegotiableCartsCartIdBillingAddressPostBody $negotiableQuoteBillingAddressManagementV1AssignPostBody
     */
    public function __construct(int $cartId, \Kiboko\Magento\v2_4\Model\V1NegotiableCartsCartIdBillingAddressPostBody $negotiableQuoteBillingAddressManagementV1AssignPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $negotiableQuoteBillingAddressManagementV1AssignPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/negotiable-carts/{cartId}/billing-address');
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
     * @throws \Kiboko\Magento\v2_4\Exception\NegotiableQuoteBillingAddressManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\NegotiableQuoteBillingAddressManagementV1AssignPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\NegotiableQuoteBillingAddressManagementV1AssignPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\NegotiableQuoteBillingAddressManagementV1AssignPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
