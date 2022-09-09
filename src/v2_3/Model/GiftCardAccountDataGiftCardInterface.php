<?php

namespace Kiboko\Magento\V2_3\Model;

class GiftCardAccountDataGiftCardInterface
{
    /**
     * Amount
     *
     * @var float|null
     */
    protected $amount;
    /**
     * Base Amount
     *
     * @var float|null
     */
    protected $baseAmount;
    /**
     * Code
     *
     * @var string|null
     */
    protected $code;
    /**
     * Id
     *
     * @var int|null
     */
    protected $id;
    /**
     * Amount
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Amount
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Base Amount
     *
     * @return float|null
     */
    public function getBaseAmount(): ?float
    {
        return $this->baseAmount;
    }
    /**
     * Base Amount
     *
     * @param float|null $baseAmount
     *
     * @return self
     */
    public function setBaseAmount(?float $baseAmount): self
    {
        $this->baseAmount = $baseAmount;
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
     * Id
     *
     * @return int|null
     */
    public function getId(): ?int
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
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
}
