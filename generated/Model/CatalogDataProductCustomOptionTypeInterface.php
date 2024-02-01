<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductCustomOptionTypeInterface
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
     * Option type label
     *
     * @var string|null
     */
    protected $label;
    /**
     * Option type code
     *
     * @var string|null
     */
    protected $code;
    /**
     * Option type group
     *
     * @var string|null
     */
    protected $group;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductCustomOptionTypeInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Option type label
     *
     * @return string|null
     */
    public function getLabel() : ?string
    {
        return $this->label;
    }
    /**
     * Option type label
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label) : self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * Option type code
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Option type code
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
     * Option type group
     *
     * @return string|null
     */
    public function getGroup() : ?string
    {
        return $this->group;
    }
    /**
     * Option type group
     *
     * @param string|null $group
     *
     * @return self
     */
    public function setGroup(?string $group) : self
    {
        $this->initialized['group'] = true;
        $this->group = $group;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductCustomOptionTypeInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductCustomOptionTypeInterface
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