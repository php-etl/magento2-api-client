<?php

namespace Kiboko\Magento\Model;

class V1TaxRulesPutBody
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
     * Tax rule interface.
     *
     * @var TaxDataTaxRuleInterface|null
     */
    protected $rule;
    /**
     * Tax rule interface.
     *
     * @return TaxDataTaxRuleInterface|null
     */
    public function getRule() : ?TaxDataTaxRuleInterface
    {
        return $this->rule;
    }
    /**
     * Tax rule interface.
     *
     * @param TaxDataTaxRuleInterface|null $rule
     *
     * @return self
     */
    public function setRule(?TaxDataTaxRuleInterface $rule) : self
    {
        $this->initialized['rule'] = true;
        $this->rule = $rule;
        return $this;
    }
}