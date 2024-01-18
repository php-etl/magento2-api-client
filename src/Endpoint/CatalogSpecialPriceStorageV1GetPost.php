<?php

namespace Kiboko\Magento\Endpoint;

class CatalogSpecialPriceStorageV1GetPost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Return product's special price. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsSpecialPriceInformationPostBody $catalogSpecialPriceStorageV1GetPostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1ProductsSpecialPriceInformationPostBody $catalogSpecialPriceStorageV1GetPostBody)
    {
        $this->body = $catalogSpecialPriceStorageV1GetPostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/products/special-price-information';
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
     * @throws \Kiboko\Magento\Exception\CatalogSpecialPriceStorageV1GetPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogSpecialPriceStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataSpecialPriceInterface[]|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\CatalogDataSpecialPriceInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogSpecialPriceStorageV1GetPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogSpecialPriceStorageV1GetPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}