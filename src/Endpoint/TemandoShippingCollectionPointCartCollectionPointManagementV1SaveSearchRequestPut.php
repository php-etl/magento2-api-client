<?php

namespace Kiboko\Magento\V2\Endpoint;

class TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPut extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    /**
     *
     *
     * @param \Kiboko\Magento\V2\Model\V1CartsMineCollectionPointSearchRequestPutBody $temandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutBody
     */
    public function __construct(\Kiboko\Magento\V2\Model\V1CartsMineCollectionPointSearchRequestPutBody $temandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutBody)
    {
        $this->body = $temandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return '/V1/carts/mine/collection-point/search-request';
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
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\TemandoShippingDataCollectionPointSearchRequestInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\TemandoShippingDataCollectionPointSearchRequestInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
