<?php

namespace Kiboko\Magento\v2_3\Model;

class CatalogDataCustomOptionInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CustomOptionInterface
     *
     * @var CatalogDataCustomOptionExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Option id
     *
     * @var string
     */
    protected $optionId;
    /**
     * Option value
     *
     * @var string
     */
    protected $optionValue;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CustomOptionInterface
     *
     * @return CatalogDataCustomOptionExtensionInterface
     */
    public function getExtensionAttributes(): CatalogDataCustomOptionExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CustomOptionInterface
     *
     * @param CatalogDataCustomOptionExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(CatalogDataCustomOptionExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Option id
     *
     * @return string
     */
    public function getOptionId(): string
    {
        return $this->optionId;
    }
    /**
     * Option id
     *
     * @param string $optionId
     *
     * @return self
     */
    public function setOptionId(string $optionId): self
    {
        $this->optionId = $optionId;
        return $this;
    }
    /**
     * Option value
     *
     * @return string
     */
    public function getOptionValue(): string
    {
        return $this->optionValue;
    }
    /**
     * Option value
     *
     * @param string $optionValue
     *
     * @return self
     */
    public function setOptionValue(string $optionValue): self
    {
        $this->optionValue = $optionValue;
        return $this;
    }
}
