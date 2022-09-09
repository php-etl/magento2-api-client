<?php

namespace Kiboko\Magento\V2_4\Model;

class V1ShipmentTrackPostBody
{
    /**
     * Shipment track interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package. Merchants and customers can track shipments.
     *
     * @var SalesDataShipmentTrackInterface|null
     */
    protected $entity;
    /**
     * Shipment track interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package. Merchants and customers can track shipments.
     *
     * @return SalesDataShipmentTrackInterface|null
     */
    public function getEntity(): ?SalesDataShipmentTrackInterface
    {
        return $this->entity;
    }
    /**
     * Shipment track interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package. Merchants and customers can track shipments.
     *
     * @param SalesDataShipmentTrackInterface|null $entity
     *
     * @return self
     */
    public function setEntity(?SalesDataShipmentTrackInterface $entity): self
    {
        $this->entity = $entity;
        return $this;
    }
}
