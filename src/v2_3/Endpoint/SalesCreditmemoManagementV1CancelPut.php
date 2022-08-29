<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class SalesCreditmemoManagementV1CancelPut extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return '/V1/creditmemo/{id}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\SalesCreditmemoManagementV1CancelPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesCreditmemoManagementV1CancelPutInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\SalesCreditmemoManagementV1CancelPutUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\SalesCreditmemoManagementV1CancelPutInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
