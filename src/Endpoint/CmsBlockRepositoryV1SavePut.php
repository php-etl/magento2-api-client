<?php

namespace Kiboko\Magento\Endpoint;

class CmsBlockRepositoryV1SavePut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Save block.
     *
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1CmsBlockIdPutBody $cmsBlockRepositoryV1SavePutBody 
     */
    public function __construct(string $id, \Kiboko\Magento\Model\V1CmsBlockIdPutBody $cmsBlockRepositoryV1SavePutBody)
    {
        $this->id = $id;
        $this->body = $cmsBlockRepositoryV1SavePutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/V1/cmsBlock/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CmsBlockRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CmsBlockRepositoryV1SavePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataBlockInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\CmsDataBlockInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\CmsBlockRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\CmsBlockRepositoryV1SavePutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}