<?php

namespace Kiboko\Magento\V2_1\Model;

class V1CouponsCouponIdPutBody
{
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
    public function getCoupon(): ?SalesRuleDataCouponInterface
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
    public function setCoupon(?SalesRuleDataCouponInterface $coupon): self
    {
        $this->coupon = $coupon;
        return $this;
    }
}
