<?php

namespace Kiboko\Magento\V2_4\Model;

class SalesDataOrderPaymentInterface
{
    /**
     * Account status.
     *
     * @var string
     */
    protected $accountStatus;
    /**
     * Additional data.
     *
     * @var string
     */
    protected $additionalData;
    /**
     * Array of additional information.
     *
     * @var string[]
     */
    protected $additionalInformation;
    /**
     * Address status.
     *
     * @var string
     */
    protected $addressStatus;
    /**
     * Amount authorized.
     *
     * @var float
     */
    protected $amountAuthorized;
    /**
     * Amount canceled.
     *
     * @var float
     */
    protected $amountCanceled;
    /**
     * Amount ordered.
     *
     * @var float
     */
    protected $amountOrdered;
    /**
     * Amount paid.
     *
     * @var float
     */
    protected $amountPaid;
    /**
     * Amount refunded.
     *
     * @var float
     */
    protected $amountRefunded;
    /**
     * Anet transaction method.
     *
     * @var string
     */
    protected $anetTransMethod;
    /**
     * Base amount authorized.
     *
     * @var float
     */
    protected $baseAmountAuthorized;
    /**
     * Base amount canceled.
     *
     * @var float
     */
    protected $baseAmountCanceled;
    /**
     * Base amount ordered.
     *
     * @var float
     */
    protected $baseAmountOrdered;
    /**
     * Base amount paid.
     *
     * @var float
     */
    protected $baseAmountPaid;
    /**
     * Base amount paid online.
     *
     * @var float
     */
    protected $baseAmountPaidOnline;
    /**
     * Base amount refunded.
     *
     * @var float
     */
    protected $baseAmountRefunded;
    /**
     * Base amount refunded online.
     *
     * @var float
     */
    protected $baseAmountRefundedOnline;
    /**
     * Base shipping amount.
     *
     * @var float
     */
    protected $baseShippingAmount;
    /**
     * Base shipping captured amount.
     *
     * @var float
     */
    protected $baseShippingCaptured;
    /**
     * Base shipping refunded amount.
     *
     * @var float
     */
    protected $baseShippingRefunded;
    /**
     * Credit card approval.
     *
     * @var string
     */
    protected $ccApproval;
    /**
     * Credit card avs status.
     *
     * @var string
     */
    protected $ccAvsStatus;
    /**
     * Credit card CID status.
     *
     * @var string
     */
    protected $ccCidStatus;
    /**
     * Credit card debug request body.
     *
     * @var string
     */
    protected $ccDebugRequestBody;
    /**
     * Credit card debug response body.
     *
     * @var string
     */
    protected $ccDebugResponseBody;
    /**
     * Credit card debug response serialized.
     *
     * @var string
     */
    protected $ccDebugResponseSerialized;
    /**
     * Credit card expiration month.
     *
     * @var string
     */
    protected $ccExpMonth;
    /**
     * Credit card expiration year.
     *
     * @var string
     */
    protected $ccExpYear;
    /**
     * Last four digits of the credit card.
     *
     * @var string
     */
    protected $ccLast4;
    /**
     * Encrypted credit card number.
     *
     * @var string
     */
    protected $ccNumberEnc;
    /**
     * Credit card number.
     *
     * @var string
     */
    protected $ccOwner;
    /**
     * Credit card secure verify.
     *
     * @var string
     */
    protected $ccSecureVerify;
    /**
     * Credit card SS issue.
     *
     * @var string
     */
    protected $ccSsIssue;
    /**
     * Credit card SS start month.
     *
     * @var string
     */
    protected $ccSsStartMonth;
    /**
     * Credit card SS start year.
     *
     * @var string
     */
    protected $ccSsStartYear;
    /**
     * Credit card status.
     *
     * @var string
     */
    protected $ccStatus;
    /**
     * Credit card status description.
     *
     * @var string
     */
    protected $ccStatusDescription;
    /**
     * Credit card transaction ID.
     *
     * @var string
     */
    protected $ccTransId;
    /**
     * Credit card type.
     *
     * @var string
     */
    protected $ccType;
    /**
     * eCheck account name.
     *
     * @var string
     */
    protected $echeckAccountName;
    /**
     * eCheck account type.
     *
     * @var string
     */
    protected $echeckAccountType;
    /**
     * eCheck bank name.
     *
     * @var string
     */
    protected $echeckBankName;
    /**
     * eCheck routing number.
     *
     * @var string
     */
    protected $echeckRoutingNumber;
    /**
     * eCheck type.
     *
     * @var string
     */
    protected $echeckType;
    /**
     * Entity ID.
     *
     * @var int
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderPaymentInterface
     *
     * @var SalesDataOrderPaymentExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Last transaction ID.
     *
     * @var string
     */
    protected $lastTransId;
    /**
     * Method.
     *
     * @var string
     */
    protected $method;
    /**
     * Parent ID.
     *
     * @var int
     */
    protected $parentId;
    /**
     * PO number.
     *
     * @var string
     */
    protected $poNumber;
    /**
     * Protection eligibility.
     *
     * @var string
     */
    protected $protectionEligibility;
    /**
     * Quote payment ID.
     *
     * @var int
     */
    protected $quotePaymentId;
    /**
     * Shipping amount.
     *
     * @var float
     */
    protected $shippingAmount;
    /**
     * Shipping captured.
     *
     * @var float
     */
    protected $shippingCaptured;
    /**
     * Shipping refunded.
     *
     * @var float
     */
    protected $shippingRefunded;
    /**
     * Account status.
     *
     * @return string
     */
    public function getAccountStatus(): string
    {
        return $this->accountStatus;
    }
    /**
     * Account status.
     *
     * @param string $accountStatus
     *
     * @return self
     */
    public function setAccountStatus(string $accountStatus): self
    {
        $this->accountStatus = $accountStatus;
        return $this;
    }
    /**
     * Additional data.
     *
     * @return string
     */
    public function getAdditionalData(): string
    {
        return $this->additionalData;
    }
    /**
     * Additional data.
     *
     * @param string $additionalData
     *
     * @return self
     */
    public function setAdditionalData(string $additionalData): self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * Array of additional information.
     *
     * @return string[]
     */
    public function getAdditionalInformation(): array
    {
        return $this->additionalInformation;
    }
    /**
     * Array of additional information.
     *
     * @param string[] $additionalInformation
     *
     * @return self
     */
    public function setAdditionalInformation(array $additionalInformation): self
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }
    /**
     * Address status.
     *
     * @return string
     */
    public function getAddressStatus(): string
    {
        return $this->addressStatus;
    }
    /**
     * Address status.
     *
     * @param string $addressStatus
     *
     * @return self
     */
    public function setAddressStatus(string $addressStatus): self
    {
        $this->addressStatus = $addressStatus;
        return $this;
    }
    /**
     * Amount authorized.
     *
     * @return float
     */
    public function getAmountAuthorized(): float
    {
        return $this->amountAuthorized;
    }
    /**
     * Amount authorized.
     *
     * @param float $amountAuthorized
     *
     * @return self
     */
    public function setAmountAuthorized(float $amountAuthorized): self
    {
        $this->amountAuthorized = $amountAuthorized;
        return $this;
    }
    /**
     * Amount canceled.
     *
     * @return float
     */
    public function getAmountCanceled(): float
    {
        return $this->amountCanceled;
    }
    /**
     * Amount canceled.
     *
     * @param float $amountCanceled
     *
     * @return self
     */
    public function setAmountCanceled(float $amountCanceled): self
    {
        $this->amountCanceled = $amountCanceled;
        return $this;
    }
    /**
     * Amount ordered.
     *
     * @return float
     */
    public function getAmountOrdered(): float
    {
        return $this->amountOrdered;
    }
    /**
     * Amount ordered.
     *
     * @param float $amountOrdered
     *
     * @return self
     */
    public function setAmountOrdered(float $amountOrdered): self
    {
        $this->amountOrdered = $amountOrdered;
        return $this;
    }
    /**
     * Amount paid.
     *
     * @return float
     */
    public function getAmountPaid(): float
    {
        return $this->amountPaid;
    }
    /**
     * Amount paid.
     *
     * @param float $amountPaid
     *
     * @return self
     */
    public function setAmountPaid(float $amountPaid): self
    {
        $this->amountPaid = $amountPaid;
        return $this;
    }
    /**
     * Amount refunded.
     *
     * @return float
     */
    public function getAmountRefunded(): float
    {
        return $this->amountRefunded;
    }
    /**
     * Amount refunded.
     *
     * @param float $amountRefunded
     *
     * @return self
     */
    public function setAmountRefunded(float $amountRefunded): self
    {
        $this->amountRefunded = $amountRefunded;
        return $this;
    }
    /**
     * Anet transaction method.
     *
     * @return string
     */
    public function getAnetTransMethod(): string
    {
        return $this->anetTransMethod;
    }
    /**
     * Anet transaction method.
     *
     * @param string $anetTransMethod
     *
     * @return self
     */
    public function setAnetTransMethod(string $anetTransMethod): self
    {
        $this->anetTransMethod = $anetTransMethod;
        return $this;
    }
    /**
     * Base amount authorized.
     *
     * @return float
     */
    public function getBaseAmountAuthorized(): float
    {
        return $this->baseAmountAuthorized;
    }
    /**
     * Base amount authorized.
     *
     * @param float $baseAmountAuthorized
     *
     * @return self
     */
    public function setBaseAmountAuthorized(float $baseAmountAuthorized): self
    {
        $this->baseAmountAuthorized = $baseAmountAuthorized;
        return $this;
    }
    /**
     * Base amount canceled.
     *
     * @return float
     */
    public function getBaseAmountCanceled(): float
    {
        return $this->baseAmountCanceled;
    }
    /**
     * Base amount canceled.
     *
     * @param float $baseAmountCanceled
     *
     * @return self
     */
    public function setBaseAmountCanceled(float $baseAmountCanceled): self
    {
        $this->baseAmountCanceled = $baseAmountCanceled;
        return $this;
    }
    /**
     * Base amount ordered.
     *
     * @return float
     */
    public function getBaseAmountOrdered(): float
    {
        return $this->baseAmountOrdered;
    }
    /**
     * Base amount ordered.
     *
     * @param float $baseAmountOrdered
     *
     * @return self
     */
    public function setBaseAmountOrdered(float $baseAmountOrdered): self
    {
        $this->baseAmountOrdered = $baseAmountOrdered;
        return $this;
    }
    /**
     * Base amount paid.
     *
     * @return float
     */
    public function getBaseAmountPaid(): float
    {
        return $this->baseAmountPaid;
    }
    /**
     * Base amount paid.
     *
     * @param float $baseAmountPaid
     *
     * @return self
     */
    public function setBaseAmountPaid(float $baseAmountPaid): self
    {
        $this->baseAmountPaid = $baseAmountPaid;
        return $this;
    }
    /**
     * Base amount paid online.
     *
     * @return float
     */
    public function getBaseAmountPaidOnline(): float
    {
        return $this->baseAmountPaidOnline;
    }
    /**
     * Base amount paid online.
     *
     * @param float $baseAmountPaidOnline
     *
     * @return self
     */
    public function setBaseAmountPaidOnline(float $baseAmountPaidOnline): self
    {
        $this->baseAmountPaidOnline = $baseAmountPaidOnline;
        return $this;
    }
    /**
     * Base amount refunded.
     *
     * @return float
     */
    public function getBaseAmountRefunded(): float
    {
        return $this->baseAmountRefunded;
    }
    /**
     * Base amount refunded.
     *
     * @param float $baseAmountRefunded
     *
     * @return self
     */
    public function setBaseAmountRefunded(float $baseAmountRefunded): self
    {
        $this->baseAmountRefunded = $baseAmountRefunded;
        return $this;
    }
    /**
     * Base amount refunded online.
     *
     * @return float
     */
    public function getBaseAmountRefundedOnline(): float
    {
        return $this->baseAmountRefundedOnline;
    }
    /**
     * Base amount refunded online.
     *
     * @param float $baseAmountRefundedOnline
     *
     * @return self
     */
    public function setBaseAmountRefundedOnline(float $baseAmountRefundedOnline): self
    {
        $this->baseAmountRefundedOnline = $baseAmountRefundedOnline;
        return $this;
    }
    /**
     * Base shipping amount.
     *
     * @return float
     */
    public function getBaseShippingAmount(): float
    {
        return $this->baseShippingAmount;
    }
    /**
     * Base shipping amount.
     *
     * @param float $baseShippingAmount
     *
     * @return self
     */
    public function setBaseShippingAmount(float $baseShippingAmount): self
    {
        $this->baseShippingAmount = $baseShippingAmount;
        return $this;
    }
    /**
     * Base shipping captured amount.
     *
     * @return float
     */
    public function getBaseShippingCaptured(): float
    {
        return $this->baseShippingCaptured;
    }
    /**
     * Base shipping captured amount.
     *
     * @param float $baseShippingCaptured
     *
     * @return self
     */
    public function setBaseShippingCaptured(float $baseShippingCaptured): self
    {
        $this->baseShippingCaptured = $baseShippingCaptured;
        return $this;
    }
    /**
     * Base shipping refunded amount.
     *
     * @return float
     */
    public function getBaseShippingRefunded(): float
    {
        return $this->baseShippingRefunded;
    }
    /**
     * Base shipping refunded amount.
     *
     * @param float $baseShippingRefunded
     *
     * @return self
     */
    public function setBaseShippingRefunded(float $baseShippingRefunded): self
    {
        $this->baseShippingRefunded = $baseShippingRefunded;
        return $this;
    }
    /**
     * Credit card approval.
     *
     * @return string
     */
    public function getCcApproval(): string
    {
        return $this->ccApproval;
    }
    /**
     * Credit card approval.
     *
     * @param string $ccApproval
     *
     * @return self
     */
    public function setCcApproval(string $ccApproval): self
    {
        $this->ccApproval = $ccApproval;
        return $this;
    }
    /**
     * Credit card avs status.
     *
     * @return string
     */
    public function getCcAvsStatus(): string
    {
        return $this->ccAvsStatus;
    }
    /**
     * Credit card avs status.
     *
     * @param string $ccAvsStatus
     *
     * @return self
     */
    public function setCcAvsStatus(string $ccAvsStatus): self
    {
        $this->ccAvsStatus = $ccAvsStatus;
        return $this;
    }
    /**
     * Credit card CID status.
     *
     * @return string
     */
    public function getCcCidStatus(): string
    {
        return $this->ccCidStatus;
    }
    /**
     * Credit card CID status.
     *
     * @param string $ccCidStatus
     *
     * @return self
     */
    public function setCcCidStatus(string $ccCidStatus): self
    {
        $this->ccCidStatus = $ccCidStatus;
        return $this;
    }
    /**
     * Credit card debug request body.
     *
     * @return string
     */
    public function getCcDebugRequestBody(): string
    {
        return $this->ccDebugRequestBody;
    }
    /**
     * Credit card debug request body.
     *
     * @param string $ccDebugRequestBody
     *
     * @return self
     */
    public function setCcDebugRequestBody(string $ccDebugRequestBody): self
    {
        $this->ccDebugRequestBody = $ccDebugRequestBody;
        return $this;
    }
    /**
     * Credit card debug response body.
     *
     * @return string
     */
    public function getCcDebugResponseBody(): string
    {
        return $this->ccDebugResponseBody;
    }
    /**
     * Credit card debug response body.
     *
     * @param string $ccDebugResponseBody
     *
     * @return self
     */
    public function setCcDebugResponseBody(string $ccDebugResponseBody): self
    {
        $this->ccDebugResponseBody = $ccDebugResponseBody;
        return $this;
    }
    /**
     * Credit card debug response serialized.
     *
     * @return string
     */
    public function getCcDebugResponseSerialized(): string
    {
        return $this->ccDebugResponseSerialized;
    }
    /**
     * Credit card debug response serialized.
     *
     * @param string $ccDebugResponseSerialized
     *
     * @return self
     */
    public function setCcDebugResponseSerialized(string $ccDebugResponseSerialized): self
    {
        $this->ccDebugResponseSerialized = $ccDebugResponseSerialized;
        return $this;
    }
    /**
     * Credit card expiration month.
     *
     * @return string
     */
    public function getCcExpMonth(): string
    {
        return $this->ccExpMonth;
    }
    /**
     * Credit card expiration month.
     *
     * @param string $ccExpMonth
     *
     * @return self
     */
    public function setCcExpMonth(string $ccExpMonth): self
    {
        $this->ccExpMonth = $ccExpMonth;
        return $this;
    }
    /**
     * Credit card expiration year.
     *
     * @return string
     */
    public function getCcExpYear(): string
    {
        return $this->ccExpYear;
    }
    /**
     * Credit card expiration year.
     *
     * @param string $ccExpYear
     *
     * @return self
     */
    public function setCcExpYear(string $ccExpYear): self
    {
        $this->ccExpYear = $ccExpYear;
        return $this;
    }
    /**
     * Last four digits of the credit card.
     *
     * @return string
     */
    public function getCcLast4(): string
    {
        return $this->ccLast4;
    }
    /**
     * Last four digits of the credit card.
     *
     * @param string $ccLast4
     *
     * @return self
     */
    public function setCcLast4(string $ccLast4): self
    {
        $this->ccLast4 = $ccLast4;
        return $this;
    }
    /**
     * Encrypted credit card number.
     *
     * @return string
     */
    public function getCcNumberEnc(): string
    {
        return $this->ccNumberEnc;
    }
    /**
     * Encrypted credit card number.
     *
     * @param string $ccNumberEnc
     *
     * @return self
     */
    public function setCcNumberEnc(string $ccNumberEnc): self
    {
        $this->ccNumberEnc = $ccNumberEnc;
        return $this;
    }
    /**
     * Credit card number.
     *
     * @return string
     */
    public function getCcOwner(): string
    {
        return $this->ccOwner;
    }
    /**
     * Credit card number.
     *
     * @param string $ccOwner
     *
     * @return self
     */
    public function setCcOwner(string $ccOwner): self
    {
        $this->ccOwner = $ccOwner;
        return $this;
    }
    /**
     * Credit card secure verify.
     *
     * @return string
     */
    public function getCcSecureVerify(): string
    {
        return $this->ccSecureVerify;
    }
    /**
     * Credit card secure verify.
     *
     * @param string $ccSecureVerify
     *
     * @return self
     */
    public function setCcSecureVerify(string $ccSecureVerify): self
    {
        $this->ccSecureVerify = $ccSecureVerify;
        return $this;
    }
    /**
     * Credit card SS issue.
     *
     * @return string
     */
    public function getCcSsIssue(): string
    {
        return $this->ccSsIssue;
    }
    /**
     * Credit card SS issue.
     *
     * @param string $ccSsIssue
     *
     * @return self
     */
    public function setCcSsIssue(string $ccSsIssue): self
    {
        $this->ccSsIssue = $ccSsIssue;
        return $this;
    }
    /**
     * Credit card SS start month.
     *
     * @return string
     */
    public function getCcSsStartMonth(): string
    {
        return $this->ccSsStartMonth;
    }
    /**
     * Credit card SS start month.
     *
     * @param string $ccSsStartMonth
     *
     * @return self
     */
    public function setCcSsStartMonth(string $ccSsStartMonth): self
    {
        $this->ccSsStartMonth = $ccSsStartMonth;
        return $this;
    }
    /**
     * Credit card SS start year.
     *
     * @return string
     */
    public function getCcSsStartYear(): string
    {
        return $this->ccSsStartYear;
    }
    /**
     * Credit card SS start year.
     *
     * @param string $ccSsStartYear
     *
     * @return self
     */
    public function setCcSsStartYear(string $ccSsStartYear): self
    {
        $this->ccSsStartYear = $ccSsStartYear;
        return $this;
    }
    /**
     * Credit card status.
     *
     * @return string
     */
    public function getCcStatus(): string
    {
        return $this->ccStatus;
    }
    /**
     * Credit card status.
     *
     * @param string $ccStatus
     *
     * @return self
     */
    public function setCcStatus(string $ccStatus): self
    {
        $this->ccStatus = $ccStatus;
        return $this;
    }
    /**
     * Credit card status description.
     *
     * @return string
     */
    public function getCcStatusDescription(): string
    {
        return $this->ccStatusDescription;
    }
    /**
     * Credit card status description.
     *
     * @param string $ccStatusDescription
     *
     * @return self
     */
    public function setCcStatusDescription(string $ccStatusDescription): self
    {
        $this->ccStatusDescription = $ccStatusDescription;
        return $this;
    }
    /**
     * Credit card transaction ID.
     *
     * @return string
     */
    public function getCcTransId(): string
    {
        return $this->ccTransId;
    }
    /**
     * Credit card transaction ID.
     *
     * @param string $ccTransId
     *
     * @return self
     */
    public function setCcTransId(string $ccTransId): self
    {
        $this->ccTransId = $ccTransId;
        return $this;
    }
    /**
     * Credit card type.
     *
     * @return string
     */
    public function getCcType(): string
    {
        return $this->ccType;
    }
    /**
     * Credit card type.
     *
     * @param string $ccType
     *
     * @return self
     */
    public function setCcType(string $ccType): self
    {
        $this->ccType = $ccType;
        return $this;
    }
    /**
     * eCheck account name.
     *
     * @return string
     */
    public function getEcheckAccountName(): string
    {
        return $this->echeckAccountName;
    }
    /**
     * eCheck account name.
     *
     * @param string $echeckAccountName
     *
     * @return self
     */
    public function setEcheckAccountName(string $echeckAccountName): self
    {
        $this->echeckAccountName = $echeckAccountName;
        return $this;
    }
    /**
     * eCheck account type.
     *
     * @return string
     */
    public function getEcheckAccountType(): string
    {
        return $this->echeckAccountType;
    }
    /**
     * eCheck account type.
     *
     * @param string $echeckAccountType
     *
     * @return self
     */
    public function setEcheckAccountType(string $echeckAccountType): self
    {
        $this->echeckAccountType = $echeckAccountType;
        return $this;
    }
    /**
     * eCheck bank name.
     *
     * @return string
     */
    public function getEcheckBankName(): string
    {
        return $this->echeckBankName;
    }
    /**
     * eCheck bank name.
     *
     * @param string $echeckBankName
     *
     * @return self
     */
    public function setEcheckBankName(string $echeckBankName): self
    {
        $this->echeckBankName = $echeckBankName;
        return $this;
    }
    /**
     * eCheck routing number.
     *
     * @return string
     */
    public function getEcheckRoutingNumber(): string
    {
        return $this->echeckRoutingNumber;
    }
    /**
     * eCheck routing number.
     *
     * @param string $echeckRoutingNumber
     *
     * @return self
     */
    public function setEcheckRoutingNumber(string $echeckRoutingNumber): self
    {
        $this->echeckRoutingNumber = $echeckRoutingNumber;
        return $this;
    }
    /**
     * eCheck type.
     *
     * @return string
     */
    public function getEcheckType(): string
    {
        return $this->echeckType;
    }
    /**
     * eCheck type.
     *
     * @param string $echeckType
     *
     * @return self
     */
    public function setEcheckType(string $echeckType): self
    {
        $this->echeckType = $echeckType;
        return $this;
    }
    /**
     * Entity ID.
     *
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }
    /**
     * Entity ID.
     *
     * @param int $entityId
     *
     * @return self
     */
    public function setEntityId(int $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderPaymentInterface
     *
     * @return SalesDataOrderPaymentExtensionInterface
     */
    public function getExtensionAttributes(): SalesDataOrderPaymentExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderPaymentInterface
     *
     * @param SalesDataOrderPaymentExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(SalesDataOrderPaymentExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Last transaction ID.
     *
     * @return string
     */
    public function getLastTransId(): string
    {
        return $this->lastTransId;
    }
    /**
     * Last transaction ID.
     *
     * @param string $lastTransId
     *
     * @return self
     */
    public function setLastTransId(string $lastTransId): self
    {
        $this->lastTransId = $lastTransId;
        return $this;
    }
    /**
     * Method.
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * Method.
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->method = $method;
        return $this;
    }
    /**
     * Parent ID.
     *
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }
    /**
     * Parent ID.
     *
     * @param int $parentId
     *
     * @return self
     */
    public function setParentId(int $parentId): self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * PO number.
     *
     * @return string
     */
    public function getPoNumber(): string
    {
        return $this->poNumber;
    }
    /**
     * PO number.
     *
     * @param string $poNumber
     *
     * @return self
     */
    public function setPoNumber(string $poNumber): self
    {
        $this->poNumber = $poNumber;
        return $this;
    }
    /**
     * Protection eligibility.
     *
     * @return string
     */
    public function getProtectionEligibility(): string
    {
        return $this->protectionEligibility;
    }
    /**
     * Protection eligibility.
     *
     * @param string $protectionEligibility
     *
     * @return self
     */
    public function setProtectionEligibility(string $protectionEligibility): self
    {
        $this->protectionEligibility = $protectionEligibility;
        return $this;
    }
    /**
     * Quote payment ID.
     *
     * @return int
     */
    public function getQuotePaymentId(): int
    {
        return $this->quotePaymentId;
    }
    /**
     * Quote payment ID.
     *
     * @param int $quotePaymentId
     *
     * @return self
     */
    public function setQuotePaymentId(int $quotePaymentId): self
    {
        $this->quotePaymentId = $quotePaymentId;
        return $this;
    }
    /**
     * Shipping amount.
     *
     * @return float
     */
    public function getShippingAmount(): float
    {
        return $this->shippingAmount;
    }
    /**
     * Shipping amount.
     *
     * @param float $shippingAmount
     *
     * @return self
     */
    public function setShippingAmount(float $shippingAmount): self
    {
        $this->shippingAmount = $shippingAmount;
        return $this;
    }
    /**
     * Shipping captured.
     *
     * @return float
     */
    public function getShippingCaptured(): float
    {
        return $this->shippingCaptured;
    }
    /**
     * Shipping captured.
     *
     * @param float $shippingCaptured
     *
     * @return self
     */
    public function setShippingCaptured(float $shippingCaptured): self
    {
        $this->shippingCaptured = $shippingCaptured;
        return $this;
    }
    /**
     * Shipping refunded.
     *
     * @return float
     */
    public function getShippingRefunded(): float
    {
        return $this->shippingRefunded;
    }
    /**
     * Shipping refunded.
     *
     * @param float $shippingRefunded
     *
     * @return self
     */
    public function setShippingRefunded(float $shippingRefunded): self
    {
        $this->shippingRefunded = $shippingRefunded;
        return $this;
    }
}
