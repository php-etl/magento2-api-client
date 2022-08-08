<?php

namespace Kiboko\Magento\V2\Model;

class CatalogDataProductRenderImageInterface
{
    /**
     * Image url
     *
     * @var string
     */
    protected $url;
    /**
     * Image code
     *
     * @var string
     */
    protected $code;
    /**
     * Image height
     *
     * @var float
     */
    protected $height;
    /**
     * Image width in px
     *
     * @var float
     */
    protected $width;
    /**
     * Image label
     *
     * @var string
     */
    protected $label;
    /**
     * Resize width
     *
     * @var float
     */
    protected $resizedWidth;
    /**
     * Resize height
     *
     * @var float
     */
    protected $resizedHeight;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\ImageInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Image url
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * Image url
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * Image code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Image code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Image height
     *
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }
    /**
     * Image height
     *
     * @param float $height
     *
     * @return self
     */
    public function setHeight(float $height): self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * Image width in px
     *
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }
    /**
     * Image width in px
     *
     * @param float $width
     *
     * @return self
     */
    public function setWidth(float $width): self
    {
        $this->width = $width;
        return $this;
    }
    /**
     * Image label
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * Image label
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * Resize width
     *
     * @return float
     */
    public function getResizedWidth(): float
    {
        return $this->resizedWidth;
    }
    /**
     * Resize width
     *
     * @param float $resizedWidth
     *
     * @return self
     */
    public function setResizedWidth(float $resizedWidth): self
    {
        $this->resizedWidth = $resizedWidth;
        return $this;
    }
    /**
     * Resize height
     *
     * @return float
     */
    public function getResizedHeight(): float
    {
        return $this->resizedHeight;
    }
    /**
     * Resize height
     *
     * @param float $resizedHeight
     *
     * @return self
     */
    public function setResizedHeight(float $resizedHeight): self
    {
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
