<?php

namespace Kiboko\Magento\v2_4\Model;

class V1ShipmentPostBody
{
    /**
     * Shipment interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package.
     *
     * @var SalesDataShipmentInterface
     */
    protected $entity;
    /**
     * Shipment interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package.
     *
     * @return SalesDataShipmentInterface
     */
    public function getEntity(): SalesDataShipmentInterface
    {
        return $this->entity;
    }
    /**
     * Shipment interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package.
     *
     * @param SalesDataShipmentInterface $entity
     *
     * @return self
     */
    public function setEntity(SalesDataShipmentInterface $entity): self
    {
        $this->entity = $entity;
        return $this;
    }
}
