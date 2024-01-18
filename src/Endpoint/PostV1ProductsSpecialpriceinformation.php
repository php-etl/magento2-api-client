<?php

namespace Kiboko\Magento\Endpoint;

class PostV1ProductsSpecialpriceinformation extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Return product's special price. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsSpecialPriceInformationPostBody $postV1ProductsSpecialpriceinformationBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1ProductsSpecialPriceInformationPostBody $postV1ProductsSpecialpriceinformationBody)
    {
        $this->body = $postV1ProductsSpecialpriceinformationBody;
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
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSpecialpriceinformationUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSpecialpriceinformationBadRequestException
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
            throw new \Kiboko\Magento\Exception\PostV1ProductsSpecialpriceinformationUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\PostV1ProductsSpecialpriceinformationBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}