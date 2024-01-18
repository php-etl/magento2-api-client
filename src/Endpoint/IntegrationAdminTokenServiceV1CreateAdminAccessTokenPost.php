<?php

namespace Kiboko\Magento\Endpoint;

class IntegrationAdminTokenServiceV1CreateAdminAccessTokenPost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Create access token for admin given the admin credentials.
     *
     * @param \Kiboko\Magento\Model\V1IntegrationAdminTokenPostBody $integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1IntegrationAdminTokenPostBody $integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody)
    {
        $this->body = $integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/integration/admin/token';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBadRequestException
     * @throws \Kiboko\Magento\Exception\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostInternalServerErrorException
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
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}