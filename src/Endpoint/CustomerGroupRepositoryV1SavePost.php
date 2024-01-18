<?php

namespace Kiboko\Magento\Endpoint;

class CustomerGroupRepositoryV1SavePost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Save customer group.
     *
     * @param \Kiboko\Magento\Model\V1CustomerGroupsPostBody $customerGroupRepositoryV1SavePostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1CustomerGroupsPostBody $customerGroupRepositoryV1SavePostBody)
    {
        $this->body = $customerGroupRepositoryV1SavePostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/customerGroups';
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
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1SavePostInternalServerErrorException
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
            throw new \Kiboko\Magento\Exception\CustomerGroupRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CustomerGroupRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\CustomerGroupRepositoryV1SavePostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}