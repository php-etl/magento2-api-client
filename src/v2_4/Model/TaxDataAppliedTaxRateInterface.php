<?php

namespace Kiboko\Magento\V2_4\Model;

class TaxDataAppliedTaxRateInterface
{
    /**
     * Code
     *
     * @var string|null
     */
    protected $code;
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\AppliedTaxRateInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Tax Percent
     *
     * @var float|null
     */
    protected $percent;
    /**
     * Title
     *
     * @var string|null
     */
    protected $title;
    /**
     * Code
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Code
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
    /**
     * Tax Percent
     *
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }
    /**
     * Tax Percent
     *
     * @param float|null $percent
     *
     * @return self
     */
    public function setPercent(?float $percent): self
    {
        $this->percent = $percent;
        return $this;
    }
    /**
     * Title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Title
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }
}
