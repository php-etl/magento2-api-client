<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CompanyTeamRepositoryV1CreatePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    protected $companyId;
    /**
     * Create a team in the company structure.
     *
     * @param int $companyId 
     * @param \Kiboko\Magento\v2_3\Model\V1TeamCompanyIdPostBody $companyTeamRepositoryV1CreatePostBody 
     */
    public function __construct(int $companyId, \Kiboko\Magento\v2_3\Model\V1TeamCompanyIdPostBody $companyTeamRepositoryV1CreatePostBody)
    {
        $this->companyId = $companyId;
        $this->body = $companyTeamRepositoryV1CreatePostBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{companyId}'), array($this->companyId), '/V1/team/{companyId}');
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
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyTeamRepositoryV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyTeamRepositoryV1CreatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CompanyTeamRepositoryV1CreatePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CompanyTeamRepositoryV1CreatePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}