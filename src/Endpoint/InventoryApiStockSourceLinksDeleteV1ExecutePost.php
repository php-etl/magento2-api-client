<?php

namespace Kiboko\Magento\Endpoint;

class InventoryApiStockSourceLinksDeleteV1ExecutePost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Remove StockSourceLink list list
     *
     * @param \Kiboko\Magento\Model\V1InventoryStockSourceLinksDeletePostBody $inventoryApiStockSourceLinksDeleteV1ExecutePostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1InventoryStockSourceLinksDeletePostBody $inventoryApiStockSourceLinksDeleteV1ExecutePostBody)
    {
        $this->body = $inventoryApiStockSourceLinksDeleteV1ExecutePostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/inventory/stock-source-links-delete';
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
     * @throws \Kiboko\Magento\Exception\InventoryApiStockSourceLinksDeleteV1ExecutePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\InventoryApiStockSourceLinksDeleteV1ExecutePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\InventoryApiStockSourceLinksDeleteV1ExecutePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\InventoryApiStockSourceLinksDeleteV1ExecutePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}