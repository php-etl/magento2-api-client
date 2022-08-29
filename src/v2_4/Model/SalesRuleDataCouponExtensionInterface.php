<?php

namespace Kiboko\Magento\v2_4\Model;

class SalesRuleDataCouponExtensionInterface
{
    /**
     *
     *
     * @var DotdigitalgroupEmailDataCouponAttributeInterface
     */
    protected $ddgExtensionAttributes;
    /**
     *
     *
     * @return DotdigitalgroupEmailDataCouponAttributeInterface
     */
    public function getDdgExtensionAttributes(): DotdigitalgroupEmailDataCouponAttributeInterface
    {
        return $this->ddgExtensionAttributes;
    }
    /**
     *
     *
     * @param DotdigitalgroupEmailDataCouponAttributeInterface $ddgExtensionAttributes
     *
     * @return self
     */
    public function setDdgExtensionAttributes(DotdigitalgroupEmailDataCouponAttributeInterface $ddgExtensionAttributes): self
    {
        $this->ddgExtensionAttributes = $ddgExtensionAttributes;
        return $this;
    }
}
