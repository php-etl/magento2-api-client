<?php

namespace Kiboko\Magento\V2_1\Model;

class V1TaxRatesPutBody
{
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
    public function getTaxRate(): ?TaxDataTaxRateInterface
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
    public function setTaxRate(?TaxDataTaxRateInterface $taxRate): self
    {
        $this->taxRate = $taxRate;
        return $this;
    }
}
