<?php

namespace Kiboko\Magento\Endpoint;

class InventorySourceSelectionApiSourceSelectionServiceV1ExecutePost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \Kiboko\Magento\Model\V1InventorySourceSelectionAlgorithmResultPostBody $inventorySourceSelectionApiSourceSelectionServiceV1ExecutePostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1InventorySourceSelectionAlgorithmResultPostBody $inventorySourceSelectionApiSourceSelectionServiceV1ExecutePostBody)
    {
        $this->body = $inventorySourceSelectionApiSourceSelectionServiceV1ExecutePostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/inventory/source-selection-algorithm-result';
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
     * @throws \Kiboko\Magento\Exception\InventorySourceSelectionApiSourceSelectionServiceV1ExecutePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventorySourceSelectionApiDataSourceSelectionResultInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\InventorySourceSelectionApiDataSourceSelectionResultInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\InventorySourceSelectionApiSourceSelectionServiceV1ExecutePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}