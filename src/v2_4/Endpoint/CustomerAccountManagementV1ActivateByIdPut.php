<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class CustomerAccountManagementV1ActivateByIdPut extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    /**
     * Activate a customer account using a key that was sent in a confirmation email.
     *
     * @param \Kiboko\Magento\v2_4\Model\V1CustomersMeActivatePutBody $customerAccountManagementV1ActivateByIdPutBody
     */
    public function __construct(\Kiboko\Magento\v2_4\Model\V1CustomersMeActivatePutBody $customerAccountManagementV1ActivateByIdPutBody)
    {
        $this->body = $customerAccountManagementV1ActivateByIdPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return '/V1/customers/me/activate';
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
     * @throws \Kiboko\Magento\v2_4\Exception\CustomerAccountManagementV1ActivateByIdPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_4\Exception\CustomerAccountManagementV1ActivateByIdPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\CustomerDataCustomerInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CustomerAccountManagementV1ActivateByIdPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CustomerAccountManagementV1ActivateByIdPutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
