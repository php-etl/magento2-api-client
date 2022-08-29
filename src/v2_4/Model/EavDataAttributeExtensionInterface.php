<?php

namespace Kiboko\Magento\v2_4\Model;

class EavDataAttributeExtensionInterface
{
    /**
     *
     *
     * @var bool
     */
    protected $isPagebuilderEnabled;
    /**
     *
     *
     * @return bool
     */
    public function getIsPagebuilderEnabled(): bool
    {
        return $this->isPagebuilderEnabled;
    }
    /**
     *
     *
     * @param bool $isPagebuilderEnabled
     *
     * @return self
     */
    public function setIsPagebuilderEnabled(bool $isPagebuilderEnabled): self
    {
        $this->isPagebuilderEnabled = $isPagebuilderEnabled;
        return $this;
    }
}
