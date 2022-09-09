<?php

namespace Kiboko\Magento\V2_2\Model;

class CompanyCreditDataCreditBalanceOptionsInterface
{
    /**
     * Currency base.
     *
     * @var string|null
     */
    protected $currencyBase;
    /**
     * Currency display.
     *
     * @var string|null
     */
    protected $currencyDisplay;
    /**
     * Order increment.
     *
     * @var string|null
     */
    protected $orderIncrement;
    /**
     * Purchase order number.
     *
     * @var string|null
     */
    protected $purchaseOrder;
    /**
     * Currency base.
     *
     * @return string|null
     */
    public function getCurrencyBase(): ?string
    {
        return $this->currencyBase;
    }
    /**
     * Currency base.
     *
     * @param string|null $currencyBase
     *
     * @return self
     */
    public function setCurrencyBase(?string $currencyBase): self
    {
        $this->currencyBase = $currencyBase;
        return $this;
    }
    /**
     * Currency display.
     *
     * @return string|null
     */
    public function getCurrencyDisplay(): ?string
    {
        return $this->currencyDisplay;
    }
    /**
     * Currency display.
     *
     * @param string|null $currencyDisplay
     *
     * @return self
     */
    public function setCurrencyDisplay(?string $currencyDisplay): self
    {
        $this->currencyDisplay = $currencyDisplay;
        return $this;
    }
    /**
     * Order increment.
     *
     * @return string|null
     */
    public function getOrderIncrement(): ?string
    {
        return $this->orderIncrement;
    }
    /**
     * Order increment.
     *
     * @param string|null $orderIncrement
     *
     * @return self
     */
    public function setOrderIncrement(?string $orderIncrement): self
    {
        $this->orderIncrement = $orderIncrement;
        return $this;
    }
    /**
     * Purchase order number.
     *
     * @return string|null
     */
    public function getPurchaseOrder(): ?string
    {
        return $this->purchaseOrder;
    }
    /**
     * Purchase order number.
     *
     * @param string|null $purchaseOrder
     *
     * @return self
     */
    public function setPurchaseOrder(?string $purchaseOrder): self
    {
        $this->purchaseOrder = $purchaseOrder;
        return $this;
    }
}
