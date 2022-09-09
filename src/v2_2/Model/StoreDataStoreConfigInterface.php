<?php

namespace Kiboko\Magento\V2_2\Model;

class StoreDataStoreConfigInterface
{
    /**
     * Base currency code
     *
     * @var string|null
     */
    protected $baseCurrencyCode;
    /**
     * Base link URL for the store
     *
     * @var string|null
     */
    protected $baseLinkUrl;
    /**
     * Base media URL for the store
     *
     * @var string|null
     */
    protected $baseMediaUrl;
    /**
     * Base static URL for the store
     *
     * @var string|null
     */
    protected $baseStaticUrl;
    /**
     * Base URL for the store
     *
     * @var string|null
     */
    protected $baseUrl;
    /**
     * Store code
     *
     * @var string|null
     */
    protected $code;
    /**
     * Default display currency code
     *
     * @var string|null
     */
    protected $defaultDisplayCurrencyCode;
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\StoreConfigInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Store id
     *
     * @var int|null
     */
    protected $id;
    /**
     * Store locale
     *
     * @var string|null
     */
    protected $locale;
    /**
     * Secure base link URL for the store
     *
     * @var string|null
     */
    protected $secureBaseLinkUrl;
    /**
     * Secure base media URL for the store
     *
     * @var string|null
     */
    protected $secureBaseMediaUrl;
    /**
     * Secure base static URL for the store
     *
     * @var string|null
     */
    protected $secureBaseStaticUrl;
    /**
     * Secure base URL for the store
     *
     * @var string|null
     */
    protected $secureBaseUrl;
    /**
     * Timezone of the store
     *
     * @var string|null
     */
    protected $timezone;
    /**
     * Website id of the store
     *
     * @var int|null
     */
    protected $websiteId;
    /**
     * The unit of weight
     *
     * @var string|null
     */
    protected $weightUnit;
    /**
     * Base currency code
     *
     * @return string|null
     */
    public function getBaseCurrencyCode(): ?string
    {
        return $this->baseCurrencyCode;
    }
    /**
     * Base currency code
     *
     * @param string|null $baseCurrencyCode
     *
     * @return self
     */
    public function setBaseCurrencyCode(?string $baseCurrencyCode): self
    {
        $this->baseCurrencyCode = $baseCurrencyCode;
        return $this;
    }
    /**
     * Base link URL for the store
     *
     * @return string|null
     */
    public function getBaseLinkUrl(): ?string
    {
        return $this->baseLinkUrl;
    }
    /**
     * Base link URL for the store
     *
     * @param string|null $baseLinkUrl
     *
     * @return self
     */
    public function setBaseLinkUrl(?string $baseLinkUrl): self
    {
        $this->baseLinkUrl = $baseLinkUrl;
        return $this;
    }
    /**
     * Base media URL for the store
     *
     * @return string|null
     */
    public function getBaseMediaUrl(): ?string
    {
        return $this->baseMediaUrl;
    }
    /**
     * Base media URL for the store
     *
     * @param string|null $baseMediaUrl
     *
     * @return self
     */
    public function setBaseMediaUrl(?string $baseMediaUrl): self
    {
        $this->baseMediaUrl = $baseMediaUrl;
        return $this;
    }
    /**
     * Base static URL for the store
     *
     * @return string|null
     */
    public function getBaseStaticUrl(): ?string
    {
        return $this->baseStaticUrl;
    }
    /**
     * Base static URL for the store
     *
     * @param string|null $baseStaticUrl
     *
     * @return self
     */
    public function setBaseStaticUrl(?string $baseStaticUrl): self
    {
        $this->baseStaticUrl = $baseStaticUrl;
        return $this;
    }
    /**
     * Base URL for the store
     *
     * @return string|null
     */
    public function getBaseUrl(): ?string
    {
        return $this->baseUrl;
    }
    /**
     * Base URL for the store
     *
     * @param string|null $baseUrl
     *
     * @return self
     */
    public function setBaseUrl(?string $baseUrl): self
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }
    /**
     * Store code
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Store code
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Default display currency code
     *
     * @return string|null
     */
    public function getDefaultDisplayCurrencyCode(): ?string
    {
        return $this->defaultDisplayCurrencyCode;
    }
    /**
     * Default display currency code
     *
     * @param string|null $defaultDisplayCurrencyCode
     *
     * @return self
     */
    public function setDefaultDisplayCurrencyCode(?string $defaultDisplayCurrencyCode): self
    {
        $this->defaultDisplayCurrencyCode = $defaultDisplayCurrencyCode;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\StoreConfigInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\StoreConfigInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Store id
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Store id
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Store locale
     *
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Store locale
     *
     * @param string|null $locale
     *
     * @return self
     */
    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }
    /**
     * Secure base link URL for the store
     *
     * @return string|null
     */
    public function getSecureBaseLinkUrl(): ?string
    {
        return $this->secureBaseLinkUrl;
    }
    /**
     * Secure base link URL for the store
     *
     * @param string|null $secureBaseLinkUrl
     *
     * @return self
     */
    public function setSecureBaseLinkUrl(?string $secureBaseLinkUrl): self
    {
        $this->secureBaseLinkUrl = $secureBaseLinkUrl;
        return $this;
    }
    /**
     * Secure base media URL for the store
     *
     * @return string|null
     */
    public function getSecureBaseMediaUrl(): ?string
    {
        return $this->secureBaseMediaUrl;
    }
    /**
     * Secure base media URL for the store
     *
     * @param string|null $secureBaseMediaUrl
     *
     * @return self
     */
    public function setSecureBaseMediaUrl(?string $secureBaseMediaUrl): self
    {
        $this->secureBaseMediaUrl = $secureBaseMediaUrl;
        return $this;
    }
    /**
     * Secure base static URL for the store
     *
     * @return string|null
     */
    public function getSecureBaseStaticUrl(): ?string
    {
        return $this->secureBaseStaticUrl;
    }
    /**
     * Secure base static URL for the store
     *
     * @param string|null $secureBaseStaticUrl
     *
     * @return self
     */
    public function setSecureBaseStaticUrl(?string $secureBaseStaticUrl): self
    {
        $this->secureBaseStaticUrl = $secureBaseStaticUrl;
        return $this;
    }
    /**
     * Secure base URL for the store
     *
     * @return string|null
     */
    public function getSecureBaseUrl(): ?string
    {
        return $this->secureBaseUrl;
    }
    /**
     * Secure base URL for the store
     *
     * @param string|null $secureBaseUrl
     *
     * @return self
     */
    public function setSecureBaseUrl(?string $secureBaseUrl): self
    {
        $this->secureBaseUrl = $secureBaseUrl;
        return $this;
    }
    /**
     * Timezone of the store
     *
     * @return string|null
     */
    public function getTimezone(): ?string
    {
        return $this->timezone;
    }
    /**
     * Timezone of the store
     *
     * @param string|null $timezone
     *
     * @return self
     */
    public function setTimezone(?string $timezone): self
    {
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * Website id of the store
     *
     * @return int|null
     */
    public function getWebsiteId(): ?int
    {
        return $this->websiteId;
    }
    /**
     * Website id of the store
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
    /**
     * The unit of weight
     *
     * @return string|null
     */
    public function getWeightUnit(): ?string
    {
        return $this->weightUnit;
    }
    /**
     * The unit of weight
     *
     * @param string|null $weightUnit
     *
     * @return self
     */
    public function setWeightUnit(?string $weightUnit): self
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }
}
