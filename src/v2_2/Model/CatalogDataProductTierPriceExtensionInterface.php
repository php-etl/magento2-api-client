<?php

namespace Kiboko\Magento\V2_2\Model;

class CatalogDataProductTierPriceExtensionInterface
{
    /**
     *
     *
     * @var float|null
     */
    protected $percentageValue;
    /**
     *
     *
     * @var int|null
     */
    protected $websiteId;
    /**
     *
     *
     * @return float|null
     */
    public function getPercentageValue(): ?float
    {
        return $this->percentageValue;
    }
    /**
     *
     *
     * @param float|null $percentageValue
     *
     * @return self
     */
    public function setPercentageValue(?float $percentageValue): self
    {
        $this->percentageValue = $percentageValue;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getWebsiteId(): ?int
    {
        return $this->websiteId;
    }
    /**
     *
     *
     * @param int|null $websiteId
     *
     * @return self
     */
    public function setWebsiteId(?int $websiteId): self
    {
        $this->websiteId = $websiteId;
        return $this;
    }
}
