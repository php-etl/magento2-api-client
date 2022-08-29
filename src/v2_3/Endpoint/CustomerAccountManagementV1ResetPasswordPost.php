<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CustomerAccountManagementV1ResetPasswordPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    /**
     * Reset customer password.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CustomersResetPasswordPostBody $customerAccountManagementV1ResetPasswordPostBody
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1CustomersResetPasswordPostBody $customerAccountManagementV1ResetPasswordPostBody)
    {
        $this->body = $customerAccountManagementV1ResetPasswordPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/customers/resetPassword';
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
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ResetPasswordPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ResetPasswordPostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}