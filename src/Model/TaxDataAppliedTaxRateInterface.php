<?php

namespace Kiboko\Magento\Model;

class TaxDataAppliedTaxRateInterface
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
     * Code
     *
     * @var string|null
     */
    protected $code;
    /**
     * Title
     *
     * @var string|null
     */
    protected $title;
    /**
     * Tax Percent
     *
     * @var float|null
     */
    protected $percent;
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\AppliedTaxRateInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Code
     *
     * @return string|null
     */
    public function getCode() : ?string
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
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Title
     *
     * @return string|null
     */
    public function getTitle() : ?string
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
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Tax Percent
     *
     * @return float|null
     */
    public function getPercent() : ?float
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
    public function setPercent(?float $percent) : self
    {
        $this->initialized['percent'] = true;
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}