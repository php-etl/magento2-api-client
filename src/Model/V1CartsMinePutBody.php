<?php

namespace Kiboko\Magento\Model;

class V1CartsMinePutBody
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
     * Interface CartInterface
     *
     * @var QuoteDataCartInterface|null
     */
    protected $quote;
    /**
     * Interface CartInterface
     *
     * @return QuoteDataCartInterface|null
     */
    public function getQuote() : ?QuoteDataCartInterface
    {
        return $this->quote;
    }
    /**
     * Interface CartInterface
     *
     * @param QuoteDataCartInterface|null $quote
     *
     * @return self
     */
    public function setQuote(?QuoteDataCartInterface $quote) : self
    {
        $this->initialized['quote'] = true;
        $this->quote = $quote;
        return $this;
    }
}