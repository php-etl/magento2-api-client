<?php

namespace Kiboko\Magento\Model;

class V1CreditmemoPostBody
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
     * Credit memo interface. After a customer places and pays for an order and an invoice has been issued, the merchant can create a credit memo to refund all or part of the amount paid for any returned or undelivered items. The memo restores funds to the customer account so that the customer can make future purchases.
     *
     * @var SalesDataCreditmemoInterface|null
     */
    protected $entity;
    /**
     * Credit memo interface. After a customer places and pays for an order and an invoice has been issued, the merchant can create a credit memo to refund all or part of the amount paid for any returned or undelivered items. The memo restores funds to the customer account so that the customer can make future purchases.
     *
     * @return SalesDataCreditmemoInterface|null
     */
    public function getEntity() : ?SalesDataCreditmemoInterface
    {
        return $this->entity;
    }
    /**
     * Credit memo interface. After a customer places and pays for an order and an invoice has been issued, the merchant can create a credit memo to refund all or part of the amount paid for any returned or undelivered items. The memo restores funds to the customer account so that the customer can make future purchases.
     *
     * @param SalesDataCreditmemoInterface|null $entity
     *
     * @return self
     */
    public function setEntity(?SalesDataCreditmemoInterface $entity) : self
    {
        $this->initialized['entity'] = true;
        $this->entity = $entity;
        return $this;
    }
}