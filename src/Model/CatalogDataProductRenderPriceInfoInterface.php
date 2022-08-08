<?php

namespace Kiboko\Magento\V2\Model;

class CatalogDataProductRenderPriceInfoInterface
{
    /**
     * Final price
     *
     * @var float
     */
    protected $finalPrice;
    /**
     * Max price of a product
     *
     * @var float
     */
    protected $maxPrice;
    /**
     * Max regular price
     *
     * @var float
     */
    protected $maxRegularPrice;
    /**
     * Minimal regular price
     *
     * @var float
     */
    protected $minimalRegularPrice;
    /**
     * Special price
     *
     * @var float
     */
    protected $specialPrice;
    /**
     *
     *
     * @var float
     */
    protected $minimalPrice;
    /**
     * Regular price
     *
     * @var float
     */
    protected $regularPrice;
    /**
     * Formatted Price interface. Aggregate formatted html with price representations. E.g.: <span class="price">$9.00</span> Consider currency, rounding and html
     *
     * @var CatalogDataProductRenderFormattedPriceInfoInterface
     */
    protected $formattedPrices;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface
     *
     * @var CatalogDataProductRenderPriceInfoExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Final price
     *
     * @return float
     */
    public function getFinalPrice(): float
    {
        return $this->finalPrice;
    }
    /**
     * Final price
     *
     * @param float $finalPrice
     *
     * @return self
     */
    public function setFinalPrice(float $finalPrice): self
    {
        $this->finalPrice = $finalPrice;
        return $this;
    }
    /**
     * Max price of a product
     *
     * @return float
     */
    public function getMaxPrice(): float
    {
        return $this->maxPrice;
    }
    /**
     * Max price of a product
     *
     * @param float $maxPrice
     *
     * @return self
     */
    public function setMaxPrice(float $maxPrice): self
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }
    /**
     * Max regular price
     *
     * @return float
     */
    public function getMaxRegularPrice(): float
    {
        return $this->maxRegularPrice;
    }
    /**
     * Max regular price
     *
     * @param float $maxRegularPrice
     *
     * @return self
     */
    public function setMaxRegularPrice(float $maxRegularPrice): self
    {
        $this->maxRegularPrice = $maxRegularPrice;
        return $this;
    }
    /**
     * Minimal regular price
     *
     * @return float
     */
    public function getMinimalRegularPrice(): float
    {
        return $this->minimalRegularPrice;
    }
    /**
     * Minimal regular price
     *
     * @param float $minimalRegularPrice
     *
     * @return self
     */
    public function setMinimalRegularPrice(float $minimalRegularPrice): self
    {
        $this->minimalRegularPrice = $minimalRegularPrice;
        return $this;
    }
    /**
     * Special price
     *
     * @return float
     */
    public function getSpecialPrice(): float
    {
        return $this->specialPrice;
    }
    /**
     * Special price
     *
     * @param float $specialPrice
     *
     * @return self
     */
    public function setSpecialPrice(float $specialPrice): self
    {
        $this->specialPrice = $specialPrice;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getMinimalPrice(): float
    {
        return $this->minimalPrice;
    }
    /**
     *
     *
     * @param float $minimalPrice
     *
     * @return self
     */
    public function setMinimalPrice(float $minimalPrice): self
    {
        $this->minimalPrice = $minimalPrice;
        return $this;
    }
    /**
     * Regular price
     *
     * @return float
     */
    public function getRegularPrice(): float
    {
        return $this->regularPrice;
    }
    /**
     * Regular price
     *
     * @param float $regularPrice
     *
     * @return self
     */
    public function setRegularPrice(float $regularPrice): self
    {
        $this->regularPrice = $regularPrice;
        return $this;
    }
    /**
     * Formatted Price interface. Aggregate formatted html with price representations. E.g.: <span class="price">$9.00</span> Consider currency, rounding and html
     *
     * @return CatalogDataProductRenderFormattedPriceInfoInterface
     */
    public function getFormattedPrices(): CatalogDataProductRenderFormattedPriceInfoInterface
    {
        return $this->formattedPrices;
    }
    /**
     * Formatted Price interface. Aggregate formatted html with price representations. E.g.: <span class="price">$9.00</span> Consider currency, rounding and html
     *
     * @param CatalogDataProductRenderFormattedPriceInfoInterface $formattedPrices
     *
     * @return self
     */
    public function setFormattedPrices(CatalogDataProductRenderFormattedPriceInfoInterface $formattedPrices): self
    {
        $this->formattedPrices = $formattedPrices;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface
     *
     * @return CatalogDataProductRenderPriceInfoExtensionInterface
     */
    public function getExtensionAttributes(): CatalogDataProductRenderPriceInfoExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface
     *
     * @param CatalogDataProductRenderPriceInfoExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(CatalogDataProductRenderPriceInfoExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
