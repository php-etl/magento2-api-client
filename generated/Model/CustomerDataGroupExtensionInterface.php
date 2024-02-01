<?php

namespace Kiboko\Magento\Model;

class CustomerDataGroupExtensionInterface
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
     * @var int[]|null
     */
    protected $excludeWebsiteIds;
    /**
     * 
     *
     * @return int[]|null
     */
    public function getExcludeWebsiteIds() : ?array
    {
        return $this->excludeWebsiteIds;
    }
    /**
     * 
     *
     * @param int[]|null $excludeWebsiteIds
     *
     * @return self
     */
    public function setExcludeWebsiteIds(?array $excludeWebsiteIds) : self
    {
        $this->initialized['excludeWebsiteIds'] = true;
        $this->excludeWebsiteIds = $excludeWebsiteIds;
        return $this;
    }
}