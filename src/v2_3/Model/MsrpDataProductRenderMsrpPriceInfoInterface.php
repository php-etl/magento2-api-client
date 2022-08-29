<?php

namespace Kiboko\Magento\v2_3\Model;

class MsrpDataProductRenderMsrpPriceInfoInterface
{
    /**
     *
     *
     * @var string
     */
    protected $explanationMessage;
    /**
     * ExtensionInterface class for @see \Magento\Msrp\Api\Data\ProductRender\MsrpPriceInfoInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var string
     */
    protected $isApplicable;
    /**
     *
     *
     * @var string
     */
    protected $isShownPriceOnGesture;
    /**
     *
     *
     * @var string
     */
    protected $msrpMessage;
    /**
     *
     *
     * @var string
     */
    protected $msrpPrice;
    /**
     *
     *
     * @return string
     */
    public function getExplanationMessage(): string
    {
        return $this->explanationMessage;
    }
    /**
     *
     *
     * @param string $explanationMessage
     *
     * @return self
     */
    public function setExplanationMessage(string $explanationMessage): self
    {
        $this->explanationMessage = $explanationMessage;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Msrp\Api\Data\ProductRender\MsrpPriceInfoInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Msrp\Api\Data\ProductRender\MsrpPriceInfoInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getIsApplicable(): string
    {
        return $this->isApplicable;
    }
    /**
     *
     *
     * @param string $isApplicable
     *
     * @return self
     */
    public function setIsApplicable(string $isApplicable): self
    {
        $this->isApplicable = $isApplicable;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getIsShownPriceOnGesture(): string
    {
        return $this->isShownPriceOnGesture;
    }
    /**
     *
     *
     * @param string $isShownPriceOnGesture
     *
     * @return self
     */
    public function setIsShownPriceOnGesture(string $isShownPriceOnGesture): self
    {
        $this->isShownPriceOnGesture = $isShownPriceOnGesture;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getMsrpMessage(): string
    {
        return $this->msrpMessage;
    }
    /**
     *
     *
     * @param string $msrpMessage
     *
     * @return self
     */
    public function setMsrpMessage(string $msrpMessage): self
    {
        $this->msrpMessage = $msrpMessage;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getMsrpPrice(): string
    {
        return $this->msrpPrice;
    }
    /**
     *
     *
     * @param string $msrpPrice
     *
     * @return self
     */
    public function setMsrpPrice(string $msrpPrice): self
    {
        $this->msrpPrice = $msrpPrice;
        return $this;
    }
}
