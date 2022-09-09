<?php

namespace Kiboko\Magento\V2_2\Model;

class PaymentDataPaymentAdditionalInfoInterface
{
    /**
     * Object key
     *
     * @var string|null
     */
    protected $key;
    /**
     * Object value
     *
     * @var string|null
     */
    protected $value;
    /**
     * Object key
     *
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }
    /**
     * Object key
     *
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key): self
    {
        $this->key = $key;
        return $this;
    }
    /**
     * Object value
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Object value
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
