<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return '/V1/temando/rma/{rmaId}/shipments';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
