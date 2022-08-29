<?php

namespace Kiboko\Magento\v2_3\Model;

class SalesDataTotalInterface
{
    /**
     * Base shipping amount.
     *
     * @var float
     */
    protected $baseShippingAmount;
    /**
     * Base shipping canceled.
     *
     * @var float
     */
    protected $baseShippingCanceled;
    /**
     * Base shipping discount amount.
     *
     * @var float
     */
    protected $baseShippingDiscountAmount;
    /**
     * Base shipping discount tax compensation amount.
     *
     * @var float
     */
    protected $baseShippingDiscountTaxCompensationAmnt;
    /**
     * Base shipping including tax.
     *
     * @var float
     */
    protected $baseShippingInclTax;
    /**
     * Base shipping invoiced.
     *
     * @var float
     */
    protected $baseShippingInvoiced;
    /**
     * Base shipping refunded.
     *
     * @var float
     */
    protected $baseShippingRefunded;
    /**
     * Base shipping tax amount.
     *
     * @var float
     */
    protected $baseShippingTaxAmount;
    /**
     * Base shipping tax refunded.
     *
     * @var float
     */
    protected $baseShippingTaxRefunded;
    /**
     * Shipping amount.
     *
     * @var float
     */
    protected $shippingAmount;
    /**
     * Shipping canceled amount.
     *
     * @var float
     */
    protected $shippingCanceled;
    /**
     * Shipping discount amount.
     *
     * @var float
     */
    protected $shippingDiscountAmount;
    /**
     * Shipping discount tax compensation amount.
     *
     * @var float
     */
    protected $shippingDiscountTaxCompensationAmount;
    /**
     * Shipping including tax amount.
     *
     * @var float
     */
    protected $shippingInclTax;
    /**
     * Shipping invoiced amount.
     *
     * @var float
     */
    protected $shippingInvoiced;
    /**
     * Shipping refunded amount.
     *
     * @var float
     */
    protected $shippingRefunded;
    /**
     * Shipping tax amount.
     *
     * @var float
     */
    protected $shippingTaxAmount;
    /**
     * Shipping tax refunded amount.
     *
     * @var float
     */
    protected $shippingTaxRefunded;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\TotalInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Base shipping amount.
     *
     * @return float
     */
    public function getBaseShippingAmount(): float
    {
        return $this->baseShippingAmount;
    }
    /**
     * Base shipping amount.
     *
     * @param float $baseShippingAmount
     *
     * @return self
     */
    public function setBaseShippingAmount(float $baseShippingAmount): self
    {
        $this->baseShippingAmount = $baseShippingAmount;
        return $this;
    }
    /**
     * Base shipping canceled.
     *
     * @return float
     */
    public function getBaseShippingCanceled(): float
    {
        return $this->baseShippingCanceled;
    }
    /**
     * Base shipping canceled.
     *
     * @param float $baseShippingCanceled
     *
     * @return self
     */
    public function setBaseShippingCanceled(float $baseShippingCanceled): self
    {
        $this->baseShippingCanceled = $baseShippingCanceled;
        return $this;
    }
    /**
     * Base shipping discount amount.
     *
     * @return float
     */
    public function getBaseShippingDiscountAmount(): float
    {
        return $this->baseShippingDiscountAmount;
    }
    /**
     * Base shipping discount amount.
     *
     * @param float $baseShippingDiscountAmount
     *
     * @return self
     */
    public function setBaseShippingDiscountAmount(float $baseShippingDiscountAmount): self
    {
        $this->baseShippingDiscountAmount = $baseShippingDiscountAmount;
        return $this;
    }
    /**
     * Base shipping discount tax compensation amount.
     *
     * @return float
     */
    public function getBaseShippingDiscountTaxCompensationAmnt(): float
    {
        return $this->baseShippingDiscountTaxCompensationAmnt;
    }
    /**
     * Base shipping discount tax compensation amount.
     *
     * @param float $baseShippingDiscountTaxCompensationAmnt
     *
     * @return self
     */
    public function setBaseShippingDiscountTaxCompensationAmnt(float $baseShippingDiscountTaxCompensationAmnt): self
    {
        $this->baseShippingDiscountTaxCompensationAmnt = $baseShippingDiscountTaxCompensationAmnt;
        return $this;
    }
    /**
     * Base shipping including tax.
     *
     * @return float
     */
    public function getBaseShippingInclTax(): float
    {
        return $this->baseShippingInclTax;
    }
    /**
     * Base shipping including tax.
     *
     * @param float $baseShippingInclTax
     *
     * @return self
     */
    public function setBaseShippingInclTax(float $baseShippingInclTax): self
    {
        $this->baseShippingInclTax = $baseShippingInclTax;
        return $this;
    }
    /**
     * Base shipping invoiced.
     *
     * @return float
     */
    public function getBaseShippingInvoiced(): float
    {
        return $this->baseShippingInvoiced;
    }
    /**
     * Base shipping invoiced.
     *
     * @param float $baseShippingInvoiced
     *
     * @return self
     */
    public function setBaseShippingInvoiced(float $baseShippingInvoiced): self
    {
        $this->baseShippingInvoiced = $baseShippingInvoiced;
        return $this;
    }
    /**
     * Base shipping refunded.
     *
     * @return float
     */
    public function getBaseShippingRefunded(): float
    {
        return $this->baseShippingRefunded;
    }
    /**
     * Base shipping refunded.
     *
     * @param float $baseShippingRefunded
     *
     * @return self
     */
    public function setBaseShippingRefunded(float $baseShippingRefunded): self
    {
        $this->baseShippingRefunded = $baseShippingRefunded;
        return $this;
    }
    /**
     * Base shipping tax amount.
     *
     * @return float
     */
    public function getBaseShippingTaxAmount(): float
    {
        return $this->baseShippingTaxAmount;
    }
    /**
     * Base shipping tax amount.
     *
     * @param float $baseShippingTaxAmount
     *
     * @return self
     */
    public function setBaseShippingTaxAmount(float $baseShippingTaxAmount): self
    {
        $this->baseShippingTaxAmount = $baseShippingTaxAmount;
        return $this;
    }
    /**
     * Base shipping tax refunded.
     *
     * @return float
     */
    public function getBaseShippingTaxRefunded(): float
    {
        return $this->baseShippingTaxRefunded;
    }
    /**
     * Base shipping tax refunded.
     *
     * @param float $baseShippingTaxRefunded
     *
     * @return self
     */
    public function setBaseShippingTaxRefunded(float $baseShippingTaxRefunded): self
    {
        $this->baseShippingTaxRefunded = $baseShippingTaxRefunded;
        return $this;
    }
    /**
     * Shipping amount.
     *
     * @return float
     */
    public function getShippingAmount(): float
    {
        return $this->shippingAmount;
    }
    /**
     * Shipping amount.
     *
     * @param float $shippingAmount
     *
     * @return self
     */
    public function setShippingAmount(float $shippingAmount): self
    {
        $this->shippingAmount = $shippingAmount;
        return $this;
    }
    /**
     * Shipping canceled amount.
     *
     * @return float
     */
    public function getShippingCanceled(): float
    {
        return $this->shippingCanceled;
    }
    /**
     * Shipping canceled amount.
     *
     * @param float $shippingCanceled
     *
     * @return self
     */
    public function setShippingCanceled(float $shippingCanceled): self
    {
        $this->shippingCanceled = $shippingCanceled;
        return $this;
    }
    /**
     * Shipping discount amount.
     *
     * @return float
     */
    public function getShippingDiscountAmount(): float
    {
        return $this->shippingDiscountAmount;
    }
    /**
     * Shipping discount amount.
     *
     * @param float $shippingDiscountAmount
     *
     * @return self
     */
    public function setShippingDiscountAmount(float $shippingDiscountAmount): self
    {
        $this->shippingDiscountAmount = $shippingDiscountAmount;
        return $this;
    }
    /**
     * Shipping discount tax compensation amount.
     *
     * @return float
     */
    public function getShippingDiscountTaxCompensationAmount(): float
    {
        return $this->shippingDiscountTaxCompensationAmount;
    }
    /**
     * Shipping discount tax compensation amount.
     *
     * @param float $shippingDiscountTaxCompensationAmount
     *
     * @return self
     */
    public function setShippingDiscountTaxCompensationAmount(float $shippingDiscountTaxCompensationAmount): self
    {
        $this->shippingDiscountTaxCompensationAmount = $shippingDiscountTaxCompensationAmount;
        return $this;
    }
    /**
     * Shipping including tax amount.
     *
     * @return float
     */
    public function getShippingInclTax(): float
    {
        return $this->shippingInclTax;
    }
    /**
     * Shipping including tax amount.
     *
     * @param float $shippingInclTax
     *
     * @return self
     */
    public function setShippingInclTax(float $shippingInclTax): self
    {
        $this->shippingInclTax = $shippingInclTax;
        return $this;
    }
    /**
     * Shipping invoiced amount.
     *
     * @return float
     */
    public function getShippingInvoiced(): float
    {
        return $this->shippingInvoiced;
    }
    /**
     * Shipping invoiced amount.
     *
     * @param float $shippingInvoiced
     *
     * @return self
     */
    public function setShippingInvoiced(float $shippingInvoiced): self
    {
        $this->shippingInvoiced = $shippingInvoiced;
        return $this;
    }
    /**
     * Shipping refunded amount.
     *
     * @return float
     */
    public function getShippingRefunded(): float
    {
        return $this->shippingRefunded;
    }
    /**
     * Shipping refunded amount.
     *
     * @param float $shippingRefunded
     *
     * @return self
     */
    public function setShippingRefunded(float $shippingRefunded): self
    {
        $this->shippingRefunded = $shippingRefunded;
        return $this;
    }
    /**
     * Shipping tax amount.
     *
     * @return float
     */
    public function getShippingTaxAmount(): float
    {
        return $this->shippingTaxAmount;
    }
    /**
     * Shipping tax amount.
     *
     * @param float $shippingTaxAmount
     *
     * @return self
     */
    public function setShippingTaxAmount(float $shippingTaxAmount): self
    {
        $this->shippingTaxAmount = $shippingTaxAmount;
        return $this;
    }
    /**
     * Shipping tax refunded amount.
     *
     * @return float
     */
    public function getShippingTaxRefunded(): float
    {
        return $this->shippingTaxRefunded;
    }
    /**
     * Shipping tax refunded amount.
     *
     * @param float $shippingTaxRefunded
     *
     * @return self
     */
    public function setShippingTaxRefunded(float $shippingTaxRefunded): self
    {
        $this->shippingTaxRefunded = $shippingTaxRefunded;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\TotalInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\TotalInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
