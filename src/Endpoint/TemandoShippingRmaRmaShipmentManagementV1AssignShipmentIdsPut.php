<?php

namespace Kiboko\Magento\V2\Endpoint;

class TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPut extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $rmaId;
    /**
     * Assign platform shipment IDs to a core RMA entity.
     *
     * @param int $rmaId
     * @param \Kiboko\Magento\V2\Model\V1TemandoRmaRmaIdShipmentsPutBody $temandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutBody
     */
    public function __construct(int $rmaId, \Kiboko\Magento\V2\Model\V1TemandoRmaRmaIdShipmentsPutBody $temandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutBody)
    {
        $this->rmaId = $rmaId;
        $this->body = $temandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{rmaId}'), array($this->rmaId), '/V1/temando/rma/{rmaId}/shipments');
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
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\V2\Exception\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
