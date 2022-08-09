<?php

namespace Kiboko\Magento\V2\Model;

class TemandoShippingDataOrderShippingExperienceInterface
{
    /**
     * 
     *
     * @var string
     */
    protected $code;
    /**
     * 
     *
     * @var float
     */
    protected $cost;
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCost() : float
    {
        return $this->cost;
    }
    /**
     * 
     *
     * @param float $cost
     *
     * @return self
     */
    public function setCost(float $cost) : self
    {
        $this->cost = $cost;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->label = $label;
        return $this;
    }
}