<?php

namespace Kiboko\Magento\V2_2\Model;

class StoreDataStoreInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $code;
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\StoreInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var int|null
     */
    protected $id;
    /**
     * Store name
     *
     * @var string|null
     */
    protected $name;
    /**
     *
     *
     * @var int|null
     */
    protected $storeGroupId;
    /**
     *
     *
     * @var int|null
     */
    protected $websiteId;
    /**
     *
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     *
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\StoreInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\StoreInterface
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
     *
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     *
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
     * Store name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Store name
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
     *
     *
     * @return int|null
     */
    public function getStoreGroupId(): ?int
    {
        return $this->storeGroupId;
    }
    /**
     *
     *
     * @param int|null $storeGroupId
     *
     * @return self
     */
    public function setStoreGroupId(?int $storeGroupId): self
    {
        $this->storeGroupId = $storeGroupId;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getWebsiteId(): ?int
    {
        return $this->websiteId;
    }
    /**
     *
     *
     * @param int|null $websiteId
     *
     * @return self
     */
    public function setWebsiteId(?int $websiteId): self
    {
        $this->websiteId = $websiteId;
        return $this;
    }
}
