<?php

namespace Kiboko\Magento\V2_1\Model;

class QuoteDataTotalSegmentInterface
{
    /**
     * Display area code.
     *
     * @var string|null
     */
    protected $area;
    /**
     * Code
     *
     * @var string|null
     */
    protected $code;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalSegmentInterface
     *
     * @var QuoteDataTotalSegmentExtensionInterface|null
     */
    protected $extensionAttributes;
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
     * @return string|null
     */
    public function getArea(): ?string
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
    public function setArea(?string $area): self
    {
        $this->area = $area;
        return $this;
    }
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
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalSegmentInterface
     *
     * @return QuoteDataTotalSegmentExtensionInterface|null
     */
    public function getExtensionAttributes(): ?QuoteDataTotalSegmentExtensionInterface
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
    public function setExtensionAttributes(?QuoteDataTotalSegmentExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Total title
     *
     * @return string|null
     */
    public function getTitle(): ?string
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
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Total value
     *
     * @return float|null
     */
    public function getValue(): ?float
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
    public function setValue(?float $value): self
    {
        $this->value = $value;
        return $this;
    }
}
