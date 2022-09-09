<?php

namespace Kiboko\Magento\V2_4\Model;

class V1ProductsPostBody
{
    /**
     *
     *
     * @var CatalogDataProductInterface|null
     */
    protected $product;
    /**
     *
     *
     * @var bool|null
     */
    protected $saveOptions;
    /**
     *
     *
     * @return CatalogDataProductInterface|null
     */
    public function getProduct(): ?CatalogDataProductInterface
    {
        return $this->product;
    }
    /**
     *
     *
     * @param CatalogDataProductInterface|null $product
     *
     * @return self
     */
    public function setProduct(?CatalogDataProductInterface $product): self
    {
        $this->product = $product;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getSaveOptions(): ?bool
    {
        return $this->saveOptions;
    }
    /**
     *
     *
     * @param bool|null $saveOptions
     *
     * @return self
     */
    public function setSaveOptions(?bool $saveOptions): self
    {
        $this->saveOptions = $saveOptions;
        return $this;
    }
}
