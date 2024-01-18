<?php

namespace Kiboko\Magento\Model;

class InventoryApiDataStockSourceLinkExtensionInterface
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
     * @var string|null
     */
    protected $sourceName;
    /**
     * 
     *
     * @return string|null
     */
    public function getSourceName() : ?string
    {
        return $this->sourceName;
    }
    /**
     * 
     *
     * @param string|null $sourceName
     *
     * @return self
     */
    public function setSourceName(?string $sourceName) : self
    {
        $this->initialized['sourceName'] = true;
        $this->sourceName = $sourceName;
        return $this;
    }
}