<?php

namespace Kiboko\Magento\V2_1\Endpoint;

class SalesCreditmemoManagementV1GetCommentsListGet extends \Kiboko\Magento\V2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_1\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     * Lists comments for a specified credit memo.
     *
     * @param int $id The credit memo ID.
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/V1/creditmemo/{id}/comments');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2_1\Exception\SalesCreditmemoManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2_1\Model\SalesDataCreditmemoCommentSearchResultInterface|\Kiboko\Magento\V2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\SalesDataCreditmemoCommentSearchResultInterface', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_1\Exception\SalesCreditmemoManagementV1GetCommentsListGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
