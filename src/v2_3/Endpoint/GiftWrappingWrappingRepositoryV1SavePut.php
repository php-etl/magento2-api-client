<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class GiftWrappingWrappingRepositoryV1SavePut extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $wrappingId;
    /**
     * Create/Update new gift wrapping with data object values
     *
     * @param string $wrappingId
     * @param \Kiboko\Magento\v2_3\Model\V1GiftWrappingsWrappingIdPutBody $giftWrappingWrappingRepositoryV1SavePutBody
     */
    public function __construct(string $wrappingId, \Kiboko\Magento\v2_3\Model\V1GiftWrappingsWrappingIdPutBody $giftWrappingWrappingRepositoryV1SavePutBody)
    {
        $this->wrappingId = $wrappingId;
        $this->body = $giftWrappingWrappingRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{wrappingId}'), array($this->wrappingId), '/V1/gift-wrappings/{wrappingId}');
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
     * @throws \Kiboko\Magento\v2_3\Exception\GiftWrappingWrappingRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftWrappingWrappingRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\GiftWrappingDataWrappingInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\GiftWrappingDataWrappingInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\GiftWrappingWrappingRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\GiftWrappingWrappingRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
