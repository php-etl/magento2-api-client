<?php

namespace Kiboko\Magento\V2_1\Model;

class V1ProductsOptionsPostBody
{
    /**
     *
     *
     * @var CatalogDataProductCustomOptionInterface|null
     */
    protected $option;
    /**
     *
     *
     * @return CatalogDataProductCustomOptionInterface|null
     */
    public function getOption(): ?CatalogDataProductCustomOptionInterface
    {
        return $this->option;
    }
    /**
     *
     *
     * @param CatalogDataProductCustomOptionInterface|null $option
     *
     * @return self
     */
    public function setOption(?CatalogDataProductCustomOptionInterface $option): self
    {
        $this->option = $option;
        return $this;
    }
}
