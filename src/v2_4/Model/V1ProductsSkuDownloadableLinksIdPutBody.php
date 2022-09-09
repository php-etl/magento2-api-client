<?php

namespace Kiboko\Magento\V2_4\Model;

class V1ProductsSkuDownloadableLinksIdPutBody
{
    /**
     *
     *
     * @var bool|null
     */
    protected $isGlobalScopeContent;
    /**
     *
     *
     * @var DownloadableDataLinkInterface|null
     */
    protected $link;
    /**
     *
     *
     * @return bool|null
     */
    public function getIsGlobalScopeContent(): ?bool
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
    public function setIsGlobalScopeContent(?bool $isGlobalScopeContent): self
    {
        $this->isGlobalScopeContent = $isGlobalScopeContent;
        return $this;
    }
    /**
     *
     *
     * @return DownloadableDataLinkInterface|null
     */
    public function getLink(): ?DownloadableDataLinkInterface
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
    public function setLink(?DownloadableDataLinkInterface $link): self
    {
        $this->link = $link;
        return $this;
    }
}
