<?php

namespace Kiboko\Magento\V2_3\Endpoint;

class AmazonPaymentAddressManagementV1GetBillingAddressPut extends \Kiboko\Magento\V2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_3\Runtime\Client\EndpointTrait;
    protected $amazonOrderReferenceId;
    /**
     *
     *
     * @param string $amazonOrderReferenceId
     * @param null|\Kiboko\Magento\V2_3\Model\V1AmazonBillingAddressAmazonOrderReferenceIdPutBody $requestBody
     */
    public function __construct(string $amazonOrderReferenceId, ?\Kiboko\Magento\V2_3\Model\V1AmazonBillingAddressAmazonOrderReferenceIdPutBody $requestBody = null)
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
        return str_replace(array('{amazonOrderReferenceId}'), array($this->amazonOrderReferenceId), '/V1/amazon-billing-address/{amazonOrderReferenceId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Kiboko\Magento\V2_3\Model\V1AmazonBillingAddressAmazonOrderReferenceIdPutBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\V2_3\Model\V1AmazonBillingAddressAmazonOrderReferenceIdPutBody) {
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
     * @return null|\Kiboko\Magento\V2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_3\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
