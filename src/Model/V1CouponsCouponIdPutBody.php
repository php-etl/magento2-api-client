<?php

namespace Kiboko\Magento\Model;

class V1CouponsCouponIdPutBody
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
     * Interface CouponInterface
     *
     * @var SalesRuleDataCouponInterface|null
     */
    protected $coupon;
    /**
     * Interface CouponInterface
     *
     * @return SalesRuleDataCouponInterface|null
     */
    public function getCoupon() : ?SalesRuleDataCouponInterface
    {
        return $this->coupon;
    }
    /**
     * Interface CouponInterface
     *
     * @param SalesRuleDataCouponInterface|null $coupon
     *
     * @return self
     */
    public function setCoupon(?SalesRuleDataCouponInterface $coupon) : self
    {
        $this->initialized['coupon'] = true;
        $this->coupon = $coupon;
        return $this;
    }
}