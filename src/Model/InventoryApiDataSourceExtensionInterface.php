<?php

namespace Kiboko\Magento\Model;

class InventoryApiDataSourceExtensionInterface
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
     * @var bool|null
     */
    protected $isPickupLocationActive;
    /**
     * 
     *
     * @var string|null
     */
    protected $frontendName;
    /**
     * 
     *
     * @var string|null
     */
    protected $frontendDescription;
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsPickupLocationActive() : ?bool
    {
        return $this->isPickupLocationActive;
    }
    /**
     * 
     *
     * @param bool|null $isPickupLocationActive
     *
     * @return self
     */
    public function setIsPickupLocationActive(?bool $isPickupLocationActive) : self
    {
        $this->initialized['isPickupLocationActive'] = true;
        $this->isPickupLocationActive = $isPickupLocationActive;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFrontendName() : ?string
    {
        return $this->frontendName;
    }
    /**
     * 
     *
     * @param string|null $frontendName
     *
     * @return self
     */
    public function setFrontendName(?string $frontendName) : self
    {
        $this->initialized['frontendName'] = true;
        $this->frontendName = $frontendName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFrontendDescription() : ?string
    {
        return $this->frontendDescription;
    }
    /**
     * 
     *
     * @param string|null $frontendDescription
     *
     * @return self
     */
    public function setFrontendDescription(?string $frontendDescription) : self
    {
        $this->initialized['frontendDescription'] = true;
        $this->frontendDescription = $frontendDescription;
        return $this;
    }
}