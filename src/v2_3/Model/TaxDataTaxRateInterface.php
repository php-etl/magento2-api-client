<?php

namespace Kiboko\Magento\v2_3\Model;

class TaxDataTaxRateInterface
{
    /**
     * Id
     *
     * @var int
     */
    protected $id;
    /**
     * Country id
     *
     * @var string
     */
    protected $taxCountryId;
    /**
     * Region id
     *
     * @var int
     */
    protected $taxRegionId;
    /**
     * Region name
     *
     * @var string
     */
    protected $regionName;
    /**
     * Postcode
     *
     * @var string
     */
    protected $taxPostcode;
    /**
     * Zip is range
     *
     * @var int
     */
    protected $zipIsRange;
    /**
     * Zip range from
     *
     * @var int
     */
    protected $zipFrom;
    /**
     * Zip range to
     *
     * @var int
     */
    protected $zipTo;
    /**
     * Tax rate in percentage
     *
     * @var float
     */
    protected $rate;
    /**
     * Tax rate code
     *
     * @var string
     */
    protected $code;
    /**
     * Tax rate titles
     *
     * @var TaxDataTaxRateTitleInterface[]
     */
    protected $titles;
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRateInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Id
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
     * Country id
     *
     * @return string
     */
    public function getTaxCountryId(): string
    {
        return $this->taxCountryId;
    }
    /**
     * Country id
     *
     * @param string $taxCountryId
     *
     * @return self
     */
    public function setTaxCountryId(string $taxCountryId): self
    {
        $this->taxCountryId = $taxCountryId;
        return $this;
    }
    /**
     * Region id
     *
     * @return int
     */
    public function getTaxRegionId(): int
    {
        return $this->taxRegionId;
    }
    /**
     * Region id
     *
     * @param int $taxRegionId
     *
     * @return self
     */
    public function setTaxRegionId(int $taxRegionId): self
    {
        $this->taxRegionId = $taxRegionId;
        return $this;
    }
    /**
     * Region name
     *
     * @return string
     */
    public function getRegionName(): string
    {
        return $this->regionName;
    }
    /**
     * Region name
     *
     * @param string $regionName
     *
     * @return self
     */
    public function setRegionName(string $regionName): self
    {
        $this->regionName = $regionName;
        return $this;
    }
    /**
     * Postcode
     *
     * @return string
     */
    public function getTaxPostcode(): string
    {
        return $this->taxPostcode;
    }
    /**
     * Postcode
     *
     * @param string $taxPostcode
     *
     * @return self
     */
    public function setTaxPostcode(string $taxPostcode): self
    {
        $this->taxPostcode = $taxPostcode;
        return $this;
    }
    /**
     * Zip is range
     *
     * @return int
     */
    public function getZipIsRange(): int
    {
        return $this->zipIsRange;
    }
    /**
     * Zip is range
     *
     * @param int $zipIsRange
     *
     * @return self
     */
    public function setZipIsRange(int $zipIsRange): self
    {
        $this->zipIsRange = $zipIsRange;
        return $this;
    }
    /**
     * Zip range from
     *
     * @return int
     */
    public function getZipFrom(): int
    {
        return $this->zipFrom;
    }
    /**
     * Zip range from
     *
     * @param int $zipFrom
     *
     * @return self
     */
    public function setZipFrom(int $zipFrom): self
    {
        $this->zipFrom = $zipFrom;
        return $this;
    }
    /**
     * Zip range to
     *
     * @return int
     */
    public function getZipTo(): int
    {
        return $this->zipTo;
    }
    /**
     * Zip range to
     *
     * @param int $zipTo
     *
     * @return self
     */
    public function setZipTo(int $zipTo): self
    {
        $this->zipTo = $zipTo;
        return $this;
    }
    /**
     * Tax rate in percentage
     *
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }
    /**
     * Tax rate in percentage
     *
     * @param float $rate
     *
     * @return self
     */
    public function setRate(float $rate): self
    {
        $this->rate = $rate;
        return $this;
    }
    /**
     * Tax rate code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Tax rate code
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
     * Tax rate titles
     *
     * @return TaxDataTaxRateTitleInterface[]
     */
    public function getTitles(): array
    {
        return $this->titles;
    }
    /**
     * Tax rate titles
     *
     * @param TaxDataTaxRateTitleInterface[] $titles
     *
     * @return self
     */
    public function setTitles(array $titles): self
    {
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
