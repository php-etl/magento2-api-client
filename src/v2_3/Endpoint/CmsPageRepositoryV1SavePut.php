<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CmsPageRepositoryV1SavePut extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     * Save page.
     *
     * @param string $id
     * @param \Kiboko\Magento\v2_3\Model\V1CmsPageIdPutBody $cmsPageRepositoryV1SavePutBody
     */
    public function __construct(string $id, \Kiboko\Magento\v2_3\Model\V1CmsPageIdPutBody $cmsPageRepositoryV1SavePutBody)
    {
        $this->id = $id;
        $this->body = $cmsPageRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/V1/cmsPage/{id}');
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
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CmsDataPageInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\CmsDataPageInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1SavePutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
