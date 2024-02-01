<?php

namespace Kiboko\Magento\Model;

class V1CmsBlockIdPutBody
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    public function getBlock() : ?CmsDataBlockInterface
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
    public function setBlock(?CmsDataBlockInterface $block) : self
    {
        $this->initialized['block'] = true;
        $this->block = $block;
        return $this;
    }
}