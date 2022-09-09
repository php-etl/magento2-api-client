<?php

namespace Kiboko\Magento\V2_4\Model;

class CatalogDataProductExtensionInterface
{
    /**
     *
     *
     * @var BundleDataOptionInterface[]|null
     */
    protected $bundleProductOptions;
    /**
     *
     *
     * @var CatalogDataCategoryLinkInterface[]|null
     */
    protected $categoryLinks;
    /**
     *
     *
     * @var int[]|null
     */
    protected $configurableProductLinks;
    /**
     *
     *
     * @var ConfigurableProductDataOptionInterface[]|null
     */
    protected $configurableProductOptions;
    /**
     *
     *
     * @var DownloadableDataLinkInterface[]|null
     */
    protected $downloadableProductLinks;
    /**
     *
     *
     * @var DownloadableDataSampleInterface[]|null
     */
    protected $downloadableProductSamples;
    /**
     *
     *
     * @var GiftCardDataGiftcardAmountInterface[]|null
     */
    protected $giftcardAmounts;
    /**
     * Interface StockItem
     *
     * @var CatalogInventoryDataStockItemInterface|null
     */
    protected $stockItem;
    /**
     *
     *
     * @var int[]|null
     */
    protected $websiteIds;
    /**
     *
     *
     * @return BundleDataOptionInterface[]|null
     */
    public function getBundleProductOptions(): ?array
    {
        return $this->bundleProductOptions;
    }
    /**
     *
     *
     * @param BundleDataOptionInterface[]|null $bundleProductOptions
     *
     * @return self
     */
    public function setBundleProductOptions(?array $bundleProductOptions): self
    {
        $this->bundleProductOptions = $bundleProductOptions;
        return $this;
    }
    /**
     *
     *
     * @return CatalogDataCategoryLinkInterface[]|null
     */
    public function getCategoryLinks(): ?array
    {
        return $this->categoryLinks;
    }
    /**
     *
     *
     * @param CatalogDataCategoryLinkInterface[]|null $categoryLinks
     *
     * @return self
     */
    public function setCategoryLinks(?array $categoryLinks): self
    {
        $this->categoryLinks = $categoryLinks;
        return $this;
    }
    /**
     *
     *
     * @return int[]|null
     */
    public function getConfigurableProductLinks(): ?array
    {
        return $this->configurableProductLinks;
    }
    /**
     *
     *
     * @param int[]|null $configurableProductLinks
     *
     * @return self
     */
    public function setConfigurableProductLinks(?array $configurableProductLinks): self
    {
        $this->configurableProductLinks = $configurableProductLinks;
        return $this;
    }
    /**
     *
     *
     * @return ConfigurableProductDataOptionInterface[]|null
     */
    public function getConfigurableProductOptions(): ?array
    {
        return $this->configurableProductOptions;
    }
    /**
     *
     *
     * @param ConfigurableProductDataOptionInterface[]|null $configurableProductOptions
     *
     * @return self
     */
    public function setConfigurableProductOptions(?array $configurableProductOptions): self
    {
        $this->configurableProductOptions = $configurableProductOptions;
        return $this;
    }
    /**
     *
     *
     * @return DownloadableDataLinkInterface[]|null
     */
    public function getDownloadableProductLinks(): ?array
    {
        return $this->downloadableProductLinks;
    }
    /**
     *
     *
     * @param DownloadableDataLinkInterface[]|null $downloadableProductLinks
     *
     * @return self
     */
    public function setDownloadableProductLinks(?array $downloadableProductLinks): self
    {
        $this->downloadableProductLinks = $downloadableProductLinks;
        return $this;
    }
    /**
     *
     *
     * @return DownloadableDataSampleInterface[]|null
     */
    public function getDownloadableProductSamples(): ?array
    {
        return $this->downloadableProductSamples;
    }
    /**
     *
     *
     * @param DownloadableDataSampleInterface[]|null $downloadableProductSamples
     *
     * @return self
     */
    public function setDownloadableProductSamples(?array $downloadableProductSamples): self
    {
        $this->downloadableProductSamples = $downloadableProductSamples;
        return $this;
    }
    /**
     *
     *
     * @return GiftCardDataGiftcardAmountInterface[]|null
     */
    public function getGiftcardAmounts(): ?array
    {
        return $this->giftcardAmounts;
    }
    /**
     *
     *
     * @param GiftCardDataGiftcardAmountInterface[]|null $giftcardAmounts
     *
     * @return self
     */
    public function setGiftcardAmounts(?array $giftcardAmounts): self
    {
        $this->giftcardAmounts = $giftcardAmounts;
        return $this;
    }
    /**
     * Interface StockItem
     *
     * @return CatalogInventoryDataStockItemInterface|null
     */
    public function getStockItem(): ?CatalogInventoryDataStockItemInterface
    {
        return $this->stockItem;
    }
    /**
     * Interface StockItem
     *
     * @param CatalogInventoryDataStockItemInterface|null $stockItem
     *
     * @return self
     */
    public function setStockItem(?CatalogInventoryDataStockItemInterface $stockItem): self
    {
        $this->stockItem = $stockItem;
        return $this;
    }
    /**
     *
     *
     * @return int[]|null
     */
    public function getWebsiteIds(): ?array
    {
        return $this->websiteIds;
    }
    /**
     *
     *
     * @param int[]|null $websiteIds
     *
     * @return self
     */
    public function setWebsiteIds(?array $websiteIds): self
    {
        $this->websiteIds = $websiteIds;
        return $this;
    }
}
