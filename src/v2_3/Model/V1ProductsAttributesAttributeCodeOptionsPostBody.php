<?php

namespace Kiboko\Magento\V2_3\Model;

class V1ProductsAttributesAttributeCodeOptionsPostBody
{
    /**
     * Created from:
     *
     * @var EavDataAttributeOptionInterface|null
     */
    protected $option;
    /**
     * Created from:
     *
     * @return EavDataAttributeOptionInterface|null
     */
    public function getOption(): ?EavDataAttributeOptionInterface
    {
        return $this->option;
    }
    /**
     * Created from:
     *
     * @param EavDataAttributeOptionInterface|null $option
     *
     * @return self
     */
    public function setOption(?EavDataAttributeOptionInterface $option): self
    {
        $this->option = $option;
        return $this;
    }
}
