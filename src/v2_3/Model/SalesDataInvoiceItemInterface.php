<?php

namespace Kiboko\Magento\v2_3\Model;

class SalesDataInvoiceItemInterface
{
    /**
     * Additional data.
     *
     * @var string
     */
    protected $additionalData;
    /**
     * Base cost.
     *
     * @var float
     */
    protected $baseCost;
    /**
     * Base discount amount.
     *
     * @var float
     */
    protected $baseDiscountAmount;
    /**
     * Base discount tax compensation amount.
     *
     * @var float
     */
    protected $baseDiscountTaxCompensationAmount;
    /**
     * Base price.
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
     * Invoice item ID.
     *
     * @var int
     */
    protected $entityId;
    /**
     * Discount tax compensation amount.
     *
     * @var float
     */
    protected $discountTaxCompensationAmount;
    /**
     * Name.
     *
     * @var string
     */
    protected $name;
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
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceItemInterface
     *
     * @var SalesDataInvoiceItemExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Order item ID.
     *
     * @var int
     */
    protected $orderItemId;
    /**
     * Quantity.
     *
     * @var float
     */
    protected $qty;
    /**
     * Additional data.
     *
     * @return string
     */
    public function getAdditionalData() : string
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
    public function setAdditionalData(string $additionalData) : self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * Base cost.
     *
     * @return float
     */
    public function getBaseCost() : float
    {
        return $this->baseCost;
    }
    /**
     * Base cost.
     *
     * @param float $baseCost
     *
     * @return self
     */
    public function setBaseCost(float $baseCost) : self
    {
        $this->baseCost = $baseCost;
        return $this;
    }
    /**
     * Base discount amount.
     *
     * @return float
     */
    public function getBaseDiscountAmount() : float
    {
        return $this->baseDiscountAmount;
    }
    /**
     * Base discount amount.
     *
     * @param float $baseDiscountAmount
     *
     * @return self
     */
    public function setBaseDiscountAmount(float $baseDiscountAmount) : self
    {
        $this->baseDiscountAmount = $baseDiscountAmount;
        return $this;
    }
    /**
     * Base discount tax compensation amount.
     *
     * @return float
     */
    public function getBaseDiscountTaxCompensationAmount() : float
    {
        return $this->baseDiscountTaxCompensationAmount;
    }
    /**
     * Base discount tax compensation amount.
     *
     * @param float $baseDiscountTaxCompensationAmount
     *
     * @return self
     */
    public function setBaseDiscountTaxCompensationAmount(float $baseDiscountTaxCompensationAmount) : self
    {
        $this->baseDiscountTaxCompensationAmount = $baseDiscountTaxCompensationAmount;
        return $this;
    }
    /**
     * Base price.
     *
     * @return float
     */
    public function getBasePrice() : float
    {
        return $this->basePrice;
    }
    /**
     * Base price.
     *
     * @param float $basePrice
     *
     * @return self
     */
    public function setBasePrice(float $basePrice) : self
    {
        $this->basePrice = $basePrice;
        return $this;
    }
    /**
     * Base price including tax.
     *
     * @return float
     */
    public function getBasePriceInclTax() : float
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
    public function setBasePriceInclTax(float $basePriceInclTax) : self
    {
        $this->basePriceInclTax = $basePriceInclTax;
        return $this;
    }
    /**
     * Base row total.
     *
     * @return float
     */
    public function getBaseRowTotal() : float
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
    public function setBaseRowTotal(float $baseRowTotal) : self
    {
        $this->baseRowTotal = $baseRowTotal;
        return $this;
    }
    /**
     * Base row total including tax.
     *
     * @return float
     */
    public function getBaseRowTotalInclTax() : float
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
    public function setBaseRowTotalInclTax(float $baseRowTotalInclTax) : self
    {
        $this->baseRowTotalInclTax = $baseRowTotalInclTax;
        return $this;
    }
    /**
     * Base tax amount.
     *
     * @return float
     */
    public function getBaseTaxAmount() : float
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
    public function setBaseTaxAmount(float $baseTaxAmount) : self
    {
        $this->baseTaxAmount = $baseTaxAmount;
        return $this;
    }
    /**
     * Description.
     *
     * @return string
     */
    public function getDescription() : string
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
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Discount amount.
     *
     * @return float
     */
    public function getDiscountAmount() : float
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
    public function setDiscountAmount(float $discountAmount) : self
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }
    /**
     * Invoice item ID.
     *
     * @return int
     */
    public function getEntityId() : int
    {
        return $this->entityId;
    }
    /**
     * Invoice item ID.
     *
     * @param int $entityId
     *
     * @return self
     */
    public function setEntityId(int $entityId) : self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * Discount tax compensation amount.
     *
     * @return float
     */
    public function getDiscountTaxCompensationAmount() : float
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
    public function setDiscountTaxCompensationAmount(float $discountTaxCompensationAmount) : self
    {
        $this->discountTaxCompensationAmount = $discountTaxCompensationAmount;
        return $this;
    }
    /**
     * Name.
     *
     * @return string
     */
    public function getName() : string
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
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Parent ID.
     *
     * @return int
     */
    public function getParentId() : int
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
    public function setParentId(int $parentId) : self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * Price.
     *
     * @return float
     */
    public function getPrice() : float
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
    public function setPrice(float $price) : self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Price including tax.
     *
     * @return float
     */
    public function getPriceInclTax() : float
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
    public function setPriceInclTax(float $priceInclTax) : self
    {
        $this->priceInclTax = $priceInclTax;
        return $this;
    }
    /**
     * Product ID.
     *
     * @return int
     */
    public function getProductId() : int
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
    public function setProductId(int $productId) : self
    {
        $this->productId = $productId;
        return $this;
    }
    /**
     * Row total.
     *
     * @return float
     */
    public function getRowTotal() : float
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
    public function setRowTotal(float $rowTotal) : self
    {
        $this->rowTotal = $rowTotal;
        return $this;
    }
    /**
     * Row total including tax.
     *
     * @return float
     */
    public function getRowTotalInclTax() : float
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
    public function setRowTotalInclTax(float $rowTotalInclTax) : self
    {
        $this->rowTotalInclTax = $rowTotalInclTax;
        return $this;
    }
    /**
     * SKU.
     *
     * @return string
     */
    public function getSku() : string
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
    public function setSku(string $sku) : self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Tax amount.
     *
     * @return float
     */
    public function getTaxAmount() : float
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
    public function setTaxAmount(float $taxAmount) : self
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceItemInterface
     *
     * @return SalesDataInvoiceItemExtensionInterface
     */
    public function getExtensionAttributes() : SalesDataInvoiceItemExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceItemInterface
     *
     * @param SalesDataInvoiceItemExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(SalesDataInvoiceItemExtensionInterface $extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Order item ID.
     *
     * @return int
     */
    public function getOrderItemId() : int
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
    public function setOrderItemId(int $orderItemId) : self
    {
        $this->orderItemId = $orderItemId;
        return $this;
    }
    /**
     * Quantity.
     *
     * @return float
     */
    public function getQty() : float
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
    public function setQty(float $qty) : self
    {
        $this->qty = $qty;
        return $this;
    }
}