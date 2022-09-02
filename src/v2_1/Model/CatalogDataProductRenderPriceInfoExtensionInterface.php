<?php

namespace Kiboko\Magento\V2_1\Model;

class CatalogDataProductRenderPriceInfoExtensionInterface
{
    /**
     * Price interface.
     *
     * @var MsrpDataProductRenderMsrpPriceInfoInterface
     */
    protected $msrp;
    /**
     * Price interface.
     *
     * @var CatalogDataProductRenderPriceInfoInterface
     */
    protected $taxAdjustments;
    /**
     *
     *
     * @var string
     */
    protected $weeeAdjustment;
    /**
     *
     *
     * @var WeeeDataProductRenderWeeeAdjustmentAttributeInterface[]
     */
    protected $weeeAttributes;
    /**
     * Price interface.
     *
     * @return MsrpDataProductRenderMsrpPriceInfoInterface
     */
    public function getMsrp(): MsrpDataProductRenderMsrpPriceInfoInterface
    {
        return $this->msrp;
    }
    /**
     * Price interface.
     *
     * @param MsrpDataProductRenderMsrpPriceInfoInterface $msrp
     *
     * @return self
     */
    public function setMsrp(MsrpDataProductRenderMsrpPriceInfoInterface $msrp): self
    {
        $this->msrp = $msrp;
        return $this;
    }
    /**
     * Price interface.
     *
     * @return CatalogDataProductRenderPriceInfoInterface
     */
    public function getTaxAdjustments(): CatalogDataProductRenderPriceInfoInterface
    {
        return $this->taxAdjustments;
    }
    /**
     * Price interface.
     *
     * @param CatalogDataProductRenderPriceInfoInterface $taxAdjustments
     *
     * @return self
     */
    public function setTaxAdjustments(CatalogDataProductRenderPriceInfoInterface $taxAdjustments): self
    {
        $this->taxAdjustments = $taxAdjustments;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getWeeeAdjustment(): string
    {
        return $this->weeeAdjustment;
    }
    /**
     *
     *
     * @param string $weeeAdjustment
     *
     * @return self
     */
    public function setWeeeAdjustment(string $weeeAdjustment): self
    {
        $this->weeeAdjustment = $weeeAdjustment;
        return $this;
    }
    /**
     *
     *
     * @return WeeeDataProductRenderWeeeAdjustmentAttributeInterface[]
     */
    public function getWeeeAttributes(): array
    {
        return $this->weeeAttributes;
    }
    /**
     *
     *
     * @param WeeeDataProductRenderWeeeAdjustmentAttributeInterface[] $weeeAttributes
     *
     * @return self
     */
    public function setWeeeAttributes(array $weeeAttributes): self
    {
        $this->weeeAttributes = $weeeAttributes;
        return $this;
    }
}
