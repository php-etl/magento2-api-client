<?php

namespace Kiboko\Magento\V2_2\Model;

class TaxDataTaxRuleInterface
{
    /**
     * Calculate subtotal.
     *
     * @var bool
     */
    protected $calculateSubtotal;
    /**
     * Tax rule code
     *
     * @var string
     */
    protected $code;
    /**
     * Customer tax class id
     *
     * @var int[]
     */
    protected $customerTaxClassIds;
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRuleInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Id
     *
     * @var int
     */
    protected $id;
    /**
     * Sort order.
     *
     * @var int
     */
    protected $position;
    /**
     * Priority
     *
     * @var int
     */
    protected $priority;
    /**
     * Product tax class id
     *
     * @var int[]
     */
    protected $productTaxClassIds;
    /**
     * Tax rate ids
     *
     * @var int[]
     */
    protected $taxRateIds;
    /**
     * Calculate subtotal.
     *
     * @return bool
     */
    public function getCalculateSubtotal(): bool
    {
        return $this->calculateSubtotal;
    }
    /**
     * Calculate subtotal.
     *
     * @param bool $calculateSubtotal
     *
     * @return self
     */
    public function setCalculateSubtotal(bool $calculateSubtotal): self
    {
        $this->calculateSubtotal = $calculateSubtotal;
        return $this;
    }
    /**
     * Tax rule code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Tax rule code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Customer tax class id
     *
     * @return int[]
     */
    public function getCustomerTaxClassIds(): array
    {
        return $this->customerTaxClassIds;
    }
    /**
     * Customer tax class id
     *
     * @param int[] $customerTaxClassIds
     *
     * @return self
     */
    public function setCustomerTaxClassIds(array $customerTaxClassIds): self
    {
        $this->customerTaxClassIds = $customerTaxClassIds;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRuleInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRuleInterface
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Id
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
     * Sort order.
     *
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Sort order.
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * Priority
     *
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }
    /**
     * Priority
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority): self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * Product tax class id
     *
     * @return int[]
     */
    public function getProductTaxClassIds(): array
    {
        return $this->productTaxClassIds;
    }
    /**
     * Product tax class id
     *
     * @param int[] $productTaxClassIds
     *
     * @return self
     */
    public function setProductTaxClassIds(array $productTaxClassIds): self
    {
        $this->productTaxClassIds = $productTaxClassIds;
        return $this;
    }
    /**
     * Tax rate ids
     *
     * @return int[]
     */
    public function getTaxRateIds(): array
    {
        return $this->taxRateIds;
    }
    /**
     * Tax rate ids
     *
     * @param int[] $taxRateIds
     *
     * @return self
     */
    public function setTaxRateIds(array $taxRateIds): self
    {
        $this->taxRateIds = $taxRateIds;
        return $this;
    }
}
