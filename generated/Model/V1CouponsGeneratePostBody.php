<?php

namespace Kiboko\Magento\Model;

class V1CouponsGeneratePostBody
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
     * CouponGenerationSpecInterface
     *
     * @var SalesRuleDataCouponGenerationSpecInterface|null
     */
    protected $couponSpec;
    /**
     * CouponGenerationSpecInterface
     *
     * @return SalesRuleDataCouponGenerationSpecInterface|null
     */
    public function getCouponSpec() : ?SalesRuleDataCouponGenerationSpecInterface
    {
        return $this->couponSpec;
    }
    /**
     * CouponGenerationSpecInterface
     *
     * @param SalesRuleDataCouponGenerationSpecInterface|null $couponSpec
     *
     * @return self
     */
    public function setCouponSpec(?SalesRuleDataCouponGenerationSpecInterface $couponSpec) : self
    {
        $this->initialized['couponSpec'] = true;
        $this->couponSpec = $couponSpec;
        return $this;
    }
}