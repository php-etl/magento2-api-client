<?php

namespace Kiboko\Magento\Endpoint;

class CatalogCostStorageV1DeletePost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Delete product cost. In case of at least one of skus is not found exception will be thrown. If error occurred during the delete exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsCostDeletePostBody $catalogCostStorageV1DeletePostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1ProductsCostDeletePostBody $catalogCostStorageV1DeletePostBody)
    {
        $this->body = $catalogCostStorageV1DeletePostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/products/cost-delete';
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
     * @throws \Kiboko\Magento\Exception\CatalogCostStorageV1DeletePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCostStorageV1DeletePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogCostStorageV1DeletePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogCostStorageV1DeletePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}