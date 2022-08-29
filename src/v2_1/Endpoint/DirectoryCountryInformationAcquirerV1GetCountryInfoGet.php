<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class DirectoryCountryInformationAcquirerV1GetCountryInfoGet extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
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
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{countryId}'), array($this->countryId), '/V1/directory/countries/{countryId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\DirectoryCountryInformationAcquirerV1GetCountryInfoGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\DirectoryDataCountryInformationInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\DirectoryDataCountryInformationInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\DirectoryCountryInformationAcquirerV1GetCountryInfoGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
