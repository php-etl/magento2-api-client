<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class TaxTaxClassRepositoryV1SavePost extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    /**
     * Create a Tax Class
     *
     * @param \Kiboko\Magento\v2_1\Model\V1TaxClassesPostBody $$body 
     */
    public function __construct(\Kiboko\Magento\v2_1\Model\V1TaxClassesPostBody $$body)
    {
        $this->body = $$body;
    }
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/taxClasses';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1SavePostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}