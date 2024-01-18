<?php

namespace Kiboko\Magento\Model;

class V1InventoryLowQuantityNotificationPostBody
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
     * @var InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface[]|null
     */
    protected $sourceItemConfigurations;
    /**
     * 
     *
     * @return InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface[]|null
     */
    public function getSourceItemConfigurations() : ?array
    {
        return $this->sourceItemConfigurations;
    }
    /**
     * 
     *
     * @param InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface[]|null $sourceItemConfigurations
     *
     * @return self
     */
    public function setSourceItemConfigurations(?array $sourceItemConfigurations) : self
    {
        $this->initialized['sourceItemConfigurations'] = true;
        $this->sourceItemConfigurations = $sourceItemConfigurations;
        return $this;
    }
}