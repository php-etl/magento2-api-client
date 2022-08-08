<?php

namespace Kiboko\Magento\V2\Endpoint;

class TemandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPost extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    /**
     *
     *
     * @param \Kiboko\Magento\V2\Model\V1CartsMineCollectionPointSelectPostBody $temandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostBody
     */
    public function __construct(\Kiboko\Magento\V2\Model\V1CartsMineCollectionPointSelectPostBody $temandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostBody)
    {
        $this->body = $temandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/carts/mine/collection-point/select';
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
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
