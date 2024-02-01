<?php

namespace Kiboko\Magento\Endpoint;

class PostV1TfaProviderAuthySendtokenVia extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $via;
    /**
     * Send a one time password to a device using authy
     *
     * @param string $via 
     * @param \Kiboko\Magento\Model\V1TfaProviderAuthySendTokenViaPostBody $postV1TfaProviderAuthySendtokenViaBody 
     */
    public function __construct(string $via, \Kiboko\Magento\Model\V1TfaProviderAuthySendTokenViaPostBody $postV1TfaProviderAuthySendtokenViaBody)
    {
        $this->via = $via;
        $this->body = $postV1TfaProviderAuthySendtokenViaBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{via}'), array($this->via), '/V1/tfa/provider/authy/send-token/{via}');
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
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}