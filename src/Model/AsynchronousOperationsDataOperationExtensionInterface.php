<?php

namespace Kiboko\Magento\Model;

class AsynchronousOperationsDataOperationExtensionInterface
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
    protected $startTime;
    /**
     * 
     *
     * @return string|null
     */
    public function getStartTime() : ?string
    {
        return $this->startTime;
    }
    /**
     * 
     *
     * @param string|null $startTime
     *
     * @return self
     */
    public function setStartTime(?string $startTime) : self
    {
        $this->initialized['startTime'] = true;
        $this->startTime = $startTime;
        return $this;
    }
}