<?php

namespace Kiboko\Magento\v2_3\Model;

class SalesRuleDataRuleDiscountInterface
{
    /**
     * Discount Data Interface
     *
     * @var SalesRuleDataDiscountDataInterface
     */
    protected $discountData;
    /**
     * Rule Label
     *
     * @var string
     */
    protected $ruleLabel;
    /**
     * Rule ID
     *
     * @var int
     */
    protected $ruleId;
    /**
     * Discount Data Interface
     *
     * @return SalesRuleDataDiscountDataInterface
     */
    public function getDiscountData(): SalesRuleDataDiscountDataInterface
    {
        return $this->discountData;
    }
    /**
     * Discount Data Interface
     *
     * @param SalesRuleDataDiscountDataInterface $discountData
     *
     * @return self
     */
    public function setDiscountData(SalesRuleDataDiscountDataInterface $discountData): self
    {
        $this->discountData = $discountData;
        return $this;
    }
    /**
     * Rule Label
     *
     * @return string
     */
    public function getRuleLabel(): string
    {
        return $this->ruleLabel;
    }
    /**
     * Rule Label
     *
     * @param string $ruleLabel
     *
     * @return self
     */
    public function setRuleLabel(string $ruleLabel): self
    {
        $this->ruleLabel = $ruleLabel;
        return $this;
    }
    /**
     * Rule ID
     *
     * @return int
     */
    public function getRuleId(): int
    {
        return $this->ruleId;
    }
    /**
     * Rule ID
     *
     * @param int $ruleId
     *
     * @return self
     */
    public function setRuleId(int $ruleId): self
    {
        $this->ruleId = $ruleId;
        return $this;
    }
}
