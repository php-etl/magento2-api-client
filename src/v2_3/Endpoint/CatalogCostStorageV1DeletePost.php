<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CatalogCostStorageV1DeletePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    /**
     * Delete product cost. In case of at least one of skus is not found exception will be thrown. If error occurred during the delete exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsCostDeletePostBody $catalogCostStorageV1DeletePostBody
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1ProductsCostDeletePostBody $catalogCostStorageV1DeletePostBody)
    {
        $this->body = $catalogCostStorageV1DeletePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/products/cost-delete';
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
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCostStorageV1DeletePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCostStorageV1DeletePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogCostStorageV1DeletePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogCostStorageV1DeletePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
