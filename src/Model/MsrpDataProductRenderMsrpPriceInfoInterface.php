<?php

namespace Kiboko\Magento\Model;

class MsrpDataProductRenderMsrpPriceInfoInterface
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
     * @var string|null
     */
    protected $msrpPrice;
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
     * @return string|null
     */
    public function getMsrpPrice() : ?string
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
    public function setMsrpPrice(?string $msrpPrice) : self
    {
        $this->initialized['msrpPrice'] = true;
        $this->msrpPrice = $msrpPrice;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIsApplicable() : ?string
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
    public function setIsApplicable(?string $isApplicable) : self
    {
        $this->initialized['isApplicable'] = true;
        $this->isApplicable = $isApplicable;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIsShownPriceOnGesture() : ?string
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
    public function setIsShownPriceOnGesture(?string $isShownPriceOnGesture) : self
    {
        $this->initialized['isShownPriceOnGesture'] = true;
        $this->isShownPriceOnGesture = $isShownPriceOnGesture;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMsrpMessage() : ?string
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
    public function setMsrpMessage(?string $msrpMessage) : self
    {
        $this->initialized['msrpMessage'] = true;
        $this->msrpMessage = $msrpMessage;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExplanationMessage() : ?string
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
    public function setExplanationMessage(?string $explanationMessage) : self
    {
        $this->initialized['explanationMessage'] = true;
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}