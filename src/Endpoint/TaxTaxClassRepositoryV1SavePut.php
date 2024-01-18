<?php

namespace Kiboko\Magento\Endpoint;

class TaxTaxClassRepositoryV1SavePut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $classId;
    /**
     * Create a Tax Class
     *
     * @param string $classId 
     * @param \Kiboko\Magento\Model\V1TaxClassesClassIdPutBody $taxTaxClassRepositoryV1SavePutBody 
     */
    public function __construct(string $classId, \Kiboko\Magento\Model\V1TaxClassesClassIdPutBody $taxTaxClassRepositoryV1SavePutBody)
    {
        $this->classId = $classId;
        $this->body = $taxTaxClassRepositoryV1SavePutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{classId}'), array($this->classId), '/V1/taxClasses/{classId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1SavePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1SavePutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}