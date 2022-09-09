<?php

namespace Kiboko\Magento\V2_1\Model;

class TaxDataGrandTotalDetailsInterface
{
    /**
     * Tax amount value
     *
     * @var float|null
     */
    protected $amount;
    /**
     * Group identifier
     *
     * @var int|null
     */
    protected $groupId;
    /**
     * Tax rates info
     *
     * @var TaxDataGrandTotalRatesInterface[]|null
     */
    protected $rates;
    /**
     * Tax amount value
     *
     * @return float|null
     */
    public function getAmount(): ?float
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
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Group identifier
     *
     * @return int|null
     */
    public function getGroupId(): ?int
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
    public function setGroupId(?int $groupId): self
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Tax rates info
     *
     * @return TaxDataGrandTotalRatesInterface[]|null
     */
    public function getRates(): ?array
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
    public function setRates(?array $rates): self
    {
        $this->rates = $rates;
        return $this;
    }
}
