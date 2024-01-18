<?php

namespace Kiboko\Magento\Endpoint;

class CustomerAccountManagementV1ChangePasswordByIdPut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Change customer password.
     *
     * @param \Kiboko\Magento\Model\V1CustomersMePasswordPutBody $customerAccountManagementV1ChangePasswordByIdPutBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1CustomersMePasswordPutBody $customerAccountManagementV1ChangePasswordByIdPutBody)
    {
        $this->body = $customerAccountManagementV1ChangePasswordByIdPutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/V1/customers/me/password';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1ChangePasswordByIdPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1ChangePasswordByIdPutInternalServerErrorException
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
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\CustomerAccountManagementV1ChangePasswordByIdPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\CustomerAccountManagementV1ChangePasswordByIdPutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}