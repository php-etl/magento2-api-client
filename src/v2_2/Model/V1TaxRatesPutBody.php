<?php

namespace Kiboko\Magento\v2_2\Model;

class V1TaxRatesPutBody
{
    /**
     * Tax rate interface.
     *
     * @var TaxDataTaxRateInterface
     */
    protected $taxRate;
    /**
     * Tax rate interface.
     *
     * @return TaxDataTaxRateInterface
     */
    public function getTaxRate(): TaxDataTaxRateInterface
    {
        return $this->taxRate;
    }
    /**
     * Tax rate interface.
     *
     * @param TaxDataTaxRateInterface $taxRate
     *
     * @return self
     */
    public function setTaxRate(TaxDataTaxRateInterface $taxRate): self
    {
        $this->taxRate = $taxRate;
        return $this;
    }
}
