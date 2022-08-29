<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class SalesOrderRepositoryV1SavePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    /**
     * Performs persist operations for a specified order.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1OrdersPostBody $salesOrderRepositoryV1SavePostBody
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1OrdersPostBody $salesOrderRepositoryV1SavePostBody)
    {
        $this->body = $salesOrderRepositoryV1SavePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/orders';
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
     * @throws \Kiboko\Magento\v2_3\Exception\SalesOrderRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataOrderInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\SalesDataOrderInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\SalesOrderRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
