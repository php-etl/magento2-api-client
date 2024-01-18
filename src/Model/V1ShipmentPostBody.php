<?php

namespace Kiboko\Magento\Model;

class V1ShipmentPostBody
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
     * Shipment interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package.
     *
     * @var SalesDataShipmentInterface|null
     */
    protected $entity;
    /**
     * Shipment interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package.
     *
     * @return SalesDataShipmentInterface|null
     */
    public function getEntity() : ?SalesDataShipmentInterface
    {
        return $this->entity;
    }
    /**
     * Shipment interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package.
     *
     * @param SalesDataShipmentInterface|null $entity
     *
     * @return self
     */
    public function setEntity(?SalesDataShipmentInterface $entity) : self
    {
        $this->initialized['entity'] = true;
        $this->entity = $entity;
        return $this;
    }
}