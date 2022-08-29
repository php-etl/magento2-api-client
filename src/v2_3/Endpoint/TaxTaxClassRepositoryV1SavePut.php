<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class TaxTaxClassRepositoryV1SavePut extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $classId;
    /**
     * Create a Tax Class
     *
     * @param string $classId
     * @param \Kiboko\Magento\v2_3\Model\V1TaxClassesClassIdPutBody $taxTaxClassRepositoryV1SavePutBody
     */
    public function __construct(string $classId, \Kiboko\Magento\v2_3\Model\V1TaxClassesClassIdPutBody $taxTaxClassRepositoryV1SavePutBody)
    {
        $this->classId = $classId;
        $this->body = $taxTaxClassRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{classId}'), array($this->classId), '/V1/taxClasses/{classId}');
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
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1SavePutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
