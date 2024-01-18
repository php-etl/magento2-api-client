<?php

namespace Kiboko\Magento\Model;

class AdobeStockAssetApiDataCategoryInterface
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
     * The id
     *
     * @var int|null
     */
    protected $id;
    /**
     * The category name
     *
     * @var string|null
     */
    protected $name;
    /**
     * ExtensionInterface class for @see \Magento\AdobeStockAssetApi\Api\Data\CategoryInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * The id
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * The id
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
     * The category name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The category name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\AdobeStockAssetApi\Api\Data\CategoryInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\AdobeStockAssetApi\Api\Data\CategoryInterface
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