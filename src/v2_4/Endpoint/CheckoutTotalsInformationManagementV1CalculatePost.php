<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class CheckoutTotalsInformationManagementV1CalculatePost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param int $cartId
     * @param \Kiboko\Magento\v2_4\Model\V1CartsCartIdTotalsInformationPostBody $checkoutTotalsInformationManagementV1CalculatePostBody
     */
    public function __construct(int $cartId, \Kiboko\Magento\v2_4\Model\V1CartsCartIdTotalsInformationPostBody $checkoutTotalsInformationManagementV1CalculatePostBody)
    {
        $this->cartId = $cartId;
        $this->body = $checkoutTotalsInformationManagementV1CalculatePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/{cartId}/totals-information');
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
     * @throws \Kiboko\Magento\v2_4\Exception\CheckoutTotalsInformationManagementV1CalculatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\QuoteDataTotalsInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CheckoutTotalsInformationManagementV1CalculatePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
