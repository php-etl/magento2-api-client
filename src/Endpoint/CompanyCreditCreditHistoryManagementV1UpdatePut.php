<?php

namespace Kiboko\Magento\V2\Endpoint;

class CompanyCreditCreditHistoryManagementV1UpdatePut extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $historyId;
    /**
     * Update the PO Number and/or comment for a Reimburse transaction.
     *
     * @param int $historyId
     * @param \Kiboko\Magento\V2\Model\V1CompanyCreditsHistoryHistoryIdPutBody $companyCreditCreditHistoryManagementV1UpdatePutBody
     */
    public function __construct(int $historyId, \Kiboko\Magento\V2\Model\V1CompanyCreditsHistoryHistoryIdPutBody $companyCreditCreditHistoryManagementV1UpdatePutBody)
    {
        $this->historyId = $historyId;
        $this->body = $companyCreditCreditHistoryManagementV1UpdatePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{historyId}'), array($this->historyId), '/V1/companyCredits/history/{historyId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
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
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\V2\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
