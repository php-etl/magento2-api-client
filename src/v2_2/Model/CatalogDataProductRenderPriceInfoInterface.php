<?php

namespace Kiboko\Magento\V2_2\Model;

class CatalogDataProductRenderPriceInfoInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface
     *
     * @var CatalogDataProductRenderPriceInfoExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Final price
     *
     * @var float|null
     */
    protected $finalPrice;
    /**
     * Formatted Price interface. Aggregate formatted html with price representations. E.g.: <span class="price">$9.00</span> Consider currency, rounding and html
     *
     * @var CatalogDataProductRenderFormattedPriceInfoInterface|null
     */
    protected $formattedPrices;
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
     *
     *
     * @var float|null
     */
    protected $minimalPrice;
    /**
     * Minimal regular price
     *
     * @var float|null
     */
    protected $minimalRegularPrice;
    /**
     * Regular price
     *
     * @var float|null
     */
    protected $regularPrice;
    /**
     * Special price
     *
     * @var float|null
     */
    protected $specialPrice;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface
     *
     * @return CatalogDataProductRenderPriceInfoExtensionInterface|null
     */
    public function getExtensionAttributes(): ?CatalogDataProductRenderPriceInfoExtensionInterface
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
    public function setExtensionAttributes(?CatalogDataProductRenderPriceInfoExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Final price
     *
     * @return float|null
     */
    public function getFinalPrice(): ?float
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
    public function setFinalPrice(?float $finalPrice): self
    {
        $this->finalPrice = $finalPrice;
        return $this;
    }
    /**
     * Formatted Price interface. Aggregate formatted html with price representations. E.g.: <span class="price">$9.00</span> Consider currency, rounding and html
     *
     * @return CatalogDataProductRenderFormattedPriceInfoInterface|null
     */
    public function getFormattedPrices(): ?CatalogDataProductRenderFormattedPriceInfoInterface
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
    public function setFormattedPrices(?CatalogDataProductRenderFormattedPriceInfoInterface $formattedPrices): self
    {
        $this->formattedPrices = $formattedPrices;
        return $this;
    }
    /**
     * Max price of a product
     *
     * @return float|null
     */
    public function getMaxPrice(): ?float
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
    public function setMaxPrice(?float $maxPrice): self
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }
    /**
     * Max regular price
     *
     * @return float|null
     */
    public function getMaxRegularPrice(): ?float
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
    public function setMaxRegularPrice(?float $maxRegularPrice): self
    {
        $this->maxRegularPrice = $maxRegularPrice;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getMinimalPrice(): ?float
    {
        return $this->minimalPrice;
    }
    /**
     *
     *
     * @param float|null $minimalPrice
     *
     * @return self
     */
    public function setMinimalPrice(?float $minimalPrice): self
    {
        $this->minimalPrice = $minimalPrice;
        return $this;
    }
    /**
     * Minimal regular price
     *
     * @return float|null
     */
    public function getMinimalRegularPrice(): ?float
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
    public function setMinimalRegularPrice(?float $minimalRegularPrice): self
    {
        $this->minimalRegularPrice = $minimalRegularPrice;
        return $this;
    }
    /**
     * Regular price
     *
     * @return float|null
     */
    public function getRegularPrice(): ?float
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
    public function setRegularPrice(?float $regularPrice): self
    {
        $this->regularPrice = $regularPrice;
        return $this;
    }
    /**
     * Special price
     *
     * @return float|null
     */
    public function getSpecialPrice(): ?float
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
    public function setSpecialPrice(?float $specialPrice): self
    {
        $this->specialPrice = $specialPrice;
        return $this;
    }
}
