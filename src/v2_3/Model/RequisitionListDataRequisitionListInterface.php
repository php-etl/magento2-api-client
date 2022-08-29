<?php

namespace Kiboko\Magento\v2_3\Model;

class RequisitionListDataRequisitionListInterface
{
    /**
     * Customer ID
     *
     * @var int
     */
    protected $customerId;
    /**
     * Requisition List Description
     *
     * @var string
     */
    protected $description;
    /**
     * ExtensionInterface class for @see \Magento\RequisitionList\Api\Data\RequisitionListInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Requisition List ID
     *
     * @var int
     */
    protected $id;
    /**
     * Requisition List Items
     *
     * @var RequisitionListDataRequisitionListItemInterface[]
     */
    protected $items;
    /**
     * Requisition List Name
     *
     * @var string
     */
    protected $name;
    /**
     * Requisition List Update Time
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Customer ID
     *
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }
    /**
     * Customer ID
     *
     * @param int $customerId
     *
     * @return self
     */
    public function setCustomerId(int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Requisition List Description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Requisition List Description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\RequisitionList\Api\Data\RequisitionListInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\RequisitionList\Api\Data\RequisitionListInterface
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
     * Requisition List ID
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Requisition List ID
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Requisition List Items
     *
     * @return RequisitionListDataRequisitionListItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * Requisition List Items
     *
     * @param RequisitionListDataRequisitionListItemInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Requisition List Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Requisition List Name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Requisition List Update Time
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Requisition List Update Time
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
