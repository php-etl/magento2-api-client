<?php

namespace Kiboko\Magento\Endpoint;

class CustomerGroupManagementV1GetDefaultGroupGetWithStoreId extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $storeId;
    /**
     * Get default customer group.
     *
     * @param int $storeId 
     */
    public function __construct(int $storeId)
    {
        $this->storeId = $storeId;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{storeId}'), array($this->storeId), '/V1/customerGroups/default/{storeId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CustomerGroupManagementV1GetDefaultGroupGetWithStoreIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerGroupManagementV1GetDefaultGroupGetWithStoreIdBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerGroupManagementV1GetDefaultGroupGetWithStoreIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataGroupInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\CustomerDataGroupInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\CustomerGroupManagementV1GetDefaultGroupGetWithStoreIdUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CustomerGroupManagementV1GetDefaultGroupGetWithStoreIdBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\CustomerGroupManagementV1GetDefaultGroupGetWithStoreIdInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}