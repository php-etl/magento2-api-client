<?php

namespace Kiboko\Magento\V2_1\Model;

class V1CouponsGeneratePostBody
{
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
    public function getCouponSpec(): ?SalesRuleDataCouponGenerationSpecInterface
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
    public function setCouponSpec(?SalesRuleDataCouponGenerationSpecInterface $couponSpec): self
    {
        $this->couponSpec = $couponSpec;
        return $this;
    }
}
