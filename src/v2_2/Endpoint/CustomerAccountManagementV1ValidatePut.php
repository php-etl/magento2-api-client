<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CustomerAccountManagementV1ValidatePut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    /**
     * Validate customer data.
     *
     * @param \Kiboko\Magento\v2_2\Model\V1CustomersValidatePutBody $customerAccountManagementV1ValidatePutBody
     */
    public function __construct(\Kiboko\Magento\v2_2\Model\V1CustomersValidatePutBody $customerAccountManagementV1ValidatePutBody)
    {
        $this->body = $customerAccountManagementV1ValidatePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return '/V1/customers/validate';
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
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ValidatePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ValidatePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CustomerDataValidationResultsInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CustomerDataValidationResultsInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ValidatePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ValidatePutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
