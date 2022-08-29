<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CatalogProductAttributeManagementV1AssignPost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    /**
     * Assign attribute to attribute set
     *
     * @param \Kiboko\Magento\v2_2\Model\V1ProductsAttributeSetsAttributesPostBody $catalogProductAttributeManagementV1AssignPostBody
     */
    public function __construct(\Kiboko\Magento\v2_2\Model\V1ProductsAttributeSetsAttributesPostBody $catalogProductAttributeManagementV1AssignPostBody)
    {
        $this->body = $catalogProductAttributeManagementV1AssignPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/products/attribute-sets/attributes';
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
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeManagementV1AssignPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeManagementV1AssignPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeManagementV1AssignPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
