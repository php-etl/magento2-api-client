<?php

namespace Kiboko\Magento\V2_4\Model;

class StoreDataWebsiteInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $code;
    /**
     *
     *
     * @var int|null
     */
    protected $defaultGroupId;
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\WebsiteInterface
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
     * Website name
     *
     * @var string|null
     */
    protected $name;
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
     *
     *
     * @return int|null
     */
    public function getDefaultGroupId(): ?int
    {
        return $this->defaultGroupId;
    }
    /**
     *
     *
     * @param int|null $defaultGroupId
     *
     * @return self
     */
    public function setDefaultGroupId(?int $defaultGroupId): self
    {
        $this->defaultGroupId = $defaultGroupId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\WebsiteInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\WebsiteInterface
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
     * Website name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Website name
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
}
