<?php

namespace Kiboko\Magento\V2_1\Endpoint;

class CatalogCategoryAttributeOptionManagementV1GetItemsGet extends \Kiboko\Magento\V2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_1\Runtime\Client\EndpointTrait;
    protected $attributeCode;
    /**
     * Retrieve list of attribute options
     *
     * @param string $attributeCode
     */
    public function __construct(string $attributeCode)
    {
        $this->attributeCode = $attributeCode;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{attributeCode}'), array($this->attributeCode), '/V1/categories/attributes/{attributeCode}/options');
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
     * @throws \Kiboko\Magento\V2_1\Exception\CatalogCategoryAttributeOptionManagementV1GetItemsGetBadRequestException
     * @throws \Kiboko\Magento\V2_1\Exception\CatalogCategoryAttributeOptionManagementV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2_1\Model\EavDataAttributeOptionInterface[]|\Kiboko\Magento\V2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\EavDataAttributeOptionInterface[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_1\Exception\CatalogCategoryAttributeOptionManagementV1GetItemsGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_1\Exception\CatalogCategoryAttributeOptionManagementV1GetItemsGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
