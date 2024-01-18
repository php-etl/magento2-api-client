<?php

namespace Kiboko\Magento\Model;

class SalesDataOrderItemExtensionInterface
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Interface MessageInterface
     *
     * @var GiftMessageDataMessageInterface|null
     */
    protected $giftMessage;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $vertexTaxCodes;
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
     * Interface MessageInterface
     *
     * @return GiftMessageDataMessageInterface|null
     */
    public function getGiftMessage() : ?GiftMessageDataMessageInterface
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
    public function setGiftMessage(?GiftMessageDataMessageInterface $giftMessage) : self
    {
        $this->initialized['giftMessage'] = true;
        $this->giftMessage = $giftMessage;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getVertexTaxCodes() : ?array
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
    public function setVertexTaxCodes(?array $vertexTaxCodes) : self
    {
        $this->initialized['vertexTaxCodes'] = true;
        $this->vertexTaxCodes = $vertexTaxCodes;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getInvoiceTextCodes() : ?array
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
    public function setInvoiceTextCodes(?array $invoiceTextCodes) : self
    {
        $this->initialized['invoiceTextCodes'] = true;
        $this->invoiceTextCodes = $invoiceTextCodes;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getTaxCodes() : ?array
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
    public function setTaxCodes(?array $taxCodes) : self
    {
        $this->initialized['taxCodes'] = true;
        $this->taxCodes = $taxCodes;
        return $this;
    }
}