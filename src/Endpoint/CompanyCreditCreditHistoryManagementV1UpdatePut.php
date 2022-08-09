<?php

namespace Kiboko\Magento\V2\Endpoint;

class CompanyCreditCreditHistoryManagementV1UpdatePut extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    protected $historyId;
    /**
     * Update the PO Number and/or comment for a Reimburse transaction.
     *
     * @param int $historyId 
     * @param null|\Kiboko\Magento\V2\Model\V1CompanyCreditsHistoryHistoryIdPutBody $requestBody 
     */
    public function __construct(int $historyId, ?\Kiboko\Magento\V2\Model\V1CompanyCreditsHistoryHistoryIdPutBody $requestBody = null)
    {
        $this->historyId = $historyId;
        $this->body = $requestBody;
    }
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{historyId}'), array($this->historyId), '/V1/companyCredits/history/{historyId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Kiboko\Magento\V2\Model\V1CompanyCreditsHistoryHistoryIdPutBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\V2\Model\V1CompanyCreditsHistoryHistoryIdPutBody) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
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