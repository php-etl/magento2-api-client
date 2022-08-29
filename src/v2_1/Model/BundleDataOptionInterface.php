<?php

namespace Kiboko\Magento\v2_1\Model;

class BundleDataOptionInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Bundle\Api\Data\OptionInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Option id
     *
     * @var int
     */
    protected $optionId;
    /**
     * Option position
     *
     * @var int
     */
    protected $position;
    /**
     * Product links
     *
     * @var BundleDataLinkInterface[]
     */
    protected $productLinks;
    /**
     * Is required option
     *
     * @var bool
     */
    protected $required;
    /**
     * Product sku
     *
     * @var string
     */
    protected $sku;
    /**
     * Option title
     *
     * @var string
     */
    protected $title;
    /**
     * Input type
     *
     * @var string
     */
    protected $type;
    /**
     * ExtensionInterface class for @see \Magento\Bundle\Api\Data\OptionInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Bundle\Api\Data\OptionInterface
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
     * Option id
     *
     * @return int
     */
    public function getOptionId(): int
    {
        return $this->optionId;
    }
    /**
     * Option id
     *
     * @param int $optionId
     *
     * @return self
     */
    public function setOptionId(int $optionId): self
    {
        $this->optionId = $optionId;
        return $this;
    }
    /**
     * Option position
     *
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Option position
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
     * Product links
     *
     * @return BundleDataLinkInterface[]
     */
    public function getProductLinks(): array
    {
        return $this->productLinks;
    }
    /**
     * Product links
     *
     * @param BundleDataLinkInterface[] $productLinks
     *
     * @return self
     */
    public function setProductLinks(array $productLinks): self
    {
        $this->productLinks = $productLinks;
        return $this;
    }
    /**
     * Is required option
     *
     * @return bool
     */
    public function getRequired(): bool
    {
        return $this->required;
    }
    /**
     * Is required option
     *
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required): self
    {
        $this->required = $required;
        return $this;
    }
    /**
     * Product sku
     *
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }
    /**
     * Product sku
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Option title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Option title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Input type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Input type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
