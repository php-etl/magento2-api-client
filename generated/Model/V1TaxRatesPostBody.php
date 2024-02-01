<?php

namespace Kiboko\Magento\Model;

class V1TaxRatesPostBody
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
     * Tax rate interface.
     *
     * @var TaxDataTaxRateInterface|null
     */
    protected $taxRate;
    /**
     * Tax rate interface.
     *
     * @return TaxDataTaxRateInterface|null
     */
    public function getTaxRate() : ?TaxDataTaxRateInterface
    {
        return $this->taxRate;
    }
    /**
     * Tax rate interface.
     *
     * @param TaxDataTaxRateInterface|null $taxRate
     *
     * @return self
     */
    public function setTaxRate(?TaxDataTaxRateInterface $taxRate) : self
    {
        $this->initialized['taxRate'] = true;
        $this->taxRate = $taxRate;
        return $this;
    }
}