<?php

namespace Kiboko\Magento\V2_2\Model;

class V1CmsBlockPostBody
{
    /**
     * CMS block interface.
     *
     * @var CmsDataBlockInterface|null
     */
    protected $block;
    /**
     * CMS block interface.
     *
     * @return CmsDataBlockInterface|null
     */
    public function getBlock(): ?CmsDataBlockInterface
    {
        return $this->block;
    }
    /**
     * CMS block interface.
     *
     * @param CmsDataBlockInterface|null $block
     *
     * @return self
     */
    public function setBlock(?CmsDataBlockInterface $block): self
    {
        $this->block = $block;
        return $this;
    }
}
