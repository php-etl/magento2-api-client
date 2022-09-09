<?php

namespace Kiboko\Magento\V2_3\Model;

class V1ConfigurableProductsVariationPutBody
{
    /**
     *
     *
     * @var ConfigurableProductDataOptionInterface[]|null
     */
    protected $options;
    /**
     *
     *
     * @var CatalogDataProductInterface|null
     */
    protected $product;
    /**
     *
     *
     * @return ConfigurableProductDataOptionInterface[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
    /**
     *
     *
     * @param ConfigurableProductDataOptionInterface[]|null $options
     *
     * @return self
     */
    public function setOptions(?array $options): self
    {
        $this->options = $options;
        return $this;
    }
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
}
