<?php

namespace Kiboko\Magento\Model;

class BundleDataOptionInterface
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
     * Option id
     *
     * @var int|null
     */
    protected $optionId;
    /**
     * Option title
     *
     * @var string|null
     */
    protected $title;
    /**
     * Is required option
     *
     * @var bool|null
     */
    protected $required;
    /**
     * Input type
     *
     * @var string|null
     */
    protected $type;
    /**
     * Option position
     *
     * @var int|null
     */
    protected $position;
    /**
     * Product sku
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Product links
     *
     * @var BundleDataLinkInterface[]|null
     */
    protected $productLinks;
    /**
     * ExtensionInterface class for @see \Magento\Bundle\Api\Data\OptionInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Option id
     *
     * @return int|null
     */
    public function getOptionId() : ?int
    {
        return $this->optionId;
    }
    /**
     * Option id
     *
     * @param int|null $optionId
     *
     * @return self
     */
    public function setOptionId(?int $optionId) : self
    {
        $this->initialized['optionId'] = true;
        $this->optionId = $optionId;
        return $this;
    }
    /**
     * Option title
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * Option title
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Is required option
     *
     * @return bool|null
     */
    public function getRequired() : ?bool
    {
        return $this->required;
    }
    /**
     * Is required option
     *
     * @param bool|null $required
     *
     * @return self
     */
    public function setRequired(?bool $required) : self
    {
        $this->initialized['required'] = true;
        $this->required = $required;
        return $this;
    }
    /**
     * Input type
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * Input type
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Option position
     *
     * @return int|null
     */
    public function getPosition() : ?int
    {
        return $this->position;
    }
    /**
     * Option position
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
     * Product sku
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * Product sku
     *
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku) : self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;
        return $this;
    }
    /**
     * Product links
     *
     * @return BundleDataLinkInterface[]|null
     */
    public function getProductLinks() : ?array
    {
        return $this->productLinks;
    }
    /**
     * Product links
     *
     * @param BundleDataLinkInterface[]|null $productLinks
     *
     * @return self
     */
    public function setProductLinks(?array $productLinks) : self
    {
        $this->initialized['productLinks'] = true;
        $this->productLinks = $productLinks;
        return $this;
    }
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}