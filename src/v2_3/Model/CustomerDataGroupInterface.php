<?php

namespace Kiboko\Magento\V2_3\Model;

class CustomerDataGroupInterface
{
    /**
     * Code
     *
     * @var string|null
     */
    protected $code;
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\GroupInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Id
     *
     * @var int|null
     */
    protected $id;
    /**
     * Tax class id
     *
     * @var int|null
     */
    protected $taxClassId;
    /**
     * Tax class name
     *
     * @var string|null
     */
    protected $taxClassName;
    /**
     * Code
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Code
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
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\GroupInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\GroupInterface
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
     * Id
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Id
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
     * Tax class id
     *
     * @return int|null
     */
    public function getTaxClassId(): ?int
    {
        return $this->taxClassId;
    }
    /**
     * Tax class id
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
     * Tax class name
     *
     * @return string|null
     */
    public function getTaxClassName(): ?string
    {
        return $this->taxClassName;
    }
    /**
     * Tax class name
     *
     * @param string|null $taxClassName
     *
     * @return self
     */
    public function setTaxClassName(?string $taxClassName): self
    {
        $this->taxClassName = $taxClassName;
        return $this;
    }
}
