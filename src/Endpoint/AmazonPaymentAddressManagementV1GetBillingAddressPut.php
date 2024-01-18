<?php

namespace Kiboko\Magento\Endpoint;

class AmazonPaymentAddressManagementV1GetBillingAddressPut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $amazonOrderReferenceId;
    /**
     * 
     *
     * @param string $amazonOrderReferenceId 
     * @param \Kiboko\Magento\Model\V1AmazonBillingAddressAmazonOrderReferenceIdPutBody $amazonPaymentAddressManagementV1GetBillingAddressPutBody 
     */
    public function __construct(string $amazonOrderReferenceId, \Kiboko\Magento\Model\V1AmazonBillingAddressAmazonOrderReferenceIdPutBody $amazonPaymentAddressManagementV1GetBillingAddressPutBody)
    {
        $this->amazonOrderReferenceId = $amazonOrderReferenceId;
        $this->body = $amazonPaymentAddressManagementV1GetBillingAddressPutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{amazonOrderReferenceId}'), array($this->amazonOrderReferenceId), '/V1/amazon-billing-address/{amazonOrderReferenceId}');
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
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}