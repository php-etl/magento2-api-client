<?php

namespace Kiboko\Magento\Model;

class TaxDataOrderTaxDetailsAppliedTaxExtensionInterface
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
     * @var TaxDataAppliedTaxRateInterface[]|null
     */
    protected $rates;
    /**
     * 
     *
     * @return TaxDataAppliedTaxRateInterface[]|null
     */
    public function getRates() : ?array
    {
        return $this->rates;
    }
    /**
     * 
     *
     * @param TaxDataAppliedTaxRateInterface[]|null $rates
     *
     * @return self
     */
    public function setRates(?array $rates) : self
    {
        $this->initialized['rates'] = true;
        $this->rates = $rates;
        return $this;
    }
}