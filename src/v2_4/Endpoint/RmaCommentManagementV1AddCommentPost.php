<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class RmaCommentManagementV1AddCommentPost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/returns/{id}/comments';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_4\Exception\RmaCommentManagementV1AddCommentPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_4\Exception\RmaCommentManagementV1AddCommentPostInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\RmaCommentManagementV1AddCommentPostUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\RmaCommentManagementV1AddCommentPostInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
