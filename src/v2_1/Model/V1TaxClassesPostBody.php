<?php

namespace Kiboko\Magento\V2_1\Model;

class V1TaxClassesPostBody
{
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
    public function getTaxClass(): ?TaxDataTaxClassInterface
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
    public function setTaxClass(?TaxDataTaxClassInterface $taxClass): self
    {
        $this->taxClass = $taxClass;
        return $this;
    }
}
