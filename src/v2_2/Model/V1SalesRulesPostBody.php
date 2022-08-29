<?php

namespace Kiboko\Magento\v2_2\Model;

class V1SalesRulesPostBody
{
    /**
     * Interface RuleInterface
     *
     * @var SalesRuleDataRuleInterface
     */
    protected $rule;
    /**
     * Interface RuleInterface
     *
     * @return SalesRuleDataRuleInterface
     */
    public function getRule(): SalesRuleDataRuleInterface
    {
        return $this->rule;
    }
    /**
     * Interface RuleInterface
     *
     * @param SalesRuleDataRuleInterface $rule
     *
     * @return self
     */
    public function setRule(SalesRuleDataRuleInterface $rule): self
    {
        $this->rule = $rule;
        return $this;
    }
}
