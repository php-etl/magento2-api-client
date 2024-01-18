<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductRenderPriceInfoInterface
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
     * Final price
     *
     * @var float|null
     */
    protected $finalPrice;
    /**
     * Max price of a product
     *
     * @var float|null
     */
    protected $maxPrice;
    /**
     * Max regular price
     *
     * @var float|null
     */
    protected $maxRegularPrice;
    /**
     * Minimal regular price
     *
     * @var float|null
     */
    protected $minimalRegularPrice;
    /**
     * Special price
     *
     * @var float|null
     */
    protected $specialPrice;
    /**
     * Minimal price
     *
     * @var float|null
     */
    protected $minimalPrice;
    /**
     * Regular price
     *
     * @var float|null
     */
    protected $regularPrice;
    /**
     * Formatted Price interface. Aggregate formatted html with price representations. E.g.: <span class="price">$9.00</span> Consider currency, rounding and html
     *
     * @var CatalogDataProductRenderFormattedPriceInfoInterface|null
     */
    protected $formattedPrices;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface
     *
     * @var CatalogDataProductRenderPriceInfoExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Final price
     *
     * @return float|null
     */
    public function getFinalPrice() : ?float
    {
        return $this->finalPrice;
    }
    /**
     * Final price
     *
     * @param float|null $finalPrice
     *
     * @return self
     */
    public function setFinalPrice(?float $finalPrice) : self
    {
        $this->initialized['finalPrice'] = true;
        $this->finalPrice = $finalPrice;
        return $this;
    }
    /**
     * Max price of a product
     *
     * @return float|null
     */
    public function getMaxPrice() : ?float
    {
        return $this->maxPrice;
    }
    /**
     * Max price of a product
     *
     * @param float|null $maxPrice
     *
     * @return self
     */
    public function setMaxPrice(?float $maxPrice) : self
    {
        $this->initialized['maxPrice'] = true;
        $this->maxPrice = $maxPrice;
        return $this;
    }
    /**
     * Max regular price
     *
     * @return float|null
     */
    public function getMaxRegularPrice() : ?float
    {
        return $this->maxRegularPrice;
    }
    /**
     * Max regular price
     *
     * @param float|null $maxRegularPrice
     *
     * @return self
     */
    public function setMaxRegularPrice(?float $maxRegularPrice) : self
    {
        $this->initialized['maxRegularPrice'] = true;
        $this->maxRegularPrice = $maxRegularPrice;
        return $this;
    }
    /**
     * Minimal regular price
     *
     * @return float|null
     */
    public function getMinimalRegularPrice() : ?float
    {
        return $this->minimalRegularPrice;
    }
    /**
     * Minimal regular price
     *
     * @param float|null $minimalRegularPrice
     *
     * @return self
     */
    public function setMinimalRegularPrice(?float $minimalRegularPrice) : self
    {
        $this->initialized['minimalRegularPrice'] = true;
        $this->minimalRegularPrice = $minimalRegularPrice;
        return $this;
    }
    /**
     * Special price
     *
     * @return float|null
     */
    public function getSpecialPrice() : ?float
    {
        return $this->specialPrice;
    }
    /**
     * Special price
     *
     * @param float|null $specialPrice
     *
     * @return self
     */
    public function setSpecialPrice(?float $specialPrice) : self
    {
        $this->initialized['specialPrice'] = true;
        $this->specialPrice = $specialPrice;
        return $this;
    }
    /**
     * Minimal price
     *
     * @return float|null
     */
    public function getMinimalPrice() : ?float
    {
        return $this->minimalPrice;
    }
    /**
     * Minimal price
     *
     * @param float|null $minimalPrice
     *
     * @return self
     */
    public function setMinimalPrice(?float $minimalPrice) : self
    {
        $this->initialized['minimalPrice'] = true;
        $this->minimalPrice = $minimalPrice;
        return $this;
    }
    /**
     * Regular price
     *
     * @return float|null
     */
    public function getRegularPrice() : ?float
    {
        return $this->regularPrice;
    }
    /**
     * Regular price
     *
     * @param float|null $regularPrice
     *
     * @return self
     */
    public function setRegularPrice(?float $regularPrice) : self
    {
        $this->initialized['regularPrice'] = true;
        $this->regularPrice = $regularPrice;
        return $this;
    }
    /**
     * Formatted Price interface. Aggregate formatted html with price representations. E.g.: <span class="price">$9.00</span> Consider currency, rounding and html
     *
     * @return CatalogDataProductRenderFormattedPriceInfoInterface|null
     */
    public function getFormattedPrices() : ?CatalogDataProductRenderFormattedPriceInfoInterface
    {
        return $this->formattedPrices;
    }
    /**
     * Formatted Price interface. Aggregate formatted html with price representations. E.g.: <span class="price">$9.00</span> Consider currency, rounding and html
     *
     * @param CatalogDataProductRenderFormattedPriceInfoInterface|null $formattedPrices
     *
     * @return self
     */
    public function setFormattedPrices(?CatalogDataProductRenderFormattedPriceInfoInterface $formattedPrices) : self
    {
        $this->initialized['formattedPrices'] = true;
        $this->formattedPrices = $formattedPrices;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface
     *
     * @return CatalogDataProductRenderPriceInfoExtensionInterface|null
     */
    public function getExtensionAttributes() : ?CatalogDataProductRenderPriceInfoExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface
     *
     * @param CatalogDataProductRenderPriceInfoExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?CatalogDataProductRenderPriceInfoExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}