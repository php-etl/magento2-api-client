<?php

namespace Kiboko\Magento\V2_4\Model;

class SalesRuleDataCouponMassDeleteResultInterface
{
    /**
     * List of failed items.
     *
     * @var string[]|null
     */
    protected $failedItems;
    /**
     * List of missing items.
     *
     * @var string[]|null
     */
    protected $missingItems;
    /**
     * List of failed items.
     *
     * @return string[]|null
     */
    public function getFailedItems(): ?array
    {
        return $this->failedItems;
    }
    /**
     * List of failed items.
     *
     * @param string[]|null $failedItems
     *
     * @return self
     */
    public function setFailedItems(?array $failedItems): self
    {
        $this->failedItems = $failedItems;
        return $this;
    }
    /**
     * List of missing items.
     *
     * @return string[]|null
     */
    public function getMissingItems(): ?array
    {
        return $this->missingItems;
    }
    /**
     * List of missing items.
     *
     * @param string[]|null $missingItems
     *
     * @return self
     */
    public function setMissingItems(?array $missingItems): self
    {
        $this->missingItems = $missingItems;
        return $this;
    }
}
