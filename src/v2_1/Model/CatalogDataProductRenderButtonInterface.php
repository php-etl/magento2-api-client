<?php

namespace Kiboko\Magento\V2_1\Model;

class CatalogDataProductRenderButtonInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\ButtonInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Post data
     *
     * @var string|null
     */
    protected $postData;
    /**
     * Flag whether a product has options or not
     *
     * @var bool|null
     */
    protected $requiredOptions;
    /**
     * Url, needed to add product to cart
     *
     * @var string|null
     */
    protected $url;
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
    /**
     * Post data
     *
     * @return string|null
     */
    public function getPostData(): ?string
    {
        return $this->postData;
    }
    /**
     * Post data
     *
     * @param string|null $postData
     *
     * @return self
     */
    public function setPostData(?string $postData): self
    {
        $this->postData = $postData;
        return $this;
    }
    /**
     * Flag whether a product has options or not
     *
     * @return bool|null
     */
    public function getRequiredOptions(): ?bool
    {
        return $this->requiredOptions;
    }
    /**
     * Flag whether a product has options or not
     *
     * @param bool|null $requiredOptions
     *
     * @return self
     */
    public function setRequiredOptions(?bool $requiredOptions): self
    {
        $this->requiredOptions = $requiredOptions;
        return $this;
    }
    /**
     * Url, needed to add product to cart
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * Url, needed to add product to cart
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }
}
