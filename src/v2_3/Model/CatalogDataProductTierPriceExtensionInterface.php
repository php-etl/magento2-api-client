<?php

namespace Kiboko\Magento\v2_3\Model;

class CatalogDataProductTierPriceExtensionInterface
{
    /**
     *
     *
     * @var float
     */
    protected $percentageValue;
    /**
     *
     *
     * @var int
     */
    protected $websiteId;
    /**
     *
     *
     * @return float
     */
    public function getPercentageValue(): float
    {
        return $this->percentageValue;
    }
    /**
     *
     *
     * @param float $percentageValue
     *
     * @return self
     */
    public function setPercentageValue(float $percentageValue): self
    {
        $this->percentageValue = $percentageValue;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getWebsiteId(): int
    {
        return $this->websiteId;
    }
    /**
     *
     *
     * @param int $websiteId
     *
     * @return self
     */
    public function setWebsiteId(int $websiteId): self
    {
        $this->websiteId = $websiteId;
        return $this;
    }
}
