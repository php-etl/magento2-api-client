<?php

namespace Kiboko\Magento\V2_2\Endpoint;

class CustomerAccountManagementV1IsEmailAvailablePost extends \Kiboko\Magento\V2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_2\Runtime\Client\EndpointTrait;
    /**
     * Check if given email is associated with a customer account in given website.
     *
     * @param null|\Kiboko\Magento\V2_2\Model\V1CustomersIsEmailAvailablePostBody $requestBody
     */
    public function __construct(?\Kiboko\Magento\V2_2\Model\V1CustomersIsEmailAvailablePostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/customers/isEmailAvailable';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Kiboko\Magento\V2_2\Model\V1CustomersIsEmailAvailablePostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\V2_2\Model\V1CustomersIsEmailAvailablePostBody) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2_2\Exception\CustomerAccountManagementV1IsEmailAvailablePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_2\Exception\CustomerAccountManagementV1IsEmailAvailablePostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_2\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_2\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
