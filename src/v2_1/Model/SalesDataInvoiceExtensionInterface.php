<?php

namespace Kiboko\Magento\V2_1\Model;

class SalesDataInvoiceExtensionInterface
{
    /**
     *
     *
     * @var float|null
     */
    protected $baseCustomerBalanceAmount;
    /**
     *
     *
     * @var float|null
     */
    protected $baseGiftCardsAmount;
    /**
     *
     *
     * @var float|null
     */
    protected $customerBalanceAmount;
    /**
     *
     *
     * @var float|null
     */
    protected $giftCardsAmount;
    /**
     *
     *
     * @var string|null
     */
    protected $gwBasePrice;
    /**
     *
     *
     * @var string|null
     */
    protected $gwBaseTaxAmount;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardBasePrice;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardBaseTaxAmount;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardPrice;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardTaxAmount;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsBasePrice;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsBaseTaxAmount;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsPrice;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsTaxAmount;
    /**
     *
     *
     * @var string|null
     */
    protected $gwPrice;
    /**
     *
     *
     * @var string|null
     */
    protected $gwTaxAmount;
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @var SalesDataOrderAddressInterface|null
     */
    protected $vertexTaxCalculationBillingAddress;
    /**
     * Order interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @var SalesDataOrderInterface|null
     */
    protected $vertexTaxCalculationOrder;
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @var SalesDataOrderAddressInterface|null
     */
    protected $vertexTaxCalculationShippingAddress;
    /**
     *
     *
     * @return float|null
     */
    public function getBaseCustomerBalanceAmount(): ?float
    {
        return $this->baseCustomerBalanceAmount;
    }
    /**
     *
     *
     * @param float|null $baseCustomerBalanceAmount
     *
     * @return self
     */
    public function setBaseCustomerBalanceAmount(?float $baseCustomerBalanceAmount): self
    {
        $this->baseCustomerBalanceAmount = $baseCustomerBalanceAmount;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getBaseGiftCardsAmount(): ?float
    {
        return $this->baseGiftCardsAmount;
    }
    /**
     *
     *
     * @param float|null $baseGiftCardsAmount
     *
     * @return self
     */
    public function setBaseGiftCardsAmount(?float $baseGiftCardsAmount): self
    {
        $this->baseGiftCardsAmount = $baseGiftCardsAmount;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getCustomerBalanceAmount(): ?float
    {
        return $this->customerBalanceAmount;
    }
    /**
     *
     *
     * @param float|null $customerBalanceAmount
     *
     * @return self
     */
    public function setCustomerBalanceAmount(?float $customerBalanceAmount): self
    {
        $this->customerBalanceAmount = $customerBalanceAmount;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getGiftCardsAmount(): ?float
    {
        return $this->giftCardsAmount;
    }
    /**
     *
     *
     * @param float|null $giftCardsAmount
     *
     * @return self
     */
    public function setGiftCardsAmount(?float $giftCardsAmount): self
    {
        $this->giftCardsAmount = $giftCardsAmount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwBasePrice(): ?string
    {
        return $this->gwBasePrice;
    }
    /**
     *
     *
     * @param string|null $gwBasePrice
     *
     * @return self
     */
    public function setGwBasePrice(?string $gwBasePrice): self
    {
        $this->gwBasePrice = $gwBasePrice;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwBaseTaxAmount(): ?string
    {
        return $this->gwBaseTaxAmount;
    }
    /**
     *
     *
     * @param string|null $gwBaseTaxAmount
     *
     * @return self
     */
    public function setGwBaseTaxAmount(?string $gwBaseTaxAmount): self
    {
        $this->gwBaseTaxAmount = $gwBaseTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardBasePrice(): ?string
    {
        return $this->gwCardBasePrice;
    }
    /**
     *
     *
     * @param string|null $gwCardBasePrice
     *
     * @return self
     */
    public function setGwCardBasePrice(?string $gwCardBasePrice): self
    {
        $this->gwCardBasePrice = $gwCardBasePrice;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardBaseTaxAmount(): ?string
    {
        return $this->gwCardBaseTaxAmount;
    }
    /**
     *
     *
     * @param string|null $gwCardBaseTaxAmount
     *
     * @return self
     */
    public function setGwCardBaseTaxAmount(?string $gwCardBaseTaxAmount): self
    {
        $this->gwCardBaseTaxAmount = $gwCardBaseTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardPrice(): ?string
    {
        return $this->gwCardPrice;
    }
    /**
     *
     *
     * @param string|null $gwCardPrice
     *
     * @return self
     */
    public function setGwCardPrice(?string $gwCardPrice): self
    {
        $this->gwCardPrice = $gwCardPrice;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardTaxAmount(): ?string
    {
        return $this->gwCardTaxAmount;
    }
    /**
     *
     *
     * @param string|null $gwCardTaxAmount
     *
     * @return self
     */
    public function setGwCardTaxAmount(?string $gwCardTaxAmount): self
    {
        $this->gwCardTaxAmount = $gwCardTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsBasePrice(): ?string
    {
        return $this->gwItemsBasePrice;
    }
    /**
     *
     *
     * @param string|null $gwItemsBasePrice
     *
     * @return self
     */
    public function setGwItemsBasePrice(?string $gwItemsBasePrice): self
    {
        $this->gwItemsBasePrice = $gwItemsBasePrice;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsBaseTaxAmount(): ?string
    {
        return $this->gwItemsBaseTaxAmount;
    }
    /**
     *
     *
     * @param string|null $gwItemsBaseTaxAmount
     *
     * @return self
     */
    public function setGwItemsBaseTaxAmount(?string $gwItemsBaseTaxAmount): self
    {
        $this->gwItemsBaseTaxAmount = $gwItemsBaseTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsPrice(): ?string
    {
        return $this->gwItemsPrice;
    }
    /**
     *
     *
     * @param string|null $gwItemsPrice
     *
     * @return self
     */
    public function setGwItemsPrice(?string $gwItemsPrice): self
    {
        $this->gwItemsPrice = $gwItemsPrice;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsTaxAmount(): ?string
    {
        return $this->gwItemsTaxAmount;
    }
    /**
     *
     *
     * @param string|null $gwItemsTaxAmount
     *
     * @return self
     */
    public function setGwItemsTaxAmount(?string $gwItemsTaxAmount): self
    {
        $this->gwItemsTaxAmount = $gwItemsTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwPrice(): ?string
    {
        return $this->gwPrice;
    }
    /**
     *
     *
     * @param string|null $gwPrice
     *
     * @return self
     */
    public function setGwPrice(?string $gwPrice): self
    {
        $this->gwPrice = $gwPrice;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwTaxAmount(): ?string
    {
        return $this->gwTaxAmount;
    }
    /**
     *
     *
     * @param string|null $gwTaxAmount
     *
     * @return self
     */
    public function setGwTaxAmount(?string $gwTaxAmount): self
    {
        $this->gwTaxAmount = $gwTaxAmount;
        return $this;
    }
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @return SalesDataOrderAddressInterface|null
     */
    public function getVertexTaxCalculationBillingAddress(): ?SalesDataOrderAddressInterface
    {
        return $this->vertexTaxCalculationBillingAddress;
    }
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @param SalesDataOrderAddressInterface|null $vertexTaxCalculationBillingAddress
     *
     * @return self
     */
    public function setVertexTaxCalculationBillingAddress(?SalesDataOrderAddressInterface $vertexTaxCalculationBillingAddress): self
    {
        $this->vertexTaxCalculationBillingAddress = $vertexTaxCalculationBillingAddress;
        return $this;
    }
    /**
     * Order interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @return SalesDataOrderInterface|null
     */
    public function getVertexTaxCalculationOrder(): ?SalesDataOrderInterface
    {
        return $this->vertexTaxCalculationOrder;
    }
    /**
     * Order interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @param SalesDataOrderInterface|null $vertexTaxCalculationOrder
     *
     * @return self
     */
    public function setVertexTaxCalculationOrder(?SalesDataOrderInterface $vertexTaxCalculationOrder): self
    {
        $this->vertexTaxCalculationOrder = $vertexTaxCalculationOrder;
        return $this;
    }
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @return SalesDataOrderAddressInterface|null
     */
    public function getVertexTaxCalculationShippingAddress(): ?SalesDataOrderAddressInterface
    {
        return $this->vertexTaxCalculationShippingAddress;
    }
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @param SalesDataOrderAddressInterface|null $vertexTaxCalculationShippingAddress
     *
     * @return self
     */
    public function setVertexTaxCalculationShippingAddress(?SalesDataOrderAddressInterface $vertexTaxCalculationShippingAddress): self
    {
        $this->vertexTaxCalculationShippingAddress = $vertexTaxCalculationShippingAddress;
        return $this;
    }
}
