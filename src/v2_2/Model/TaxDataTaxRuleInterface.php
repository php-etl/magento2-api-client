<?php

namespace Kiboko\Magento\V2_2\Model;

class TaxDataTaxRuleInterface
{
    /**
     * Calculate subtotal.
     *
     * @var bool|null
     */
    protected $calculateSubtotal;
    /**
     * Tax rule code
     *
     * @var string|null
     */
    protected $code;
    /**
     * Customer tax class id
     *
     * @var int[]|null
     */
    protected $customerTaxClassIds;
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRuleInterface
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
     * Sort order.
     *
     * @var int|null
     */
    protected $position;
    /**
     * Priority
     *
     * @var int|null
     */
    protected $priority;
    /**
     * Product tax class id
     *
     * @var int[]|null
     */
    protected $productTaxClassIds;
    /**
     * Tax rate ids
     *
     * @var int[]|null
     */
    protected $taxRateIds;
    /**
     * Calculate subtotal.
     *
     * @return bool|null
     */
    public function getCalculateSubtotal(): ?bool
    {
        return $this->calculateSubtotal;
    }
    /**
     * Calculate subtotal.
     *
     * @param bool|null $calculateSubtotal
     *
     * @return self
     */
    public function setCalculateSubtotal(?bool $calculateSubtotal): self
    {
        $this->calculateSubtotal = $calculateSubtotal;
        return $this;
    }
    /**
     * Tax rule code
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Tax rule code
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
     * Customer tax class id
     *
     * @return int[]|null
     */
    public function getCustomerTaxClassIds(): ?array
    {
        return $this->customerTaxClassIds;
    }
    /**
     * Customer tax class id
     *
     * @param int[]|null $customerTaxClassIds
     *
     * @return self
     */
    public function setCustomerTaxClassIds(?array $customerTaxClassIds): self
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
     * Sort order.
     *
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Sort order.
     *
     * @param int|null $position
     *
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * Priority
     *
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }
    /**
     * Priority
     *
     * @param int|null $priority
     *
     * @return self
     */
    public function setPriority(?int $priority): self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * Product tax class id
     *
     * @return int[]|null
     */
    public function getProductTaxClassIds(): ?array
    {
        return $this->productTaxClassIds;
    }
    /**
     * Product tax class id
     *
     * @param int[]|null $productTaxClassIds
     *
     * @return self
     */
    public function setProductTaxClassIds(?array $productTaxClassIds): self
    {
        $this->productTaxClassIds = $productTaxClassIds;
        return $this;
    }
    /**
     * Tax rate ids
     *
     * @return int[]|null
     */
    public function getTaxRateIds(): ?array
    {
        return $this->taxRateIds;
    }
    /**
     * Tax rate ids
     *
     * @param int[]|null $taxRateIds
     *
     * @return self
     */
    public function setTaxRateIds(?array $taxRateIds): self
    {
        $this->taxRateIds = $taxRateIds;
        return $this;
    }
}
