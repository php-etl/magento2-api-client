<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductRenderFormattedPriceInfoInterface
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
     * Html with final price
     *
     * @var string|null
     */
    protected $finalPrice;
    /**
     * Max price of a product
     *
     * @var string|null
     */
    protected $maxPrice;
    /**
     * The minimal price of the product or variation
     *
     * @var string|null
     */
    protected $minimalPrice;
    /**
     * Max regular price
     *
     * @var string|null
     */
    protected $maxRegularPrice;
    /**
     * Minimal regular price
     *
     * @var string|null
     */
    protected $minimalRegularPrice;
    /**
     * Special price
     *
     * @var string|null
     */
    protected $specialPrice;
    /**
     * Regular price
     *
     * @var string|null
     */
    protected $regularPrice;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\FormattedPriceInfoInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Html with final price
     *
     * @return string|null
     */
    public function getFinalPrice() : ?string
    {
        return $this->finalPrice;
    }
    /**
     * Html with final price
     *
     * @param string|null $finalPrice
     *
     * @return self
     */
    public function setFinalPrice(?string $finalPrice) : self
    {
        $this->initialized['finalPrice'] = true;
        $this->finalPrice = $finalPrice;
        return $this;
    }
    /**
     * Max price of a product
     *
     * @return string|null
     */
    public function getMaxPrice() : ?string
    {
        return $this->maxPrice;
    }
    /**
     * Max price of a product
     *
     * @param string|null $maxPrice
     *
     * @return self
     */
    public function setMaxPrice(?string $maxPrice) : self
    {
        $this->initialized['maxPrice'] = true;
        $this->maxPrice = $maxPrice;
        return $this;
    }
    /**
     * The minimal price of the product or variation
     *
     * @return string|null
     */
    public function getMinimalPrice() : ?string
    {
        return $this->minimalPrice;
    }
    /**
     * The minimal price of the product or variation
     *
     * @param string|null $minimalPrice
     *
     * @return self
     */
    public function setMinimalPrice(?string $minimalPrice) : self
    {
        $this->initialized['minimalPrice'] = true;
        $this->minimalPrice = $minimalPrice;
        return $this;
    }
    /**
     * Max regular price
     *
     * @return string|null
     */
    public function getMaxRegularPrice() : ?string
    {
        return $this->maxRegularPrice;
    }
    /**
     * Max regular price
     *
     * @param string|null $maxRegularPrice
     *
     * @return self
     */
    public function setMaxRegularPrice(?string $maxRegularPrice) : self
    {
        $this->initialized['maxRegularPrice'] = true;
        $this->maxRegularPrice = $maxRegularPrice;
        return $this;
    }
    /**
     * Minimal regular price
     *
     * @return string|null
     */
    public function getMinimalRegularPrice() : ?string
    {
        return $this->minimalRegularPrice;
    }
    /**
     * Minimal regular price
     *
     * @param string|null $minimalRegularPrice
     *
     * @return self
     */
    public function setMinimalRegularPrice(?string $minimalRegularPrice) : self
    {
        $this->initialized['minimalRegularPrice'] = true;
        $this->minimalRegularPrice = $minimalRegularPrice;
        return $this;
    }
    /**
     * Special price
     *
     * @return string|null
     */
    public function getSpecialPrice() : ?string
    {
        return $this->specialPrice;
    }
    /**
     * Special price
     *
     * @param string|null $specialPrice
     *
     * @return self
     */
    public function setSpecialPrice(?string $specialPrice) : self
    {
        $this->initialized['specialPrice'] = true;
        $this->specialPrice = $specialPrice;
        return $this;
    }
    /**
     * Regular price
     *
     * @return string|null
     */
    public function getRegularPrice() : ?string
    {
        return $this->regularPrice;
    }
    /**
     * Regular price
     *
     * @param string|null $regularPrice
     *
     * @return self
     */
    public function setRegularPrice(?string $regularPrice) : self
    {
        $this->initialized['regularPrice'] = true;
        $this->regularPrice = $regularPrice;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\FormattedPriceInfoInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\FormattedPriceInfoInterface
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