<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductTierPriceExtensionInterface
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
    public function getPercentageValue() : ?float
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
    public function setPercentageValue(?float $percentageValue) : self
    {
        $this->initialized['percentageValue'] = true;
        $this->percentageValue = $percentageValue;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWebsiteId() : ?int
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
    public function setWebsiteId(?int $websiteId) : self
    {
        $this->initialized['websiteId'] = true;
        $this->websiteId = $websiteId;
        return $this;
    }
}