<?php

namespace Kiboko\Magento\V2_4\Model;

class V1BundleProductsOptionsOptionIdPutBody
{
    /**
     * Interface OptionInterface
     *
     * @var BundleDataOptionInterface|null
     */
    protected $option;
    /**
     * Interface OptionInterface
     *
     * @return BundleDataOptionInterface|null
     */
    public function getOption(): ?BundleDataOptionInterface
    {
        return $this->option;
    }
    /**
     * Interface OptionInterface
     *
     * @param BundleDataOptionInterface|null $option
     *
     * @return self
     */
    public function setOption(?BundleDataOptionInterface $option): self
    {
        $this->option = $option;
        return $this;
    }
}
