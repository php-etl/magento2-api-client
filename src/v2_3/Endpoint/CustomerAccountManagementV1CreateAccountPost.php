<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CustomerAccountManagementV1CreateAccountPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    /**
     * Create customer account. Perform necessary business operations like sending email.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CustomersPostBody $customerAccountManagementV1CreateAccountPostBody
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1CustomersPostBody $customerAccountManagementV1CreateAccountPostBody)
    {
        $this->body = $customerAccountManagementV1CreateAccountPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/customers';
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
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1CreateAccountPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\CustomerDataCustomerInterface', 'json');
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1CreateAccountPostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}