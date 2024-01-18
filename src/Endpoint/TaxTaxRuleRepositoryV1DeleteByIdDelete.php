<?php

namespace Kiboko\Magento\Endpoint;

class TaxTaxRuleRepositoryV1DeleteByIdDelete extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $ruleId;
    /**
     * Delete TaxRule
     *
     * @param int $ruleId 
     */
    public function __construct(int $ruleId)
    {
        $this->ruleId = $ruleId;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{ruleId}'), array($this->ruleId), '/V1/taxRules/{ruleId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteInternalServerErrorException
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
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}