<?php

namespace Kiboko\Magento\v2_2\Model;

class SalesDataOrderItemExtensionInterface
{
    /**
     * Interface MessageInterface
     *
     * @var GiftMessageDataMessageInterface
     */
    protected $giftMessage;
    /**
     *
     *
     * @var string
     */
    protected $gwBasePrice;
    /**
     *
     *
     * @var string
     */
    protected $gwBasePriceInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwBasePriceRefunded;
    /**
     *
     *
     * @var string
     */
    protected $gwBaseTaxAmount;
    /**
     *
     *
     * @var string
     */
    protected $gwBaseTaxAmountInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwBaseTaxAmountRefunded;
    /**
     *
     *
     * @var string
     */
    protected $gwId;
    /**
     *
     *
     * @var string
     */
    protected $gwPrice;
    /**
     *
     *
     * @var string
     */
    protected $gwPriceInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwPriceRefunded;
    /**
     *
     *
     * @var string
     */
    protected $gwTaxAmount;
    /**
     *
     *
     * @var string
     */
    protected $gwTaxAmountInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwTaxAmountRefunded;
    /**
     *
     *
     * @var string[]
     */
    protected $invoiceTextCodes;
    /**
     *
     *
     * @var string[]
     */
    protected $taxCodes;
    /**
     *
     *
     * @var string[]
     */
    protected $vertexTaxCodes;
    /**
     * Interface MessageInterface
     *
     * @return GiftMessageDataMessageInterface
     */
    public function getGiftMessage(): GiftMessageDataMessageInterface
    {
        return $this->giftMessage;
    }
    /**
     * Interface MessageInterface
     *
     * @param GiftMessageDataMessageInterface $giftMessage
     *
     * @return self
     */
    public function setGiftMessage(GiftMessageDataMessageInterface $giftMessage): self
    {
        $this->giftMessage = $giftMessage;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwBasePrice(): string
    {
        return $this->gwBasePrice;
    }
    /**
     *
     *
     * @param string $gwBasePrice
     *
     * @return self
     */
    public function setGwBasePrice(string $gwBasePrice): self
    {
        $this->gwBasePrice = $gwBasePrice;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwBasePriceInvoiced(): string
    {
        return $this->gwBasePriceInvoiced;
    }
    /**
     *
     *
     * @param string $gwBasePriceInvoiced
     *
     * @return self
     */
    public function setGwBasePriceInvoiced(string $gwBasePriceInvoiced): self
    {
        $this->gwBasePriceInvoiced = $gwBasePriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwBasePriceRefunded(): string
    {
        return $this->gwBasePriceRefunded;
    }
    /**
     *
     *
     * @param string $gwBasePriceRefunded
     *
     * @return self
     */
    public function setGwBasePriceRefunded(string $gwBasePriceRefunded): self
    {
        $this->gwBasePriceRefunded = $gwBasePriceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwBaseTaxAmount(): string
    {
        return $this->gwBaseTaxAmount;
    }
    /**
     *
     *
     * @param string $gwBaseTaxAmount
     *
     * @return self
     */
    public function setGwBaseTaxAmount(string $gwBaseTaxAmount): self
    {
        $this->gwBaseTaxAmount = $gwBaseTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwBaseTaxAmountInvoiced(): string
    {
        return $this->gwBaseTaxAmountInvoiced;
    }
    /**
     *
     *
     * @param string $gwBaseTaxAmountInvoiced
     *
     * @return self
     */
    public function setGwBaseTaxAmountInvoiced(string $gwBaseTaxAmountInvoiced): self
    {
        $this->gwBaseTaxAmountInvoiced = $gwBaseTaxAmountInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwBaseTaxAmountRefunded(): string
    {
        return $this->gwBaseTaxAmountRefunded;
    }
    /**
     *
     *
     * @param string $gwBaseTaxAmountRefunded
     *
     * @return self
     */
    public function setGwBaseTaxAmountRefunded(string $gwBaseTaxAmountRefunded): self
    {
        $this->gwBaseTaxAmountRefunded = $gwBaseTaxAmountRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwId(): string
    {
        return $this->gwId;
    }
    /**
     *
     *
     * @param string $gwId
     *
     * @return self
     */
    public function setGwId(string $gwId): self
    {
        $this->gwId = $gwId;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwPrice(): string
    {
        return $this->gwPrice;
    }
    /**
     *
     *
     * @param string $gwPrice
     *
     * @return self
     */
    public function setGwPrice(string $gwPrice): self
    {
        $this->gwPrice = $gwPrice;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwPriceInvoiced(): string
    {
        return $this->gwPriceInvoiced;
    }
    /**
     *
     *
     * @param string $gwPriceInvoiced
     *
     * @return self
     */
    public function setGwPriceInvoiced(string $gwPriceInvoiced): self
    {
        $this->gwPriceInvoiced = $gwPriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwPriceRefunded(): string
    {
        return $this->gwPriceRefunded;
    }
    /**
     *
     *
     * @param string $gwPriceRefunded
     *
     * @return self
     */
    public function setGwPriceRefunded(string $gwPriceRefunded): self
    {
        $this->gwPriceRefunded = $gwPriceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwTaxAmount(): string
    {
        return $this->gwTaxAmount;
    }
    /**
     *
     *
     * @param string $gwTaxAmount
     *
     * @return self
     */
    public function setGwTaxAmount(string $gwTaxAmount): self
    {
        $this->gwTaxAmount = $gwTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwTaxAmountInvoiced(): string
    {
        return $this->gwTaxAmountInvoiced;
    }
    /**
     *
     *
     * @param string $gwTaxAmountInvoiced
     *
     * @return self
     */
    public function setGwTaxAmountInvoiced(string $gwTaxAmountInvoiced): self
    {
        $this->gwTaxAmountInvoiced = $gwTaxAmountInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwTaxAmountRefunded(): string
    {
        return $this->gwTaxAmountRefunded;
    }
    /**
     *
     *
     * @param string $gwTaxAmountRefunded
     *
     * @return self
     */
    public function setGwTaxAmountRefunded(string $gwTaxAmountRefunded): self
    {
        $this->gwTaxAmountRefunded = $gwTaxAmountRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string[]
     */
    public function getInvoiceTextCodes(): array
    {
        return $this->invoiceTextCodes;
    }
    /**
     *
     *
     * @param string[] $invoiceTextCodes
     *
     * @return self
     */
    public function setInvoiceTextCodes(array $invoiceTextCodes): self
    {
        $this->invoiceTextCodes = $invoiceTextCodes;
        return $this;
    }
    /**
     *
     *
     * @return string[]
     */
    public function getTaxCodes(): array
    {
        return $this->taxCodes;
    }
    /**
     *
     *
     * @param string[] $taxCodes
     *
     * @return self
     */
    public function setTaxCodes(array $taxCodes): self
    {
        $this->taxCodes = $taxCodes;
        return $this;
    }
    /**
     *
     *
     * @return string[]
     */
    public function getVertexTaxCodes(): array
    {
        return $this->vertexTaxCodes;
    }
    /**
     *
     *
     * @param string[] $vertexTaxCodes
     *
     * @return self
     */
    public function setVertexTaxCodes(array $vertexTaxCodes): self
    {
        $this->vertexTaxCodes = $vertexTaxCodes;
        return $this;
    }
}
