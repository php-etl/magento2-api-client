<?php

namespace Kiboko\Magento\V2_3\Model;

class SharedCatalogDataSharedCatalogInterface
{
    /**
     * Created time for Shared Catalog.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Admin id for Shared Catalog.
     *
     * @var int|null
     */
    protected $createdBy;
    /**
     * Customer Group Id.
     *
     * @var int|null
     */
    protected $customerGroupId;
    /**
     * Shared Catalog description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * ID.
     *
     * @var int|null
     */
    protected $id;
    /**
     * Shared Catalog name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Store id for Shared Catalog.
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * Tax class id.
     *
     * @var int|null
     */
    protected $taxClassId;
    /**
     * Shared Catalog type.
     *
     * @var int|null
     */
    protected $type;
    /**
     * Created time for Shared Catalog.
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    /**
     * Created time for Shared Catalog.
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Admin id for Shared Catalog.
     *
     * @return int|null
     */
    public function getCreatedBy(): ?int
    {
        return $this->createdBy;
    }
    /**
     * Admin id for Shared Catalog.
     *
     * @param int|null $createdBy
     *
     * @return self
     */
    public function setCreatedBy(?int $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * Customer Group Id.
     *
     * @return int|null
     */
    public function getCustomerGroupId(): ?int
    {
        return $this->customerGroupId;
    }
    /**
     * Customer Group Id.
     *
     * @param int|null $customerGroupId
     *
     * @return self
     */
    public function setCustomerGroupId(?int $customerGroupId): self
    {
        $this->customerGroupId = $customerGroupId;
        return $this;
    }
    /**
     * Shared Catalog description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Shared Catalog description.
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
     * ID.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * ID.
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
     * Shared Catalog name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Shared Catalog name.
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
     * Store id for Shared Catalog.
     *
     * @return int|null
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }
    /**
     * Store id for Shared Catalog.
     *
     * @param int|null $storeId
     *
     * @return self
     */
    public function setStoreId(?int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Tax class id.
     *
     * @return int|null
     */
    public function getTaxClassId(): ?int
    {
        return $this->taxClassId;
    }
    /**
     * Tax class id.
     *
     * @param int|null $taxClassId
     *
     * @return self
     */
    public function setTaxClassId(?int $taxClassId): self
    {
        $this->taxClassId = $taxClassId;
        return $this;
    }
    /**
     * Shared Catalog type.
     *
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Shared Catalog type.
     *
     * @param int|null $type
     *
     * @return self
     */
    public function setType(?int $type): self
    {
        $this->type = $type;
        return $this;
    }
}
