<?php

namespace Kiboko\Magento\Endpoint;

class InventoryApiSourceRepositoryV1SavePut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $sourceCode;
    /**
     * Save Source data
     *
     * @param string $sourceCode 
     * @param \Kiboko\Magento\Model\V1InventorySourcesSourceCodePutBody $inventoryApiSourceRepositoryV1SavePutBody 
     */
    public function __construct(string $sourceCode, \Kiboko\Magento\Model\V1InventorySourcesSourceCodePutBody $inventoryApiSourceRepositoryV1SavePutBody)
    {
        $this->sourceCode = $sourceCode;
        $this->body = $inventoryApiSourceRepositoryV1SavePutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{sourceCode}'), array($this->sourceCode), '/V1/inventory/sources/{sourceCode}');
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
     * @throws \Kiboko\Magento\Exception\InventoryApiSourceRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\InventoryApiSourceRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\InventoryApiSourceRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\InventoryApiSourceRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}