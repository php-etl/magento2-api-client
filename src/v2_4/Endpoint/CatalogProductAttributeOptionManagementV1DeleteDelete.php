<?php

namespace Kiboko\Magento\V2_4\Endpoint;

class CatalogProductAttributeOptionManagementV1DeleteDelete extends \Kiboko\Magento\V2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_4\Runtime\Client\EndpointTrait;
    protected $attributeCode;
    protected $optionId;
    /**
     * Delete option from attribute
     *
     * @param string $attributeCode
     * @param string $optionId
     */
    public function __construct(string $attributeCode, string $optionId)
    {
        $this->attributeCode = $attributeCode;
        $this->optionId = $optionId;
    }
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{attributeCode}', '{optionId}'), array($this->attributeCode, $this->optionId), '/V1/products/attributes/{attributeCode}/options/{optionId}');
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
     * @throws \Kiboko\Magento\V2_4\Exception\CatalogProductAttributeOptionManagementV1DeleteDeleteBadRequestException
     * @throws \Kiboko\Magento\V2_4\Exception\CatalogProductAttributeOptionManagementV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_4\Exception\CatalogProductAttributeOptionManagementV1DeleteDeleteBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_4\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_4\Exception\CatalogProductAttributeOptionManagementV1DeleteDeleteUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_4\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_4\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
