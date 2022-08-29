<?php

namespace Kiboko\Magento\v2_3\Model;

class V1ShipmentTrackPostBody
{
    /**
     * Shipment track interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package. Merchants and customers can track shipments.
     *
     * @var SalesDataShipmentTrackInterface
     */
    protected $entity;
    /**
     * Shipment track interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package. Merchants and customers can track shipments.
     *
     * @return SalesDataShipmentTrackInterface
     */
    public function getEntity(): SalesDataShipmentTrackInterface
    {
        return $this->entity;
    }
    /**
     * Shipment track interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package. Merchants and customers can track shipments.
     *
     * @param SalesDataShipmentTrackInterface $entity
     *
     * @return self
     */
    public function setEntity(SalesDataShipmentTrackInterface $entity): self
    {
        $this->entity = $entity;
        return $this;
    }
}
