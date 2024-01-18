<?php

namespace Kiboko\Magento\Model;

class QuoteDataProductOptionExtensionInterface
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
     * @var CatalogDataCustomOptionInterface[]|null
     */
    protected $customOptions;
    /**
     * Downloadable Option
     *
     * @var DownloadableDataDownloadableOptionInterface|null
     */
    protected $downloadableOption;
    /**
     * 
     *
     * @var BundleDataBundleOptionInterface[]|null
     */
    protected $bundleOptions;
    /**
     * 
     *
     * @var GroupedProductDataGroupedOptionsInterface[]|null
     */
    protected $groupedOptions;
    /**
     * 
     *
     * @var ConfigurableProductDataConfigurableItemOptionValueInterface[]|null
     */
    protected $configurableItemOptions;
    /**
     * 
     *
     * @return CatalogDataCustomOptionInterface[]|null
     */
    public function getCustomOptions() : ?array
    {
        return $this->customOptions;
    }
    /**
     * 
     *
     * @param CatalogDataCustomOptionInterface[]|null $customOptions
     *
     * @return self
     */
    public function setCustomOptions(?array $customOptions) : self
    {
        $this->initialized['customOptions'] = true;
        $this->customOptions = $customOptions;
        return $this;
    }
    /**
     * Downloadable Option
     *
     * @return DownloadableDataDownloadableOptionInterface|null
     */
    public function getDownloadableOption() : ?DownloadableDataDownloadableOptionInterface
    {
        return $this->downloadableOption;
    }
    /**
     * Downloadable Option
     *
     * @param DownloadableDataDownloadableOptionInterface|null $downloadableOption
     *
     * @return self
     */
    public function setDownloadableOption(?DownloadableDataDownloadableOptionInterface $downloadableOption) : self
    {
        $this->initialized['downloadableOption'] = true;
        $this->downloadableOption = $downloadableOption;
        return $this;
    }
    /**
     * 
     *
     * @return BundleDataBundleOptionInterface[]|null
     */
    public function getBundleOptions() : ?array
    {
        return $this->bundleOptions;
    }
    /**
     * 
     *
     * @param BundleDataBundleOptionInterface[]|null $bundleOptions
     *
     * @return self
     */
    public function setBundleOptions(?array $bundleOptions) : self
    {
        $this->initialized['bundleOptions'] = true;
        $this->bundleOptions = $bundleOptions;
        return $this;
    }
    /**
     * 
     *
     * @return GroupedProductDataGroupedOptionsInterface[]|null
     */
    public function getGroupedOptions() : ?array
    {
        return $this->groupedOptions;
    }
    /**
     * 
     *
     * @param GroupedProductDataGroupedOptionsInterface[]|null $groupedOptions
     *
     * @return self
     */
    public function setGroupedOptions(?array $groupedOptions) : self
    {
        $this->initialized['groupedOptions'] = true;
        $this->groupedOptions = $groupedOptions;
        return $this;
    }
    /**
     * 
     *
     * @return ConfigurableProductDataConfigurableItemOptionValueInterface[]|null
     */
    public function getConfigurableItemOptions() : ?array
    {
        return $this->configurableItemOptions;
    }
    /**
     * 
     *
     * @param ConfigurableProductDataConfigurableItemOptionValueInterface[]|null $configurableItemOptions
     *
     * @return self
     */
    public function setConfigurableItemOptions(?array $configurableItemOptions) : self
    {
        $this->initialized['configurableItemOptions'] = true;
        $this->configurableItemOptions = $configurableItemOptions;
        return $this;
    }
}