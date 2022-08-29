<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class CompanyCreditCreditBalanceManagementV1IncreasePost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $creditId;
    /**
     * Increases the company credit with an Allocate, Update, Refund, Revert, or Reimburse transaction. This transaction decreases company's outstanding balance and increases company's available credit.
     *
     * @param int $creditId
     * @param \Kiboko\Magento\v2_4\Model\V1CompanyCreditsCreditIdIncreaseBalancePostBody $companyCreditCreditBalanceManagementV1IncreasePostBody
     */
    public function __construct(int $creditId, \Kiboko\Magento\v2_4\Model\V1CompanyCreditsCreditIdIncreaseBalancePostBody $companyCreditCreditBalanceManagementV1IncreasePostBody)
    {
        $this->creditId = $creditId;
        $this->body = $companyCreditCreditBalanceManagementV1IncreasePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{creditId}'), array($this->creditId), '/V1/companyCredits/{creditId}/increaseBalance');
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
     * @throws \Kiboko\Magento\v2_4\Exception\CompanyCreditCreditBalanceManagementV1IncreasePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CompanyCreditCreditBalanceManagementV1IncreasePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
