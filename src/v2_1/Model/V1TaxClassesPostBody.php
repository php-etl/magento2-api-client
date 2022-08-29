<?php

namespace Kiboko\Magento\v2_1\Model;

class V1TaxClassesPostBody
{
    /**
     * Tax class interface.
     *
     * @var TaxDataTaxClassInterface
     */
    protected $taxClass;
    /**
     * Tax class interface.
     *
     * @return TaxDataTaxClassInterface
     */
    public function getTaxClass(): TaxDataTaxClassInterface
    {
        return $this->taxClass;
    }
    /**
     * Tax class interface.
     *
     * @param TaxDataTaxClassInterface $taxClass
     *
     * @return self
     */
    public function setTaxClass(TaxDataTaxClassInterface $taxClass): self
    {
        $this->taxClass = $taxClass;
        return $this;
    }
}
