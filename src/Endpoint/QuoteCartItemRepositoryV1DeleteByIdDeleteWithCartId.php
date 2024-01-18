<?php

namespace Kiboko\Magento\Endpoint;

class QuoteCartItemRepositoryV1DeleteByIdDeleteWithCartId extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $cartId;
    protected $itemId;
    /**
     * Removes the specified item from the specified cart.
     *
     * @param int $cartId The cart ID.
     * @param int $itemId The item ID of the item to be removed.
     */
    public function __construct(int $cartId, int $itemId)
    {
        $this->cartId = $cartId;
        $this->itemId = $itemId;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{cartId}', '{itemId}'), array($this->cartId, $this->itemId), '/V1/carts/{cartId}/items/{itemId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteWithCartIdUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteWithCartIdBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}