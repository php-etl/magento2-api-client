<?php

namespace Kiboko\Magento\V2\Endpoint;

class DirectoryCountryInformationAcquirerV1GetCountryInfoGet extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    protected $countryId;
    /**
     * Get country and region information for the store.
     *
     * @param string $countryId 
     */
    public function __construct(string $countryId)
    {
        $this->countryId = $countryId;
    }
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{countryId}'), array($this->countryId), '/V1/directory/countries/{countryId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2\Exception\DirectoryCountryInformationAcquirerV1GetCountryInfoGetBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\DirectoryDataCountryInformationInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\DirectoryDataCountryInformationInterface', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\DirectoryCountryInformationAcquirerV1GetCountryInfoGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}