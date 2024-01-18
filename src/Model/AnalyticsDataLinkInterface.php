<?php

namespace Kiboko\Magento\Model;

class AnalyticsDataLinkInterface
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
    protected $url;
    /**
     * 
     *
     * @var string|null
     */
    protected $initializationVector;
    /**
     * 
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInitializationVector() : ?string
    {
        return $this->initializationVector;
    }
    /**
     * 
     *
     * @param string|null $initializationVector
     *
     * @return self
     */
    public function setInitializationVector(?string $initializationVector) : self
    {
        $this->initialized['initializationVector'] = true;
        $this->initializationVector = $initializationVector;
        return $this;
    }
}