<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class GiftWrappingWrappingRepositoryV1SavePost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    /**
     * Create/Update new gift wrapping with data object values
     *
     * @param \Kiboko\Magento\v2_2\Model\V1GiftWrappingsPostBody $giftWrappingWrappingRepositoryV1SavePostBody
     */
    public function __construct(\Kiboko\Magento\v2_2\Model\V1GiftWrappingsPostBody $giftWrappingWrappingRepositoryV1SavePostBody)
    {
        $this->body = $giftWrappingWrappingRepositoryV1SavePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/gift-wrappings';
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
     * @throws \Kiboko\Magento\v2_2\Exception\GiftWrappingWrappingRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GiftWrappingWrappingRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\GiftWrappingDataWrappingInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\GiftWrappingDataWrappingInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\GiftWrappingWrappingRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\GiftWrappingWrappingRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}