<?php

namespace Kiboko\Magento\V2_3\Model;

class QuoteDataProductOptionExtensionInterface
{
    /**
     *
     *
     * @var BundleDataBundleOptionInterface[]|null
     */
    protected $bundleOptions;
    /**
     *
     *
     * @var ConfigurableProductDataConfigurableItemOptionValueInterface[]|null
     */
    protected $configurableItemOptions;
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
     * Interface GiftCardOptionInterface
     *
     * @var GiftCardDataGiftCardOptionInterface|null
     */
    protected $giftcardItemOption;
    /**
     *
     *
     * @return BundleDataBundleOptionInterface[]|null
     */
    public function getBundleOptions(): ?array
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
    public function setBundleOptions(?array $bundleOptions): self
    {
        $this->bundleOptions = $bundleOptions;
        return $this;
    }
    /**
     *
     *
     * @return ConfigurableProductDataConfigurableItemOptionValueInterface[]|null
     */
    public function getConfigurableItemOptions(): ?array
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
    public function setConfigurableItemOptions(?array $configurableItemOptions): self
    {
        $this->configurableItemOptions = $configurableItemOptions;
        return $this;
    }
    /**
     *
     *
     * @return CatalogDataCustomOptionInterface[]|null
     */
    public function getCustomOptions(): ?array
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
    public function setCustomOptions(?array $customOptions): self
    {
        $this->customOptions = $customOptions;
        return $this;
    }
    /**
     * Downloadable Option
     *
     * @return DownloadableDataDownloadableOptionInterface|null
     */
    public function getDownloadableOption(): ?DownloadableDataDownloadableOptionInterface
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
    public function setDownloadableOption(?DownloadableDataDownloadableOptionInterface $downloadableOption): self
    {
        $this->downloadableOption = $downloadableOption;
        return $this;
    }
    /**
     * Interface GiftCardOptionInterface
     *
     * @return GiftCardDataGiftCardOptionInterface|null
     */
    public function getGiftcardItemOption(): ?GiftCardDataGiftCardOptionInterface
    {
        return $this->giftcardItemOption;
    }
    /**
     * Interface GiftCardOptionInterface
     *
     * @param GiftCardDataGiftCardOptionInterface|null $giftcardItemOption
     *
     * @return self
     */
    public function setGiftcardItemOption(?GiftCardDataGiftCardOptionInterface $giftcardItemOption): self
    {
        $this->giftcardItemOption = $giftcardItemOption;
        return $this;
    }
}
