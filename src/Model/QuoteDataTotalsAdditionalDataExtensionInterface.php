<?php

namespace Kiboko\Magento\V2\Model;

class QuoteDataTotalsAdditionalDataExtensionInterface
{
    /**
     * 
     *
     * @var GiftMessageDataMessageInterface[]
     */
    protected $giftMessages;
    /**
     * 
     *
     * @return GiftMessageDataMessageInterface[]
     */
    public function getGiftMessages() : array
    {
        return $this->giftMessages;
    }
    /**
     * 
     *
     * @param GiftMessageDataMessageInterface[] $giftMessages
     *
     * @return self
     */
    public function setGiftMessages(array $giftMessages) : self
    {
        $this->giftMessages = $giftMessages;
        return $this;
    }
}