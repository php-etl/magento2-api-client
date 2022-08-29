<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CompanyTeamRepositoryV1GetGet extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $teamId;
    /**
     * Returns data for a team in the company, by entity id.
     *
     * @param int $teamId
     */
    public function __construct(int $teamId)
    {
        $this->teamId = $teamId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{teamId}'), array($this->teamId), '/V1/team/{teamId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CompanyDataTeamInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CompanyDataTeamInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1GetGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1GetGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
