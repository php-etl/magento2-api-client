<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class RmaTrackManagementV1AddTrackPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Add track
     *
     * @param int $id 
     * @param \Kiboko\Magento\v2_3\Model\V1ReturnsIdTrackingNumbersPostBody $rmaTrackManagementV1AddTrackPostBody 
     */
    public function __construct(int $id, \Kiboko\Magento\v2_3\Model\V1ReturnsIdTrackingNumbersPostBody $rmaTrackManagementV1AddTrackPostBody)
    {
        $this->id = $id;
        $this->body = $rmaTrackManagementV1AddTrackPostBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/V1/returns/{id}/tracking-numbers');
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
     * @throws \Kiboko\Magento\v2_3\Exception\RmaTrackManagementV1AddTrackPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\RmaTrackManagementV1AddTrackPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}