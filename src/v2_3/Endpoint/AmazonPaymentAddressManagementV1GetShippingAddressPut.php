<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class AmazonPaymentAddressManagementV1GetShippingAddressPut extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $amazonOrderReferenceId;
    /**
     *
     *
     * @param string $amazonOrderReferenceId
     * @param \Kiboko\Magento\v2_3\Model\V1AmazonShippingAddressAmazonOrderReferenceIdPutBody $amazonPaymentAddressManagementV1GetShippingAddressPutBody
     */
    public function __construct(string $amazonOrderReferenceId, \Kiboko\Magento\v2_3\Model\V1AmazonShippingAddressAmazonOrderReferenceIdPutBody $amazonPaymentAddressManagementV1GetShippingAddressPutBody)
    {
        $this->amazonOrderReferenceId = $amazonOrderReferenceId;
        $this->body = $amazonPaymentAddressManagementV1GetShippingAddressPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{amazonOrderReferenceId}'), array($this->amazonOrderReferenceId), '/V1/amazon-shipping-address/{amazonOrderReferenceId}');
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
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}