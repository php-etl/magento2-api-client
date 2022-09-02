<?php

namespace Kiboko\Magento\V2_2\Model;

class V1CouponsCouponIdPutBody
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
