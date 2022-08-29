<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class InventoryDistanceBasedSourceSelectionApiGetDistanceV1ExecuteGet extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    /**
     * Get distance between two points
     *
     * @param array $queryParameters {
     *     @var float $source[lat] Latitude
     *     @var float $source[lng] Longitude
     *     @var float $destination[lat] Latitude
     *     @var float $destination[lng] Longitude
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/V1/inventory/get-distance';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('source[lat]', 'source[lng]', 'destination[lat]', 'destination[lng]'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('source[lat]', array('float'));
        $optionsResolver->setAllowedTypes('source[lng]', array('float'));
        $optionsResolver->setAllowedTypes('destination[lat]', array('float'));
        $optionsResolver->setAllowedTypes('destination[lng]', array('float'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_4\Exception\InventoryDistanceBasedSourceSelectionApiGetDistanceV1ExecuteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\InventoryDistanceBasedSourceSelectionApiGetDistanceV1ExecuteGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
