<?php

namespace Kiboko\Magento\Endpoint;

class VertexAddressValidationApiCleanseAddressV1CleanseAddressPost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Query Vertex to cleanse an address
     *
     * @param \Kiboko\Magento\Model\V1AddressCleansePostBody $vertexAddressValidationApiCleanseAddressV1CleanseAddressPostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1AddressCleansePostBody $vertexAddressValidationApiCleanseAddressV1CleanseAddressPostBody)
    {
        $this->body = $vertexAddressValidationApiCleanseAddressV1CleanseAddressPostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/address/cleanse';
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
     * @throws \Kiboko\Magento\Exception\VertexAddressValidationApiCleanseAddressV1CleanseAddressPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\VertexAddressValidationApiCleanseAddressV1CleanseAddressPostBadRequestException
     * @throws \Kiboko\Magento\Exception\VertexAddressValidationApiCleanseAddressV1CleanseAddressPostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\VertexAddressValidationApiDataCleansedAddressInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\VertexAddressValidationApiDataCleansedAddressInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\VertexAddressValidationApiCleanseAddressV1CleanseAddressPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\VertexAddressValidationApiCleanseAddressV1CleanseAddressPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\VertexAddressValidationApiCleanseAddressV1CleanseAddressPostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}