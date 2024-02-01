<?php

namespace Kiboko\Magento\Model;

class BundleDataLinkInterface
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
     * The identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * Linked product sku
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Option id
     *
     * @var int|null
     */
    protected $optionId;
    /**
     * Qty
     *
     * @var float|null
     */
    protected $qty;
    /**
     * Position
     *
     * @var int|null
     */
    protected $position;
    /**
     * Is default
     *
     * @var bool|null
     */
    protected $isDefault;
    /**
     * Price
     *
     * @var float|null
     */
    protected $price;
    /**
     * Price type
     *
     * @var int|null
     */
    protected $priceType;
    /**
     * Whether quantity could be changed
     *
     * @var int|null
     */
    protected $canChangeQuantity;
    /**
     * ExtensionInterface class for @see \Magento\Bundle\Api\Data\LinkInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * The identifier
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * The identifier
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Linked product sku
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * Linked product sku
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
     * Option id
     *
     * @return int|null
     */
    public function getOptionId() : ?int
    {
        return $this->optionId;
    }
    /**
     * Option id
     *
     * @param int|null $optionId
     *
     * @return self
     */
    public function setOptionId(?int $optionId) : self
    {
        $this->initialized['optionId'] = true;
        $this->optionId = $optionId;
        return $this;
    }
    /**
     * Qty
     *
     * @return float|null
     */
    public function getQty() : ?float
    {
        return $this->qty;
    }
    /**
     * Qty
     *
     * @param float|null $qty
     *
     * @return self
     */
    public function setQty(?float $qty) : self
    {
        $this->initialized['qty'] = true;
        $this->qty = $qty;
        return $this;
    }
    /**
     * Position
     *
     * @return int|null
     */
    public function getPosition() : ?int
    {
        return $this->position;
    }
    /**
     * Position
     *
     * @param int|null $position
     *
     * @return self
     */
    public function setPosition(?int $position) : self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
     * Is default
     *
     * @return bool|null
     */
    public function getIsDefault() : ?bool
    {
        return $this->isDefault;
    }
    /**
     * Is default
     *
     * @param bool|null $isDefault
     *
     * @return self
     */
    public function setIsDefault(?bool $isDefault) : self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;
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
     * @return int|null
     */
    public function getPriceType() : ?int
    {
        return $this->priceType;
    }
    /**
     * Price type
     *
     * @param int|null $priceType
     *
     * @return self
     */
    public function setPriceType(?int $priceType) : self
    {
        $this->initialized['priceType'] = true;
        $this->priceType = $priceType;
        return $this;
    }
    /**
     * Whether quantity could be changed
     *
     * @return int|null
     */
    public function getCanChangeQuantity() : ?int
    {
        return $this->canChangeQuantity;
    }
    /**
     * Whether quantity could be changed
     *
     * @param int|null $canChangeQuantity
     *
     * @return self
     */
    public function setCanChangeQuantity(?int $canChangeQuantity) : self
    {
        $this->initialized['canChangeQuantity'] = true;
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
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}