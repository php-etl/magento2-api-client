<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CompanyCreditCreditHistoryManagementV1UpdatePut extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    protected $historyId;
    /**
     * Update the PO Number and/or comment for a Reimburse transaction.
     *
     * @param int $historyId 
     * @param \Kiboko\Magento\v2_3\Model\V1CompanyCreditsHistoryHistoryIdPutBody $companyCreditCreditHistoryManagementV1UpdatePutBody 
     */
    public function __construct(int $historyId, \Kiboko\Magento\v2_3\Model\V1CompanyCreditsHistoryHistoryIdPutBody $companyCreditCreditHistoryManagementV1UpdatePutBody)
    {
        $this->historyId = $historyId;
        $this->body = $companyCreditCreditHistoryManagementV1UpdatePutBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
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
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}