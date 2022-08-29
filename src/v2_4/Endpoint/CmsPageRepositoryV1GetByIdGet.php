<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class CmsPageRepositoryV1GetByIdGet extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $pageId;
    /**
     * Retrieve page.
     *
     * @param int $pageId
     */
    public function __construct(int $pageId)
    {
        $this->pageId = $pageId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{pageId}'), array($this->pageId), '/V1/cmsPage/{pageId}');
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
     * @throws \Kiboko\Magento\v2_4\Exception\CmsPageRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_4\Exception\CmsPageRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\CmsDataPageInterface|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\CmsDataPageInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CmsPageRepositoryV1GetByIdGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CmsPageRepositoryV1GetByIdGetInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
