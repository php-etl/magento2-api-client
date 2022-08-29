<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class BundleProductOptionManagementV1SavePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    /**
     * Add new option for bundle product
     *
     * @param \Kiboko\Magento\v2_3\Model\V1BundleProductsOptionsAddPostBody $bundleProductOptionManagementV1SavePostBody
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1BundleProductsOptionsAddPostBody $bundleProductOptionManagementV1SavePostBody)
    {
        $this->body = $bundleProductOptionManagementV1SavePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/bundle-products/options/add';
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
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductOptionManagementV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductOptionManagementV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\BundleProductOptionManagementV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\BundleProductOptionManagementV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
