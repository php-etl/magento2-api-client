<?php

namespace Kiboko\Magento\V2_3\Model;

class SalesDataCreditmemoItemInterface
{
    /**
     * Additional data.
     *
     * @var string|null
     */
    protected $additionalData;
    /**
     * The base cost for a credit memo item.
     *
     * @var float|null
     */
    protected $baseCost;
    /**
     * The base discount amount for a credit memo item.
     *
     * @var float|null
     */
    protected $baseDiscountAmount;
    /**
     * The base discount tax compensation amount for a credit memo item.
     *
     * @var float|null
     */
    protected $baseDiscountTaxCompensationAmount;
    /**
     * The base price for a credit memo item.
     *
     * @var float|null
     */
    protected $basePrice;
    /**
     * Base price including tax.
     *
     * @var float|null
     */
    protected $basePriceInclTax;
    /**
     * Base row total.
     *
     * @var float|null
     */
    protected $baseRowTotal;
    /**
     * Base row total including tax.
     *
     * @var float|null
     */
    protected $baseRowTotalInclTax;
    /**
     * Base tax amount.
     *
     * @var float|null
     */
    protected $baseTaxAmount;
    /**
     * Base WEEE tax applied amount.
     *
     * @var float|null
     */
    protected $baseWeeeTaxAppliedAmount;
    /**
     * Base WEEE tax applied row amount.
     *
     * @var float|null
     */
    protected $baseWeeeTaxAppliedRowAmnt;
    /**
     * Base WEEE tax disposition.
     *
     * @var float|null
     */
    protected $baseWeeeTaxDisposition;
    /**
     * Base WEEE tax row disposition.
     *
     * @var float|null
     */
    protected $baseWeeeTaxRowDisposition;
    /**
     * Description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Discount amount.
     *
     * @var float|null
     */
    protected $discountAmount;
    /**
     * Discount tax compensation amount.
     *
     * @var float|null
     */
    protected $discountTaxCompensationAmount;
    /**
     * Credit memo item ID.
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoItemInterface
     *
     * @var SalesDataCreditmemoItemExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Order item ID.
     *
     * @var int|null
     */
    protected $orderItemId;
    /**
     * Parent ID.
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * Price.
     *
     * @var float|null
     */
    protected $price;
    /**
     * Price including tax.
     *
     * @var float|null
     */
    protected $priceInclTax;
    /**
     * Product ID.
     *
     * @var int|null
     */
    protected $productId;
    /**
     * Quantity.
     *
     * @var float|null
     */
    protected $qty;
    /**
     * Row total.
     *
     * @var float|null
     */
    protected $rowTotal;
    /**
     * Row total including tax.
     *
     * @var float|null
     */
    protected $rowTotalInclTax;
    /**
     * SKU.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Tax amount.
     *
     * @var float|null
     */
    protected $taxAmount;
    /**
     * WEEE tax applied.
     *
     * @var string|null
     */
    protected $weeeTaxApplied;
    /**
     * WEEE tax applied amount.
     *
     * @var float|null
     */
    protected $weeeTaxAppliedAmount;
    /**
     * WEEE tax applied row amount.
     *
     * @var float|null
     */
    protected $weeeTaxAppliedRowAmount;
    /**
     * WEEE tax disposition.
     *
     * @var float|null
     */
    protected $weeeTaxDisposition;
    /**
     * WEEE tax row disposition.
     *
     * @var float|null
     */
    protected $weeeTaxRowDisposition;
    /**
     * Additional data.
     *
     * @return string|null
     */
    public function getAdditionalData(): ?string
    {
        return $this->additionalData;
    }
    /**
     * Additional data.
     *
     * @param string|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?string $additionalData): self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * The base cost for a credit memo item.
     *
     * @return float|null
     */
    public function getBaseCost(): ?float
    {
        return $this->baseCost;
    }
    /**
     * The base cost for a credit memo item.
     *
     * @param float|null $baseCost
     *
     * @return self
     */
    public function setBaseCost(?float $baseCost): self
    {
        $this->baseCost = $baseCost;
        return $this;
    }
    /**
     * The base discount amount for a credit memo item.
     *
     * @return float|null
     */
    public function getBaseDiscountAmount(): ?float
    {
        return $this->baseDiscountAmount;
    }
    /**
     * The base discount amount for a credit memo item.
     *
     * @param float|null $baseDiscountAmount
     *
     * @return self
     */
    public function setBaseDiscountAmount(?float $baseDiscountAmount): self
    {
        $this->baseDiscountAmount = $baseDiscountAmount;
        return $this;
    }
    /**
     * The base discount tax compensation amount for a credit memo item.
     *
     * @return float|null
     */
    public function getBaseDiscountTaxCompensationAmount(): ?float
    {
        return $this->baseDiscountTaxCompensationAmount;
    }
    /**
     * The base discount tax compensation amount for a credit memo item.
     *
     * @param float|null $baseDiscountTaxCompensationAmount
     *
     * @return self
     */
    public function setBaseDiscountTaxCompensationAmount(?float $baseDiscountTaxCompensationAmount): self
    {
        $this->baseDiscountTaxCompensationAmount = $baseDiscountTaxCompensationAmount;
        return $this;
    }
    /**
     * The base price for a credit memo item.
     *
     * @return float|null
     */
    public function getBasePrice(): ?float
    {
        return $this->basePrice;
    }
    /**
     * The base price for a credit memo item.
     *
     * @param float|null $basePrice
     *
     * @return self
     */
    public function setBasePrice(?float $basePrice): self
    {
        $this->basePrice = $basePrice;
        return $this;
    }
    /**
     * Base price including tax.
     *
     * @return float|null
     */
    public function getBasePriceInclTax(): ?float
    {
        return $this->basePriceInclTax;
    }
    /**
     * Base price including tax.
     *
     * @param float|null $basePriceInclTax
     *
     * @return self
     */
    public function setBasePriceInclTax(?float $basePriceInclTax): self
    {
        $this->basePriceInclTax = $basePriceInclTax;
        return $this;
    }
    /**
     * Base row total.
     *
     * @return float|null
     */
    public function getBaseRowTotal(): ?float
    {
        return $this->baseRowTotal;
    }
    /**
     * Base row total.
     *
     * @param float|null $baseRowTotal
     *
     * @return self
     */
    public function setBaseRowTotal(?float $baseRowTotal): self
    {
        $this->baseRowTotal = $baseRowTotal;
        return $this;
    }
    /**
     * Base row total including tax.
     *
     * @return float|null
     */
    public function getBaseRowTotalInclTax(): ?float
    {
        return $this->baseRowTotalInclTax;
    }
    /**
     * Base row total including tax.
     *
     * @param float|null $baseRowTotalInclTax
     *
     * @return self
     */
    public function setBaseRowTotalInclTax(?float $baseRowTotalInclTax): self
    {
        $this->baseRowTotalInclTax = $baseRowTotalInclTax;
        return $this;
    }
    /**
     * Base tax amount.
     *
     * @return float|null
     */
    public function getBaseTaxAmount(): ?float
    {
        return $this->baseTaxAmount;
    }
    /**
     * Base tax amount.
     *
     * @param float|null $baseTaxAmount
     *
     * @return self
     */
    public function setBaseTaxAmount(?float $baseTaxAmount): self
    {
        $this->baseTaxAmount = $baseTaxAmount;
        return $this;
    }
    /**
     * Base WEEE tax applied amount.
     *
     * @return float|null
     */
    public function getBaseWeeeTaxAppliedAmount(): ?float
    {
        return $this->baseWeeeTaxAppliedAmount;
    }
    /**
     * Base WEEE tax applied amount.
     *
     * @param float|null $baseWeeeTaxAppliedAmount
     *
     * @return self
     */
    public function setBaseWeeeTaxAppliedAmount(?float $baseWeeeTaxAppliedAmount): self
    {
        $this->baseWeeeTaxAppliedAmount = $baseWeeeTaxAppliedAmount;
        return $this;
    }
    /**
     * Base WEEE tax applied row amount.
     *
     * @return float|null
     */
    public function getBaseWeeeTaxAppliedRowAmnt(): ?float
    {
        return $this->baseWeeeTaxAppliedRowAmnt;
    }
    /**
     * Base WEEE tax applied row amount.
     *
     * @param float|null $baseWeeeTaxAppliedRowAmnt
     *
     * @return self
     */
    public function setBaseWeeeTaxAppliedRowAmnt(?float $baseWeeeTaxAppliedRowAmnt): self
    {
        $this->baseWeeeTaxAppliedRowAmnt = $baseWeeeTaxAppliedRowAmnt;
        return $this;
    }
    /**
     * Base WEEE tax disposition.
     *
     * @return float|null
     */
    public function getBaseWeeeTaxDisposition(): ?float
    {
        return $this->baseWeeeTaxDisposition;
    }
    /**
     * Base WEEE tax disposition.
     *
     * @param float|null $baseWeeeTaxDisposition
     *
     * @return self
     */
    public function setBaseWeeeTaxDisposition(?float $baseWeeeTaxDisposition): self
    {
        $this->baseWeeeTaxDisposition = $baseWeeeTaxDisposition;
        return $this;
    }
    /**
     * Base WEEE tax row disposition.
     *
     * @return float|null
     */
    public function getBaseWeeeTaxRowDisposition(): ?float
    {
        return $this->baseWeeeTaxRowDisposition;
    }
    /**
     * Base WEEE tax row disposition.
     *
     * @param float|null $baseWeeeTaxRowDisposition
     *
     * @return self
     */
    public function setBaseWeeeTaxRowDisposition(?float $baseWeeeTaxRowDisposition): self
    {
        $this->baseWeeeTaxRowDisposition = $baseWeeeTaxRowDisposition;
        return $this;
    }
    /**
     * Description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Description.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Discount amount.
     *
     * @return float|null
     */
    public function getDiscountAmount(): ?float
    {
        return $this->discountAmount;
    }
    /**
     * Discount amount.
     *
     * @param float|null $discountAmount
     *
     * @return self
     */
    public function setDiscountAmount(?float $discountAmount): self
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }
    /**
     * Discount tax compensation amount.
     *
     * @return float|null
     */
    public function getDiscountTaxCompensationAmount(): ?float
    {
        return $this->discountTaxCompensationAmount;
    }
    /**
     * Discount tax compensation amount.
     *
     * @param float|null $discountTaxCompensationAmount
     *
     * @return self
     */
    public function setDiscountTaxCompensationAmount(?float $discountTaxCompensationAmount): self
    {
        $this->discountTaxCompensationAmount = $discountTaxCompensationAmount;
        return $this;
    }
    /**
     * Credit memo item ID.
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }
    /**
     * Credit memo item ID.
     *
     * @param int|null $entityId
     *
     * @return self
     */
    public function setEntityId(?int $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoItemInterface
     *
     * @return SalesDataCreditmemoItemExtensionInterface|null
     */
    public function getExtensionAttributes(): ?SalesDataCreditmemoItemExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoItemInterface
     *
     * @param SalesDataCreditmemoItemExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?SalesDataCreditmemoItemExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Name.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Order item ID.
     *
     * @return int|null
     */
    public function getOrderItemId(): ?int
    {
        return $this->orderItemId;
    }
    /**
     * Order item ID.
     *
     * @param int|null $orderItemId
     *
     * @return self
     */
    public function setOrderItemId(?int $orderItemId): self
    {
        $this->orderItemId = $orderItemId;
        return $this;
    }
    /**
     * Parent ID.
     *
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
    /**
     * Parent ID.
     *
     * @param int|null $parentId
     *
     * @return self
     */
    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * Price.
     *
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Price.
     *
     * @param float|null $price
     *
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Price including tax.
     *
     * @return float|null
     */
    public function getPriceInclTax(): ?float
    {
        return $this->priceInclTax;
    }
    /**
     * Price including tax.
     *
     * @param float|null $priceInclTax
     *
     * @return self
     */
    public function setPriceInclTax(?float $priceInclTax): self
    {
        $this->priceInclTax = $priceInclTax;
        return $this;
    }
    /**
     * Product ID.
     *
     * @return int|null
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }
    /**
     * Product ID.
     *
     * @param int|null $productId
     *
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }
    /**
     * Quantity.
     *
     * @return float|null
     */
    public function getQty(): ?float
    {
        return $this->qty;
    }
    /**
     * Quantity.
     *
     * @param float|null $qty
     *
     * @return self
     */
    public function setQty(?float $qty): self
    {
        $this->qty = $qty;
        return $this;
    }
    /**
     * Row total.
     *
     * @return float|null
     */
    public function getRowTotal(): ?float
    {
        return $this->rowTotal;
    }
    /**
     * Row total.
     *
     * @param float|null $rowTotal
     *
     * @return self
     */
    public function setRowTotal(?float $rowTotal): self
    {
        $this->rowTotal = $rowTotal;
        return $this;
    }
    /**
     * Row total including tax.
     *
     * @return float|null
     */
    public function getRowTotalInclTax(): ?float
    {
        return $this->rowTotalInclTax;
    }
    /**
     * Row total including tax.
     *
     * @param float|null $rowTotalInclTax
     *
     * @return self
     */
    public function setRowTotalInclTax(?float $rowTotalInclTax): self
    {
        $this->rowTotalInclTax = $rowTotalInclTax;
        return $this;
    }
    /**
     * SKU.
     *
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }
    /**
     * SKU.
     *
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Tax amount.
     *
     * @return float|null
     */
    public function getTaxAmount(): ?float
    {
        return $this->taxAmount;
    }
    /**
     * Tax amount.
     *
     * @param float|null $taxAmount
     *
     * @return self
     */
    public function setTaxAmount(?float $taxAmount): self
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }
    /**
     * WEEE tax applied.
     *
     * @return string|null
     */
    public function getWeeeTaxApplied(): ?string
    {
        return $this->weeeTaxApplied;
    }
    /**
     * WEEE tax applied.
     *
     * @param string|null $weeeTaxApplied
     *
     * @return self
     */
    public function setWeeeTaxApplied(?string $weeeTaxApplied): self
    {
        $this->weeeTaxApplied = $weeeTaxApplied;
        return $this;
    }
    /**
     * WEEE tax applied amount.
     *
     * @return float|null
     */
    public function getWeeeTaxAppliedAmount(): ?float
    {
        return $this->weeeTaxAppliedAmount;
    }
    /**
     * WEEE tax applied amount.
     *
     * @param float|null $weeeTaxAppliedAmount
     *
     * @return self
     */
    public function setWeeeTaxAppliedAmount(?float $weeeTaxAppliedAmount): self
    {
        $this->weeeTaxAppliedAmount = $weeeTaxAppliedAmount;
        return $this;
    }
    /**
     * WEEE tax applied row amount.
     *
     * @return float|null
     */
    public function getWeeeTaxAppliedRowAmount(): ?float
    {
        return $this->weeeTaxAppliedRowAmount;
    }
    /**
     * WEEE tax applied row amount.
     *
     * @param float|null $weeeTaxAppliedRowAmount
     *
     * @return self
     */
    public function setWeeeTaxAppliedRowAmount(?float $weeeTaxAppliedRowAmount): self
    {
        $this->weeeTaxAppliedRowAmount = $weeeTaxAppliedRowAmount;
        return $this;
    }
    /**
     * WEEE tax disposition.
     *
     * @return float|null
     */
    public function getWeeeTaxDisposition(): ?float
    {
        return $this->weeeTaxDisposition;
    }
    /**
     * WEEE tax disposition.
     *
     * @param float|null $weeeTaxDisposition
     *
     * @return self
     */
    public function setWeeeTaxDisposition(?float $weeeTaxDisposition): self
    {
        $this->weeeTaxDisposition = $weeeTaxDisposition;
        return $this;
    }
    /**
     * WEEE tax row disposition.
     *
     * @return float|null
     */
    public function getWeeeTaxRowDisposition(): ?float
    {
        return $this->weeeTaxRowDisposition;
    }
    /**
     * WEEE tax row disposition.
     *
     * @param float|null $weeeTaxRowDisposition
     *
     * @return self
     */
    public function setWeeeTaxRowDisposition(?float $weeeTaxRowDisposition): self
    {
        $this->weeeTaxRowDisposition = $weeeTaxRowDisposition;
        return $this;
    }
}
