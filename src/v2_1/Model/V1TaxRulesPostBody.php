<?php

namespace Kiboko\Magento\v2_1\Model;

class V1TaxRulesPostBody
{
    /**
     * Tax rule interface.
     *
     * @var TaxDataTaxRuleInterface
     */
    protected $rule;
    /**
     * Tax rule interface.
     *
     * @return TaxDataTaxRuleInterface
     */
    public function getRule(): TaxDataTaxRuleInterface
    {
        return $this->rule;
    }
    /**
     * Tax rule interface.
     *
     * @param TaxDataTaxRuleInterface $rule
     *
     * @return self
     */
    public function setRule(TaxDataTaxRuleInterface $rule): self
    {
        $this->rule = $rule;
        return $this;
    }
}
