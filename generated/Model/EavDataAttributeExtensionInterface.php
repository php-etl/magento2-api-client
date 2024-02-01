<?php

namespace Kiboko\Magento\Model;

class EavDataAttributeExtensionInterface
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
    protected $isPagebuilderEnabled;
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsPagebuilderEnabled() : ?bool
    {
        return $this->isPagebuilderEnabled;
    }
    /**
     * 
     *
     * @param bool|null $isPagebuilderEnabled
     *
     * @return self
     */
    public function setIsPagebuilderEnabled(?bool $isPagebuilderEnabled) : self
    {
        $this->initialized['isPagebuilderEnabled'] = true;
        $this->isPagebuilderEnabled = $isPagebuilderEnabled;
        return $this;
    }
}