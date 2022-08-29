<?php

namespace Kiboko\Magento\v2_4\Model;

class SalesRuleDataRuleExtensionInterface
{
    /**
     *
     *
     * @var int
     */
    protected $rewardPointsDelta;
    /**
     *
     *
     * @return int
     */
    public function getRewardPointsDelta(): int
    {
        return $this->rewardPointsDelta;
    }
    /**
     *
     *
     * @param int $rewardPointsDelta
     *
     * @return self
     */
    public function setRewardPointsDelta(int $rewardPointsDelta): self
    {
        $this->rewardPointsDelta = $rewardPointsDelta;
        return $this;
    }
}