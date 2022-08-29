<?php

namespace Kiboko\Magento\v2_1\Model;

class TaxDataTaxClassInterface
{
    /**
     * Tax class ID.
     *
     * @var int
     */
    protected $classId;
    /**
     * Tax class name.
     *
     * @var string
     */
    protected $className;
    /**
     * Tax class type.
     *
     * @var string
     */
    protected $classType;
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxClassInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Tax class ID.
     *
     * @return int
     */
    public function getClassId(): int
    {
        return $this->classId;
    }
    /**
     * Tax class ID.
     *
     * @param int $classId
     *
     * @return self
     */
    public function setClassId(int $classId): self
    {
        $this->classId = $classId;
        return $this;
    }
    /**
     * Tax class name.
     *
     * @return string
     */
    public function getClassName(): string
    {
        return $this->className;
    }
    /**
     * Tax class name.
     *
     * @param string $className
     *
     * @return self
     */
    public function setClassName(string $className): self
    {
        $this->className = $className;
        return $this;
    }
    /**
     * Tax class type.
     *
     * @return string
     */
    public function getClassType(): string
    {
        return $this->classType;
    }
    /**
     * Tax class type.
     *
     * @param string $classType
     *
     * @return self
     */
    public function setClassType(string $classType): self
    {
        $this->classType = $classType;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxClassInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxClassInterface
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
}
