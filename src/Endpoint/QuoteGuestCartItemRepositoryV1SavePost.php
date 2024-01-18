<?php

namespace Kiboko\Magento\Endpoint;

class QuoteGuestCartItemRepositoryV1SavePost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $cartId;
    /**
     * Add the specified item to the specified cart.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdItemsPostBody $quoteGuestCartItemRepositoryV1SavePostBody 
     */
    public function __construct(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdItemsPostBody $quoteGuestCartItemRepositoryV1SavePostBody)
    {
        $this->cartId = $cartId;
        $this->body = $quoteGuestCartItemRepositoryV1SavePostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
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
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\QuoteGuestCartItemRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\QuoteDataCartItemInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\QuoteGuestCartItemRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}