<?php

namespace Kiboko\Magento\v2_2\Model;

class CatalogDataProductRenderButtonInterface
{
    /**
     * Post data
     *
     * @var string
     */
    protected $postData;
    /**
     * Url, needed to add product to cart
     *
     * @var string
     */
    protected $url;
    /**
     * Flag whether a product has options or not
     *
     * @var bool
     */
    protected $requiredOptions;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\ButtonInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Post data
     *
     * @return string
     */
    public function getPostData(): string
    {
        return $this->postData;
    }
    /**
     * Post data
     *
     * @param string $postData
     *
     * @return self
     */
    public function setPostData(string $postData): self
    {
        $this->postData = $postData;
        return $this;
    }
    /**
     * Url, needed to add product to cart
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * Url, needed to add product to cart
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
     * Flag whether a product has options or not
     *
     * @return bool
     */
    public function getRequiredOptions(): bool
    {
        return $this->requiredOptions;
    }
    /**
     * Flag whether a product has options or not
     *
     * @param bool $requiredOptions
     *
     * @return self
     */
    public function setRequiredOptions(bool $requiredOptions): self
    {
        $this->requiredOptions = $requiredOptions;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\ButtonInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\ButtonInterface
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
