<?php

namespace Kiboko\Magento\Endpoint;

class BundleProductOptionManagementV1SavePut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $optionId;
    /**
     * Add new option for bundle product
     *
     * @param string $optionId 
     * @param \Kiboko\Magento\Model\V1BundleProductsOptionsOptionIdPutBody $bundleProductOptionManagementV1SavePutBody 
     */
    public function __construct(string $optionId, \Kiboko\Magento\Model\V1BundleProductsOptionsOptionIdPutBody $bundleProductOptionManagementV1SavePutBody)
    {
        $this->optionId = $optionId;
        $this->body = $bundleProductOptionManagementV1SavePutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{optionId}'), array($this->optionId), '/V1/bundle-products/options/{optionId}');
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
     * @throws \Kiboko\Magento\Exception\BundleProductOptionManagementV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\BundleProductOptionManagementV1SavePutBadRequestException
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
            throw new \Kiboko\Magento\Exception\BundleProductOptionManagementV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\BundleProductOptionManagementV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}