<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class EavAttributeSetManagementV1CreatePost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/eav/attribute-sets';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_4\Exception\EavAttributeSetManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\EavAttributeSetManagementV1CreatePostUnauthorizedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\EavAttributeSetManagementV1CreatePostBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\EavAttributeSetManagementV1CreatePostUnauthorizedException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
