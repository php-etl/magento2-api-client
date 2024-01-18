<?php

namespace Kiboko\Magento\Endpoint;

class SalesOrderAddressRepositoryV1SavePut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $parent_id;
    /**
     * Performs persist operations for a specified order address.
     *
     * @param string $parentId 
     * @param \Kiboko\Magento\Model\V1OrdersParentIdPutBody $salesOrderAddressRepositoryV1SavePutBody 
     */
    public function __construct(string $parentId, \Kiboko\Magento\Model\V1OrdersParentIdPutBody $salesOrderAddressRepositoryV1SavePutBody)
    {
        $this->parent_id = $parentId;
        $this->body = $salesOrderAddressRepositoryV1SavePutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{parent_id}'), array($this->parent_id), '/V1/orders/{parent_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\SalesOrderAddressRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderAddressInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\SalesDataOrderAddressInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\SalesOrderAddressRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}