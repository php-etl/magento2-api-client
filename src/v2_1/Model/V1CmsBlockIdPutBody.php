<?php

namespace Kiboko\Magento\V2_1\Model;

class V1CmsBlockIdPutBody
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
