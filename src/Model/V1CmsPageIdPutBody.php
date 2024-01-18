<?php

namespace Kiboko\Magento\Model;

class V1CmsPageIdPutBody
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
     * CMS page interface.
     *
     * @var CmsDataPageInterface|null
     */
    protected $page;
    /**
     * CMS page interface.
     *
     * @return CmsDataPageInterface|null
     */
    public function getPage() : ?CmsDataPageInterface
    {
        return $this->page;
    }
    /**
     * CMS page interface.
     *
     * @param CmsDataPageInterface|null $page
     *
     * @return self
     */
    public function setPage(?CmsDataPageInterface $page) : self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
}