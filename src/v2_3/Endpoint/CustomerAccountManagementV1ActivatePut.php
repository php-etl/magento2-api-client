<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CustomerAccountManagementV1ActivatePut extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $email;
    /**
     * Activate a customer account using a key that was sent in a confirmation email.
     *
     * @param string $email
     * @param \Kiboko\Magento\v2_3\Model\V1CustomersEmailActivatePutBody $customerAccountManagementV1ActivatePutBody
     */
    public function __construct(string $email, \Kiboko\Magento\v2_3\Model\V1CustomersEmailActivatePutBody $customerAccountManagementV1ActivatePutBody)
    {
        $this->email = $email;
        $this->body = $customerAccountManagementV1ActivatePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{email}'), array($this->email), '/V1/customers/{email}/activate');
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
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ActivatePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ActivatePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\CustomerDataCustomerInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ActivatePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ActivatePutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
