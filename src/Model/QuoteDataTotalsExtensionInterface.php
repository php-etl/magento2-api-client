<?php

namespace Kiboko\Magento\Model;

class QuoteDataTotalsExtensionInterface
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
    protected $couponLabel;
    /**
     * 
     *
     * @return string|null
     */
    public function getCouponLabel() : ?string
    {
        return $this->couponLabel;
    }
    /**
     * 
     *
     * @param string|null $couponLabel
     *
     * @return self
     */
    public function setCouponLabel(?string $couponLabel) : self
    {
        $this->initialized['couponLabel'] = true;
        $this->couponLabel = $couponLabel;
        return $this;
    }
}