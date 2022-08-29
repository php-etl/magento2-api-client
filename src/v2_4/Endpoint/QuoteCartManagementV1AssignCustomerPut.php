<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class QuoteCartManagementV1AssignCustomerPut extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Assigns a specified customer to a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_4\Model\V1CartsCartIdPutBody $quoteCartManagementV1AssignCustomerPutBody
     */
    public function __construct(int $cartId, \Kiboko\Magento\v2_4\Model\V1CartsCartIdPutBody $quoteCartManagementV1AssignCustomerPutBody)
    {
        $this->cartId = $cartId;
        $this->body = $quoteCartManagementV1AssignCustomerPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/{cartId}');
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
     * @throws \Kiboko\Magento\v2_4\Exception\QuoteCartManagementV1AssignCustomerPutBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\QuoteCartManagementV1AssignCustomerPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_4\Exception\QuoteCartManagementV1AssignCustomerPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\QuoteCartManagementV1AssignCustomerPutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\QuoteCartManagementV1AssignCustomerPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\QuoteCartManagementV1AssignCustomerPutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
