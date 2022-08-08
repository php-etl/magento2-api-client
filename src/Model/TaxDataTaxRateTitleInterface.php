<?php

namespace Kiboko\Magento\V2\Model;

class TaxDataTaxRateTitleInterface
{
    /**
     * Store id
     *
     * @var string
     */
    protected $storeId;
    /**
     * Title value
     *
     * @var string
     */
    protected $value;
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRateTitleInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Store id
     *
     * @return string
     */
    public function getStoreId(): string
    {
        return $this->storeId;
    }
    /**
     * Store id
     *
     * @param string $storeId
     *
     * @return self
     */
    public function setStoreId(string $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Title value
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Title value
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRateTitleInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRateTitleInterface
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
