<?php

namespace Kiboko\Magento\V2_3\Model;

class CatalogDataCustomOptionInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CustomOptionInterface
     *
     * @var CatalogDataCustomOptionExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Option id
     *
     * @var string|null
     */
    protected $optionId;
    /**
     * Option value
     *
     * @var string|null
     */
    protected $optionValue;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CustomOptionInterface
     *
     * @return CatalogDataCustomOptionExtensionInterface|null
     */
    public function getExtensionAttributes(): ?CatalogDataCustomOptionExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CustomOptionInterface
     *
     * @param CatalogDataCustomOptionExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?CatalogDataCustomOptionExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Option id
     *
     * @return string|null
     */
    public function getOptionId(): ?string
    {
        return $this->optionId;
    }
    /**
     * Option id
     *
     * @param string|null $optionId
     *
     * @return self
     */
    public function setOptionId(?string $optionId): self
    {
        $this->optionId = $optionId;
        return $this;
    }
    /**
     * Option value
     *
     * @return string|null
     */
    public function getOptionValue(): ?string
    {
        return $this->optionValue;
    }
    /**
     * Option value
     *
     * @param string|null $optionValue
     *
     * @return self
     */
    public function setOptionValue(?string $optionValue): self
    {
        $this->optionValue = $optionValue;
        return $this;
    }
}
