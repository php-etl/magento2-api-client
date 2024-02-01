<?php

namespace Kiboko\Magento\Model;

class V1TaxClassesClassIdPutBody
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
     * Tax class interface.
     *
     * @var TaxDataTaxClassInterface|null
     */
    protected $taxClass;
    /**
     * Tax class interface.
     *
     * @return TaxDataTaxClassInterface|null
     */
    public function getTaxClass() : ?TaxDataTaxClassInterface
    {
        return $this->taxClass;
    }
    /**
     * Tax class interface.
     *
     * @param TaxDataTaxClassInterface|null $taxClass
     *
     * @return self
     */
    public function setTaxClass(?TaxDataTaxClassInterface $taxClass) : self
    {
        $this->initialized['taxClass'] = true;
        $this->taxClass = $taxClass;
        return $this;
    }
}