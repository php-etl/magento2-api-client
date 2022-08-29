<?php

namespace Kiboko\Magento\v2_3\Model;

class V1CreditmemoRefundPostBody
{
    /**
     * Credit memo interface. After a customer places and pays for an order and an invoice has been issued, the merchant can create a credit memo to refund all or part of the amount paid for any returned or undelivered items. The memo restores funds to the customer account so that the customer can make future purchases.
     *
     * @var SalesDataCreditmemoInterface
     */
    protected $creditmemo;
    /**
     * 
     *
     * @var bool
     */
    protected $offlineRequested;
    /**
     * Credit memo interface. After a customer places and pays for an order and an invoice has been issued, the merchant can create a credit memo to refund all or part of the amount paid for any returned or undelivered items. The memo restores funds to the customer account so that the customer can make future purchases.
     *
     * @return SalesDataCreditmemoInterface
     */
    public function getCreditmemo() : SalesDataCreditmemoInterface
    {
        return $this->creditmemo;
    }
    /**
     * Credit memo interface. After a customer places and pays for an order and an invoice has been issued, the merchant can create a credit memo to refund all or part of the amount paid for any returned or undelivered items. The memo restores funds to the customer account so that the customer can make future purchases.
     *
     * @param SalesDataCreditmemoInterface $creditmemo
     *
     * @return self
     */
    public function setCreditmemo(SalesDataCreditmemoInterface $creditmemo) : self
    {
        $this->creditmemo = $creditmemo;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOfflineRequested() : bool
    {
        return $this->offlineRequested;
    }
    /**
     * 
     *
     * @param bool $offlineRequested
     *
     * @return self
     */
    public function setOfflineRequested(bool $offlineRequested) : self
    {
        $this->offlineRequested = $offlineRequested;
        return $this;
    }
}