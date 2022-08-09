<?php

namespace Kiboko\Magento\V2\Endpoint;

class CatalogCostStorageV1GetPost extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    /**
     * Return product prices. In case of at least one of skus is not found exception will be thrown.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsCostInformationPostBody $requestBody 
     */
    public function __construct(?\Kiboko\Magento\V2\Model\V1ProductsCostInformationPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/products/cost-information';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Kiboko\Magento\V2\Model\V1ProductsCostInformationPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\V2\Model\V1ProductsCostInformationPostBody) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2\Exception\CatalogCostStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogCostStorageV1GetPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataCostInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\CatalogDataCostInterface[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\CatalogCostStorageV1GetPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\CatalogCostStorageV1GetPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}