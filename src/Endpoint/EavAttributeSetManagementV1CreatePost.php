<?php

namespace Kiboko\Magento\Endpoint;

class EavAttributeSetManagementV1CreatePost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Create attribute set from data
     *
     * @param \Kiboko\Magento\Model\V1EavAttributeSetsPostBody $eavAttributeSetManagementV1CreatePostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1EavAttributeSetsPostBody $eavAttributeSetManagementV1CreatePostBody)
    {
        $this->body = $eavAttributeSetManagementV1CreatePostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/eav/attribute-sets';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\EavAttributeSetManagementV1CreatePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\EavAttributeSetManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\EavDataAttributeSetInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\EavAttributeSetManagementV1CreatePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\EavAttributeSetManagementV1CreatePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}