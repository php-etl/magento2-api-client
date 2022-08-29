<?php

namespace Kiboko\Magento\v2_3\Model;

class BundleDataLinkInterface
{
    /**
     * The identifier
     *
     * @var string
     */
    protected $id;
    /**
     * Linked product sku
     *
     * @var string
     */
    protected $sku;
    /**
     * Option id
     *
     * @var int
     */
    protected $optionId;
    /**
     * Qty
     *
     * @var float
     */
    protected $qty;
    /**
     * Position
     *
     * @var int
     */
    protected $position;
    /**
     * Is default
     *
     * @var bool
     */
    protected $isDefault;
    /**
     * Price
     *
     * @var float
     */
    protected $price;
    /**
     * Price type
     *
     * @var int
     */
    protected $priceType;
    /**
     * Whether quantity could be changed
     *
     * @var int
     */
    protected $canChangeQuantity;
    /**
     * ExtensionInterface class for @see \Magento\Bundle\Api\Data\LinkInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * The identifier
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The identifier
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Linked product sku
     *
     * @return string
     */
    public function getSku() : string
    {
        return $this->sku;
    }
    /**
     * Linked product sku
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku) : self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Option id
     *
     * @return int
     */
    public function getOptionId() : int
    {
        return $this->optionId;
    }
    /**
     * Option id
     *
     * @param int $optionId
     *
     * @return self
     */
    public function setOptionId(int $optionId) : self
    {
        $this->optionId = $optionId;
        return $this;
    }
    /**
     * Qty
     *
     * @return float
     */
    public function getQty() : float
    {
        return $this->qty;
    }
    /**
     * Qty
     *
     * @param float $qty
     *
     * @return self
     */
    public function setQty(float $qty) : self
    {
        $this->qty = $qty;
        return $this;
    }
    /**
     * Position
     *
     * @return int
     */
    public function getPosition() : int
    {
        return $this->position;
    }
    /**
     * Position
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * Is default
     *
     * @return bool
     */
    public function getIsDefault() : bool
    {
        return $this->isDefault;
    }
    /**
     * Is default
     *
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault) : self
    {
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * Price
     *
     * @return float
     */
    public function getPrice() : float
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
    public function setPrice(float $price) : self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Price type
     *
     * @return int
     */
    public function getPriceType() : int
    {
        return $this->priceType;
    }
    /**
     * Price type
     *
     * @param int $priceType
     *
     * @return self
     */
    public function setPriceType(int $priceType) : self
    {
        $this->priceType = $priceType;
        return $this;
    }
    /**
     * Whether quantity could be changed
     *
     * @return int
     */
    public function getCanChangeQuantity() : int
    {
        return $this->canChangeQuantity;
    }
    /**
     * Whether quantity could be changed
     *
     * @param int $canChangeQuantity
     *
     * @return self
     */
    public function setCanChangeQuantity(int $canChangeQuantity) : self
    {
        $this->canChangeQuantity = $canChangeQuantity;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Bundle\Api\Data\LinkInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Bundle\Api\Data\LinkInterface
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