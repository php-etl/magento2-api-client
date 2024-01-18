<?php

namespace Kiboko\Magento\Model;

class TaxDataOrderTaxDetailsItemInterface
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
     * Type (shipping, product, weee, gift wrapping, etc)
     *
     * @var string|null
     */
    protected $type;
    /**
     * Item id if this item is a product
     *
     * @var int|null
     */
    protected $itemId;
    /**
     * Associated item id if this item is associated with another item, null otherwise
     *
     * @var int|null
     */
    protected $associatedItemId;
    /**
     * Applied taxes
     *
     * @var TaxDataOrderTaxDetailsAppliedTaxInterface[]|null
     */
    protected $appliedTaxes;
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\OrderTaxDetailsItemInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Type (shipping, product, weee, gift wrapping, etc)
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * Type (shipping, product, weee, gift wrapping, etc)
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Item id if this item is a product
     *
     * @return int|null
     */
    public function getItemId() : ?int
    {
        return $this->itemId;
    }
    /**
     * Item id if this item is a product
     *
     * @param int|null $itemId
     *
     * @return self
     */
    public function setItemId(?int $itemId) : self
    {
        $this->initialized['itemId'] = true;
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * Associated item id if this item is associated with another item, null otherwise
     *
     * @return int|null
     */
    public function getAssociatedItemId() : ?int
    {
        return $this->associatedItemId;
    }
    /**
     * Associated item id if this item is associated with another item, null otherwise
     *
     * @param int|null $associatedItemId
     *
     * @return self
     */
    public function setAssociatedItemId(?int $associatedItemId) : self
    {
        $this->initialized['associatedItemId'] = true;
        $this->associatedItemId = $associatedItemId;
        return $this;
    }
    /**
     * Applied taxes
     *
     * @return TaxDataOrderTaxDetailsAppliedTaxInterface[]|null
     */
    public function getAppliedTaxes() : ?array
    {
        return $this->appliedTaxes;
    }
    /**
     * Applied taxes
     *
     * @param TaxDataOrderTaxDetailsAppliedTaxInterface[]|null $appliedTaxes
     *
     * @return self
     */
    public function setAppliedTaxes(?array $appliedTaxes) : self
    {
        $this->initialized['appliedTaxes'] = true;
        $this->appliedTaxes = $appliedTaxes;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\OrderTaxDetailsItemInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\OrderTaxDetailsItemInterface
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