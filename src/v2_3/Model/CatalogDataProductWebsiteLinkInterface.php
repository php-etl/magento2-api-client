<?php

namespace Kiboko\Magento\V2_3\Model;

class CatalogDataProductWebsiteLinkInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Website ids
     *
     * @var int|null
     */
    protected $websiteId;
    /**
     *
     *
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }
    /**
     *
     *
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Website ids
     *
     * @return int|null
     */
    public function getWebsiteId(): ?int
    {
        return $this->websiteId;
    }
    /**
     * Website ids
     *
     * @param int|null $websiteId
     *
     * @return self
     */
    public function setWebsiteId(?int $websiteId): self
    {
        $this->websiteId = $websiteId;
        return $this;
    }
}
