<?php

namespace Kiboko\Magento\V2_3\Model;

class SalesDataCreditmemoCreationArgumentsInterface
{
    /**
     * Credit memo negative adjustment.
     *
     * @var float|null
     */
    protected $adjustmentNegative;
    /**
     * Credit memo positive adjustment.
     *
     * @var float|null
     */
    protected $adjustmentPositive;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoCreationArgumentsInterface
     *
     * @var SalesDataCreditmemoCreationArgumentsExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Credit memo shipping amount.
     *
     * @var float|null
     */
    protected $shippingAmount;
    /**
     * Credit memo negative adjustment.
     *
     * @return float|null
     */
    public function getAdjustmentNegative(): ?float
    {
        return $this->adjustmentNegative;
    }
    /**
     * Credit memo negative adjustment.
     *
     * @param float|null $adjustmentNegative
     *
     * @return self
     */
    public function setAdjustmentNegative(?float $adjustmentNegative): self
    {
        $this->adjustmentNegative = $adjustmentNegative;
        return $this;
    }
    /**
     * Credit memo positive adjustment.
     *
     * @return float|null
     */
    public function getAdjustmentPositive(): ?float
    {
        return $this->adjustmentPositive;
    }
    /**
     * Credit memo positive adjustment.
     *
     * @param float|null $adjustmentPositive
     *
     * @return self
     */
    public function setAdjustmentPositive(?float $adjustmentPositive): self
    {
        $this->adjustmentPositive = $adjustmentPositive;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoCreationArgumentsInterface
     *
     * @return SalesDataCreditmemoCreationArgumentsExtensionInterface|null
     */
    public function getExtensionAttributes(): ?SalesDataCreditmemoCreationArgumentsExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoCreationArgumentsInterface
     *
     * @param SalesDataCreditmemoCreationArgumentsExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?SalesDataCreditmemoCreationArgumentsExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Credit memo shipping amount.
     *
     * @return float|null
     */
    public function getShippingAmount(): ?float
    {
        return $this->shippingAmount;
    }
    /**
     * Credit memo shipping amount.
     *
     * @param float|null $shippingAmount
     *
     * @return self
     */
    public function setShippingAmount(?float $shippingAmount): self
    {
        $this->shippingAmount = $shippingAmount;
        return $this;
    }
}
