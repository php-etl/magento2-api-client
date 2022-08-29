<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class CustomerAccountManagementV1ValidateResetPasswordLinkTokenGet extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    protected $customerId;
    protected $resetPasswordLinkToken;
    /**
     * Check if password reset token is valid.
     *
     * @param int $customerId
     * @param string $resetPasswordLinkToken
     */
    public function __construct(int $customerId, string $resetPasswordLinkToken)
    {
        $this->customerId = $customerId;
        $this->resetPasswordLinkToken = $resetPasswordLinkToken;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{customerId}', '{resetPasswordLinkToken}'), array($this->customerId, $this->resetPasswordLinkToken), '/V1/customers/{customerId}/password/resetLinkToken/{resetPasswordLinkToken}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
