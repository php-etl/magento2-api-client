<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductExtensionInterface
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
     * @var int[]|null
     */
    protected $websiteIds;
    /**
     * 
     *
     * @var CatalogDataCategoryLinkInterface[]|null
     */
    protected $categoryLinks;
    /**
     * Interface StockItem
     *
     * @var CatalogInventoryDataStockItemInterface|null
     */
    protected $stockItem;
    /**
     * 
     *
     * @var ConfigurableProductDataOptionInterface[]|null
     */
    protected $configurableProductOptions;
    /**
     * 
     *
     * @var int[]|null
     */
    protected $configurableProductLinks;
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
     * @var BundleDataOptionInterface[]|null
     */
    protected $bundleProductOptions;
    /**
     * Data model representing a Commmodity Code
     *
     * @var VertexTaxDataCommodityCodeInterface|null
     */
    protected $vertexCommodityCode;
    /**
     * 
     *
     * @return int[]|null
     */
    public function getWebsiteIds() : ?array
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
    public function setWebsiteIds(?array $websiteIds) : self
    {
        $this->initialized['websiteIds'] = true;
        $this->websiteIds = $websiteIds;
        return $this;
    }
    /**
     * 
     *
     * @return CatalogDataCategoryLinkInterface[]|null
     */
    public function getCategoryLinks() : ?array
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
    public function setCategoryLinks(?array $categoryLinks) : self
    {
        $this->initialized['categoryLinks'] = true;
        $this->categoryLinks = $categoryLinks;
        return $this;
    }
    /**
     * Interface StockItem
     *
     * @return CatalogInventoryDataStockItemInterface|null
     */
    public function getStockItem() : ?CatalogInventoryDataStockItemInterface
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
    public function setStockItem(?CatalogInventoryDataStockItemInterface $stockItem) : self
    {
        $this->initialized['stockItem'] = true;
        $this->stockItem = $stockItem;
        return $this;
    }
    /**
     * 
     *
     * @return ConfigurableProductDataOptionInterface[]|null
     */
    public function getConfigurableProductOptions() : ?array
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
    public function setConfigurableProductOptions(?array $configurableProductOptions) : self
    {
        $this->initialized['configurableProductOptions'] = true;
        $this->configurableProductOptions = $configurableProductOptions;
        return $this;
    }
    /**
     * 
     *
     * @return int[]|null
     */
    public function getConfigurableProductLinks() : ?array
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
    public function setConfigurableProductLinks(?array $configurableProductLinks) : self
    {
        $this->initialized['configurableProductLinks'] = true;
        $this->configurableProductLinks = $configurableProductLinks;
        return $this;
    }
    /**
     * 
     *
     * @return DownloadableDataLinkInterface[]|null
     */
    public function getDownloadableProductLinks() : ?array
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
    public function setDownloadableProductLinks(?array $downloadableProductLinks) : self
    {
        $this->initialized['downloadableProductLinks'] = true;
        $this->downloadableProductLinks = $downloadableProductLinks;
        return $this;
    }
    /**
     * 
     *
     * @return DownloadableDataSampleInterface[]|null
     */
    public function getDownloadableProductSamples() : ?array
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
    public function setDownloadableProductSamples(?array $downloadableProductSamples) : self
    {
        $this->initialized['downloadableProductSamples'] = true;
        $this->downloadableProductSamples = $downloadableProductSamples;
        return $this;
    }
    /**
     * 
     *
     * @return BundleDataOptionInterface[]|null
     */
    public function getBundleProductOptions() : ?array
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
    public function setBundleProductOptions(?array $bundleProductOptions) : self
    {
        $this->initialized['bundleProductOptions'] = true;
        $this->bundleProductOptions = $bundleProductOptions;
        return $this;
    }
    /**
     * Data model representing a Commmodity Code
     *
     * @return VertexTaxDataCommodityCodeInterface|null
     */
    public function getVertexCommodityCode() : ?VertexTaxDataCommodityCodeInterface
    {
        return $this->vertexCommodityCode;
    }
    /**
     * Data model representing a Commmodity Code
     *
     * @param VertexTaxDataCommodityCodeInterface|null $vertexCommodityCode
     *
     * @return self
     */
    public function setVertexCommodityCode(?VertexTaxDataCommodityCodeInterface $vertexCommodityCode) : self
    {
        $this->initialized['vertexCommodityCode'] = true;
        $this->vertexCommodityCode = $vertexCommodityCode;
        return $this;
    }
}