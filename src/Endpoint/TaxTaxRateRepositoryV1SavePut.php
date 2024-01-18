<?php

namespace Kiboko\Magento\Endpoint;

class TaxTaxRateRepositoryV1SavePut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Create or update tax rate
     *
     * @param \Kiboko\Magento\Model\V1TaxRatesPutBody $taxTaxRateRepositoryV1SavePutBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1TaxRatesPutBody $taxTaxRateRepositoryV1SavePutBody)
    {
        $this->body = $taxTaxRateRepositoryV1SavePutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/V1/taxRates';
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
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1SavePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRateInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\TaxDataTaxRateInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1SavePutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}