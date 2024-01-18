<?php

namespace Kiboko\Magento\Model;

class QuoteDataTotalSegmentExtensionInterface
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
     * 
     *
     * @var TaxDataGrandTotalDetailsInterface[]|null
     */
    protected $taxGrandtotalDetails;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $vertexTaxCalculationMessages;
    /**
     * 
     *
     * @return TaxDataGrandTotalDetailsInterface[]|null
     */
    public function getTaxGrandtotalDetails() : ?array
    {
        return $this->taxGrandtotalDetails;
    }
    /**
     * 
     *
     * @param TaxDataGrandTotalDetailsInterface[]|null $taxGrandtotalDetails
     *
     * @return self
     */
    public function setTaxGrandtotalDetails(?array $taxGrandtotalDetails) : self
    {
        $this->initialized['taxGrandtotalDetails'] = true;
        $this->taxGrandtotalDetails = $taxGrandtotalDetails;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getVertexTaxCalculationMessages() : ?array
    {
        return $this->vertexTaxCalculationMessages;
    }
    /**
     * 
     *
     * @param string[]|null $vertexTaxCalculationMessages
     *
     * @return self
     */
    public function setVertexTaxCalculationMessages(?array $vertexTaxCalculationMessages) : self
    {
        $this->initialized['vertexTaxCalculationMessages'] = true;
        $this->vertexTaxCalculationMessages = $vertexTaxCalculationMessages;
        return $this;
    }
}