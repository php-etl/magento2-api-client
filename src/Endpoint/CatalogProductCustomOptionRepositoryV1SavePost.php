<?php

namespace Kiboko\Magento\Endpoint;

class CatalogProductCustomOptionRepositoryV1SavePost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Save Custom Option
     *
     * @param \Kiboko\Magento\Model\V1ProductsOptionsPostBody $catalogProductCustomOptionRepositoryV1SavePostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1ProductsOptionsPostBody $catalogProductCustomOptionRepositoryV1SavePostBody)
    {
        $this->body = $catalogProductCustomOptionRepositoryV1SavePostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/products/options';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CatalogProductCustomOptionRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\CatalogDataProductCustomOptionInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogProductCustomOptionRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}