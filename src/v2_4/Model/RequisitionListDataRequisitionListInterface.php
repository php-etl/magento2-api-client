<?php

namespace Kiboko\Magento\V2_4\Model;

class RequisitionListDataRequisitionListInterface
{
    /**
     * Customer ID
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * Requisition List Description
     *
     * @var string|null
     */
    protected $description;
    /**
     * ExtensionInterface class for @see \Magento\RequisitionList\Api\Data\RequisitionListInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Requisition List ID
     *
     * @var int|null
     */
    protected $id;
    /**
     * Requisition List Items
     *
     * @var RequisitionListDataRequisitionListItemInterface[]|null
     */
    protected $items;
    /**
     * Requisition List Name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Requisition List Update Time
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * Customer ID
     *
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Customer ID
     *
     * @param int|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Requisition List Description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Requisition List Description
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
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
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Requisition List ID
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Requisition List Items
     *
     * @return RequisitionListDataRequisitionListItemInterface[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * Requisition List Items
     *
     * @param RequisitionListDataRequisitionListItemInterface[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Requisition List Name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Requisition List Name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Requisition List Update Time
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }
    /**
     * Requisition List Update Time
     *
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
