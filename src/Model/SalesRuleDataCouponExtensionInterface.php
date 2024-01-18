<?php

namespace Kiboko\Magento\Model;

class SalesRuleDataCouponExtensionInterface
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
     * @var DotdigitalgroupEmailDataCouponAttributeInterface|null
     */
    protected $ddgExtensionAttributes;
    /**
     * 
     *
     * @return DotdigitalgroupEmailDataCouponAttributeInterface|null
     */
    public function getDdgExtensionAttributes() : ?DotdigitalgroupEmailDataCouponAttributeInterface
    {
        return $this->ddgExtensionAttributes;
    }
    /**
     * 
     *
     * @param DotdigitalgroupEmailDataCouponAttributeInterface|null $ddgExtensionAttributes
     *
     * @return self
     */
    public function setDdgExtensionAttributes(?DotdigitalgroupEmailDataCouponAttributeInterface $ddgExtensionAttributes) : self
    {
        $this->initialized['ddgExtensionAttributes'] = true;
        $this->ddgExtensionAttributes = $ddgExtensionAttributes;
        return $this;
    }
}