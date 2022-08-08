<?php

namespace Kiboko\Magento\V2\Model;

class TaxDataOrderTaxDetailsAppliedTaxExtensionInterface
{
    /**
     *
     *
     * @var TaxDataAppliedTaxRateInterface[]
     */
    protected $rates;
    /**
     *
     *
     * @return TaxDataAppliedTaxRateInterface[]
     */
    public function getRates(): array
    {
        return $this->rates;
    }
    /**
     *
     *
     * @param TaxDataAppliedTaxRateInterface[] $rates
     *
     * @return self
     */
    public function setRates(array $rates): self
    {
        $this->rates = $rates;
        return $this;
    }
}
