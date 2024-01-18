<?php

namespace Kiboko\Magento\Endpoint;

class CustomerCustomerRepositoryV1SavePut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Create or update a customer.
     *
     * @param \Kiboko\Magento\Model\V1CustomersMePutBody $customerCustomerRepositoryV1SavePutBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1CustomersMePutBody $customerCustomerRepositoryV1SavePutBody)
    {
        $this->body = $customerCustomerRepositoryV1SavePutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/V1/customers/me';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1SavePutInternalServerErrorException
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
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1SavePutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}