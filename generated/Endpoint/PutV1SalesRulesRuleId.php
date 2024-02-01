<?php

namespace Kiboko\Magento\Endpoint;

class PutV1SalesRulesRuleId extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $ruleId;
    /**
     * Save sales rule.
     *
     * @param string $ruleId 
     * @param \Kiboko\Magento\Model\V1SalesRulesRuleIdPutBody $putV1SalesRulesRuleIdBody 
     */
    public function __construct(string $ruleId, \Kiboko\Magento\Model\V1SalesRulesRuleIdPutBody $putV1SalesRulesRuleIdBody)
    {
        $this->ruleId = $ruleId;
        $this->body = $putV1SalesRulesRuleIdBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{ruleId}'), array($this->ruleId), '/V1/salesRules/{ruleId}');
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
     * @throws \Kiboko\Magento\Exception\PutV1SalesRulesRuleIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1SalesRulesRuleIdBadRequestException
     * @throws \Kiboko\Magento\Exception\PutV1SalesRulesRuleIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\SalesRuleDataRuleInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\PutV1SalesRulesRuleIdUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\PutV1SalesRulesRuleIdBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\PutV1SalesRulesRuleIdInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}