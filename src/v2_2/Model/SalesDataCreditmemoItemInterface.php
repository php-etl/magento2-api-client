<?php

namespace Kiboko\Magento\v2_2\Model;

class SalesDataCreditmemoItemInterface
{
    /**
     * Additional data.
     *
     * @var string
     */
    protected $additionalData;
    /**
     * The base cost for a credit memo item.
     *
     * @var float
     */
    protected $baseCost;
    /**
     * The base discount amount for a credit memo item.
     *
     * @var float
     */
    protected $baseDiscountAmount;
    /**
     * The base discount tax compensation amount for a credit memo item.
     *
     * @var float
     */
    protected $baseDiscountTaxCompensationAmount;
    /**
     * The base price for a credit memo item.
     *
     * @var float
     */
    protected $basePrice;
    /**
     * Base price including tax.
     *
     * @var float
     */
    protected $basePriceInclTax;
    /**
     * Base row total.
     *
     * @var float
     */
    protected $baseRowTotal;
    /**
     * Base row total including tax.
     *
     * @var float
     */
    protected $baseRowTotalInclTax;
    /**
     * Base tax amount.
     *
     * @var float
     */
    protected $baseTaxAmount;
    /**
     * Base WEEE tax applied amount.
     *
     * @var float
     */
    protected $baseWeeeTaxAppliedAmount;
    /**
     * Base WEEE tax applied row amount.
     *
     * @var float
     */
    protected $baseWeeeTaxAppliedRowAmnt;
    /**
     * Base WEEE tax disposition.
     *
     * @var float
     */
    protected $baseWeeeTaxDisposition;
    /**
     * Base WEEE tax row disposition.
     *
     * @var float
     */
    protected $baseWeeeTaxRowDisposition;
    /**
     * Description.
     *
     * @var string
     */
    protected $description;
    /**
     * Discount amount.
     *
     * @var float
     */
    protected $discountAmount;
    /**
     * Discount tax compensation amount.
     *
     * @var float
     */
    protected $discountTaxCompensationAmount;
    /**
     * Credit memo item ID.
     *
     * @var int
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoItemInterface
     *
     * @var SalesDataCreditmemoItemExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Name.
     *
     * @var string
     */
    protected $name;
    /**
     * Order item ID.
     *
     * @var int
     */
    protected $orderItemId;
    /**
     * Parent ID.
     *
     * @var int
     */
    protected $parentId;
    /**
     * Price.
     *
     * @var float
     */
    protected $price;
    /**
     * Price including tax.
     *
     * @var float
     */
    protected $priceInclTax;
    /**
     * Product ID.
     *
     * @var int
     */
    protected $productId;
    /**
     * Quantity.
     *
     * @var float
     */
    protected $qty;
    /**
     * Row total.
     *
     * @var float
     */
    protected $rowTotal;
    /**
     * Row total including tax.
     *
     * @var float
     */
    protected $rowTotalInclTax;
    /**
     * SKU.
     *
     * @var string
     */
    protected $sku;
    /**
     * Tax amount.
     *
     * @var float
     */
    protected $taxAmount;
    /**
     * WEEE tax applied.
     *
     * @var string
     */
    protected $weeeTaxApplied;
    /**
     * WEEE tax applied amount.
     *
     * @var float
     */
    protected $weeeTaxAppliedAmount;
    /**
     * WEEE tax applied row amount.
     *
     * @var float
     */
    protected $weeeTaxAppliedRowAmount;
    /**
     * WEEE tax disposition.
     *
     * @var float
     */
    protected $weeeTaxDisposition;
    /**
     * WEEE tax row disposition.
     *
     * @var float
     */
    protected $weeeTaxRowDisposition;
    /**
     * Additional data.
     *
     * @return string
     */
    public function getAdditionalData(): string
    {
        return $this->additionalData;
    }
    /**
     * Additional data.
     *
     * @param string $additionalData
     *
     * @return self
     */
    public function setAdditionalData(string $additionalData): self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * The base cost for a credit memo item.
     *
     * @return float
     */
    public function getBaseCost(): float
    {
        return $this->baseCost;
    }
    /**
     * The base cost for a credit memo item.
     *
     * @param float $baseCost
     *
     * @return self
     */
    public function setBaseCost(float $baseCost): self
    {
        $this->baseCost = $baseCost;
        return $this;
    }
    /**
     * The base discount amount for a credit memo item.
     *
     * @return float
     */
    public function getBaseDiscountAmount(): float
    {
        return $this->baseDiscountAmount;
    }
    /**
     * The base discount amount for a credit memo item.
     *
     * @param float $baseDiscountAmount
     *
     * @return self
     */
    public function setBaseDiscountAmount(float $baseDiscountAmount): self
    {
        $this->baseDiscountAmount = $baseDiscountAmount;
        return $this;
    }
    /**
     * The base discount tax compensation amount for a credit memo item.
     *
     * @return float
     */
    public function getBaseDiscountTaxCompensationAmount(): float
    {
        return $this->baseDiscountTaxCompensationAmount;
    }
    /**
     * The base discount tax compensation amount for a credit memo item.
     *
     * @param float $baseDiscountTaxCompensationAmount
     *
     * @return self
     */
    public function setBaseDiscountTaxCompensationAmount(float $baseDiscountTaxCompensationAmount): self
    {
        $this->baseDiscountTaxCompensationAmount = $baseDiscountTaxCompensationAmount;
        return $this;
    }
    /**
     * The base price for a credit memo item.
     *
     * @return float
     */
    public function getBasePrice(): float
    {
        return $this->basePrice;
    }
    /**
     * The base price for a credit memo item.
     *
     * @param float $basePrice
     *
     * @return self
     */
    public function setBasePrice(float $basePrice): self
    {
        $this->basePrice = $basePrice;
        return $this;
    }
    /**
     * Base price including tax.
     *
     * @return float
     */
    public function getBasePriceInclTax(): float
    {
        return $this->basePriceInclTax;
    }
    /**
     * Base price including tax.
     *
     * @param float $basePriceInclTax
     *
     * @return self
     */
    public function setBasePriceInclTax(float $basePriceInclTax): self
    {
        $this->basePriceInclTax = $basePriceInclTax;
        return $this;
    }
    /**
     * Base row total.
     *
     * @return float
     */
    public function getBaseRowTotal(): float
    {
        return $this->baseRowTotal;
    }
    /**
     * Base row total.
     *
     * @param float $baseRowTotal
     *
     * @return self
     */
    public function setBaseRowTotal(float $baseRowTotal): self
    {
        $this->baseRowTotal = $baseRowTotal;
        return $this;
    }
    /**
     * Base row total including tax.
     *
     * @return float
     */
    public function getBaseRowTotalInclTax(): float
    {
        return $this->baseRowTotalInclTax;
    }
    /**
     * Base row total including tax.
     *
     * @param float $baseRowTotalInclTax
     *
     * @return self
     */
    public function setBaseRowTotalInclTax(float $baseRowTotalInclTax): self
    {
        $this->baseRowTotalInclTax = $baseRowTotalInclTax;
        return $this;
    }
    /**
     * Base tax amount.
     *
     * @return float
     */
    public function getBaseTaxAmount(): float
    {
        return $this->baseTaxAmount;
    }
    /**
     * Base tax amount.
     *
     * @param float $baseTaxAmount
     *
     * @return self
     */
    public function setBaseTaxAmount(float $baseTaxAmount): self
    {
        $this->baseTaxAmount = $baseTaxAmount;
        return $this;
    }
    /**
     * Base WEEE tax applied amount.
     *
     * @return float
     */
    public function getBaseWeeeTaxAppliedAmount(): float
    {
        return $this->baseWeeeTaxAppliedAmount;
    }
    /**
     * Base WEEE tax applied amount.
     *
     * @param float $baseWeeeTaxAppliedAmount
     *
     * @return self
     */
    public function setBaseWeeeTaxAppliedAmount(float $baseWeeeTaxAppliedAmount): self
    {
        $this->baseWeeeTaxAppliedAmount = $baseWeeeTaxAppliedAmount;
        return $this;
    }
    /**
     * Base WEEE tax applied row amount.
     *
     * @return float
     */
    public function getBaseWeeeTaxAppliedRowAmnt(): float
    {
        return $this->baseWeeeTaxAppliedRowAmnt;
    }
    /**
     * Base WEEE tax applied row amount.
     *
     * @param float $baseWeeeTaxAppliedRowAmnt
     *
     * @return self
     */
    public function setBaseWeeeTaxAppliedRowAmnt(float $baseWeeeTaxAppliedRowAmnt): self
    {
        $this->baseWeeeTaxAppliedRowAmnt = $baseWeeeTaxAppliedRowAmnt;
        return $this;
    }
    /**
     * Base WEEE tax disposition.
     *
     * @return float
     */
    public function getBaseWeeeTaxDisposition(): float
    {
        return $this->baseWeeeTaxDisposition;
    }
    /**
     * Base WEEE tax disposition.
     *
     * @param float $baseWeeeTaxDisposition
     *
     * @return self
     */
    public function setBaseWeeeTaxDisposition(float $baseWeeeTaxDisposition): self
    {
        $this->baseWeeeTaxDisposition = $baseWeeeTaxDisposition;
        return $this;
    }
    /**
     * Base WEEE tax row disposition.
     *
     * @return float
     */
    public function getBaseWeeeTaxRowDisposition(): float
    {
        return $this->baseWeeeTaxRowDisposition;
    }
    /**
     * Base WEEE tax row disposition.
     *
     * @param float $baseWeeeTaxRowDisposition
     *
     * @return self
     */
    public function setBaseWeeeTaxRowDisposition(float $baseWeeeTaxRowDisposition): self
    {
        $this->baseWeeeTaxRowDisposition = $baseWeeeTaxRowDisposition;
        return $this;
    }
    /**
     * Description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Discount amount.
     *
     * @return float
     */
    public function getDiscountAmount(): float
    {
        return $this->discountAmount;
    }
    /**
     * Discount amount.
     *
     * @param float $discountAmount
     *
     * @return self
     */
    public function setDiscountAmount(float $discountAmount): self
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }
    /**
     * Discount tax compensation amount.
     *
     * @return float
     */
    public function getDiscountTaxCompensationAmount(): float
    {
        return $this->discountTaxCompensationAmount;
    }
    /**
     * Discount tax compensation amount.
     *
     * @param float $discountTaxCompensationAmount
     *
     * @return self
     */
    public function setDiscountTaxCompensationAmount(float $discountTaxCompensationAmount): self
    {
        $this->discountTaxCompensationAmount = $discountTaxCompensationAmount;
        return $this;
    }
    /**
     * Credit memo item ID.
     *
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }
    /**
     * Credit memo item ID.
     *
     * @param int $entityId
     *
     * @return self
     */
    public function setEntityId(int $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoItemInterface
     *
     * @return SalesDataCreditmemoItemExtensionInterface
     */
    public function getExtensionAttributes(): SalesDataCreditmemoItemExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoItemInterface
     *
     * @param SalesDataCreditmemoItemExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(SalesDataCreditmemoItemExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Order item ID.
     *
     * @return int
     */
    public function getOrderItemId(): int
    {
        return $this->orderItemId;
    }
    /**
     * Order item ID.
     *
     * @param int $orderItemId
     *
     * @return self
     */
    public function setOrderItemId(int $orderItemId): self
    {
        $this->orderItemId = $orderItemId;
        return $this;
    }
    /**
     * Parent ID.
     *
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }
    /**
     * Parent ID.
     *
     * @param int $parentId
     *
     * @return self
     */
    public function setParentId(int $parentId): self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * Price.
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * Price.
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Price including tax.
     *
     * @return float
     */
    public function getPriceInclTax(): float
    {
        return $this->priceInclTax;
    }
    /**
     * Price including tax.
     *
     * @param float $priceInclTax
     *
     * @return self
     */
    public function setPriceInclTax(float $priceInclTax): self
    {
        $this->priceInclTax = $priceInclTax;
        return $this;
    }
    /**
     * Product ID.
     *
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }
    /**
     * Product ID.
     *
     * @param int $productId
     *
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }
    /**
     * Quantity.
     *
     * @return float
     */
    public function getQty(): float
    {
        return $this->qty;
    }
    /**
     * Quantity.
     *
     * @param float $qty
     *
     * @return self
     */
    public function setQty(float $qty): self
    {
        $this->qty = $qty;
        return $this;
    }
    /**
     * Row total.
     *
     * @return float
     */
    public function getRowTotal(): float
    {
        return $this->rowTotal;
    }
    /**
     * Row total.
     *
     * @param float $rowTotal
     *
     * @return self
     */
    public function setRowTotal(float $rowTotal): self
    {
        $this->rowTotal = $rowTotal;
        return $this;
    }
    /**
     * Row total including tax.
     *
     * @return float
     */
    public function getRowTotalInclTax(): float
    {
        return $this->rowTotalInclTax;
    }
    /**
     * Row total including tax.
     *
     * @param float $rowTotalInclTax
     *
     * @return self
     */
    public function setRowTotalInclTax(float $rowTotalInclTax): self
    {
        $this->rowTotalInclTax = $rowTotalInclTax;
        return $this;
    }
    /**
     * SKU.
     *
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }
    /**
     * SKU.
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Tax amount.
     *
     * @return float
     */
    public function getTaxAmount(): float
    {
        return $this->taxAmount;
    }
    /**
     * Tax amount.
     *
     * @param float $taxAmount
     *
     * @return self
     */
    public function setTaxAmount(float $taxAmount): self
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }
    /**
     * WEEE tax applied.
     *
     * @return string
     */
    public function getWeeeTaxApplied(): string
    {
        return $this->weeeTaxApplied;
    }
    /**
     * WEEE tax applied.
     *
     * @param string $weeeTaxApplied
     *
     * @return self
     */
    public function setWeeeTaxApplied(string $weeeTaxApplied): self
    {
        $this->weeeTaxApplied = $weeeTaxApplied;
        return $this;
    }
    /**
     * WEEE tax applied amount.
     *
     * @return float
     */
    public function getWeeeTaxAppliedAmount(): float
    {
        return $this->weeeTaxAppliedAmount;
    }
    /**
     * WEEE tax applied amount.
     *
     * @param float $weeeTaxAppliedAmount
     *
     * @return self
     */
    public function setWeeeTaxAppliedAmount(float $weeeTaxAppliedAmount): self
    {
        $this->weeeTaxAppliedAmount = $weeeTaxAppliedAmount;
        return $this;
    }
    /**
     * WEEE tax applied row amount.
     *
     * @return float
     */
    public function getWeeeTaxAppliedRowAmount(): float
    {
        return $this->weeeTaxAppliedRowAmount;
    }
    /**
     * WEEE tax applied row amount.
     *
     * @param float $weeeTaxAppliedRowAmount
     *
     * @return self
     */
    public function setWeeeTaxAppliedRowAmount(float $weeeTaxAppliedRowAmount): self
    {
        $this->weeeTaxAppliedRowAmount = $weeeTaxAppliedRowAmount;
        return $this;
    }
    /**
     * WEEE tax disposition.
     *
     * @return float
     */
    public function getWeeeTaxDisposition(): float
    {
        return $this->weeeTaxDisposition;
    }
    /**
     * WEEE tax disposition.
     *
     * @param float $weeeTaxDisposition
     *
     * @return self
     */
    public function setWeeeTaxDisposition(float $weeeTaxDisposition): self
    {
        $this->weeeTaxDisposition = $weeeTaxDisposition;
        return $this;
    }
    /**
     * WEEE tax row disposition.
     *
     * @return float
     */
    public function getWeeeTaxRowDisposition(): float
    {
        return $this->weeeTaxRowDisposition;
    }
    /**
     * WEEE tax row disposition.
     *
     * @param float $weeeTaxRowDisposition
     *
     * @return self
     */
    public function setWeeeTaxRowDisposition(float $weeeTaxRowDisposition): self
    {
        $this->weeeTaxRowDisposition = $weeeTaxRowDisposition;
        return $this;
    }
}
