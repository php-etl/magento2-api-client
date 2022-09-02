<?php

namespace Kiboko\Magento\V2_4\Model;

class V1ShipmentIdCommentsPostBody
{
    /**
     * Shipment comment interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package. A shipment document can contain comments.
     *
     * @var SalesDataShipmentCommentInterface
     */
    protected $entity;
    /**
     * Shipment comment interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package. A shipment document can contain comments.
     *
     * @return SalesDataShipmentCommentInterface
     */
    public function getEntity(): SalesDataShipmentCommentInterface
    {
        return $this->entity;
    }
    /**
     * Shipment comment interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package. A shipment document can contain comments.
     *
     * @param SalesDataShipmentCommentInterface $entity
     *
     * @return self
     */
    public function setEntity(SalesDataShipmentCommentInterface $entity): self
    {
        $this->entity = $entity;
        return $this;
    }
}
