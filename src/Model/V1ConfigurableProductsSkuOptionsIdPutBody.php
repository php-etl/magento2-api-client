<?php

namespace Kiboko\Magento\V2\Model;

class V1ConfigurableProductsSkuOptionsIdPutBody
{
    /**
     * Interface OptionInterface
     *
     * @var ConfigurableProductDataOptionInterface
     */
    protected $option;
    /**
     * Interface OptionInterface
     *
     * @return ConfigurableProductDataOptionInterface
     */
    public function getOption(): ConfigurableProductDataOptionInterface
    {
        return $this->option;
    }
    /**
     * Interface OptionInterface
     *
     * @param ConfigurableProductDataOptionInterface $option
     *
     * @return self
     */
    public function setOption(ConfigurableProductDataOptionInterface $option): self
    {
        $this->option = $option;
        return $this;
    }
}
