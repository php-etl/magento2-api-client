<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class ConfigurableProductOptionRepositoryV1SavePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/configurable-products/{sku}/options';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1SavePostInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1SavePostBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1SavePostUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1SavePostInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
