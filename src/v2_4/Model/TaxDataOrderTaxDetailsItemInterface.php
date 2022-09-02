<?php

namespace Kiboko\Magento\V2_4\Model;

class TaxDataOrderTaxDetailsItemInterface
{
    /**
     * Applied taxes
     *
     * @var TaxDataOrderTaxDetailsAppliedTaxInterface[]
     */
    protected $appliedTaxes;
    /**
     * Associated item id if this item is associated with another item, null otherwise
     *
     * @var int
     */
    protected $associatedItemId;
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\OrderTaxDetailsItemInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Item id if this item is a product
     *
     * @var int
     */
    protected $itemId;
    /**
     * Type (shipping, product, weee, gift wrapping, etc)
     *
     * @var string
     */
    protected $type;
    /**
     * Applied taxes
     *
     * @return TaxDataOrderTaxDetailsAppliedTaxInterface[]
     */
    public function getAppliedTaxes(): array
    {
        return $this->appliedTaxes;
    }
    /**
     * Applied taxes
     *
     * @param TaxDataOrderTaxDetailsAppliedTaxInterface[] $appliedTaxes
     *
     * @return self
     */
    public function setAppliedTaxes(array $appliedTaxes): self
    {
        $this->appliedTaxes = $appliedTaxes;
        return $this;
    }
    /**
     * Associated item id if this item is associated with another item, null otherwise
     *
     * @return int
     */
    public function getAssociatedItemId(): int
    {
        return $this->associatedItemId;
    }
    /**
     * Associated item id if this item is associated with another item, null otherwise
     *
     * @param int $associatedItemId
     *
     * @return self
     */
    public function setAssociatedItemId(int $associatedItemId): self
    {
        $this->associatedItemId = $associatedItemId;
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Item id if this item is a product
     *
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }
    /**
     * Item id if this item is a product
     *
     * @param int $itemId
     *
     * @return self
     */
    public function setItemId(int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * Type (shipping, product, weee, gift wrapping, etc)
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type (shipping, product, weee, gift wrapping, etc)
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
