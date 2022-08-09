<?php

namespace Kiboko\Magento\V2\Model;

class QuoteDataPaymentMethodInterface
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code;
    /**
     * Payment method title
     *
     * @var string
     */
    protected $title;
    /**
     * Payment method code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Payment method code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Payment method title
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Payment method title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
}