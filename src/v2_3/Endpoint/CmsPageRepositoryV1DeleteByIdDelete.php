<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CmsPageRepositoryV1DeleteByIdDelete extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return '/V1/cmsPage/{pageId}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1DeleteByIdDeleteBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1DeleteByIdDeleteUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1DeleteByIdDeleteInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
