<?php

namespace Kiboko\Magento\v2_3\Model;

class CatalogDataProductCustomOptionValuesInterface
{
    /**
     * Option type id
     *
     * @var int
     */
    protected $optionTypeId;
    /**
     * Price
     *
     * @var float
     */
    protected $price;
    /**
     * Price type
     *
     * @var string
     */
    protected $priceType;
    /**
     * Sku
     *
     * @var string
     */
    protected $sku;
    /**
     * Sort order
     *
     * @var int
     */
    protected $sortOrder;
    /**
     * Option title
     *
     * @var string
     */
    protected $title;
    /**
     * Option type id
     *
     * @return int
     */
    public function getOptionTypeId(): int
    {
        return $this->optionTypeId;
    }
    /**
     * Option type id
     *
     * @param int $optionTypeId
     *
     * @return self
     */
    public function setOptionTypeId(int $optionTypeId): self
    {
        $this->optionTypeId = $optionTypeId;
        return $this;
    }
    /**
     * Price
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * Price
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Price type
     *
     * @return string
     */
    public function getPriceType(): string
    {
        return $this->priceType;
    }
    /**
     * Price type
     *
     * @param string $priceType
     *
     * @return self
     */
    public function setPriceType(string $priceType): self
    {
        $this->priceType = $priceType;
        return $this;
    }
    /**
     * Sku
     *
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }
    /**
     * Sku
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Sort order
     *
     * @return int
     */
    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }
    /**
     * Sort order
     *
     * @param int $sortOrder
     *
     * @return self
     */
    public function setSortOrder(int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Option title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Option title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
}
