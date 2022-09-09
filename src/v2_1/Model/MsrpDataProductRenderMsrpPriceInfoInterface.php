<?php

namespace Kiboko\Magento\V2_1\Model;

class MsrpDataProductRenderMsrpPriceInfoInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $explanationMessage;
    /**
     * ExtensionInterface class for @see \Magento\Msrp\Api\Data\ProductRender\MsrpPriceInfoInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var string|null
     */
    protected $isApplicable;
    /**
     *
     *
     * @var string|null
     */
    protected $isShownPriceOnGesture;
    /**
     *
     *
     * @var string|null
     */
    protected $msrpMessage;
    /**
     *
     *
     * @var string|null
     */
    protected $msrpPrice;
    /**
     *
     *
     * @return string|null
     */
    public function getExplanationMessage(): ?string
    {
        return $this->explanationMessage;
    }
    /**
     *
     *
     * @param string|null $explanationMessage
     *
     * @return self
     */
    public function setExplanationMessage(?string $explanationMessage): self
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
     * @return string|null
     */
    public function getIsApplicable(): ?string
    {
        return $this->isApplicable;
    }
    /**
     *
     *
     * @param string|null $isApplicable
     *
     * @return self
     */
    public function setIsApplicable(?string $isApplicable): self
    {
        $this->isApplicable = $isApplicable;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIsShownPriceOnGesture(): ?string
    {
        return $this->isShownPriceOnGesture;
    }
    /**
     *
     *
     * @param string|null $isShownPriceOnGesture
     *
     * @return self
     */
    public function setIsShownPriceOnGesture(?string $isShownPriceOnGesture): self
    {
        $this->isShownPriceOnGesture = $isShownPriceOnGesture;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getMsrpMessage(): ?string
    {
        return $this->msrpMessage;
    }
    /**
     *
     *
     * @param string|null $msrpMessage
     *
     * @return self
     */
    public function setMsrpMessage(?string $msrpMessage): self
    {
        $this->msrpMessage = $msrpMessage;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getMsrpPrice(): ?string
    {
        return $this->msrpPrice;
    }
    /**
     *
     *
     * @param string|null $msrpPrice
     *
     * @return self
     */
    public function setMsrpPrice(?string $msrpPrice): self
    {
        $this->msrpPrice = $msrpPrice;
        return $this;
    }
}
