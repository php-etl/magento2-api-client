<?php

namespace Kiboko\Magento\Endpoint;

class GetV1CustomersCustomerIdPasswordResetLinkTokenResetPasswordLinkToken extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $customerId;
    protected $resetPasswordLinkToken;
    /**
     * Check if password reset token is valid.
     *
     * @param int $customerId If null is given then a customer will be matched by the RP token.
     * @param string $resetPasswordLinkToken 
     */
    public function __construct(int $customerId, string $resetPasswordLinkToken)
    {
        $this->customerId = $customerId;
        $this->resetPasswordLinkToken = $resetPasswordLinkToken;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{customerId}', '{resetPasswordLinkToken}'), array($this->customerId, $this->resetPasswordLinkToken), '/V1/customers/{customerId}/password/resetLinkToken/{resetPasswordLinkToken}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdPasswordResetLinkTokenResetPasswordLinkTokenBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdPasswordResetLinkTokenResetPasswordLinkTokenInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\GetV1CustomersCustomerIdPasswordResetLinkTokenResetPasswordLinkTokenBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\GetV1CustomersCustomerIdPasswordResetLinkTokenResetPasswordLinkTokenInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}