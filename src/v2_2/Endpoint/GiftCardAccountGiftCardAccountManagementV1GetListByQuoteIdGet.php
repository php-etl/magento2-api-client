<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class GiftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $quoteId;
    /**
     * Return GiftCard Account cards
     *
     * @param int $quoteId
     */
    public function __construct(int $quoteId)
    {
        $this->quoteId = $quoteId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{quoteId}'), array($this->quoteId), '/V1/carts/{quoteId}/giftCards');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\GiftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\GiftCardAccountDataGiftCardAccountInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\GiftCardAccountDataGiftCardAccountInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\GiftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
