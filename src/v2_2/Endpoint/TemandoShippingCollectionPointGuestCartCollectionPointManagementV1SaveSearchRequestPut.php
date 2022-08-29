<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     *
     *
     * @param string $cartId
     * @param \Kiboko\Magento\v2_2\Model\V1GuestCartsCartIdCollectionPointSearchRequestPutBody $temandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPutBody
     */
    public function __construct(string $cartId, \Kiboko\Magento\v2_2\Model\V1GuestCartsCartIdCollectionPointSearchRequestPutBody $temandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPutBody)
    {
        $this->cartId = $cartId;
        $this->body = $temandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/collection-point/search-request');
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
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\TemandoShippingDataCollectionPointSearchRequestInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\TemandoShippingDataCollectionPointSearchRequestInterface', 'json');
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
