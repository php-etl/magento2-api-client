<?php

namespace Kiboko\Magento\V2_1\Endpoint;

class NegotiableQuoteAttachmentContentManagementV1GetGet extends \Kiboko\Magento\V2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_1\Runtime\Client\EndpointTrait;
    /**
     * Returns content for one or more files attached on the quote comment.
     *
     * @param array $queryParameters {
     *     @var array $attachmentIds
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/V1/negotiableQuote/attachmentContent';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('attachmentIds'));
        $optionsResolver->setRequired(array('attachmentIds'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('attachmentIds', array('array'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2_1\Exception\NegotiableQuoteAttachmentContentManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2_1\Exception\NegotiableQuoteAttachmentContentManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2_1\Model\NegotiableQuoteDataAttachmentContentInterface[]|\Kiboko\Magento\V2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\NegotiableQuoteDataAttachmentContentInterface[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_1\Exception\NegotiableQuoteAttachmentContentManagementV1GetGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_1\Exception\NegotiableQuoteAttachmentContentManagementV1GetGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
