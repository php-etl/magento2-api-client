<?php

namespace Kiboko\Magento\V2_2\Model;

class DirectoryDataCountryInformationInterface
{
    /**
     * The available regions for the store.
     *
     * @var DirectoryDataRegionInformationInterface[]|null
     */
    protected $availableRegions;
    /**
     * ExtensionInterface class for @see \Magento\Directory\Api\Data\CountryInformationInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * The country full name (in English) for the store.
     *
     * @var string|null
     */
    protected $fullNameEnglish;
    /**
     * The country full name (in store locale) for the store.
     *
     * @var string|null
     */
    protected $fullNameLocale;
    /**
     * The country id for the store.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The country 3 letter abbreviation for the store.
     *
     * @var string|null
     */
    protected $threeLetterAbbreviation;
    /**
     * The country 2 letter abbreviation for the store.
     *
     * @var string|null
     */
    protected $twoLetterAbbreviation;
    /**
     * The available regions for the store.
     *
     * @return DirectoryDataRegionInformationInterface[]|null
     */
    public function getAvailableRegions(): ?array
    {
        return $this->availableRegions;
    }
    /**
     * The available regions for the store.
     *
     * @param DirectoryDataRegionInformationInterface[]|null $availableRegions
     *
     * @return self
     */
    public function setAvailableRegions(?array $availableRegions): self
    {
        $this->availableRegions = $availableRegions;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Directory\Api\Data\CountryInformationInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Directory\Api\Data\CountryInformationInterface
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
     * The country full name (in English) for the store.
     *
     * @return string|null
     */
    public function getFullNameEnglish(): ?string
    {
        return $this->fullNameEnglish;
    }
    /**
     * The country full name (in English) for the store.
     *
     * @param string|null $fullNameEnglish
     *
     * @return self
     */
    public function setFullNameEnglish(?string $fullNameEnglish): self
    {
        $this->fullNameEnglish = $fullNameEnglish;
        return $this;
    }
    /**
     * The country full name (in store locale) for the store.
     *
     * @return string|null
     */
    public function getFullNameLocale(): ?string
    {
        return $this->fullNameLocale;
    }
    /**
     * The country full name (in store locale) for the store.
     *
     * @param string|null $fullNameLocale
     *
     * @return self
     */
    public function setFullNameLocale(?string $fullNameLocale): self
    {
        $this->fullNameLocale = $fullNameLocale;
        return $this;
    }
    /**
     * The country id for the store.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The country id for the store.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The country 3 letter abbreviation for the store.
     *
     * @return string|null
     */
    public function getThreeLetterAbbreviation(): ?string
    {
        return $this->threeLetterAbbreviation;
    }
    /**
     * The country 3 letter abbreviation for the store.
     *
     * @param string|null $threeLetterAbbreviation
     *
     * @return self
     */
    public function setThreeLetterAbbreviation(?string $threeLetterAbbreviation): self
    {
        $this->threeLetterAbbreviation = $threeLetterAbbreviation;
        return $this;
    }
    /**
     * The country 2 letter abbreviation for the store.
     *
     * @return string|null
     */
    public function getTwoLetterAbbreviation(): ?string
    {
        return $this->twoLetterAbbreviation;
    }
    /**
     * The country 2 letter abbreviation for the store.
     *
     * @param string|null $twoLetterAbbreviation
     *
     * @return self
     */
    public function setTwoLetterAbbreviation(?string $twoLetterAbbreviation): self
    {
        $this->twoLetterAbbreviation = $twoLetterAbbreviation;
        return $this;
    }
}
