<?php

namespace Kiboko\Magento\Model;

class SalesRuleDataCouponMassDeleteResultInterface
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
    public function getFailedItems() : ?array
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
    public function setFailedItems(?array $failedItems) : self
    {
        $this->initialized['failedItems'] = true;
        $this->failedItems = $failedItems;
        return $this;
    }
    /**
     * List of missing items.
     *
     * @return string[]|null
     */
    public function getMissingItems() : ?array
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
    public function setMissingItems(?array $missingItems) : self
    {
        $this->initialized['missingItems'] = true;
        $this->missingItems = $missingItems;
        return $this;
    }
}