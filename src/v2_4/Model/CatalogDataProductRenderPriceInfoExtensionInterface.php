<?php

namespace Kiboko\Magento\V2_4\Model;

class CatalogDataProductRenderPriceInfoExtensionInterface
{
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
     * @var string|null
     */
    protected $weeeAdjustment;
    /**
     *
     *
     * @var WeeeDataProductRenderWeeeAdjustmentAttributeInterface[]|null
     */
    protected $weeeAttributes;
    /**
     * Price interface.
     *
     * @return MsrpDataProductRenderMsrpPriceInfoInterface|null
     */
    public function getMsrp(): ?MsrpDataProductRenderMsrpPriceInfoInterface
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
    public function setMsrp(?MsrpDataProductRenderMsrpPriceInfoInterface $msrp): self
    {
        $this->msrp = $msrp;
        return $this;
    }
    /**
     * Price interface.
     *
     * @return CatalogDataProductRenderPriceInfoInterface|null
     */
    public function getTaxAdjustments(): ?CatalogDataProductRenderPriceInfoInterface
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
    public function setTaxAdjustments(?CatalogDataProductRenderPriceInfoInterface $taxAdjustments): self
    {
        $this->taxAdjustments = $taxAdjustments;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getWeeeAdjustment(): ?string
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
    public function setWeeeAdjustment(?string $weeeAdjustment): self
    {
        $this->weeeAdjustment = $weeeAdjustment;
        return $this;
    }
    /**
     *
     *
     * @return WeeeDataProductRenderWeeeAdjustmentAttributeInterface[]|null
     */
    public function getWeeeAttributes(): ?array
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
    public function setWeeeAttributes(?array $weeeAttributes): self
    {
        $this->weeeAttributes = $weeeAttributes;
        return $this;
    }
}
