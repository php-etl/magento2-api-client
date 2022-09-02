<?php

namespace Kiboko\Magento\V2_2\Model;

class V1CmsPagePostBody
{
    /**
     * CMS page interface.
     *
     * @var CmsDataPageInterface
     */
    protected $page;
    /**
     * CMS page interface.
     *
     * @return CmsDataPageInterface
     */
    public function getPage(): CmsDataPageInterface
    {
        return $this->page;
    }
    /**
     * CMS page interface.
     *
     * @param CmsDataPageInterface $page
     *
     * @return self
     */
    public function setPage(CmsDataPageInterface $page): self
    {
        $this->page = $page;
        return $this;
    }
}
