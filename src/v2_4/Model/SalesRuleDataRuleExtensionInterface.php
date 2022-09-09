<?php

namespace Kiboko\Magento\V2_4\Model;

class SalesRuleDataRuleExtensionInterface
{
    /**
     *
     *
     * @var int|null
     */
    protected $rewardPointsDelta;
    /**
     *
     *
     * @return int|null
     */
    public function getRewardPointsDelta(): ?int
    {
        return $this->rewardPointsDelta;
    }
    /**
     *
     *
     * @param int|null $rewardPointsDelta
     *
     * @return self
     */
    public function setRewardPointsDelta(?int $rewardPointsDelta): self
    {
        $this->rewardPointsDelta = $rewardPointsDelta;
        return $this;
    }
}
