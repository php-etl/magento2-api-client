<?php

namespace Kiboko\Magento\V2\Model;

class CatalogDataProductExtensionInterface
{
    /**
     *
     *
     * @var int[]
     */
    protected $websiteIds;
    /**
     *
     *
     * @var CatalogDataCategoryLinkInterface[]
     */
    protected $categoryLinks;
    /**
     *
     *
     * @var BundleDataOptionInterface[]
     */
    protected $bundleProductOptions;
    /**
     * Interface StockItem
     *
     * @var CatalogInventoryDataStockItemInterface
     */
    protected $stockItem;
    /**
     *
     *
     * @var ConfigurableProductDataOptionInterface[]
     */
    protected $configurableProductOptions;
    /**
     *
     *
     * @var int[]
     */
    protected $configurableProductLinks;
    /**
     *
     *
     * @var DownloadableDataLinkInterface[]
     */
    protected $downloadableProductLinks;
    /**
     *
     *
     * @var DownloadableDataSampleInterface[]
     */
    protected $downloadableProductSamples;
    /**
     *
     *
     * @var GiftCardDataGiftcardAmountInterface[]
     */
    protected $giftcardAmounts;
    /**
     *
     *
     * @return int[]
     */
    public function getWebsiteIds(): array
    {
        return $this->websiteIds;
    }
    /**
     *
     *
     * @param int[] $websiteIds
     *
     * @return self
     */
    public function setWebsiteIds(array $websiteIds): self
    {
        $this->websiteIds = $websiteIds;
        return $this;
    }
    /**
     *
     *
     * @return CatalogDataCategoryLinkInterface[]
     */
    public function getCategoryLinks(): array
    {
        return $this->categoryLinks;
    }
    /**
     *
     *
     * @param CatalogDataCategoryLinkInterface[] $categoryLinks
     *
     * @return self
     */
    public function setCategoryLinks(array $categoryLinks): self
    {
        $this->categoryLinks = $categoryLinks;
        return $this;
    }
    /**
     *
     *
     * @return BundleDataOptionInterface[]
     */
    public function getBundleProductOptions(): array
    {
        return $this->bundleProductOptions;
    }
    /**
     *
     *
     * @param BundleDataOptionInterface[] $bundleProductOptions
     *
     * @return self
     */
    public function setBundleProductOptions(array $bundleProductOptions): self
    {
        $this->bundleProductOptions = $bundleProductOptions;
        return $this;
    }
    /**
     * Interface StockItem
     *
     * @return CatalogInventoryDataStockItemInterface
     */
    public function getStockItem(): CatalogInventoryDataStockItemInterface
    {
        return $this->stockItem;
    }
    /**
     * Interface StockItem
     *
     * @param CatalogInventoryDataStockItemInterface $stockItem
     *
     * @return self
     */
    public function setStockItem(CatalogInventoryDataStockItemInterface $stockItem): self
    {
        $this->stockItem = $stockItem;
        return $this;
    }
    /**
     *
     *
     * @return ConfigurableProductDataOptionInterface[]
     */
    public function getConfigurableProductOptions(): array
    {
        return $this->configurableProductOptions;
    }
    /**
     *
     *
     * @param ConfigurableProductDataOptionInterface[] $configurableProductOptions
     *
     * @return self
     */
    public function setConfigurableProductOptions(array $configurableProductOptions): self
    {
        $this->configurableProductOptions = $configurableProductOptions;
        return $this;
    }
    /**
     *
     *
     * @return int[]
     */
    public function getConfigurableProductLinks(): array
    {
        return $this->configurableProductLinks;
    }
    /**
     *
     *
     * @param int[] $configurableProductLinks
     *
     * @return self
     */
    public function setConfigurableProductLinks(array $configurableProductLinks): self
    {
        $this->configurableProductLinks = $configurableProductLinks;
        return $this;
    }
    /**
     *
     *
     * @return DownloadableDataLinkInterface[]
     */
    public function getDownloadableProductLinks(): array
    {
        return $this->downloadableProductLinks;
    }
    /**
     *
     *
     * @param DownloadableDataLinkInterface[] $downloadableProductLinks
     *
     * @return self
     */
    public function setDownloadableProductLinks(array $downloadableProductLinks): self
    {
        $this->downloadableProductLinks = $downloadableProductLinks;
        return $this;
    }
    /**
     *
     *
     * @return DownloadableDataSampleInterface[]
     */
    public function getDownloadableProductSamples(): array
    {
        return $this->downloadableProductSamples;
    }
    /**
     *
     *
     * @param DownloadableDataSampleInterface[] $downloadableProductSamples
     *
     * @return self
     */
    public function setDownloadableProductSamples(array $downloadableProductSamples): self
    {
        $this->downloadableProductSamples = $downloadableProductSamples;
        return $this;
    }
    /**
     *
     *
     * @return GiftCardDataGiftcardAmountInterface[]
     */
    public function getGiftcardAmounts(): array
    {
        return $this->giftcardAmounts;
    }
    /**
     *
     *
     * @param GiftCardDataGiftcardAmountInterface[] $giftcardAmounts
     *
     * @return self
     */
    public function setGiftcardAmounts(array $giftcardAmounts): self
    {
        $this->giftcardAmounts = $giftcardAmounts;
        return $this;
    }
}
