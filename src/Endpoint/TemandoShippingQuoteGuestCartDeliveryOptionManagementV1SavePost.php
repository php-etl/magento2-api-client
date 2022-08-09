<?php

namespace Kiboko\Magento\V2\Endpoint;

class TemandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePost extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    protected $cartId;
    /**
     * Handle selected delivery option.
     *
     * @param string $cartId The shopping cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdDeliveryOptionPostBody $requestBody 
     */
    public function __construct(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdDeliveryOptionPostBody $requestBody = null)
    {
        $this->cartId = $cartId;
        $this->body = $requestBody;
    }
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/guest-carts/{cartId}/delivery-option');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Kiboko\Magento\V2\Model\V1GuestCartsCartIdDeliveryOptionPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\V2\Model\V1GuestCartsCartIdDeliveryOptionPostBody) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\TemandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}