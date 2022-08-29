<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class RmaRmaAttributesManagementV1GetAttributesGet extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    protected $formCode;
    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode
     */
    public function __construct(string $formCode)
    {
        $this->formCode = $formCode;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{formCode}'), array($this->formCode), '/V1/returnsAttributeMetadata/form/{formCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\RmaRmaAttributesManagementV1GetAttributesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\CustomerDataAttributeMetadataInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\RmaRmaAttributesManagementV1GetAttributesGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
