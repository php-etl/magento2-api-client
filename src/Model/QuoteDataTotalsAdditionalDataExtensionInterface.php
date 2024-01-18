<?php

namespace Kiboko\Magento\Model;

class QuoteDataTotalsAdditionalDataExtensionInterface
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
    public function getGiftMessages() : ?array
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
    public function setGiftMessages(?array $giftMessages) : self
    {
        $this->initialized['giftMessages'] = true;
        $this->giftMessages = $giftMessages;
        return $this;
    }
}