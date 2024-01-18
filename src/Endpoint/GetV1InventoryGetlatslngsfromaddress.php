<?php

namespace Kiboko\Magento\Endpoint;

class GetV1InventoryGetlatslngsfromaddress extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Get all available latitude and longitude objects from address.
     *
     * @param array $queryParameters {
     *     @var string $address[country] Shipping country
     *     @var string $address[postcode] Shipping postcode
     *     @var string $address[street] Shipping street address
     *     @var string $address[region] Shipping region
     *     @var string $address[city] Shipping city
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/V1/inventory/get-latslngs-from-address';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('address[country]', 'address[postcode]', 'address[street]', 'address[region]', 'address[city]'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('address[country]', array('string'));
        $optionsResolver->addAllowedTypes('address[postcode]', array('string'));
        $optionsResolver->addAllowedTypes('address[street]', array('string'));
        $optionsResolver->addAllowedTypes('address[region]', array('string'));
        $optionsResolver->addAllowedTypes('address[city]', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetlatslngsfromaddressUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetlatslngsfromaddressBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryDistanceBasedSourceSelectionApiDataLatLngInterface[]|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\InventoryDistanceBasedSourceSelectionApiDataLatLngInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\GetV1InventoryGetlatslngsfromaddressUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\GetV1InventoryGetlatslngsfromaddressBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}