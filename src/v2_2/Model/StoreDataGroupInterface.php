<?php

namespace Kiboko\Magento\V2_2\Model;

class StoreDataGroupInterface
{
    /**
     * Group code.
     *
     * @var string|null
     */
    protected $code;
    /**
     *
     *
     * @var int|null
     */
    protected $defaultStoreId;
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\GroupInterface
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
     *
     *
     * @var string|null
     */
    protected $name;
    /**
     *
     *
     * @var int|null
     */
    protected $rootCategoryId;
    /**
     *
     *
     * @var int|null
     */
    protected $websiteId;
    /**
     * Group code.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Group code.
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
     *
     *
     * @return int|null
     */
    public function getDefaultStoreId(): ?int
    {
        return $this->defaultStoreId;
    }
    /**
     *
     *
     * @param int|null $defaultStoreId
     *
     * @return self
     */
    public function setDefaultStoreId(?int $defaultStoreId): self
    {
        $this->defaultStoreId = $defaultStoreId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\GroupInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\GroupInterface
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
     *
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     *
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
    public function getRootCategoryId(): ?int
    {
        return $this->rootCategoryId;
    }
    /**
     *
     *
     * @param int|null $rootCategoryId
     *
     * @return self
     */
    public function setRootCategoryId(?int $rootCategoryId): self
    {
        $this->rootCategoryId = $rootCategoryId;
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
