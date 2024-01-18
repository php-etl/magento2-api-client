<?php

namespace Kiboko\Magento\Model;

class TaxDataGrandTotalDetailsInterface
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
     * Tax amount value
     *
     * @var float|null
     */
    protected $amount;
    /**
     * Tax rates info
     *
     * @var TaxDataGrandTotalRatesInterface[]|null
     */
    protected $rates;
    /**
     * Group identifier
     *
     * @var int|null
     */
    protected $groupId;
    /**
     * Tax amount value
     *
     * @return float|null
     */
    public function getAmount() : ?float
    {
        return $this->amount;
    }
    /**
     * Tax amount value
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Tax rates info
     *
     * @return TaxDataGrandTotalRatesInterface[]|null
     */
    public function getRates() : ?array
    {
        return $this->rates;
    }
    /**
     * Tax rates info
     *
     * @param TaxDataGrandTotalRatesInterface[]|null $rates
     *
     * @return self
     */
    public function setRates(?array $rates) : self
    {
        $this->initialized['rates'] = true;
        $this->rates = $rates;
        return $this;
    }
    /**
     * Group identifier
     *
     * @return int|null
     */
    public function getGroupId() : ?int
    {
        return $this->groupId;
    }
    /**
     * Group identifier
     *
     * @param int|null $groupId
     *
     * @return self
     */
    public function setGroupId(?int $groupId) : self
    {
        $this->initialized['groupId'] = true;
        $this->groupId = $groupId;
        return $this;
    }
}