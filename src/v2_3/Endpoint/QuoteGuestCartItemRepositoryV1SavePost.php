<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class QuoteGuestCartItemRepositoryV1SavePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    protected $cartId;
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdItemsPostBody $quoteGuestCartItemRepositoryV1SavePostBody 
     */
    public function __construct(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdItemsPostBody $quoteGuestCartItemRepositoryV1SavePostBody)
    {
        $this->cartId = $cartId;
        $this->body = $quoteGuestCartItemRepositoryV1SavePostBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/items');
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
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestCartItemRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\QuoteDataCartItemInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\QuoteGuestCartItemRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}