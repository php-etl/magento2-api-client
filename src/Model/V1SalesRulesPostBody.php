<?php

namespace Kiboko\Magento\Model;

class V1SalesRulesPostBody
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
     * Interface RuleInterface
     *
     * @var SalesRuleDataRuleInterface|null
     */
    protected $rule;
    /**
     * Interface RuleInterface
     *
     * @return SalesRuleDataRuleInterface|null
     */
    public function getRule() : ?SalesRuleDataRuleInterface
    {
        return $this->rule;
    }
    /**
     * Interface RuleInterface
     *
     * @param SalesRuleDataRuleInterface|null $rule
     *
     * @return self
     */
    public function setRule(?SalesRuleDataRuleInterface $rule) : self
    {
        $this->initialized['rule'] = true;
        $this->rule = $rule;
        return $this;
    }
}