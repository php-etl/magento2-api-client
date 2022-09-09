<?php

namespace Kiboko\Magento\V2_2\Model;

class TaxDataOrderTaxDetailsAppliedTaxExtensionInterface
{
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
    public function getRates(): ?array
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
    public function setRates(?array $rates): self
    {
        $this->rates = $rates;
        return $this;
    }
}
