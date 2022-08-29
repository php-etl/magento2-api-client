<?php

namespace Kiboko\Magento\v2_1\Model;

class V1CouponsPostBody
{
    /**
     * Interface CouponInterface
     *
     * @var SalesRuleDataCouponInterface
     */
    protected $coupon;
    /**
     * Interface CouponInterface
     *
     * @return SalesRuleDataCouponInterface
     */
    public function getCoupon(): SalesRuleDataCouponInterface
    {
        return $this->coupon;
    }
    /**
     * Interface CouponInterface
     *
     * @param SalesRuleDataCouponInterface $coupon
     *
     * @return self
     */
    public function setCoupon(SalesRuleDataCouponInterface $coupon): self
    {
        $this->coupon = $coupon;
        return $this;
    }
}
