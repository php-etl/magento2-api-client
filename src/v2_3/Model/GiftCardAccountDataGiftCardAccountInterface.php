<?php

namespace Kiboko\Magento\V2_3\Model;

class GiftCardAccountDataGiftCardAccountInterface
{
    /**
     * Cards amount in base currency
     *
     * @var float|null
     */
    protected $baseGiftCardsAmount;
    /**
     * Cards amount used in base currency
     *
     * @var float|null
     */
    protected $baseGiftCardsAmountUsed;
    /**
     * ExtensionInterface class for @see \Magento\GiftCardAccount\Api\Data\GiftCardAccountInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Cards codes
     *
     * @var string[]|null
     */
    protected $giftCards;
    /**
     * Cards amount in quote currency
     *
     * @var float|null
     */
    protected $giftCardsAmount;
    /**
     * Cards amount used in quote currency
     *
     * @var float|null
     */
    protected $giftCardsAmountUsed;
    /**
     * Cards amount in base currency
     *
     * @return float|null
     */
    public function getBaseGiftCardsAmount(): ?float
    {
        return $this->baseGiftCardsAmount;
    }
    /**
     * Cards amount in base currency
     *
     * @param float|null $baseGiftCardsAmount
     *
     * @return self
     */
    public function setBaseGiftCardsAmount(?float $baseGiftCardsAmount): self
    {
        $this->baseGiftCardsAmount = $baseGiftCardsAmount;
        return $this;
    }
    /**
     * Cards amount used in base currency
     *
     * @return float|null
     */
    public function getBaseGiftCardsAmountUsed(): ?float
    {
        return $this->baseGiftCardsAmountUsed;
    }
    /**
     * Cards amount used in base currency
     *
     * @param float|null $baseGiftCardsAmountUsed
     *
     * @return self
     */
    public function setBaseGiftCardsAmountUsed(?float $baseGiftCardsAmountUsed): self
    {
        $this->baseGiftCardsAmountUsed = $baseGiftCardsAmountUsed;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\GiftCardAccount\Api\Data\GiftCardAccountInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\GiftCardAccount\Api\Data\GiftCardAccountInterface
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
     * Cards codes
     *
     * @return string[]|null
     */
    public function getGiftCards(): ?array
    {
        return $this->giftCards;
    }
    /**
     * Cards codes
     *
     * @param string[]|null $giftCards
     *
     * @return self
     */
    public function setGiftCards(?array $giftCards): self
    {
        $this->giftCards = $giftCards;
        return $this;
    }
    /**
     * Cards amount in quote currency
     *
     * @return float|null
     */
    public function getGiftCardsAmount(): ?float
    {
        return $this->giftCardsAmount;
    }
    /**
     * Cards amount in quote currency
     *
     * @param float|null $giftCardsAmount
     *
     * @return self
     */
    public function setGiftCardsAmount(?float $giftCardsAmount): self
    {
        $this->giftCardsAmount = $giftCardsAmount;
        return $this;
    }
    /**
     * Cards amount used in quote currency
     *
     * @return float|null
     */
    public function getGiftCardsAmountUsed(): ?float
    {
        return $this->giftCardsAmountUsed;
    }
    /**
     * Cards amount used in quote currency
     *
     * @param float|null $giftCardsAmountUsed
     *
     * @return self
     */
    public function setGiftCardsAmountUsed(?float $giftCardsAmountUsed): self
    {
        $this->giftCardsAmountUsed = $giftCardsAmountUsed;
        return $this;
    }
}
