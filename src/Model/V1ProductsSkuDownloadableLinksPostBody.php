<?php

namespace Kiboko\Magento\V2\Model;

class V1ProductsSkuDownloadableLinksPostBody
{
    /**
     *
     *
     * @var DownloadableDataLinkInterface
     */
    protected $link;
    /**
     *
     *
     * @var bool
     */
    protected $isGlobalScopeContent;
    /**
     *
     *
     * @return DownloadableDataLinkInterface
     */
    public function getLink(): DownloadableDataLinkInterface
    {
        return $this->link;
    }
    /**
     *
     *
     * @param DownloadableDataLinkInterface $link
     *
     * @return self
     */
    public function setLink(DownloadableDataLinkInterface $link): self
    {
        $this->link = $link;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getIsGlobalScopeContent(): bool
    {
        return $this->isGlobalScopeContent;
    }
    /**
     *
     *
     * @param bool $isGlobalScopeContent
     *
     * @return self
     */
    public function setIsGlobalScopeContent(bool $isGlobalScopeContent): self
    {
        $this->isGlobalScopeContent = $isGlobalScopeContent;
        return $this;
    }
}
