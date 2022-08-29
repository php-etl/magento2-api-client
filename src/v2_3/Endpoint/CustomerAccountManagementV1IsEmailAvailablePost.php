<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CustomerAccountManagementV1IsEmailAvailablePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    /**
     * Check if given email is associated with a customer account in given website.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CustomersIsEmailAvailablePostBody $customerAccountManagementV1IsEmailAvailablePostBody 
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1CustomersIsEmailAvailablePostBody $customerAccountManagementV1IsEmailAvailablePostBody)
    {
        $this->body = $customerAccountManagementV1IsEmailAvailablePostBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
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
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1IsEmailAvailablePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1IsEmailAvailablePostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}