<?php

namespace Kiboko\Magento\V2_4\Model;

class SalesDataInvoiceItemInterface
{
    /**
     * Additional data.
     *
     * @var string|null
     */
    protected $additionalData;
    /**
     * Base cost.
     *
     * @var float|null
     */
    protected $baseCost;
    /**
     * Base discount amount.
     *
     * @var float|null
     */
    protected $baseDiscountAmount;
    /**
     * Base discount tax compensation amount.
     *
     * @var float|null
     */
    protected $baseDiscountTaxCompensationAmount;
    /**
     * Base price.
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
     * Invoice item ID.
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceItemInterface
     *
     * @var SalesDataInvoiceItemExtensionInterface|null
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
     * Base cost.
     *
     * @return float|null
     */
    public function getBaseCost(): ?float
    {
        return $this->baseCost;
    }
    /**
     * Base cost.
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
     * Base discount amount.
     *
     * @return float|null
     */
    public function getBaseDiscountAmount(): ?float
    {
        return $this->baseDiscountAmount;
    }
    /**
     * Base discount amount.
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
     * Base discount tax compensation amount.
     *
     * @return float|null
     */
    public function getBaseDiscountTaxCompensationAmount(): ?float
    {
        return $this->baseDiscountTaxCompensationAmount;
    }
    /**
     * Base discount tax compensation amount.
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
     * Base price.
     *
     * @return float|null
     */
    public function getBasePrice(): ?float
    {
        return $this->basePrice;
    }
    /**
     * Base price.
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
     * Invoice item ID.
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }
    /**
     * Invoice item ID.
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
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceItemInterface
     *
     * @return SalesDataInvoiceItemExtensionInterface|null
     */
    public function getExtensionAttributes(): ?SalesDataInvoiceItemExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceItemInterface
     *
     * @param SalesDataInvoiceItemExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?SalesDataInvoiceItemExtensionInterface $extensionAttributes): self
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
}
