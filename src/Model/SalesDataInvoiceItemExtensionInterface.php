<?php

namespace Kiboko\Magento\V2\Model;

class SalesDataInvoiceItemExtensionInterface
{
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
     * 
     *
     * @return string[]
     */
    public function getInvoiceTextCodes() : array
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
    public function setInvoiceTextCodes(array $invoiceTextCodes) : self
    {
        $this->invoiceTextCodes = $invoiceTextCodes;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getTaxCodes() : array
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
    public function setTaxCodes(array $taxCodes) : self
    {
        $this->taxCodes = $taxCodes;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getVertexTaxCodes() : array
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
    public function setVertexTaxCodes(array $vertexTaxCodes) : self
    {
        $this->vertexTaxCodes = $vertexTaxCodes;
        return $this;
    }
}