<?php

namespace Kiboko\Magento\Model;

class V1ProductsSkuDownloadableLinksPostBody
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
     * 
     *
     * @var DownloadableDataLinkInterface|null
     */
    protected $link;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isGlobalScopeContent;
    /**
     * 
     *
     * @return DownloadableDataLinkInterface|null
     */
    public function getLink() : ?DownloadableDataLinkInterface
    {
        return $this->link;
    }
    /**
     * 
     *
     * @param DownloadableDataLinkInterface|null $link
     *
     * @return self
     */
    public function setLink(?DownloadableDataLinkInterface $link) : self
    {
        $this->initialized['link'] = true;
        $this->link = $link;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsGlobalScopeContent() : ?bool
    {
        return $this->isGlobalScopeContent;
    }
    /**
     * 
     *
     * @param bool|null $isGlobalScopeContent
     *
     * @return self
     */
    public function setIsGlobalScopeContent(?bool $isGlobalScopeContent) : self
    {
        $this->initialized['isGlobalScopeContent'] = true;
        $this->isGlobalScopeContent = $isGlobalScopeContent;
        return $this;
    }
}