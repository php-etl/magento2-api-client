<?php

namespace Kiboko\Magento\V2_2\Model;

class SalesDataOrderPaymentInterface
{
    /**
     * Account status.
     *
     * @var string|null
     */
    protected $accountStatus;
    /**
     * Additional data.
     *
     * @var string|null
     */
    protected $additionalData;
    /**
     * Array of additional information.
     *
     * @var string[]|null
     */
    protected $additionalInformation;
    /**
     * Address status.
     *
     * @var string|null
     */
    protected $addressStatus;
    /**
     * Amount authorized.
     *
     * @var float|null
     */
    protected $amountAuthorized;
    /**
     * Amount canceled.
     *
     * @var float|null
     */
    protected $amountCanceled;
    /**
     * Amount ordered.
     *
     * @var float|null
     */
    protected $amountOrdered;
    /**
     * Amount paid.
     *
     * @var float|null
     */
    protected $amountPaid;
    /**
     * Amount refunded.
     *
     * @var float|null
     */
    protected $amountRefunded;
    /**
     * Anet transaction method.
     *
     * @var string|null
     */
    protected $anetTransMethod;
    /**
     * Base amount authorized.
     *
     * @var float|null
     */
    protected $baseAmountAuthorized;
    /**
     * Base amount canceled.
     *
     * @var float|null
     */
    protected $baseAmountCanceled;
    /**
     * Base amount ordered.
     *
     * @var float|null
     */
    protected $baseAmountOrdered;
    /**
     * Base amount paid.
     *
     * @var float|null
     */
    protected $baseAmountPaid;
    /**
     * Base amount paid online.
     *
     * @var float|null
     */
    protected $baseAmountPaidOnline;
    /**
     * Base amount refunded.
     *
     * @var float|null
     */
    protected $baseAmountRefunded;
    /**
     * Base amount refunded online.
     *
     * @var float|null
     */
    protected $baseAmountRefundedOnline;
    /**
     * Base shipping amount.
     *
     * @var float|null
     */
    protected $baseShippingAmount;
    /**
     * Base shipping captured amount.
     *
     * @var float|null
     */
    protected $baseShippingCaptured;
    /**
     * Base shipping refunded amount.
     *
     * @var float|null
     */
    protected $baseShippingRefunded;
    /**
     * Credit card approval.
     *
     * @var string|null
     */
    protected $ccApproval;
    /**
     * Credit card avs status.
     *
     * @var string|null
     */
    protected $ccAvsStatus;
    /**
     * Credit card CID status.
     *
     * @var string|null
     */
    protected $ccCidStatus;
    /**
     * Credit card debug request body.
     *
     * @var string|null
     */
    protected $ccDebugRequestBody;
    /**
     * Credit card debug response body.
     *
     * @var string|null
     */
    protected $ccDebugResponseBody;
    /**
     * Credit card debug response serialized.
     *
     * @var string|null
     */
    protected $ccDebugResponseSerialized;
    /**
     * Credit card expiration month.
     *
     * @var string|null
     */
    protected $ccExpMonth;
    /**
     * Credit card expiration year.
     *
     * @var string|null
     */
    protected $ccExpYear;
    /**
     * Last four digits of the credit card.
     *
     * @var string|null
     */
    protected $ccLast4;
    /**
     * Encrypted credit card number.
     *
     * @var string|null
     */
    protected $ccNumberEnc;
    /**
     * Credit card number.
     *
     * @var string|null
     */
    protected $ccOwner;
    /**
     * Credit card secure verify.
     *
     * @var string|null
     */
    protected $ccSecureVerify;
    /**
     * Credit card SS issue.
     *
     * @var string|null
     */
    protected $ccSsIssue;
    /**
     * Credit card SS start month.
     *
     * @var string|null
     */
    protected $ccSsStartMonth;
    /**
     * Credit card SS start year.
     *
     * @var string|null
     */
    protected $ccSsStartYear;
    /**
     * Credit card status.
     *
     * @var string|null
     */
    protected $ccStatus;
    /**
     * Credit card status description.
     *
     * @var string|null
     */
    protected $ccStatusDescription;
    /**
     * Credit card transaction ID.
     *
     * @var string|null
     */
    protected $ccTransId;
    /**
     * Credit card type.
     *
     * @var string|null
     */
    protected $ccType;
    /**
     * eCheck account name.
     *
     * @var string|null
     */
    protected $echeckAccountName;
    /**
     * eCheck account type.
     *
     * @var string|null
     */
    protected $echeckAccountType;
    /**
     * eCheck bank name.
     *
     * @var string|null
     */
    protected $echeckBankName;
    /**
     * eCheck routing number.
     *
     * @var string|null
     */
    protected $echeckRoutingNumber;
    /**
     * eCheck type.
     *
     * @var string|null
     */
    protected $echeckType;
    /**
     * Entity ID.
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderPaymentInterface
     *
     * @var SalesDataOrderPaymentExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Last transaction ID.
     *
     * @var string|null
     */
    protected $lastTransId;
    /**
     * Method.
     *
     * @var string|null
     */
    protected $method;
    /**
     * Parent ID.
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * PO number.
     *
     * @var string|null
     */
    protected $poNumber;
    /**
     * Protection eligibility.
     *
     * @var string|null
     */
    protected $protectionEligibility;
    /**
     * Quote payment ID.
     *
     * @var int|null
     */
    protected $quotePaymentId;
    /**
     * Shipping amount.
     *
     * @var float|null
     */
    protected $shippingAmount;
    /**
     * Shipping captured.
     *
     * @var float|null
     */
    protected $shippingCaptured;
    /**
     * Shipping refunded.
     *
     * @var float|null
     */
    protected $shippingRefunded;
    /**
     * Account status.
     *
     * @return string|null
     */
    public function getAccountStatus(): ?string
    {
        return $this->accountStatus;
    }
    /**
     * Account status.
     *
     * @param string|null $accountStatus
     *
     * @return self
     */
    public function setAccountStatus(?string $accountStatus): self
    {
        $this->accountStatus = $accountStatus;
        return $this;
    }
    /**
     * Additional data.
     *
     * @return string|null
     */
    public function getAdditionalData(): ?string
    {
        return $this->additionalData;
    }
    /**
     * Additional data.
     *
     * @param string|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?string $additionalData): self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * Array of additional information.
     *
     * @return string[]|null
     */
    public function getAdditionalInformation(): ?array
    {
        return $this->additionalInformation;
    }
    /**
     * Array of additional information.
     *
     * @param string[]|null $additionalInformation
     *
     * @return self
     */
    public function setAdditionalInformation(?array $additionalInformation): self
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }
    /**
     * Address status.
     *
     * @return string|null
     */
    public function getAddressStatus(): ?string
    {
        return $this->addressStatus;
    }
    /**
     * Address status.
     *
     * @param string|null $addressStatus
     *
     * @return self
     */
    public function setAddressStatus(?string $addressStatus): self
    {
        $this->addressStatus = $addressStatus;
        return $this;
    }
    /**
     * Amount authorized.
     *
     * @return float|null
     */
    public function getAmountAuthorized(): ?float
    {
        return $this->amountAuthorized;
    }
    /**
     * Amount authorized.
     *
     * @param float|null $amountAuthorized
     *
     * @return self
     */
    public function setAmountAuthorized(?float $amountAuthorized): self
    {
        $this->amountAuthorized = $amountAuthorized;
        return $this;
    }
    /**
     * Amount canceled.
     *
     * @return float|null
     */
    public function getAmountCanceled(): ?float
    {
        return $this->amountCanceled;
    }
    /**
     * Amount canceled.
     *
     * @param float|null $amountCanceled
     *
     * @return self
     */
    public function setAmountCanceled(?float $amountCanceled): self
    {
        $this->amountCanceled = $amountCanceled;
        return $this;
    }
    /**
     * Amount ordered.
     *
     * @return float|null
     */
    public function getAmountOrdered(): ?float
    {
        return $this->amountOrdered;
    }
    /**
     * Amount ordered.
     *
     * @param float|null $amountOrdered
     *
     * @return self
     */
    public function setAmountOrdered(?float $amountOrdered): self
    {
        $this->amountOrdered = $amountOrdered;
        return $this;
    }
    /**
     * Amount paid.
     *
     * @return float|null
     */
    public function getAmountPaid(): ?float
    {
        return $this->amountPaid;
    }
    /**
     * Amount paid.
     *
     * @param float|null $amountPaid
     *
     * @return self
     */
    public function setAmountPaid(?float $amountPaid): self
    {
        $this->amountPaid = $amountPaid;
        return $this;
    }
    /**
     * Amount refunded.
     *
     * @return float|null
     */
    public function getAmountRefunded(): ?float
    {
        return $this->amountRefunded;
    }
    /**
     * Amount refunded.
     *
     * @param float|null $amountRefunded
     *
     * @return self
     */
    public function setAmountRefunded(?float $amountRefunded): self
    {
        $this->amountRefunded = $amountRefunded;
        return $this;
    }
    /**
     * Anet transaction method.
     *
     * @return string|null
     */
    public function getAnetTransMethod(): ?string
    {
        return $this->anetTransMethod;
    }
    /**
     * Anet transaction method.
     *
     * @param string|null $anetTransMethod
     *
     * @return self
     */
    public function setAnetTransMethod(?string $anetTransMethod): self
    {
        $this->anetTransMethod = $anetTransMethod;
        return $this;
    }
    /**
     * Base amount authorized.
     *
     * @return float|null
     */
    public function getBaseAmountAuthorized(): ?float
    {
        return $this->baseAmountAuthorized;
    }
    /**
     * Base amount authorized.
     *
     * @param float|null $baseAmountAuthorized
     *
     * @return self
     */
    public function setBaseAmountAuthorized(?float $baseAmountAuthorized): self
    {
        $this->baseAmountAuthorized = $baseAmountAuthorized;
        return $this;
    }
    /**
     * Base amount canceled.
     *
     * @return float|null
     */
    public function getBaseAmountCanceled(): ?float
    {
        return $this->baseAmountCanceled;
    }
    /**
     * Base amount canceled.
     *
     * @param float|null $baseAmountCanceled
     *
     * @return self
     */
    public function setBaseAmountCanceled(?float $baseAmountCanceled): self
    {
        $this->baseAmountCanceled = $baseAmountCanceled;
        return $this;
    }
    /**
     * Base amount ordered.
     *
     * @return float|null
     */
    public function getBaseAmountOrdered(): ?float
    {
        return $this->baseAmountOrdered;
    }
    /**
     * Base amount ordered.
     *
     * @param float|null $baseAmountOrdered
     *
     * @return self
     */
    public function setBaseAmountOrdered(?float $baseAmountOrdered): self
    {
        $this->baseAmountOrdered = $baseAmountOrdered;
        return $this;
    }
    /**
     * Base amount paid.
     *
     * @return float|null
     */
    public function getBaseAmountPaid(): ?float
    {
        return $this->baseAmountPaid;
    }
    /**
     * Base amount paid.
     *
     * @param float|null $baseAmountPaid
     *
     * @return self
     */
    public function setBaseAmountPaid(?float $baseAmountPaid): self
    {
        $this->baseAmountPaid = $baseAmountPaid;
        return $this;
    }
    /**
     * Base amount paid online.
     *
     * @return float|null
     */
    public function getBaseAmountPaidOnline(): ?float
    {
        return $this->baseAmountPaidOnline;
    }
    /**
     * Base amount paid online.
     *
     * @param float|null $baseAmountPaidOnline
     *
     * @return self
     */
    public function setBaseAmountPaidOnline(?float $baseAmountPaidOnline): self
    {
        $this->baseAmountPaidOnline = $baseAmountPaidOnline;
        return $this;
    }
    /**
     * Base amount refunded.
     *
     * @return float|null
     */
    public function getBaseAmountRefunded(): ?float
    {
        return $this->baseAmountRefunded;
    }
    /**
     * Base amount refunded.
     *
     * @param float|null $baseAmountRefunded
     *
     * @return self
     */
    public function setBaseAmountRefunded(?float $baseAmountRefunded): self
    {
        $this->baseAmountRefunded = $baseAmountRefunded;
        return $this;
    }
    /**
     * Base amount refunded online.
     *
     * @return float|null
     */
    public function getBaseAmountRefundedOnline(): ?float
    {
        return $this->baseAmountRefundedOnline;
    }
    /**
     * Base amount refunded online.
     *
     * @param float|null $baseAmountRefundedOnline
     *
     * @return self
     */
    public function setBaseAmountRefundedOnline(?float $baseAmountRefundedOnline): self
    {
        $this->baseAmountRefundedOnline = $baseAmountRefundedOnline;
        return $this;
    }
    /**
     * Base shipping amount.
     *
     * @return float|null
     */
    public function getBaseShippingAmount(): ?float
    {
        return $this->baseShippingAmount;
    }
    /**
     * Base shipping amount.
     *
     * @param float|null $baseShippingAmount
     *
     * @return self
     */
    public function setBaseShippingAmount(?float $baseShippingAmount): self
    {
        $this->baseShippingAmount = $baseShippingAmount;
        return $this;
    }
    /**
     * Base shipping captured amount.
     *
     * @return float|null
     */
    public function getBaseShippingCaptured(): ?float
    {
        return $this->baseShippingCaptured;
    }
    /**
     * Base shipping captured amount.
     *
     * @param float|null $baseShippingCaptured
     *
     * @return self
     */
    public function setBaseShippingCaptured(?float $baseShippingCaptured): self
    {
        $this->baseShippingCaptured = $baseShippingCaptured;
        return $this;
    }
    /**
     * Base shipping refunded amount.
     *
     * @return float|null
     */
    public function getBaseShippingRefunded(): ?float
    {
        return $this->baseShippingRefunded;
    }
    /**
     * Base shipping refunded amount.
     *
     * @param float|null $baseShippingRefunded
     *
     * @return self
     */
    public function setBaseShippingRefunded(?float $baseShippingRefunded): self
    {
        $this->baseShippingRefunded = $baseShippingRefunded;
        return $this;
    }
    /**
     * Credit card approval.
     *
     * @return string|null
     */
    public function getCcApproval(): ?string
    {
        return $this->ccApproval;
    }
    /**
     * Credit card approval.
     *
     * @param string|null $ccApproval
     *
     * @return self
     */
    public function setCcApproval(?string $ccApproval): self
    {
        $this->ccApproval = $ccApproval;
        return $this;
    }
    /**
     * Credit card avs status.
     *
     * @return string|null
     */
    public function getCcAvsStatus(): ?string
    {
        return $this->ccAvsStatus;
    }
    /**
     * Credit card avs status.
     *
     * @param string|null $ccAvsStatus
     *
     * @return self
     */
    public function setCcAvsStatus(?string $ccAvsStatus): self
    {
        $this->ccAvsStatus = $ccAvsStatus;
        return $this;
    }
    /**
     * Credit card CID status.
     *
     * @return string|null
     */
    public function getCcCidStatus(): ?string
    {
        return $this->ccCidStatus;
    }
    /**
     * Credit card CID status.
     *
     * @param string|null $ccCidStatus
     *
     * @return self
     */
    public function setCcCidStatus(?string $ccCidStatus): self
    {
        $this->ccCidStatus = $ccCidStatus;
        return $this;
    }
    /**
     * Credit card debug request body.
     *
     * @return string|null
     */
    public function getCcDebugRequestBody(): ?string
    {
        return $this->ccDebugRequestBody;
    }
    /**
     * Credit card debug request body.
     *
     * @param string|null $ccDebugRequestBody
     *
     * @return self
     */
    public function setCcDebugRequestBody(?string $ccDebugRequestBody): self
    {
        $this->ccDebugRequestBody = $ccDebugRequestBody;
        return $this;
    }
    /**
     * Credit card debug response body.
     *
     * @return string|null
     */
    public function getCcDebugResponseBody(): ?string
    {
        return $this->ccDebugResponseBody;
    }
    /**
     * Credit card debug response body.
     *
     * @param string|null $ccDebugResponseBody
     *
     * @return self
     */
    public function setCcDebugResponseBody(?string $ccDebugResponseBody): self
    {
        $this->ccDebugResponseBody = $ccDebugResponseBody;
        return $this;
    }
    /**
     * Credit card debug response serialized.
     *
     * @return string|null
     */
    public function getCcDebugResponseSerialized(): ?string
    {
        return $this->ccDebugResponseSerialized;
    }
    /**
     * Credit card debug response serialized.
     *
     * @param string|null $ccDebugResponseSerialized
     *
     * @return self
     */
    public function setCcDebugResponseSerialized(?string $ccDebugResponseSerialized): self
    {
        $this->ccDebugResponseSerialized = $ccDebugResponseSerialized;
        return $this;
    }
    /**
     * Credit card expiration month.
     *
     * @return string|null
     */
    public function getCcExpMonth(): ?string
    {
        return $this->ccExpMonth;
    }
    /**
     * Credit card expiration month.
     *
     * @param string|null $ccExpMonth
     *
     * @return self
     */
    public function setCcExpMonth(?string $ccExpMonth): self
    {
        $this->ccExpMonth = $ccExpMonth;
        return $this;
    }
    /**
     * Credit card expiration year.
     *
     * @return string|null
     */
    public function getCcExpYear(): ?string
    {
        return $this->ccExpYear;
    }
    /**
     * Credit card expiration year.
     *
     * @param string|null $ccExpYear
     *
     * @return self
     */
    public function setCcExpYear(?string $ccExpYear): self
    {
        $this->ccExpYear = $ccExpYear;
        return $this;
    }
    /**
     * Last four digits of the credit card.
     *
     * @return string|null
     */
    public function getCcLast4(): ?string
    {
        return $this->ccLast4;
    }
    /**
     * Last four digits of the credit card.
     *
     * @param string|null $ccLast4
     *
     * @return self
     */
    public function setCcLast4(?string $ccLast4): self
    {
        $this->ccLast4 = $ccLast4;
        return $this;
    }
    /**
     * Encrypted credit card number.
     *
     * @return string|null
     */
    public function getCcNumberEnc(): ?string
    {
        return $this->ccNumberEnc;
    }
    /**
     * Encrypted credit card number.
     *
     * @param string|null $ccNumberEnc
     *
     * @return self
     */
    public function setCcNumberEnc(?string $ccNumberEnc): self
    {
        $this->ccNumberEnc = $ccNumberEnc;
        return $this;
    }
    /**
     * Credit card number.
     *
     * @return string|null
     */
    public function getCcOwner(): ?string
    {
        return $this->ccOwner;
    }
    /**
     * Credit card number.
     *
     * @param string|null $ccOwner
     *
     * @return self
     */
    public function setCcOwner(?string $ccOwner): self
    {
        $this->ccOwner = $ccOwner;
        return $this;
    }
    /**
     * Credit card secure verify.
     *
     * @return string|null
     */
    public function getCcSecureVerify(): ?string
    {
        return $this->ccSecureVerify;
    }
    /**
     * Credit card secure verify.
     *
     * @param string|null $ccSecureVerify
     *
     * @return self
     */
    public function setCcSecureVerify(?string $ccSecureVerify): self
    {
        $this->ccSecureVerify = $ccSecureVerify;
        return $this;
    }
    /**
     * Credit card SS issue.
     *
     * @return string|null
     */
    public function getCcSsIssue(): ?string
    {
        return $this->ccSsIssue;
    }
    /**
     * Credit card SS issue.
     *
     * @param string|null $ccSsIssue
     *
     * @return self
     */
    public function setCcSsIssue(?string $ccSsIssue): self
    {
        $this->ccSsIssue = $ccSsIssue;
        return $this;
    }
    /**
     * Credit card SS start month.
     *
     * @return string|null
     */
    public function getCcSsStartMonth(): ?string
    {
        return $this->ccSsStartMonth;
    }
    /**
     * Credit card SS start month.
     *
     * @param string|null $ccSsStartMonth
     *
     * @return self
     */
    public function setCcSsStartMonth(?string $ccSsStartMonth): self
    {
        $this->ccSsStartMonth = $ccSsStartMonth;
        return $this;
    }
    /**
     * Credit card SS start year.
     *
     * @return string|null
     */
    public function getCcSsStartYear(): ?string
    {
        return $this->ccSsStartYear;
    }
    /**
     * Credit card SS start year.
     *
     * @param string|null $ccSsStartYear
     *
     * @return self
     */
    public function setCcSsStartYear(?string $ccSsStartYear): self
    {
        $this->ccSsStartYear = $ccSsStartYear;
        return $this;
    }
    /**
     * Credit card status.
     *
     * @return string|null
     */
    public function getCcStatus(): ?string
    {
        return $this->ccStatus;
    }
    /**
     * Credit card status.
     *
     * @param string|null $ccStatus
     *
     * @return self
     */
    public function setCcStatus(?string $ccStatus): self
    {
        $this->ccStatus = $ccStatus;
        return $this;
    }
    /**
     * Credit card status description.
     *
     * @return string|null
     */
    public function getCcStatusDescription(): ?string
    {
        return $this->ccStatusDescription;
    }
    /**
     * Credit card status description.
     *
     * @param string|null $ccStatusDescription
     *
     * @return self
     */
    public function setCcStatusDescription(?string $ccStatusDescription): self
    {
        $this->ccStatusDescription = $ccStatusDescription;
        return $this;
    }
    /**
     * Credit card transaction ID.
     *
     * @return string|null
     */
    public function getCcTransId(): ?string
    {
        return $this->ccTransId;
    }
    /**
     * Credit card transaction ID.
     *
     * @param string|null $ccTransId
     *
     * @return self
     */
    public function setCcTransId(?string $ccTransId): self
    {
        $this->ccTransId = $ccTransId;
        return $this;
    }
    /**
     * Credit card type.
     *
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Credit card type.
     *
     * @param string|null $ccType
     *
     * @return self
     */
    public function setCcType(?string $ccType): self
    {
        $this->ccType = $ccType;
        return $this;
    }
    /**
     * eCheck account name.
     *
     * @return string|null
     */
    public function getEcheckAccountName(): ?string
    {
        return $this->echeckAccountName;
    }
    /**
     * eCheck account name.
     *
     * @param string|null $echeckAccountName
     *
     * @return self
     */
    public function setEcheckAccountName(?string $echeckAccountName): self
    {
        $this->echeckAccountName = $echeckAccountName;
        return $this;
    }
    /**
     * eCheck account type.
     *
     * @return string|null
     */
    public function getEcheckAccountType(): ?string
    {
        return $this->echeckAccountType;
    }
    /**
     * eCheck account type.
     *
     * @param string|null $echeckAccountType
     *
     * @return self
     */
    public function setEcheckAccountType(?string $echeckAccountType): self
    {
        $this->echeckAccountType = $echeckAccountType;
        return $this;
    }
    /**
     * eCheck bank name.
     *
     * @return string|null
     */
    public function getEcheckBankName(): ?string
    {
        return $this->echeckBankName;
    }
    /**
     * eCheck bank name.
     *
     * @param string|null $echeckBankName
     *
     * @return self
     */
    public function setEcheckBankName(?string $echeckBankName): self
    {
        $this->echeckBankName = $echeckBankName;
        return $this;
    }
    /**
     * eCheck routing number.
     *
     * @return string|null
     */
    public function getEcheckRoutingNumber(): ?string
    {
        return $this->echeckRoutingNumber;
    }
    /**
     * eCheck routing number.
     *
     * @param string|null $echeckRoutingNumber
     *
     * @return self
     */
    public function setEcheckRoutingNumber(?string $echeckRoutingNumber): self
    {
        $this->echeckRoutingNumber = $echeckRoutingNumber;
        return $this;
    }
    /**
     * eCheck type.
     *
     * @return string|null
     */
    public function getEcheckType(): ?string
    {
        return $this->echeckType;
    }
    /**
     * eCheck type.
     *
     * @param string|null $echeckType
     *
     * @return self
     */
    public function setEcheckType(?string $echeckType): self
    {
        $this->echeckType = $echeckType;
        return $this;
    }
    /**
     * Entity ID.
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }
    /**
     * Entity ID.
     *
     * @param int|null $entityId
     *
     * @return self
     */
    public function setEntityId(?int $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderPaymentInterface
     *
     * @return SalesDataOrderPaymentExtensionInterface|null
     */
    public function getExtensionAttributes(): ?SalesDataOrderPaymentExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderPaymentInterface
     *
     * @param SalesDataOrderPaymentExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?SalesDataOrderPaymentExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Last transaction ID.
     *
     * @return string|null
     */
    public function getLastTransId(): ?string
    {
        return $this->lastTransId;
    }
    /**
     * Last transaction ID.
     *
     * @param string|null $lastTransId
     *
     * @return self
     */
    public function setLastTransId(?string $lastTransId): self
    {
        $this->lastTransId = $lastTransId;
        return $this;
    }
    /**
     * Method.
     *
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }
    /**
     * Method.
     *
     * @param string|null $method
     *
     * @return self
     */
    public function setMethod(?string $method): self
    {
        $this->method = $method;
        return $this;
    }
    /**
     * Parent ID.
     *
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
    /**
     * Parent ID.
     *
     * @param int|null $parentId
     *
     * @return self
     */
    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * PO number.
     *
     * @return string|null
     */
    public function getPoNumber(): ?string
    {
        return $this->poNumber;
    }
    /**
     * PO number.
     *
     * @param string|null $poNumber
     *
     * @return self
     */
    public function setPoNumber(?string $poNumber): self
    {
        $this->poNumber = $poNumber;
        return $this;
    }
    /**
     * Protection eligibility.
     *
     * @return string|null
     */
    public function getProtectionEligibility(): ?string
    {
        return $this->protectionEligibility;
    }
    /**
     * Protection eligibility.
     *
     * @param string|null $protectionEligibility
     *
     * @return self
     */
    public function setProtectionEligibility(?string $protectionEligibility): self
    {
        $this->protectionEligibility = $protectionEligibility;
        return $this;
    }
    /**
     * Quote payment ID.
     *
     * @return int|null
     */
    public function getQuotePaymentId(): ?int
    {
        return $this->quotePaymentId;
    }
    /**
     * Quote payment ID.
     *
     * @param int|null $quotePaymentId
     *
     * @return self
     */
    public function setQuotePaymentId(?int $quotePaymentId): self
    {
        $this->quotePaymentId = $quotePaymentId;
        return $this;
    }
    /**
     * Shipping amount.
     *
     * @return float|null
     */
    public function getShippingAmount(): ?float
    {
        return $this->shippingAmount;
    }
    /**
     * Shipping amount.
     *
     * @param float|null $shippingAmount
     *
     * @return self
     */
    public function setShippingAmount(?float $shippingAmount): self
    {
        $this->shippingAmount = $shippingAmount;
        return $this;
    }
    /**
     * Shipping captured.
     *
     * @return float|null
     */
    public function getShippingCaptured(): ?float
    {
        return $this->shippingCaptured;
    }
    /**
     * Shipping captured.
     *
     * @param float|null $shippingCaptured
     *
     * @return self
     */
    public function setShippingCaptured(?float $shippingCaptured): self
    {
        $this->shippingCaptured = $shippingCaptured;
        return $this;
    }
    /**
     * Shipping refunded.
     *
     * @return float|null
     */
    public function getShippingRefunded(): ?float
    {
        return $this->shippingRefunded;
    }
    /**
     * Shipping refunded.
     *
     * @param float|null $shippingRefunded
     *
     * @return self
     */
    public function setShippingRefunded(?float $shippingRefunded): self
    {
        $this->shippingRefunded = $shippingRefunded;
        return $this;
    }
}
