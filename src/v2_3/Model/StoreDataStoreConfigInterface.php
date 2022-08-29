<?php

namespace Kiboko\Magento\v2_3\Model;

class StoreDataStoreConfigInterface
{
    /**
     * Store id
     *
     * @var int
     */
    protected $id;
    /**
     * Store code
     *
     * @var string
     */
    protected $code;
    /**
     * Website id of the store
     *
     * @var int
     */
    protected $websiteId;
    /**
     * Store locale
     *
     * @var string
     */
    protected $locale;
    /**
     * Base currency code
     *
     * @var string
     */
    protected $baseCurrencyCode;
    /**
     * Default display currency code
     *
     * @var string
     */
    protected $defaultDisplayCurrencyCode;
    /**
     * Timezone of the store
     *
     * @var string
     */
    protected $timezone;
    /**
     * The unit of weight
     *
     * @var string
     */
    protected $weightUnit;
    /**
     * Base URL for the store
     *
     * @var string
     */
    protected $baseUrl;
    /**
     * Base link URL for the store
     *
     * @var string
     */
    protected $baseLinkUrl;
    /**
     * Base static URL for the store
     *
     * @var string
     */
    protected $baseStaticUrl;
    /**
     * Base media URL for the store
     *
     * @var string
     */
    protected $baseMediaUrl;
    /**
     * Secure base URL for the store
     *
     * @var string
     */
    protected $secureBaseUrl;
    /**
     * Secure base link URL for the store
     *
     * @var string
     */
    protected $secureBaseLinkUrl;
    /**
     * Secure base static URL for the store
     *
     * @var string
     */
    protected $secureBaseStaticUrl;
    /**
     * Secure base media URL for the store
     *
     * @var string
     */
    protected $secureBaseMediaUrl;
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\StoreConfigInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Store id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Store id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Store code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Store code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Website id of the store
     *
     * @return int
     */
    public function getWebsiteId(): int
    {
        return $this->websiteId;
    }
    /**
     * Website id of the store
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
    /**
     * Store locale
     *
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }
    /**
     * Store locale
     *
     * @param string $locale
     *
     * @return self
     */
    public function setLocale(string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }
    /**
     * Base currency code
     *
     * @return string
     */
    public function getBaseCurrencyCode(): string
    {
        return $this->baseCurrencyCode;
    }
    /**
     * Base currency code
     *
     * @param string $baseCurrencyCode
     *
     * @return self
     */
    public function setBaseCurrencyCode(string $baseCurrencyCode): self
    {
        $this->baseCurrencyCode = $baseCurrencyCode;
        return $this;
    }
    /**
     * Default display currency code
     *
     * @return string
     */
    public function getDefaultDisplayCurrencyCode(): string
    {
        return $this->defaultDisplayCurrencyCode;
    }
    /**
     * Default display currency code
     *
     * @param string $defaultDisplayCurrencyCode
     *
     * @return self
     */
    public function setDefaultDisplayCurrencyCode(string $defaultDisplayCurrencyCode): self
    {
        $this->defaultDisplayCurrencyCode = $defaultDisplayCurrencyCode;
        return $this;
    }
    /**
     * Timezone of the store
     *
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }
    /**
     * Timezone of the store
     *
     * @param string $timezone
     *
     * @return self
     */
    public function setTimezone(string $timezone): self
    {
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * The unit of weight
     *
     * @return string
     */
    public function getWeightUnit(): string
    {
        return $this->weightUnit;
    }
    /**
     * The unit of weight
     *
     * @param string $weightUnit
     *
     * @return self
     */
    public function setWeightUnit(string $weightUnit): self
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }
    /**
     * Base URL for the store
     *
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }
    /**
     * Base URL for the store
     *
     * @param string $baseUrl
     *
     * @return self
     */
    public function setBaseUrl(string $baseUrl): self
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }
    /**
     * Base link URL for the store
     *
     * @return string
     */
    public function getBaseLinkUrl(): string
    {
        return $this->baseLinkUrl;
    }
    /**
     * Base link URL for the store
     *
     * @param string $baseLinkUrl
     *
     * @return self
     */
    public function setBaseLinkUrl(string $baseLinkUrl): self
    {
        $this->baseLinkUrl = $baseLinkUrl;
        return $this;
    }
    /**
     * Base static URL for the store
     *
     * @return string
     */
    public function getBaseStaticUrl(): string
    {
        return $this->baseStaticUrl;
    }
    /**
     * Base static URL for the store
     *
     * @param string $baseStaticUrl
     *
     * @return self
     */
    public function setBaseStaticUrl(string $baseStaticUrl): self
    {
        $this->baseStaticUrl = $baseStaticUrl;
        return $this;
    }
    /**
     * Base media URL for the store
     *
     * @return string
     */
    public function getBaseMediaUrl(): string
    {
        return $this->baseMediaUrl;
    }
    /**
     * Base media URL for the store
     *
     * @param string $baseMediaUrl
     *
     * @return self
     */
    public function setBaseMediaUrl(string $baseMediaUrl): self
    {
        $this->baseMediaUrl = $baseMediaUrl;
        return $this;
    }
    /**
     * Secure base URL for the store
     *
     * @return string
     */
    public function getSecureBaseUrl(): string
    {
        return $this->secureBaseUrl;
    }
    /**
     * Secure base URL for the store
     *
     * @param string $secureBaseUrl
     *
     * @return self
     */
    public function setSecureBaseUrl(string $secureBaseUrl): self
    {
        $this->secureBaseUrl = $secureBaseUrl;
        return $this;
    }
    /**
     * Secure base link URL for the store
     *
     * @return string
     */
    public function getSecureBaseLinkUrl(): string
    {
        return $this->secureBaseLinkUrl;
    }
    /**
     * Secure base link URL for the store
     *
     * @param string $secureBaseLinkUrl
     *
     * @return self
     */
    public function setSecureBaseLinkUrl(string $secureBaseLinkUrl): self
    {
        $this->secureBaseLinkUrl = $secureBaseLinkUrl;
        return $this;
    }
    /**
     * Secure base static URL for the store
     *
     * @return string
     */
    public function getSecureBaseStaticUrl(): string
    {
        return $this->secureBaseStaticUrl;
    }
    /**
     * Secure base static URL for the store
     *
     * @param string $secureBaseStaticUrl
     *
     * @return self
     */
    public function setSecureBaseStaticUrl(string $secureBaseStaticUrl): self
    {
        $this->secureBaseStaticUrl = $secureBaseStaticUrl;
        return $this;
    }
    /**
     * Secure base media URL for the store
     *
     * @return string
     */
    public function getSecureBaseMediaUrl(): string
    {
        return $this->secureBaseMediaUrl;
    }
    /**
     * Secure base media URL for the store
     *
     * @param string $secureBaseMediaUrl
     *
     * @return self
     */
    public function setSecureBaseMediaUrl(string $secureBaseMediaUrl): self
    {
        $this->secureBaseMediaUrl = $secureBaseMediaUrl;
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
}
