<?php

namespace Kiboko\Magento\V2_4\Model;

class SalesDataInvoiceItemExtensionInterface
{
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
