<?php

namespace Kiboko\Magento\V2_3\Model;

class QuoteDataPaymentMethodInterface
{
    /**
     * Payment method code
     *
     * @var string|null
     */
    protected $code;
    /**
     * Payment method title
     *
     * @var string|null
     */
    protected $title;
    /**
     * Payment method code
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Payment method code
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
     * Payment method title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Payment method title
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
}
