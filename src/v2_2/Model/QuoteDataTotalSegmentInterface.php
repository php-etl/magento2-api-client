<?php

namespace Kiboko\Magento\v2_2\Model;

class QuoteDataTotalSegmentInterface
{
    /**
     * Display area code.
     *
     * @var string
     */
    protected $area;
    /**
     * Code
     *
     * @var string
     */
    protected $code;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalSegmentInterface
     *
     * @var QuoteDataTotalSegmentExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Total title
     *
     * @var string
     */
    protected $title;
    /**
     * Total value
     *
     * @var float
     */
    protected $value;
    /**
     * Display area code.
     *
     * @return string
     */
    public function getArea(): string
    {
        return $this->area;
    }
    /**
     * Display area code.
     *
     * @param string $area
     *
     * @return self
     */
    public function setArea(string $area): self
    {
        $this->area = $area;
        return $this;
    }
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
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalSegmentInterface
     *
     * @return QuoteDataTotalSegmentExtensionInterface
     */
    public function getExtensionAttributes(): QuoteDataTotalSegmentExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalSegmentInterface
     *
     * @param QuoteDataTotalSegmentExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(QuoteDataTotalSegmentExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Total title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Total title
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
     * Total value
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Total value
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->value = $value;
        return $this;
    }
}
