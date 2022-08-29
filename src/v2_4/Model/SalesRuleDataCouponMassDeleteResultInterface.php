<?php

namespace Kiboko\Magento\v2_4\Model;

class SalesRuleDataCouponMassDeleteResultInterface
{
    /**
     * List of failed items.
     *
     * @var string[]
     */
    protected $failedItems;
    /**
     * List of missing items.
     *
     * @var string[]
     */
    protected $missingItems;
    /**
     * List of failed items.
     *
     * @return string[]
     */
    public function getFailedItems(): array
    {
        return $this->failedItems;
    }
    /**
     * List of failed items.
     *
     * @param string[] $failedItems
     *
     * @return self
     */
    public function setFailedItems(array $failedItems): self
    {
        $this->failedItems = $failedItems;
        return $this;
    }
    /**
     * List of missing items.
     *
     * @return string[]
     */
    public function getMissingItems(): array
    {
        return $this->missingItems;
    }
    /**
     * List of missing items.
     *
     * @param string[] $missingItems
     *
     * @return self
     */
    public function setMissingItems(array $missingItems): self
    {
        $this->missingItems = $missingItems;
        return $this;
    }
}
