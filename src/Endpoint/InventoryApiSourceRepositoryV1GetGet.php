<?php

namespace Kiboko\Magento\Endpoint;

class InventoryApiSourceRepositoryV1GetGet extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $sourceCode;
    /**
     * Get Source data by given code. If you want to create plugin on get method, also you need to create separate plugin on getList method, because entity loading way is different for these methods
     *
     * @param string $sourceCode 
     */
    public function __construct(string $sourceCode)
    {
        $this->sourceCode = $sourceCode;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{sourceCode}'), array($this->sourceCode), '/V1/inventory/sources/{sourceCode}');
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
     * @throws \Kiboko\Magento\Exception\InventoryApiSourceRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\InventoryApiSourceRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryApiDataSourceInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\InventoryApiDataSourceInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\InventoryApiSourceRepositoryV1GetGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\InventoryApiSourceRepositoryV1GetGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}