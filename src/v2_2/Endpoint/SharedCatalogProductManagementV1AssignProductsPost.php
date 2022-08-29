<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class SharedCatalogProductManagementV1AssignProductsPost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     * Add products into the shared catalog.
     *
     * @param int $id
     * @param \Kiboko\Magento\v2_2\Model\V1SharedCatalogIdAssignProductsPostBody $sharedCatalogProductManagementV1AssignProductsPostBody
     */
    public function __construct(int $id, \Kiboko\Magento\v2_2\Model\V1SharedCatalogIdAssignProductsPostBody $sharedCatalogProductManagementV1AssignProductsPostBody)
    {
        $this->id = $id;
        $this->body = $sharedCatalogProductManagementV1AssignProductsPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/V1/sharedCatalog/{id}/assignProducts');
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
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogProductManagementV1AssignProductsPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\SharedCatalogProductManagementV1AssignProductsPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
