<?php

namespace Kiboko\Magento\v2_1\Model;

class V1CmsBlockPostBody
{
    /**
     * CMS block interface.
     *
     * @var CmsDataBlockInterface
     */
    protected $block;
    /**
     * CMS block interface.
     *
     * @return CmsDataBlockInterface
     */
    public function getBlock(): CmsDataBlockInterface
    {
        return $this->block;
    }
    /**
     * CMS block interface.
     *
     * @param CmsDataBlockInterface $block
     *
     * @return self
     */
    public function setBlock(CmsDataBlockInterface $block): self
    {
        $this->block = $block;
        return $this;
    }
}
