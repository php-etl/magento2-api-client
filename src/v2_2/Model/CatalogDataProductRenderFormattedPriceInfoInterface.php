<?php

namespace Kiboko\Magento\V2_2\Model;

class CatalogDataProductRenderFormattedPriceInfoInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\FormattedPriceInfoInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
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
     * Max regular price
     *
     * @var string|null
     */
    protected $maxRegularPrice;
    /**
     * The minimal price of the product or variation
     *
     * @var string|null
     */
    protected $minimalPrice;
    /**
     * Minimal regular price
     *
     * @var string|null
     */
    protected $minimalRegularPrice;
    /**
     * Price - is price of product without discounts and special price with taxes and fixed product tax
     *
     * @var string|null
     */
    protected $regularPrice;
    /**
     * Special price
     *
     * @var string|null
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
     * @return string|null
     */
    public function getFinalPrice(): ?string
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
    public function setFinalPrice(?string $finalPrice): self
    {
        $this->finalPrice = $finalPrice;
        return $this;
    }
    /**
     * Max price of a product
     *
     * @return string|null
     */
    public function getMaxPrice(): ?string
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
    public function setMaxPrice(?string $maxPrice): self
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }
    /**
     * Max regular price
     *
     * @return string|null
     */
    public function getMaxRegularPrice(): ?string
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
    public function setMaxRegularPrice(?string $maxRegularPrice): self
    {
        $this->maxRegularPrice = $maxRegularPrice;
        return $this;
    }
    /**
     * The minimal price of the product or variation
     *
     * @return string|null
     */
    public function getMinimalPrice(): ?string
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
    public function setMinimalPrice(?string $minimalPrice): self
    {
        $this->minimalPrice = $minimalPrice;
        return $this;
    }
    /**
     * Minimal regular price
     *
     * @return string|null
     */
    public function getMinimalRegularPrice(): ?string
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
    public function setMinimalRegularPrice(?string $minimalRegularPrice): self
    {
        $this->minimalRegularPrice = $minimalRegularPrice;
        return $this;
    }
    /**
     * Price - is price of product without discounts and special price with taxes and fixed product tax
     *
     * @return string|null
     */
    public function getRegularPrice(): ?string
    {
        return $this->regularPrice;
    }
    /**
     * Price - is price of product without discounts and special price with taxes and fixed product tax
     *
     * @param string|null $regularPrice
     *
     * @return self
     */
    public function setRegularPrice(?string $regularPrice): self
    {
        $this->regularPrice = $regularPrice;
        return $this;
    }
    /**
     * Special price
     *
     * @return string|null
     */
    public function getSpecialPrice(): ?string
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
    public function setSpecialPrice(?string $specialPrice): self
    {
        $this->specialPrice = $specialPrice;
        return $this;
    }
}
