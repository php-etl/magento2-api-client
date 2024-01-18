<?php

namespace Kiboko\Magento\Endpoint;

class VertexAddressValidationApiGuestCleanseAddressV1CleanseAddressPost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Query Vertex to cleanse an address
     *
     * @param \Kiboko\Magento\Model\V1GuestAddressCleansePostBody $vertexAddressValidationApiGuestCleanseAddressV1CleanseAddressPostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1GuestAddressCleansePostBody $vertexAddressValidationApiGuestCleanseAddressV1CleanseAddressPostBody)
    {
        $this->body = $vertexAddressValidationApiGuestCleanseAddressV1CleanseAddressPostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/guest-address/cleanse';
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
     * @throws \Kiboko\Magento\Exception\VertexAddressValidationApiGuestCleanseAddressV1CleanseAddressPostBadRequestException
     * @throws \Kiboko\Magento\Exception\VertexAddressValidationApiGuestCleanseAddressV1CleanseAddressPostInternalServerErrorException
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
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\VertexAddressValidationApiGuestCleanseAddressV1CleanseAddressPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\VertexAddressValidationApiGuestCleanseAddressV1CleanseAddressPostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}