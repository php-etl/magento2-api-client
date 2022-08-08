<?php

namespace Kiboko\Magento\V2\Endpoint;

class CompanyCreditCreditBalanceManagementV1DecreasePost extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $creditId;
    /**
     * Decreases the company credit with an Update, Reimburse, or Purchase transaction. This transaction increases company's outstanding balance and decreases company's available credit.
     *
     * @param int $creditId
     * @param \Kiboko\Magento\V2\Model\V1CompanyCreditsCreditIdDecreaseBalancePostBody $companyCreditCreditBalanceManagementV1DecreasePostBody
     */
    public function __construct(int $creditId, \Kiboko\Magento\V2\Model\V1CompanyCreditsCreditIdDecreaseBalancePostBody $companyCreditCreditBalanceManagementV1DecreasePostBody)
    {
        $this->creditId = $creditId;
        $this->body = $companyCreditCreditBalanceManagementV1DecreasePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{creditId}'), array($this->creditId), '/V1/companyCredits/{creditId}/decreaseBalance');
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
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditBalanceManagementV1DecreasePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\CompanyCreditCreditBalanceManagementV1DecreasePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
