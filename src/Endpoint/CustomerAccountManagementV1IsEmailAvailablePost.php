<?php

namespace Kiboko\Magento\Endpoint;

class CustomerAccountManagementV1IsEmailAvailablePost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Check if given email is associated with a customer account in given website.
     *
     * @param \Kiboko\Magento\Model\V1CustomersIsEmailAvailablePostBody $customerAccountManagementV1IsEmailAvailablePostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1CustomersIsEmailAvailablePostBody $customerAccountManagementV1IsEmailAvailablePostBody)
    {
        $this->body = $customerAccountManagementV1IsEmailAvailablePostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/customers/isEmailAvailable';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1IsEmailAvailablePostInternalServerErrorException
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
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\CustomerAccountManagementV1IsEmailAvailablePostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}