<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class SalesCreditmemoCommentRepositoryV1SavePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     * Performs persist operations for a specified entity.
     *
     * @param string $id
     * @param \Kiboko\Magento\v2_3\Model\V1CreditmemoIdCommentsPostBody $salesCreditmemoCommentRepositoryV1SavePostBody
     */
    public function __construct(string $id, \Kiboko\Magento\v2_3\Model\V1CreditmemoIdCommentsPostBody $salesCreditmemoCommentRepositoryV1SavePostBody)
    {
        $this->id = $id;
        $this->body = $salesCreditmemoCommentRepositoryV1SavePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/V1/creditmemo/{id}/comments');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\SalesCreditmemoCommentRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesCreditmemoCommentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataCreditmemoCommentInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\SalesDataCreditmemoCommentInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\SalesCreditmemoCommentRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\SalesCreditmemoCommentRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
