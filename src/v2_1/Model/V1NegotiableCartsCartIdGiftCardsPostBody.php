<?php

namespace Kiboko\Magento\V2_1\Model;

class V1NegotiableCartsCartIdGiftCardsPostBody
{
    /**
     * Gift Card Account data
     *
     * @var GiftCardAccountDataGiftCardAccountInterface|null
     */
    protected $giftCardAccountData;
    /**
     * Gift Card Account data
     *
     * @return GiftCardAccountDataGiftCardAccountInterface|null
     */
    public function getGiftCardAccountData(): ?GiftCardAccountDataGiftCardAccountInterface
    {
        return $this->giftCardAccountData;
    }
    /**
     * Gift Card Account data
     *
     * @param GiftCardAccountDataGiftCardAccountInterface|null $giftCardAccountData
     *
     * @return self
     */
    public function setGiftCardAccountData(?GiftCardAccountDataGiftCardAccountInterface $giftCardAccountData): self
    {
        $this->giftCardAccountData = $giftCardAccountData;
        return $this;
    }
}
