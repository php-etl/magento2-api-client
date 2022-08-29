<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class InventoryDistanceBasedSourceSelectionApiGetLatLngFromAddressV1ExecuteGet extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    /**
     * Get latitude and longitude object from address
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
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/V1/inventory/get-latlng-from-address';
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
        $optionsResolver->setAllowedTypes('address[country]', array('string'));
        $optionsResolver->setAllowedTypes('address[postcode]', array('string'));
        $optionsResolver->setAllowedTypes('address[street]', array('string'));
        $optionsResolver->setAllowedTypes('address[region]', array('string'));
        $optionsResolver->setAllowedTypes('address[city]', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryDistanceBasedSourceSelectionApiGetLatLngFromAddressV1ExecuteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventoryDistanceBasedSourceSelectionApiDataLatLngInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\InventoryDistanceBasedSourceSelectionApiDataLatLngInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\InventoryDistanceBasedSourceSelectionApiGetLatLngFromAddressV1ExecuteGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}