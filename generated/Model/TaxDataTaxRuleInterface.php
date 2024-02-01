<?php

namespace Kiboko\Magento\Model;

class TaxDataTaxRuleInterface
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Id
     *
     * @var int|null
     */
    protected $id;
    /**
     * Tax rule code
     *
     * @var string|null
     */
    protected $code;
    /**
     * Priority
     *
     * @var int|null
     */
    protected $priority;
    /**
     * Sort order.
     *
     * @var int|null
     */
    protected $position;
    /**
     * Customer tax class id
     *
     * @var int[]|null
     */
    protected $customerTaxClassIds;
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
     * @var bool|null
     */
    protected $calculateSubtotal;
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRuleInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Id
     *
     * @return int|null
     */
    public function getId() : ?int
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
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Tax rule code
     *
     * @return string|null
     */
    public function getCode() : ?string
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
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Priority
     *
     * @return int|null
     */
    public function getPriority() : ?int
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
    public function setPriority(?int $priority) : self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * Sort order.
     *
     * @return int|null
     */
    public function getPosition() : ?int
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
    public function setPosition(?int $position) : self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
     * Customer tax class id
     *
     * @return int[]|null
     */
    public function getCustomerTaxClassIds() : ?array
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
    public function setCustomerTaxClassIds(?array $customerTaxClassIds) : self
    {
        $this->initialized['customerTaxClassIds'] = true;
        $this->customerTaxClassIds = $customerTaxClassIds;
        return $this;
    }
    /**
     * Product tax class id
     *
     * @return int[]|null
     */
    public function getProductTaxClassIds() : ?array
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
    public function setProductTaxClassIds(?array $productTaxClassIds) : self
    {
        $this->initialized['productTaxClassIds'] = true;
        $this->productTaxClassIds = $productTaxClassIds;
        return $this;
    }
    /**
     * Tax rate ids
     *
     * @return int[]|null
     */
    public function getTaxRateIds() : ?array
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
    public function setTaxRateIds(?array $taxRateIds) : self
    {
        $this->initialized['taxRateIds'] = true;
        $this->taxRateIds = $taxRateIds;
        return $this;
    }
    /**
     * Calculate subtotal.
     *
     * @return bool|null
     */
    public function getCalculateSubtotal() : ?bool
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
    public function setCalculateSubtotal(?bool $calculateSubtotal) : self
    {
        $this->initialized['calculateSubtotal'] = true;
        $this->calculateSubtotal = $calculateSubtotal;
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}