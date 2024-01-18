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
}