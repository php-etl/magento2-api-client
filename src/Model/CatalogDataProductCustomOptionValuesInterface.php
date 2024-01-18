<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductCustomOptionValuesInterface
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
     * Option title
     *
     * @var string|null
     */
    protected $title;
    /**
     * Sort order
     *
     * @var int|null
     */
    protected $sortOrder;
    /**
     * Price
     *
     * @var float|null
     */
    protected $price;
    /**
     * Price type
     *
     * @var string|null
     */
    protected $priceType;
    /**
     * Sku
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Option type id
     *
     * @var int|null
     */
    protected $optionTypeId;
    /**
     * Option title
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * Option title
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Sort order
     *
     * @return int|null
     */
    public function getSortOrder() : ?int
    {
        return $this->sortOrder;
    }
    /**
     * Sort order
     *
     * @param int|null $sortOrder
     *
     * @return self
     */
    public function setSortOrder(?int $sortOrder) : self
    {
        $this->initialized['sortOrder'] = true;
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Price
     *
     * @return float|null
     */
    public function getPrice() : ?float
    {
        return $this->price;
    }
    /**
     * Price
     *
     * @param float|null $price
     *
     * @return self
     */
    public function setPrice(?float $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Price type
     *
     * @return string|null
     */
    public function getPriceType() : ?string
    {
        return $this->priceType;
    }
    /**
     * Price type
     *
     * @param string|null $priceType
     *
     * @return self
     */
    public function setPriceType(?string $priceType) : self
    {
        $this->initialized['priceType'] = true;
        $this->priceType = $priceType;
        return $this;
    }
    /**
     * Sku
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * Sku
     *
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku) : self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;
        return $this;
    }
    /**
     * Option type id
     *
     * @return int|null
     */
    public function getOptionTypeId() : ?int
    {
        return $this->optionTypeId;
    }
    /**
     * Option type id
     *
     * @param int|null $optionTypeId
     *
     * @return self
     */
    public function setOptionTypeId(?int $optionTypeId) : self
    {
        $this->initialized['optionTypeId'] = true;
        $this->optionTypeId = $optionTypeId;
        return $this;
    }
}