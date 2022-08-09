<?php

namespace Kiboko\Magento\V2\Endpoint;

class SalesShipmentManagementV1GetCommentsListGet extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Lists comments for a specified shipment.
     *
     * @param int $id The shipment ID.
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/V1/shipment/{id}/comments');
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
     * @throws \Kiboko\Magento\V2\Exception\SalesShipmentManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataShipmentCommentSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\SalesDataShipmentCommentSearchResultInterface', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\SalesShipmentManagementV1GetCommentsListGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}