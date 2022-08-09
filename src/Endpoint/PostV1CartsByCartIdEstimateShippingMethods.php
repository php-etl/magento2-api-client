<?php

namespace Kiboko\Magento\V2\Endpoint;

class PostV1CartsByCartIdEstimateShippingMethods extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    protected $cartId;
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param string $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1CartsCartIdEstimateShippingMethodsPostBody $requestBody 
     */
    public function __construct(string $cartId, ?\Kiboko\Magento\V2\Model\V1CartsCartIdEstimateShippingMethodsPostBody $requestBody = null)
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
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/{cartId}/estimate-shipping-methods');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Kiboko\Magento\V2\Model\V1CartsCartIdEstimateShippingMethodsPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\V2\Model\V1CartsCartIdEstimateShippingMethodsPostBody) {
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
     * @throws \Kiboko\Magento\V2\Exception\PostV1CartsByCartIdEstimateShippingMethodsUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\QuoteDataShippingMethodInterface[]', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\PostV1CartsByCartIdEstimateShippingMethodsUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
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