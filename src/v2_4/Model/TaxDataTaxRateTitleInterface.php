<?php

namespace Kiboko\Magento\V2_4\Model;

class TaxDataTaxRateTitleInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRateTitleInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Store id
     *
     * @var string|null
     */
    protected $storeId;
    /**
     * Title value
     *
     * @var string|null
     */
    protected $value;
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
    /**
     * Store id
     *
     * @return string|null
     */
    public function getStoreId(): ?string
    {
        return $this->storeId;
    }
    /**
     * Store id
     *
     * @param string|null $storeId
     *
     * @return self
     */
    public function setStoreId(?string $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Title value
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Title value
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
