<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductRenderPriceInfoExtensionInterface
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
     * Price interface.
     *
     * @var MsrpDataProductRenderMsrpPriceInfoInterface|null
     */
    protected $msrp;
    /**
     * Price interface.
     *
     * @var CatalogDataProductRenderPriceInfoInterface|null
     */
    protected $taxAdjustments;
    /**
     * 
     *
     * @var WeeeDataProductRenderWeeeAdjustmentAttributeInterface[]|null
     */
    protected $weeeAttributes;
    /**
     * 
     *
     * @var string|null
     */
    protected $weeeAdjustment;
    /**
     * Price interface.
     *
     * @return MsrpDataProductRenderMsrpPriceInfoInterface|null
     */
    public function getMsrp() : ?MsrpDataProductRenderMsrpPriceInfoInterface
    {
        return $this->msrp;
    }
    /**
     * Price interface.
     *
     * @param MsrpDataProductRenderMsrpPriceInfoInterface|null $msrp
     *
     * @return self
     */
    public function setMsrp(?MsrpDataProductRenderMsrpPriceInfoInterface $msrp) : self
    {
        $this->initialized['msrp'] = true;
        $this->msrp = $msrp;
        return $this;
    }
    /**
     * Price interface.
     *
     * @return CatalogDataProductRenderPriceInfoInterface|null
     */
    public function getTaxAdjustments() : ?CatalogDataProductRenderPriceInfoInterface
    {
        return $this->taxAdjustments;
    }
    /**
     * Price interface.
     *
     * @param CatalogDataProductRenderPriceInfoInterface|null $taxAdjustments
     *
     * @return self
     */
    public function setTaxAdjustments(?CatalogDataProductRenderPriceInfoInterface $taxAdjustments) : self
    {
        $this->initialized['taxAdjustments'] = true;
        $this->taxAdjustments = $taxAdjustments;
        return $this;
    }
    /**
     * 
     *
     * @return WeeeDataProductRenderWeeeAdjustmentAttributeInterface[]|null
     */
    public function getWeeeAttributes() : ?array
    {
        return $this->weeeAttributes;
    }
    /**
     * 
     *
     * @param WeeeDataProductRenderWeeeAdjustmentAttributeInterface[]|null $weeeAttributes
     *
     * @return self
     */
    public function setWeeeAttributes(?array $weeeAttributes) : self
    {
        $this->initialized['weeeAttributes'] = true;
        $this->weeeAttributes = $weeeAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWeeeAdjustment() : ?string
    {
        return $this->weeeAdjustment;
    }
    /**
     * 
     *
     * @param string|null $weeeAdjustment
     *
     * @return self
     */
    public function setWeeeAdjustment(?string $weeeAdjustment) : self
    {
        $this->initialized['weeeAdjustment'] = true;
        $this->weeeAdjustment = $weeeAdjustment;
        return $this;
    }
}