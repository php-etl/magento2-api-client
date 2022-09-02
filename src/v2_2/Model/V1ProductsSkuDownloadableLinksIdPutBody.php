<?php

namespace Kiboko\Magento\V2_2\Model;

class V1ProductsSkuDownloadableLinksIdPutBody
{
    /**
     *
     *
     * @var bool
     */
    protected $isGlobalScopeContent;
    /**
     *
     *
     * @var DownloadableDataLinkInterface
     */
    protected $link;
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
}
