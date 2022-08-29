<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class SharedCatalogSharedCatalogRepositoryV1GetGet extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $sharedCatalogId;
    /**
     * Return the following properties for the selected shared catalog: ID, Store Group ID, Name, Type, Description, Customer Group, Tax Class.
     *
     * @param int $sharedCatalogId
     */
    public function __construct(int $sharedCatalogId)
    {
        $this->sharedCatalogId = $sharedCatalogId;
    }
    public function getMethod(): string
    {
        return 'GET';
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
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\SharedCatalogDataSharedCatalogInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\SharedCatalogDataSharedCatalogInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1GetGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1GetGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
