<?php

namespace Kiboko\Magento\Endpoint;

class GetV1InventoryGetsourcesassignedtostockorderedbypriorityStockId extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $stockId;
    /**
     * Get Sources assigned to Stock ordered by priority If Stock with given id doesn't exist then return an empty array
     *
     * @param int $stockId 
     */
    public function __construct(int $stockId)
    {
        $this->stockId = $stockId;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{stockId}'), array($this->stockId), '/V1/inventory/get-sources-assigned-to-stock-ordered-by-priority/{stockId}');
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
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetsourcesassignedtostockorderedbypriorityStockIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetsourcesassignedtostockorderedbypriorityStockIdBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetsourcesassignedtostockorderedbypriorityStockIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryApiDataSourceInterface[]|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\InventoryApiDataSourceInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\GetV1InventoryGetsourcesassignedtostockorderedbypriorityStockIdUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\GetV1InventoryGetsourcesassignedtostockorderedbypriorityStockIdBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\GetV1InventoryGetsourcesassignedtostockorderedbypriorityStockIdInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}