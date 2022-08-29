<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class RmaRmaManagementV1SaveRmaPost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    /**
     * Save RMA
     *
     * @param \Kiboko\Magento\v2_4\Model\V1ReturnsPostBody $rmaRmaManagementV1SaveRmaPostBody
     */
    public function __construct(\Kiboko\Magento\v2_4\Model\V1ReturnsPostBody $rmaRmaManagementV1SaveRmaPostBody)
    {
        $this->body = $rmaRmaManagementV1SaveRmaPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/returns';
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
     * @throws \Kiboko\Magento\v2_4\Exception\RmaRmaManagementV1SaveRmaPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\RmaDataRmaInterface|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\RmaDataRmaInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\RmaRmaManagementV1SaveRmaPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
