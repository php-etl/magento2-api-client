<?php

namespace Kiboko\Magento\v2_3\Model;

class CatalogDataProductRenderFormattedPriceInfoInterface
{
    /**
     * Html with final price
     *
     * @var string
     */
    protected $finalPrice;
    /**
     * Max price of a product
     *
     * @var string
     */
    protected $maxPrice;
    /**
     * The minimal price of the product or variation
     *
     * @var string
     */
    protected $minimalPrice;
    /**
     * Max regular price
     *
     * @var string
     */
    protected $maxRegularPrice;
    /**
     * Minimal regular price
     *
     * @var string
     */
    protected $minimalRegularPrice;
    /**
     * Special price
     *
     * @var string
     */
    protected $specialPrice;
    /**
     * Regular price
     *
     * @var string
     */
    protected $regularPrice;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\FormattedPriceInfoInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Html with final price
     *
     * @return string
     */
    public function getFinalPrice() : string
    {
        return $this->finalPrice;
    }
    /**
     * Html with final price
     *
     * @param string $finalPrice
     *
     * @return self
     */
    public function setFinalPrice(string $finalPrice) : self
    {
        $this->finalPrice = $finalPrice;
        return $this;
    }
    /**
     * Max price of a product
     *
     * @return string
     */
    public function getMaxPrice() : string
    {
        return $this->maxPrice;
    }
    /**
     * Max price of a product
     *
     * @param string $maxPrice
     *
     * @return self
     */
    public function setMaxPrice(string $maxPrice) : self
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }
    /**
     * The minimal price of the product or variation
     *
     * @return string
     */
    public function getMinimalPrice() : string
    {
        return $this->minimalPrice;
    }
    /**
     * The minimal price of the product or variation
     *
     * @param string $minimalPrice
     *
     * @return self
     */
    public function setMinimalPrice(string $minimalPrice) : self
    {
        $this->minimalPrice = $minimalPrice;
        return $this;
    }
    /**
     * Max regular price
     *
     * @return string
     */
    public function getMaxRegularPrice() : string
    {
        return $this->maxRegularPrice;
    }
    /**
     * Max regular price
     *
     * @param string $maxRegularPrice
     *
     * @return self
     */
    public function setMaxRegularPrice(string $maxRegularPrice) : self
    {
        $this->maxRegularPrice = $maxRegularPrice;
        return $this;
    }
    /**
     * Minimal regular price
     *
     * @return string
     */
    public function getMinimalRegularPrice() : string
    {
        return $this->minimalRegularPrice;
    }
    /**
     * Minimal regular price
     *
     * @param string $minimalRegularPrice
     *
     * @return self
     */
    public function setMinimalRegularPrice(string $minimalRegularPrice) : self
    {
        $this->minimalRegularPrice = $minimalRegularPrice;
        return $this;
    }
    /**
     * Special price
     *
     * @return string
     */
    public function getSpecialPrice() : string
    {
        return $this->specialPrice;
    }
    /**
     * Special price
     *
     * @param string $specialPrice
     *
     * @return self
     */
    public function setSpecialPrice(string $specialPrice) : self
    {
        $this->specialPrice = $specialPrice;
        return $this;
    }
    /**
     * Regular price
     *
     * @return string
     */
    public function getRegularPrice() : string
    {
        return $this->regularPrice;
    }
    /**
     * Regular price
     *
     * @param string $regularPrice
     *
     * @return self
     */
    public function setRegularPrice(string $regularPrice) : self
    {
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
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}