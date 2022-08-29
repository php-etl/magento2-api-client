<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class AmazonPaymentAddressManagementV1GetShippingAddressPut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $amazonOrderReferenceId;
    /**
     *
     *
     * @param string $amazonOrderReferenceId
     * @param null|\Kiboko\Magento\v2_2\Model\V1AmazonShippingAddressAmazonOrderReferenceIdPutBody $requestBody
     */
    public function __construct(string $amazonOrderReferenceId, ?\Kiboko\Magento\v2_2\Model\V1AmazonShippingAddressAmazonOrderReferenceIdPutBody $requestBody = null)
    {
        $this->amazonOrderReferenceId = $amazonOrderReferenceId;
        $this->body = $requestBody;
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
        if ($this->body instanceof \Kiboko\Magento\v2_2\Model\V1AmazonShippingAddressAmazonOrderReferenceIdPutBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\v2_2\Model\V1AmazonShippingAddressAmazonOrderReferenceIdPutBody) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
