<?php

namespace Kiboko\Magento\V2_4\Model;

class SalesDataOrderItemExtensionInterface
{
    /**
     * Interface MessageInterface
     *
     * @var GiftMessageDataMessageInterface|null
     */
    protected $giftMessage;
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
    protected $gwBasePriceInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwBasePriceRefunded;
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
    protected $gwBaseTaxAmountInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwBaseTaxAmountRefunded;
    /**
     *
     *
     * @var string|null
     */
    protected $gwId;
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
    protected $gwPriceInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwPriceRefunded;
    /**
     *
     *
     * @var string|null
     */
    protected $gwTaxAmount;
    /**
     *
     *
     * @var string|null
     */
    protected $gwTaxAmountInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwTaxAmountRefunded;
    /**
     *
     *
     * @var string[]|null
     */
    protected $invoiceTextCodes;
    /**
     *
     *
     * @var string[]|null
     */
    protected $taxCodes;
    /**
     *
     *
     * @var string[]|null
     */
    protected $vertexTaxCodes;
    /**
     * Interface MessageInterface
     *
     * @return GiftMessageDataMessageInterface|null
     */
    public function getGiftMessage(): ?GiftMessageDataMessageInterface
    {
        return $this->giftMessage;
    }
    /**
     * Interface MessageInterface
     *
     * @param GiftMessageDataMessageInterface|null $giftMessage
     *
     * @return self
     */
    public function setGiftMessage(?GiftMessageDataMessageInterface $giftMessage): self
    {
        $this->giftMessage = $giftMessage;
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
    public function getGwBasePriceInvoiced(): ?string
    {
        return $this->gwBasePriceInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwBasePriceInvoiced
     *
     * @return self
     */
    public function setGwBasePriceInvoiced(?string $gwBasePriceInvoiced): self
    {
        $this->gwBasePriceInvoiced = $gwBasePriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwBasePriceRefunded(): ?string
    {
        return $this->gwBasePriceRefunded;
    }
    /**
     *
     *
     * @param string|null $gwBasePriceRefunded
     *
     * @return self
     */
    public function setGwBasePriceRefunded(?string $gwBasePriceRefunded): self
    {
        $this->gwBasePriceRefunded = $gwBasePriceRefunded;
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
    public function getGwBaseTaxAmountInvoiced(): ?string
    {
        return $this->gwBaseTaxAmountInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwBaseTaxAmountInvoiced
     *
     * @return self
     */
    public function setGwBaseTaxAmountInvoiced(?string $gwBaseTaxAmountInvoiced): self
    {
        $this->gwBaseTaxAmountInvoiced = $gwBaseTaxAmountInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwBaseTaxAmountRefunded(): ?string
    {
        return $this->gwBaseTaxAmountRefunded;
    }
    /**
     *
     *
     * @param string|null $gwBaseTaxAmountRefunded
     *
     * @return self
     */
    public function setGwBaseTaxAmountRefunded(?string $gwBaseTaxAmountRefunded): self
    {
        $this->gwBaseTaxAmountRefunded = $gwBaseTaxAmountRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwId(): ?string
    {
        return $this->gwId;
    }
    /**
     *
     *
     * @param string|null $gwId
     *
     * @return self
     */
    public function setGwId(?string $gwId): self
    {
        $this->gwId = $gwId;
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
    public function getGwPriceInvoiced(): ?string
    {
        return $this->gwPriceInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwPriceInvoiced
     *
     * @return self
     */
    public function setGwPriceInvoiced(?string $gwPriceInvoiced): self
    {
        $this->gwPriceInvoiced = $gwPriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwPriceRefunded(): ?string
    {
        return $this->gwPriceRefunded;
    }
    /**
     *
     *
     * @param string|null $gwPriceRefunded
     *
     * @return self
     */
    public function setGwPriceRefunded(?string $gwPriceRefunded): self
    {
        $this->gwPriceRefunded = $gwPriceRefunded;
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
     *
     *
     * @return string|null
     */
    public function getGwTaxAmountInvoiced(): ?string
    {
        return $this->gwTaxAmountInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwTaxAmountInvoiced
     *
     * @return self
     */
    public function setGwTaxAmountInvoiced(?string $gwTaxAmountInvoiced): self
    {
        $this->gwTaxAmountInvoiced = $gwTaxAmountInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwTaxAmountRefunded(): ?string
    {
        return $this->gwTaxAmountRefunded;
    }
    /**
     *
     *
     * @param string|null $gwTaxAmountRefunded
     *
     * @return self
     */
    public function setGwTaxAmountRefunded(?string $gwTaxAmountRefunded): self
    {
        $this->gwTaxAmountRefunded = $gwTaxAmountRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getInvoiceTextCodes(): ?array
    {
        return $this->invoiceTextCodes;
    }
    /**
     *
     *
     * @param string[]|null $invoiceTextCodes
     *
     * @return self
     */
    public function setInvoiceTextCodes(?array $invoiceTextCodes): self
    {
        $this->invoiceTextCodes = $invoiceTextCodes;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getTaxCodes(): ?array
    {
        return $this->taxCodes;
    }
    /**
     *
     *
     * @param string[]|null $taxCodes
     *
     * @return self
     */
    public function setTaxCodes(?array $taxCodes): self
    {
        $this->taxCodes = $taxCodes;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getVertexTaxCodes(): ?array
    {
        return $this->vertexTaxCodes;
    }
    /**
     *
     *
     * @param string[]|null $vertexTaxCodes
     *
     * @return self
     */
    public function setVertexTaxCodes(?array $vertexTaxCodes): self
    {
        $this->vertexTaxCodes = $vertexTaxCodes;
        return $this;
    }
}
