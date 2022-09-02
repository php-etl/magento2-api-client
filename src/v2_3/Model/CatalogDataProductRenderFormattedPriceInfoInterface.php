<?php

namespace Kiboko\Magento\V2_3\Model;

class CatalogDataProductRenderFormattedPriceInfoInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\FormattedPriceInfoInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
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
     * Max regular price
     *
     * @var string
     */
    protected $maxRegularPrice;
    /**
     * The minimal price of the product or variation
     *
     * @var string
     */
    protected $minimalPrice;
    /**
     * Minimal regular price
     *
     * @var string
     */
    protected $minimalRegularPrice;
    /**
     * Price - is price of product without discounts and special price with taxes and fixed product tax
     *
     * @var string
     */
    protected $regularPrice;
    /**
     * Special price
     *
     * @var string
     */
    protected $specialPrice;
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Html with final price
     *
     * @return string
     */
    public function getFinalPrice(): string
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
    public function setFinalPrice(string $finalPrice): self
    {
        $this->finalPrice = $finalPrice;
        return $this;
    }
    /**
     * Max price of a product
     *
     * @return string
     */
    public function getMaxPrice(): string
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
    public function setMaxPrice(string $maxPrice): self
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }
    /**
     * Max regular price
     *
     * @return string
     */
    public function getMaxRegularPrice(): string
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
    public function setMaxRegularPrice(string $maxRegularPrice): self
    {
        $this->maxRegularPrice = $maxRegularPrice;
        return $this;
    }
    /**
     * The minimal price of the product or variation
     *
     * @return string
     */
    public function getMinimalPrice(): string
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
    public function setMinimalPrice(string $minimalPrice): self
    {
        $this->minimalPrice = $minimalPrice;
        return $this;
    }
    /**
     * Minimal regular price
     *
     * @return string
     */
    public function getMinimalRegularPrice(): string
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
    public function setMinimalRegularPrice(string $minimalRegularPrice): self
    {
        $this->minimalRegularPrice = $minimalRegularPrice;
        return $this;
    }
    /**
     * Price - is price of product without discounts and special price with taxes and fixed product tax
     *
     * @return string
     */
    public function getRegularPrice(): string
    {
        return $this->regularPrice;
    }
    /**
     * Price - is price of product without discounts and special price with taxes and fixed product tax
     *
     * @param string $regularPrice
     *
     * @return self
     */
    public function setRegularPrice(string $regularPrice): self
    {
        $this->regularPrice = $regularPrice;
        return $this;
    }
    /**
     * Special price
     *
     * @return string
     */
    public function getSpecialPrice(): string
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
    public function setSpecialPrice(string $specialPrice): self
    {
        $this->specialPrice = $specialPrice;
        return $this;
    }
}
