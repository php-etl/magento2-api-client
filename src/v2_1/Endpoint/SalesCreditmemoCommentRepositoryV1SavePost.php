<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class SalesCreditmemoCommentRepositoryV1SavePost extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Performs persist operations for a specified entity.
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1CreditmemoIdCommentsPostBody $$body 
     */
    public function __construct(string $id, \Kiboko\Magento\v2_1\Model\V1CreditmemoIdCommentsPostBody $$body)
    {
        $this->id = $id;
        $this->body = $$body;
    }
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/V1/creditmemo/{id}/comments');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\SalesCreditmemoCommentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataCreditmemoCommentInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\SalesDataCreditmemoCommentInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\SalesCreditmemoCommentRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}