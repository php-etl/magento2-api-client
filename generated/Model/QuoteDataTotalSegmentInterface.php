<?php

namespace Kiboko\Magento\Model;

class QuoteDataTotalSegmentInterface
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
     * Total title
     *
     * @var string|null
     */
    protected $title;
    /**
     * Total value
     *
     * @var float|null
     */
    protected $value;
    /**
     * Display area code.
     *
     * @var string|null
     */
    protected $area;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalSegmentInterface
     *
     * @var QuoteDataTotalSegmentExtensionInterface|null
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
     * Total title
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * Total title
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
     * Total value
     *
     * @return float|null
     */
    public function getValue() : ?float
    {
        return $this->value;
    }
    /**
     * Total value
     *
     * @param float|null $value
     *
     * @return self
     */
    public function setValue(?float $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Display area code.
     *
     * @return string|null
     */
    public function getArea() : ?string
    {
        return $this->area;
    }
    /**
     * Display area code.
     *
     * @param string|null $area
     *
     * @return self
     */
    public function setArea(?string $area) : self
    {
        $this->initialized['area'] = true;
        $this->area = $area;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalSegmentInterface
     *
     * @return QuoteDataTotalSegmentExtensionInterface|null
     */
    public function getExtensionAttributes() : ?QuoteDataTotalSegmentExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalSegmentInterface
     *
     * @param QuoteDataTotalSegmentExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?QuoteDataTotalSegmentExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}