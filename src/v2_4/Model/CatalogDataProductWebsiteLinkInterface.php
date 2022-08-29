<?php

namespace Kiboko\Magento\v2_4\Model;

class CatalogDataProductWebsiteLinkInterface
{
    /**
     *
     *
     * @var string
     */
    protected $sku;
    /**
     * Website ids
     *
     * @var int
     */
    protected $websiteId;
    /**
     *
     *
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }
    /**
     *
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Website ids
     *
     * @return int
     */
    public function getWebsiteId(): int
    {
        return $this->websiteId;
    }
    /**
     * Website ids
     *
     * @param int $websiteId
     *
     * @return self
     */
    public function setWebsiteId(int $websiteId): self
    {
        $this->websiteId = $websiteId;
        return $this;
    }
}
