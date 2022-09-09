<?php

namespace Kiboko\Magento\V2_2\Model;

class V1SalesRulesRuleIdPutBody
{
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
    public function getRule(): ?SalesRuleDataRuleInterface
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
    public function setRule(?SalesRuleDataRuleInterface $rule): self
    {
        $this->rule = $rule;
        return $this;
    }
}
