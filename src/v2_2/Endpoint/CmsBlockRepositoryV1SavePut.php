<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CmsBlockRepositoryV1SavePut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     * Save block.
     *
     * @param string $id
     * @param \Kiboko\Magento\v2_2\Model\V1CmsBlockIdPutBody $cmsBlockRepositoryV1SavePutBody
     */
    public function __construct(string $id, \Kiboko\Magento\v2_2\Model\V1CmsBlockIdPutBody $cmsBlockRepositoryV1SavePutBody)
    {
        $this->id = $id;
        $this->body = $cmsBlockRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/V1/cmsBlock/{id}');
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
     * @throws \Kiboko\Magento\v2_2\Exception\CmsBlockRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CmsBlockRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CmsDataBlockInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CmsDataBlockInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CmsBlockRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CmsBlockRepositoryV1SavePutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
