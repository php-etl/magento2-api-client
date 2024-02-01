<?php

namespace Kiboko\Magento\Model;

class V1ShipmentTrackPostBody
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    public function getEntity() : ?SalesDataShipmentTrackInterface
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
    public function setEntity(?SalesDataShipmentTrackInterface $entity) : self
    {
        $this->initialized['entity'] = true;
        $this->entity = $entity;
        return $this;
    }
}