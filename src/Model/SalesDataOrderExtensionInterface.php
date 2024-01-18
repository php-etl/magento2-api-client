<?php

namespace Kiboko\Magento\Model;

class SalesDataOrderExtensionInterface
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
     * @var SalesDataShippingAssignmentInterface[]|null
     */
    protected $shippingAssignments;
    /**
     * 
     *
     * @var PaymentDataPaymentAdditionalInfoInterface[]|null
     */
    protected $paymentAdditionalInfo;
    /**
     * Interface MessageInterface
     *
     * @var GiftMessageDataMessageInterface|null
     */
    protected $giftMessage;
    /**
     * 
     *
     * @var TaxDataOrderTaxDetailsAppliedTaxInterface[]|null
     */
    protected $appliedTaxes;
    /**
     * 
     *
     * @var TaxDataOrderTaxDetailsItemInterface[]|null
     */
    protected $itemAppliedTaxes;
    /**
     * 
     *
     * @var bool|null
     */
    protected $convertingFromQuote;
    /**
     * 
     *
     * @var string|null
     */
    protected $amazonOrderReferenceId;
    /**
     * 
     *
     * @return SalesDataShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments() : ?array
    {
        return $this->shippingAssignments;
    }
    /**
     * 
     *
     * @param SalesDataShippingAssignmentInterface[]|null $shippingAssignments
     *
     * @return self
     */
    public function setShippingAssignments(?array $shippingAssignments) : self
    {
        $this->initialized['shippingAssignments'] = true;
        $this->shippingAssignments = $shippingAssignments;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentDataPaymentAdditionalInfoInterface[]|null
     */
    public function getPaymentAdditionalInfo() : ?array
    {
        return $this->paymentAdditionalInfo;
    }
    /**
     * 
     *
     * @param PaymentDataPaymentAdditionalInfoInterface[]|null $paymentAdditionalInfo
     *
     * @return self
     */
    public function setPaymentAdditionalInfo(?array $paymentAdditionalInfo) : self
    {
        $this->initialized['paymentAdditionalInfo'] = true;
        $this->paymentAdditionalInfo = $paymentAdditionalInfo;
        return $this;
    }
    /**
     * Interface MessageInterface
     *
     * @return GiftMessageDataMessageInterface|null
     */
    public function getGiftMessage() : ?GiftMessageDataMessageInterface
    {
        return $this->giftMessage;
    }
    /**
     * Interface MessageInterface
     *
     * @param GiftMessageDataMessageInterface|null $giftMessage
     *
     * @return self
     */
    public function setGiftMessage(?GiftMessageDataMessageInterface $giftMessage) : self
    {
        $this->initialized['giftMessage'] = true;
        $this->giftMessage = $giftMessage;
        return $this;
    }
    /**
     * 
     *
     * @return TaxDataOrderTaxDetailsAppliedTaxInterface[]|null
     */
    public function getAppliedTaxes() : ?array
    {
        return $this->appliedTaxes;
    }
    /**
     * 
     *
     * @param TaxDataOrderTaxDetailsAppliedTaxInterface[]|null $appliedTaxes
     *
     * @return self
     */
    public function setAppliedTaxes(?array $appliedTaxes) : self
    {
        $this->initialized['appliedTaxes'] = true;
        $this->appliedTaxes = $appliedTaxes;
        return $this;
    }
    /**
     * 
     *
     * @return TaxDataOrderTaxDetailsItemInterface[]|null
     */
    public function getItemAppliedTaxes() : ?array
    {
        return $this->itemAppliedTaxes;
    }
    /**
     * 
     *
     * @param TaxDataOrderTaxDetailsItemInterface[]|null $itemAppliedTaxes
     *
     * @return self
     */
    public function setItemAppliedTaxes(?array $itemAppliedTaxes) : self
    {
        $this->initialized['itemAppliedTaxes'] = true;
        $this->itemAppliedTaxes = $itemAppliedTaxes;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getConvertingFromQuote() : ?bool
    {
        return $this->convertingFromQuote;
    }
    /**
     * 
     *
     * @param bool|null $convertingFromQuote
     *
     * @return self
     */
    public function setConvertingFromQuote(?bool $convertingFromQuote) : self
    {
        $this->initialized['convertingFromQuote'] = true;
        $this->convertingFromQuote = $convertingFromQuote;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAmazonOrderReferenceId() : ?string
    {
        return $this->amazonOrderReferenceId;
    }
    /**
     * 
     *
     * @param string|null $amazonOrderReferenceId
     *
     * @return self
     */
    public function setAmazonOrderReferenceId(?string $amazonOrderReferenceId) : self
    {
        $this->initialized['amazonOrderReferenceId'] = true;
        $this->amazonOrderReferenceId = $amazonOrderReferenceId;
        return $this;
    }
}