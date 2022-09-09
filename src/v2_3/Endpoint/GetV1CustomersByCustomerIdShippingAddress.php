<?php

namespace Kiboko\Magento\V2_3\Endpoint;

class GetV1CustomersByCustomerIdShippingAddress extends \Kiboko\Magento\V2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_3\Runtime\Client\EndpointTrait;
    protected $customerId;
    /**
     * Retrieve default shipping address for the given customerId.
     *
     * @param int $customerId
     */
    public function __construct(int $customerId)
    {
        $this->customerId = $customerId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{customerId}'), array($this->customerId), '/V1/customers/{customerId}/shippingAddress');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2_3\Exception\GetV1CustomersByCustomerIdShippingAddressBadRequestException
     * @throws \Kiboko\Magento\V2_3\Exception\GetV1CustomersByCustomerIdShippingAddressUnauthorizedException
     * @throws \Kiboko\Magento\V2_3\Exception\GetV1CustomersByCustomerIdShippingAddressInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2_3\Model\CustomerDataAddressInterface|\Kiboko\Magento\V2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_3\\Model\\CustomerDataAddressInterface', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_3\Exception\GetV1CustomersByCustomerIdShippingAddressBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_3\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_3\Exception\GetV1CustomersByCustomerIdShippingAddressUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_3\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_3\Exception\GetV1CustomersByCustomerIdShippingAddressInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_3\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_3\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}