<?php

namespace Kiboko\Magento\Model;

class TaxDataGrandTotalRatesInterface
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
     * Tax percentage value
     *
     * @var string|null
     */
    protected $percent;
    /**
     * Rate title
     *
     * @var string|null
     */
    protected $title;
    /**
     * Tax percentage value
     *
     * @return string|null
     */
    public function getPercent() : ?string
    {
        return $this->percent;
    }
    /**
     * Tax percentage value
     *
     * @param string|null $percent
     *
     * @return self
     */
    public function setPercent(?string $percent) : self
    {
        $this->initialized['percent'] = true;
        $this->percent = $percent;
        return $this;
    }
    /**
     * Rate title
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * Rate title
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
}