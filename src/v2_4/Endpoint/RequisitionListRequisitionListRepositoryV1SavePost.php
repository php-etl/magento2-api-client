<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class RequisitionListRequisitionListRepositoryV1SavePost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    /**
     * Save Requisition List
     *
     * @param \Kiboko\Magento\v2_4\Model\V1RequisitionListsPostBody $requisitionListRequisitionListRepositoryV1SavePostBody
     */
    public function __construct(\Kiboko\Magento\v2_4\Model\V1RequisitionListsPostBody $requisitionListRequisitionListRepositoryV1SavePostBody)
    {
        $this->body = $requisitionListRequisitionListRepositoryV1SavePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/requisition_lists';
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
     * @throws \Kiboko\Magento\v2_4\Exception\RequisitionListRequisitionListRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_4\Exception\RequisitionListRequisitionListRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\RequisitionListDataRequisitionListInterface|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\RequisitionListDataRequisitionListInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\RequisitionListRequisitionListRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\RequisitionListRequisitionListRepositoryV1SavePostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
