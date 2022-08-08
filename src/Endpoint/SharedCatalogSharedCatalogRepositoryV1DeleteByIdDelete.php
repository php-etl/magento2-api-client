<?php

namespace Kiboko\Magento\V2\Endpoint;

class SharedCatalogSharedCatalogRepositoryV1DeleteByIdDelete extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $sharedCatalogId;
    /**
     * Delete a shared catalog by ID.
     *
     * @param int $sharedCatalogId
     */
    public function __construct(int $sharedCatalogId)
    {
        $this->sharedCatalogId = $sharedCatalogId;
    }
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{sharedCatalogId}'), array($this->sharedCatalogId), '/V1/sharedCatalog/{sharedCatalogId}');
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
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDeleteBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDeleteUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDeleteInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
