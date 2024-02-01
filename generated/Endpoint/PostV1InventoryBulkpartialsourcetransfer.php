<?php

namespace Kiboko\Magento\Endpoint;

class PostV1InventoryBulkpartialsourcetransfer extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Run bulk partial inventory transfer for specified items.
     *
     * @param \Kiboko\Magento\Model\V1InventoryBulkPartialSourceTransferPostBody $postV1InventoryBulkpartialsourcetransferBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1InventoryBulkPartialSourceTransferPostBody $postV1InventoryBulkpartialsourcetransferBody)
    {
        $this->body = $postV1InventoryBulkpartialsourcetransferBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/inventory/bulk-partial-source-transfer';
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
     * @throws \Kiboko\Magento\Exception\PostV1InventoryBulkpartialsourcetransferUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1InventoryBulkpartialsourcetransferBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\PostV1InventoryBulkpartialsourcetransferUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\PostV1InventoryBulkpartialsourcetransferBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}