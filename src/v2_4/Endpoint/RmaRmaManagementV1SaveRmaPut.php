<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class RmaRmaManagementV1SaveRmaPut extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     * Save RMA
     *
     * @param string $id
     * @param \Kiboko\Magento\v2_4\Model\V1ReturnsIdPutBody $rmaRmaManagementV1SaveRmaPutBody
     */
    public function __construct(string $id, \Kiboko\Magento\v2_4\Model\V1ReturnsIdPutBody $rmaRmaManagementV1SaveRmaPutBody)
    {
        $this->id = $id;
        $this->body = $rmaRmaManagementV1SaveRmaPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/V1/returns/{id}');
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
     * @throws \Kiboko\Magento\v2_4\Exception\RmaRmaManagementV1SaveRmaPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\RmaDataRmaInterface|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\RmaDataRmaInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\RmaRmaManagementV1SaveRmaPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
