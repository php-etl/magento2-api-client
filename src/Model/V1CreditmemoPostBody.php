<?php

namespace Kiboko\Magento\V2\Model;

class V1CreditmemoPostBody
{
    /**
     * Credit memo interface. After a customer places and pays for an order and an invoice has been issued, the merchant can create a credit memo to refund all or part of the amount paid for any returned or undelivered items. The memo restores funds to the customer account so that the customer can make future purchases.
     *
     * @var SalesDataCreditmemoInterface
     */
    protected $entity;
    /**
     * Credit memo interface. After a customer places and pays for an order and an invoice has been issued, the merchant can create a credit memo to refund all or part of the amount paid for any returned or undelivered items. The memo restores funds to the customer account so that the customer can make future purchases.
     *
     * @return SalesDataCreditmemoInterface
     */
    public function getEntity() : SalesDataCreditmemoInterface
    {
        return $this->entity;
    }
    /**
     * Credit memo interface. After a customer places and pays for an order and an invoice has been issued, the merchant can create a credit memo to refund all or part of the amount paid for any returned or undelivered items. The memo restores funds to the customer account so that the customer can make future purchases.
     *
     * @param SalesDataCreditmemoInterface $entity
     *
     * @return self
     */
    public function setEntity(SalesDataCreditmemoInterface $entity) : self
    {
        $this->entity = $entity;
        return $this;
    }
}