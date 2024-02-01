<?php

namespace Kiboko\Magento\Model;

class TaxDataTaxRateInterface
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
     * Id
     *
     * @var int|null
     */
    protected $id;
    /**
     * Country id
     *
     * @var string|null
     */
    protected $taxCountryId;
    /**
     * Region id
     *
     * @var int|null
     */
    protected $taxRegionId;
    /**
     * Region name
     *
     * @var string|null
     */
    protected $regionName;
    /**
     * Postcode
     *
     * @var string|null
     */
    protected $taxPostcode;
    /**
     * Zip is range
     *
     * @var int|null
     */
    protected $zipIsRange;
    /**
     * Zip range from
     *
     * @var int|null
     */
    protected $zipFrom;
    /**
     * Zip range to
     *
     * @var int|null
     */
    protected $zipTo;
    /**
     * Tax rate in percentage
     *
     * @var float|null
     */
    protected $rate;
    /**
     * Tax rate code
     *
     * @var string|null
     */
    protected $code;
    /**
     * Tax rate titles
     *
     * @var TaxDataTaxRateTitleInterface[]|null
     */
    protected $titles;
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRateInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Id
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Id
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Country id
     *
     * @return string|null
     */
    public function getTaxCountryId() : ?string
    {
        return $this->taxCountryId;
    }
    /**
     * Country id
     *
     * @param string|null $taxCountryId
     *
     * @return self
     */
    public function setTaxCountryId(?string $taxCountryId) : self
    {
        $this->initialized['taxCountryId'] = true;
        $this->taxCountryId = $taxCountryId;
        return $this;
    }
    /**
     * Region id
     *
     * @return int|null
     */
    public function getTaxRegionId() : ?int
    {
        return $this->taxRegionId;
    }
    /**
     * Region id
     *
     * @param int|null $taxRegionId
     *
     * @return self
     */
    public function setTaxRegionId(?int $taxRegionId) : self
    {
        $this->initialized['taxRegionId'] = true;
        $this->taxRegionId = $taxRegionId;
        return $this;
    }
    /**
     * Region name
     *
     * @return string|null
     */
    public function getRegionName() : ?string
    {
        return $this->regionName;
    }
    /**
     * Region name
     *
     * @param string|null $regionName
     *
     * @return self
     */
    public function setRegionName(?string $regionName) : self
    {
        $this->initialized['regionName'] = true;
        $this->regionName = $regionName;
        return $this;
    }
    /**
     * Postcode
     *
     * @return string|null
     */
    public function getTaxPostcode() : ?string
    {
        return $this->taxPostcode;
    }
    /**
     * Postcode
     *
     * @param string|null $taxPostcode
     *
     * @return self
     */
    public function setTaxPostcode(?string $taxPostcode) : self
    {
        $this->initialized['taxPostcode'] = true;
        $this->taxPostcode = $taxPostcode;
        return $this;
    }
    /**
     * Zip is range
     *
     * @return int|null
     */
    public function getZipIsRange() : ?int
    {
        return $this->zipIsRange;
    }
    /**
     * Zip is range
     *
     * @param int|null $zipIsRange
     *
     * @return self
     */
    public function setZipIsRange(?int $zipIsRange) : self
    {
        $this->initialized['zipIsRange'] = true;
        $this->zipIsRange = $zipIsRange;
        return $this;
    }
    /**
     * Zip range from
     *
     * @return int|null
     */
    public function getZipFrom() : ?int
    {
        return $this->zipFrom;
    }
    /**
     * Zip range from
     *
     * @param int|null $zipFrom
     *
     * @return self
     */
    public function setZipFrom(?int $zipFrom) : self
    {
        $this->initialized['zipFrom'] = true;
        $this->zipFrom = $zipFrom;
        return $this;
    }
    /**
     * Zip range to
     *
     * @return int|null
     */
    public function getZipTo() : ?int
    {
        return $this->zipTo;
    }
    /**
     * Zip range to
     *
     * @param int|null $zipTo
     *
     * @return self
     */
    public function setZipTo(?int $zipTo) : self
    {
        $this->initialized['zipTo'] = true;
        $this->zipTo = $zipTo;
        return $this;
    }
    /**
     * Tax rate in percentage
     *
     * @return float|null
     */
    public function getRate() : ?float
    {
        return $this->rate;
    }
    /**
     * Tax rate in percentage
     *
     * @param float|null $rate
     *
     * @return self
     */
    public function setRate(?float $rate) : self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
    /**
     * Tax rate code
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Tax rate code
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Tax rate titles
     *
     * @return TaxDataTaxRateTitleInterface[]|null
     */
    public function getTitles() : ?array
    {
        return $this->titles;
    }
    /**
     * Tax rate titles
     *
     * @param TaxDataTaxRateTitleInterface[]|null $titles
     *
     * @return self
     */
    public function setTitles(?array $titles) : self
    {
        $this->initialized['titles'] = true;
        $this->titles = $titles;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRateInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRateInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}