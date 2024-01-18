<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductRenderImageInterface
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
     * Image url
     *
     * @var string|null
     */
    protected $url;
    /**
     * Image code
     *
     * @var string|null
     */
    protected $code;
    /**
     * Image height
     *
     * @var float|null
     */
    protected $height;
    /**
     * Image width in px
     *
     * @var float|null
     */
    protected $width;
    /**
     * Image label
     *
     * @var string|null
     */
    protected $label;
    /**
     * Resize width
     *
     * @var float|null
     */
    protected $resizedWidth;
    /**
     * Resize height
     *
     * @var float|null
     */
    protected $resizedHeight;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\ImageInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Image url
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * Image url
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * Image code
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Image code
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
     * Image height
     *
     * @return float|null
     */
    public function getHeight() : ?float
    {
        return $this->height;
    }
    /**
     * Image height
     *
     * @param float|null $height
     *
     * @return self
     */
    public function setHeight(?float $height) : self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * Image width in px
     *
     * @return float|null
     */
    public function getWidth() : ?float
    {
        return $this->width;
    }
    /**
     * Image width in px
     *
     * @param float|null $width
     *
     * @return self
     */
    public function setWidth(?float $width) : self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * Image label
     *
     * @return string|null
     */
    public function getLabel() : ?string
    {
        return $this->label;
    }
    /**
     * Image label
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
     * Resize width
     *
     * @return float|null
     */
    public function getResizedWidth() : ?float
    {
        return $this->resizedWidth;
    }
    /**
     * Resize width
     *
     * @param float|null $resizedWidth
     *
     * @return self
     */
    public function setResizedWidth(?float $resizedWidth) : self
    {
        $this->initialized['resizedWidth'] = true;
        $this->resizedWidth = $resizedWidth;
        return $this;
    }
    /**
     * Resize height
     *
     * @return float|null
     */
    public function getResizedHeight() : ?float
    {
        return $this->resizedHeight;
    }
    /**
     * Resize height
     *
     * @param float|null $resizedHeight
     *
     * @return self
     */
    public function setResizedHeight(?float $resizedHeight) : self
    {
        $this->initialized['resizedHeight'] = true;
        $this->resizedHeight = $resizedHeight;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\ImageInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\ImageInterface
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