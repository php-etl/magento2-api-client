<?php

namespace Kiboko\Magento\v2_3\Model;

class CatalogDataProductOptionExtensionInterface
{
    /**
     * 
     *
     * @var CatalogDataCustomOptionInterface[]
     */
    protected $customOptions;
    /**
     * 
     *
     * @var BundleDataBundleOptionInterface[]
     */
    protected $bundleOptions;
    /**
     * 
     *
     * @var ConfigurableProductDataConfigurableItemOptionValueInterface[]
     */
    protected $configurableItemOptions;
    /**
     * Downloadable Option
     *
     * @var DownloadableDataDownloadableOptionInterface
     */
    protected $downloadableOption;
    /**
     * Interface GiftCardOptionInterface
     *
     * @var GiftCardDataGiftCardOptionInterface
     */
    protected $giftcardItemOption;
    /**
     * 
     *
     * @return CatalogDataCustomOptionInterface[]
     */
    public function getCustomOptions() : array
    {
        return $this->customOptions;
    }
    /**
     * 
     *
     * @param CatalogDataCustomOptionInterface[] $customOptions
     *
     * @return self
     */
    public function setCustomOptions(array $customOptions) : self
    {
        $this->customOptions = $customOptions;
        return $this;
    }
    /**
     * 
     *
     * @return BundleDataBundleOptionInterface[]
     */
    public function getBundleOptions() : array
    {
        return $this->bundleOptions;
    }
    /**
     * 
     *
     * @param BundleDataBundleOptionInterface[] $bundleOptions
     *
     * @return self
     */
    public function setBundleOptions(array $bundleOptions) : self
    {
        $this->bundleOptions = $bundleOptions;
        return $this;
    }
    /**
     * 
     *
     * @return ConfigurableProductDataConfigurableItemOptionValueInterface[]
     */
    public function getConfigurableItemOptions() : array
    {
        return $this->configurableItemOptions;
    }
    /**
     * 
     *
     * @param ConfigurableProductDataConfigurableItemOptionValueInterface[] $configurableItemOptions
     *
     * @return self
     */
    public function setConfigurableItemOptions(array $configurableItemOptions) : self
    {
        $this->configurableItemOptions = $configurableItemOptions;
        return $this;
    }
    /**
     * Downloadable Option
     *
     * @return DownloadableDataDownloadableOptionInterface
     */
    public function getDownloadableOption() : DownloadableDataDownloadableOptionInterface
    {
        return $this->downloadableOption;
    }
    /**
     * Downloadable Option
     *
     * @param DownloadableDataDownloadableOptionInterface $downloadableOption
     *
     * @return self
     */
    public function setDownloadableOption(DownloadableDataDownloadableOptionInterface $downloadableOption) : self
    {
        $this->downloadableOption = $downloadableOption;
        return $this;
    }
    /**
     * Interface GiftCardOptionInterface
     *
     * @return GiftCardDataGiftCardOptionInterface
     */
    public function getGiftcardItemOption() : GiftCardDataGiftCardOptionInterface
    {
        return $this->giftcardItemOption;
    }
    /**
     * Interface GiftCardOptionInterface
     *
     * @param GiftCardDataGiftCardOptionInterface $giftcardItemOption
     *
     * @return self
     */
    public function setGiftcardItemOption(GiftCardDataGiftCardOptionInterface $giftcardItemOption) : self
    {
        $this->giftcardItemOption = $giftcardItemOption;
        return $this;
    }
}