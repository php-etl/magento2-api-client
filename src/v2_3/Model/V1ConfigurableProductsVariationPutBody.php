<?php

namespace Kiboko\Magento\v2_3\Model;

class V1ConfigurableProductsVariationPutBody
{
    /**
     *
     *
     * @var CatalogDataProductInterface
     */
    protected $product;
    /**
     *
     *
     * @var ConfigurableProductDataOptionInterface[]
     */
    protected $options;
    /**
     *
     *
     * @return CatalogDataProductInterface
     */
    public function getProduct(): CatalogDataProductInterface
    {
        return $this->product;
    }
    /**
     *
     *
     * @param CatalogDataProductInterface $product
     *
     * @return self
     */
    public function setProduct(CatalogDataProductInterface $product): self
    {
        $this->product = $product;
        return $this;
    }
    /**
     *
     *
     * @return ConfigurableProductDataOptionInterface[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }
    /**
     *
     *
     * @param ConfigurableProductDataOptionInterface[] $options
     *
     * @return self
     */
    public function setOptions(array $options): self
    {
        $this->options = $options;
        return $this;
    }
}
