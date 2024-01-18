<?php

namespace Kiboko\Magento\Model;

class V1CouponsDeleteByCodesPostBody
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
     * @var string[]|null
     */
    protected $codes;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ignoreInvalidCoupons;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getCodes() : ?array
    {
        return $this->codes;
    }
    /**
     * 
     *
     * @param string[]|null $codes
     *
     * @return self
     */
    public function setCodes(?array $codes) : self
    {
        $this->initialized['codes'] = true;
        $this->codes = $codes;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIgnoreInvalidCoupons() : ?bool
    {
        return $this->ignoreInvalidCoupons;
    }
    /**
     * 
     *
     * @param bool|null $ignoreInvalidCoupons
     *
     * @return self
     */
    public function setIgnoreInvalidCoupons(?bool $ignoreInvalidCoupons) : self
    {
        $this->initialized['ignoreInvalidCoupons'] = true;
        $this->ignoreInvalidCoupons = $ignoreInvalidCoupons;
        return $this;
    }
}