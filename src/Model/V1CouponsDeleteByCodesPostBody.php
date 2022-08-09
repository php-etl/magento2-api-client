<?php

namespace Kiboko\Magento\V2\Model;

class V1CouponsDeleteByCodesPostBody
{
    /**
     * 
     *
     * @var string[]
     */
    protected $codes;
    /**
     * 
     *
     * @var bool
     */
    protected $ignoreInvalidCoupons;
    /**
     * 
     *
     * @return string[]
     */
    public function getCodes() : array
    {
        return $this->codes;
    }
    /**
     * 
     *
     * @param string[] $codes
     *
     * @return self
     */
    public function setCodes(array $codes) : self
    {
        $this->codes = $codes;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIgnoreInvalidCoupons() : bool
    {
        return $this->ignoreInvalidCoupons;
    }
    /**
     * 
     *
     * @param bool $ignoreInvalidCoupons
     *
     * @return self
     */
    public function setIgnoreInvalidCoupons(bool $ignoreInvalidCoupons) : self
    {
        $this->ignoreInvalidCoupons = $ignoreInvalidCoupons;
        return $this;
    }
}