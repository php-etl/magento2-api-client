<?php

namespace Kiboko\Magento\Endpoint;

class InventorySalesApiStockResolverV1ExecuteGet extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $type;
    protected $code;
    /**
     * Resolve Stock by Sales Channel type and code
     *
     * @param string $type 
     * @param string $code 
     */
    public function __construct(string $type, string $code)
    {
        $this->type = $type;
        $this->code = $code;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{type}', '{code}'), array($this->type, $this->code), '/V1/inventory/stock-resolver/{type}/{code}');
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
     * @throws \Kiboko\Magento\Exception\InventorySalesApiStockResolverV1ExecuteGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\InventorySalesApiStockResolverV1ExecuteGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryApiDataStockInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\InventoryApiDataStockInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\InventorySalesApiStockResolverV1ExecuteGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\InventorySalesApiStockResolverV1ExecuteGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}