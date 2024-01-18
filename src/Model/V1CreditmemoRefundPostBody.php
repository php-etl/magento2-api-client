<?php

namespace Kiboko\Magento\Model;

class V1CreditmemoRefundPostBody
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
    protected $creditmemo;
    /**
     * 
     *
     * @var bool|null
     */
    protected $offlineRequested;
    /**
     * Credit memo interface. After a customer places and pays for an order and an invoice has been issued, the merchant can create a credit memo to refund all or part of the amount paid for any returned or undelivered items. The memo restores funds to the customer account so that the customer can make future purchases.
     *
     * @return SalesDataCreditmemoInterface|null
     */
    public function getCreditmemo() : ?SalesDataCreditmemoInterface
    {
        return $this->creditmemo;
    }
    /**
     * Credit memo interface. After a customer places and pays for an order and an invoice has been issued, the merchant can create a credit memo to refund all or part of the amount paid for any returned or undelivered items. The memo restores funds to the customer account so that the customer can make future purchases.
     *
     * @param SalesDataCreditmemoInterface|null $creditmemo
     *
     * @return self
     */
    public function setCreditmemo(?SalesDataCreditmemoInterface $creditmemo) : self
    {
        $this->initialized['creditmemo'] = true;
        $this->creditmemo = $creditmemo;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOfflineRequested() : ?bool
    {
        return $this->offlineRequested;
    }
    /**
     * 
     *
     * @param bool|null $offlineRequested
     *
     * @return self
     */
    public function setOfflineRequested(?bool $offlineRequested) : self
    {
        $this->initialized['offlineRequested'] = true;
        $this->offlineRequested = $offlineRequested;
        return $this;
    }
}