<?php

namespace Kiboko\Magento\Model;

class V1ShipmentIdCommentsPostBody
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
     * Shipment comment interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package. A shipment document can contain comments.
     *
     * @var SalesDataShipmentCommentInterface|null
     */
    protected $entity;
    /**
     * Shipment comment interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package. A shipment document can contain comments.
     *
     * @return SalesDataShipmentCommentInterface|null
     */
    public function getEntity() : ?SalesDataShipmentCommentInterface
    {
        return $this->entity;
    }
    /**
     * Shipment comment interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package. A shipment document can contain comments.
     *
     * @param SalesDataShipmentCommentInterface|null $entity
     *
     * @return self
     */
    public function setEntity(?SalesDataShipmentCommentInterface $entity) : self
    {
        $this->initialized['entity'] = true;
        $this->entity = $entity;
        return $this;
    }
}