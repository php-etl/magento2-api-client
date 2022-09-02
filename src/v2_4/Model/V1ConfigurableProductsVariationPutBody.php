<?php

namespace Kiboko\Magento\V2_4\Model;

class V1ConfigurableProductsVariationPutBody
{
    /**
     *
     *
     * @var ConfigurableProductDataOptionInterface[]
     */
    protected $options;
    /**
     *
     *
     * @var CatalogDataProductInterface
     */
    protected $product;
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
}
