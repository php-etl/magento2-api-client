<?php

namespace Kiboko\Magento\v2_1\Model;

class TaxDataAppliedTaxRateInterface
{
    /**
     * Code
     *
     * @var string
     */
    protected $code;
    /**
     * Title
     *
     * @var string
     */
    protected $title;
    /**
     * Tax Percent
     *
     * @var float
     */
    protected $percent;
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\AppliedTaxRateInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Code
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
     * Title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Tax Percent
     *
     * @return float
     */
    public function getPercent(): float
    {
        return $this->percent;
    }
    /**
     * Tax Percent
     *
     * @param float $percent
     *
     * @return self
     */
    public function setPercent(float $percent): self
    {
        $this->percent = $percent;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\AppliedTaxRateInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\AppliedTaxRateInterface
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
