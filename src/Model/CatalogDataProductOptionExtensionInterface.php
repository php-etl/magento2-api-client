<?php

namespace Kiboko\Magento\V2\Model;

class CatalogDataProductOptionExtensionInterface
{
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
     * 
     *
     * @var CatalogDataCustomOptionInterface[]
     */
    protected $customOptions;
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