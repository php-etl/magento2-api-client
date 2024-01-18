<?php

namespace Kiboko\Magento\Model;

class AmazonPaymentDataOrderLinkInterface
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
     * Amazon order reference id
     *
     * @var string|null
     */
    protected $amazonOrderReferenceId;
    /**
     * Order id
     *
     * @var int|null
     */
    protected $orderId;
    /**
     * Amazon order reference id
     *
     * @return string|null
     */
    public function getAmazonOrderReferenceId() : ?string
    {
        return $this->amazonOrderReferenceId;
    }
    /**
     * Amazon order reference id
     *
     * @param string|null $amazonOrderReferenceId
     *
     * @return self
     */
    public function setAmazonOrderReferenceId(?string $amazonOrderReferenceId) : self
    {
        $this->initialized['amazonOrderReferenceId'] = true;
        $this->amazonOrderReferenceId = $amazonOrderReferenceId;
        return $this;
    }
    /**
     * Order id
     *
     * @return int|null
     */
    public function getOrderId() : ?int
    {
        return $this->orderId;
    }
    /**
     * Order id
     *
     * @param int|null $orderId
     *
     * @return self
     */
    public function setOrderId(?int $orderId) : self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;
        return $this;
    }
}