<?php

namespace Kiboko\Magento\v2_3\Model;

class AmazonPaymentDataOrderLinkInterface
{
    /**
     * Amazon order reference id
     *
     * @var string
     */
    protected $amazonOrderReferenceId;
    /**
     * Order id
     *
     * @var int
     */
    protected $orderId;
    /**
     * Amazon order reference id
     *
     * @return string
     */
    public function getAmazonOrderReferenceId(): string
    {
        return $this->amazonOrderReferenceId;
    }
    /**
     * Amazon order reference id
     *
     * @param string $amazonOrderReferenceId
     *
     * @return self
     */
    public function setAmazonOrderReferenceId(string $amazonOrderReferenceId): self
    {
        $this->amazonOrderReferenceId = $amazonOrderReferenceId;
        return $this;
    }
    /**
     * Order id
     *
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    /**
     * Order id
     *
     * @param int $orderId
     *
     * @return self
     */
    public function setOrderId(int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }
}
