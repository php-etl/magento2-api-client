<?php

namespace Kiboko\Magento\Endpoint;

class CustomerAccountManagementV1CreateAccountPost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Create customer account. Perform necessary business operations like sending email.
     *
     * @param \Kiboko\Magento\Model\V1CustomersPostBody $customerAccountManagementV1CreateAccountPostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1CustomersPostBody $customerAccountManagementV1CreateAccountPostBody)
    {
        $this->body = $customerAccountManagementV1CreateAccountPostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/customers';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1CreateAccountPostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\CustomerDataCustomerInterface', 'json');
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\CustomerAccountManagementV1CreateAccountPostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}