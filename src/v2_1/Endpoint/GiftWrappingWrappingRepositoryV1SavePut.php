<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class GiftWrappingWrappingRepositoryV1SavePut extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    protected $wrappingId;
    /**
     * Create/Update new gift wrapping with data object values
     *
     * @param string $wrappingId 
     * @param \Kiboko\Magento\v2_1\Model\V1GiftWrappingsWrappingIdPutBody $$body 
     */
    public function __construct(string $wrappingId, \Kiboko\Magento\v2_1\Model\V1GiftWrappingsWrappingIdPutBody $$body)
    {
        $this->wrappingId = $wrappingId;
        $this->body = $$body;
    }
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{wrappingId}'), array($this->wrappingId), '/V1/gift-wrappings/{wrappingId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\GiftWrappingWrappingRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\GiftWrappingWrappingRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\GiftWrappingDataWrappingInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\GiftWrappingDataWrappingInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\GiftWrappingWrappingRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\GiftWrappingWrappingRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}