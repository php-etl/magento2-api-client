<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class BundleProductOptionManagementV1SavePut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $optionId;
    /**
     * Add new option for bundle product
     *
     * @param string $optionId
     * @param \Kiboko\Magento\v2_2\Model\V1BundleProductsOptionsOptionIdPutBody $bundleProductOptionManagementV1SavePutBody
     */
    public function __construct(string $optionId, \Kiboko\Magento\v2_2\Model\V1BundleProductsOptionsOptionIdPutBody $bundleProductOptionManagementV1SavePutBody)
    {
        $this->optionId = $optionId;
        $this->body = $bundleProductOptionManagementV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{optionId}'), array($this->optionId), '/V1/bundle-products/options/{optionId}');
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
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductOptionManagementV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductOptionManagementV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\BundleProductOptionManagementV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\BundleProductOptionManagementV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
