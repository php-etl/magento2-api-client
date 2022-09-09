<?php

namespace Kiboko\Magento\V2_1\Model;

class QuoteDataTotalsAdditionalDataExtensionInterface
{
    /**
     *
     *
     * @var GiftMessageDataMessageInterface[]|null
     */
    protected $giftMessages;
    /**
     *
     *
     * @return GiftMessageDataMessageInterface[]|null
     */
    public function getGiftMessages(): ?array
    {
        return $this->giftMessages;
    }
    /**
     *
     *
     * @param GiftMessageDataMessageInterface[]|null $giftMessages
     *
     * @return self
     */
    public function setGiftMessages(?array $giftMessages): self
    {
        $this->giftMessages = $giftMessages;
        return $this;
    }
}
