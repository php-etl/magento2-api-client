<?php

namespace Kiboko\Magento\V2_1\Model;

class V1CartsMinePutBody
{
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
    public function getQuote(): ?QuoteDataCartInterface
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
    public function setQuote(?QuoteDataCartInterface $quote): self
    {
        $this->quote = $quote;
        return $this;
    }
}
