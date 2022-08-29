<?php

namespace Kiboko\Magento\v2_1\Model;

class SharedCatalogDataSharedCatalogInterface
{
    /**
     * Created time for Shared Catalog.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Admin id for Shared Catalog.
     *
     * @var int
     */
    protected $createdBy;
    /**
     * Customer Group Id.
     *
     * @var int
     */
    protected $customerGroupId;
    /**
     * Shared Catalog description.
     *
     * @var string
     */
    protected $description;
    /**
     * ID.
     *
     * @var int
     */
    protected $id;
    /**
     * Shared Catalog name.
     *
     * @var string
     */
    protected $name;
    /**
     * Store id for Shared Catalog.
     *
     * @var int
     */
    protected $storeId;
    /**
     * Tax class id.
     *
     * @var int
     */
    protected $taxClassId;
    /**
     * Shared Catalog type.
     *
     * @var int
     */
    protected $type;
    /**
     * Created time for Shared Catalog.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Created time for Shared Catalog.
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Admin id for Shared Catalog.
     *
     * @return int
     */
    public function getCreatedBy(): int
    {
        return $this->createdBy;
    }
    /**
     * Admin id for Shared Catalog.
     *
     * @param int $createdBy
     *
     * @return self
     */
    public function setCreatedBy(int $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * Customer Group Id.
     *
     * @return int
     */
    public function getCustomerGroupId(): int
    {
        return $this->customerGroupId;
    }
    /**
     * Customer Group Id.
     *
     * @param int $customerGroupId
     *
     * @return self
     */
    public function setCustomerGroupId(int $customerGroupId): self
    {
        $this->customerGroupId = $customerGroupId;
        return $this;
    }
    /**
     * Shared Catalog description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Shared Catalog description.
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
     * ID.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * ID.
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
     * Shared Catalog name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Shared Catalog name.
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
     * Store id for Shared Catalog.
     *
     * @return int
     */
    public function getStoreId(): int
    {
        return $this->storeId;
    }
    /**
     * Store id for Shared Catalog.
     *
     * @param int $storeId
     *
     * @return self
     */
    public function setStoreId(int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Tax class id.
     *
     * @return int
     */
    public function getTaxClassId(): int
    {
        return $this->taxClassId;
    }
    /**
     * Tax class id.
     *
     * @param int $taxClassId
     *
     * @return self
     */
    public function setTaxClassId(int $taxClassId): self
    {
        $this->taxClassId = $taxClassId;
        return $this;
    }
    /**
     * Shared Catalog type.
     *
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }
    /**
     * Shared Catalog type.
     *
     * @param int $type
     *
     * @return self
     */
    public function setType(int $type): self
    {
        $this->type = $type;
        return $this;
    }
}
