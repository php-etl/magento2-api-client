<?php

namespace Kiboko\Magento\V2_1\Model;

class BundleDataBundleOptionInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Bundle\Api\Data\BundleOptionInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Bundle option id.
     *
     * @var int|null
     */
    protected $optionId;
    /**
     * Bundle option quantity.
     *
     * @var int|null
     */
    protected $optionQty;
    /**
     * Bundle option selection ids.
     *
     * @var int[]|null
     */
    protected $optionSelections;
    /**
     * ExtensionInterface class for @see \Magento\Bundle\Api\Data\BundleOptionInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Bundle\Api\Data\BundleOptionInterface
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
     * Bundle option id.
     *
     * @return int|null
     */
    public function getOptionId(): ?int
    {
        return $this->optionId;
    }
    /**
     * Bundle option id.
     *
     * @param int|null $optionId
     *
     * @return self
     */
    public function setOptionId(?int $optionId): self
    {
        $this->optionId = $optionId;
        return $this;
    }
    /**
     * Bundle option quantity.
     *
     * @return int|null
     */
    public function getOptionQty(): ?int
    {
        return $this->optionQty;
    }
    /**
     * Bundle option quantity.
     *
     * @param int|null $optionQty
     *
     * @return self
     */
    public function setOptionQty(?int $optionQty): self
    {
        $this->optionQty = $optionQty;
        return $this;
    }
    /**
     * Bundle option selection ids.
     *
     * @return int[]|null
     */
    public function getOptionSelections(): ?array
    {
        return $this->optionSelections;
    }
    /**
     * Bundle option selection ids.
     *
     * @param int[]|null $optionSelections
     *
     * @return self
     */
    public function setOptionSelections(?array $optionSelections): self
    {
        $this->optionSelections = $optionSelections;
        return $this;
    }
}
