<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class AsynchronousOperationsBulkStatusV1GetBulkShortStatusGet extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    protected $bulkUuid;
    /**
     * Get Bulk summary data with list of operations items short data.
     *
     * @param string $bulkUuid 
     */
    public function __construct(string $bulkUuid)
    {
        $this->bulkUuid = $bulkUuid;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{bulkUuid}'), array($this->bulkUuid), '/V1/bulk/{bulkUuid}/status');
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
     * @throws \Kiboko\Magento\v2_3\Exception\AsynchronousOperationsBulkStatusV1GetBulkShortStatusGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\AsynchronousOperationsBulkStatusV1GetBulkShortStatusGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\AsynchronousOperationsDataBulkOperationsStatusInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\AsynchronousOperationsDataBulkOperationsStatusInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\AsynchronousOperationsBulkStatusV1GetBulkShortStatusGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\AsynchronousOperationsBulkStatusV1GetBulkShortStatusGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}