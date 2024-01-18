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
     * @var BundleDataOptionInterface[]|null
     */
    protected $bundleProductOptions;
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
}