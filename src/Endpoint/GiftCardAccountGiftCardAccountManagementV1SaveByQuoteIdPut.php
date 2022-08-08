<?php

namespace Kiboko\Magento\V2\Endpoint;

class GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     *
     *
     * @param int $cartId
     * @param \Kiboko\Magento\V2\Model\V1CartsCartIdGiftCardsPutBody $giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutBody
     */
    public function __construct(int $cartId, \Kiboko\Magento\V2\Model\V1CartsCartIdGiftCardsPutBody $giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutBody)
    {
        $this->cartId = $cartId;
        $this->body = $giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/{cartId}/giftCards');
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
     * @throws \Kiboko\Magento\V2\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
