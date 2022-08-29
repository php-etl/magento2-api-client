<?php

namespace Kiboko\Magento\v2_2\Model;

class V1CouponsGeneratePostBody
{
    /**
     * CouponGenerationSpecInterface
     *
     * @var SalesRuleDataCouponGenerationSpecInterface
     */
    protected $couponSpec;
    /**
     * CouponGenerationSpecInterface
     *
     * @return SalesRuleDataCouponGenerationSpecInterface
     */
    public function getCouponSpec(): SalesRuleDataCouponGenerationSpecInterface
    {
        return $this->couponSpec;
    }
    /**
     * CouponGenerationSpecInterface
     *
     * @param SalesRuleDataCouponGenerationSpecInterface $couponSpec
     *
     * @return self
     */
    public function setCouponSpec(SalesRuleDataCouponGenerationSpecInterface $couponSpec): self
    {
        $this->couponSpec = $couponSpec;
        return $this;
    }
}
