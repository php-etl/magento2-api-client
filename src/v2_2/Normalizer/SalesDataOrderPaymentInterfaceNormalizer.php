<?php

namespace Kiboko\Magento\v2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalesDataOrderPaymentInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_2\\Model\\SalesDataOrderPaymentInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_2\\Model\\SalesDataOrderPaymentInterface';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Kiboko\Magento\v2_2\Model\SalesDataOrderPaymentInterface();
        if (\array_key_exists('amount_authorized', $data) && \is_int($data['amount_authorized'])) {
            $data['amount_authorized'] = (float) $data['amount_authorized'];
        }
        if (\array_key_exists('amount_canceled', $data) && \is_int($data['amount_canceled'])) {
            $data['amount_canceled'] = (float) $data['amount_canceled'];
        }
        if (\array_key_exists('amount_ordered', $data) && \is_int($data['amount_ordered'])) {
            $data['amount_ordered'] = (float) $data['amount_ordered'];
        }
        if (\array_key_exists('amount_paid', $data) && \is_int($data['amount_paid'])) {
            $data['amount_paid'] = (float) $data['amount_paid'];
        }
        if (\array_key_exists('amount_refunded', $data) && \is_int($data['amount_refunded'])) {
            $data['amount_refunded'] = (float) $data['amount_refunded'];
        }
        if (\array_key_exists('base_amount_authorized', $data) && \is_int($data['base_amount_authorized'])) {
            $data['base_amount_authorized'] = (float) $data['base_amount_authorized'];
        }
        if (\array_key_exists('base_amount_canceled', $data) && \is_int($data['base_amount_canceled'])) {
            $data['base_amount_canceled'] = (float) $data['base_amount_canceled'];
        }
        if (\array_key_exists('base_amount_ordered', $data) && \is_int($data['base_amount_ordered'])) {
            $data['base_amount_ordered'] = (float) $data['base_amount_ordered'];
        }
        if (\array_key_exists('base_amount_paid', $data) && \is_int($data['base_amount_paid'])) {
            $data['base_amount_paid'] = (float) $data['base_amount_paid'];
        }
        if (\array_key_exists('base_amount_paid_online', $data) && \is_int($data['base_amount_paid_online'])) {
            $data['base_amount_paid_online'] = (float) $data['base_amount_paid_online'];
        }
        if (\array_key_exists('base_amount_refunded', $data) && \is_int($data['base_amount_refunded'])) {
            $data['base_amount_refunded'] = (float) $data['base_amount_refunded'];
        }
        if (\array_key_exists('base_amount_refunded_online', $data) && \is_int($data['base_amount_refunded_online'])) {
            $data['base_amount_refunded_online'] = (float) $data['base_amount_refunded_online'];
        }
        if (\array_key_exists('base_shipping_amount', $data) && \is_int($data['base_shipping_amount'])) {
            $data['base_shipping_amount'] = (float) $data['base_shipping_amount'];
        }
        if (\array_key_exists('base_shipping_captured', $data) && \is_int($data['base_shipping_captured'])) {
            $data['base_shipping_captured'] = (float) $data['base_shipping_captured'];
        }
        if (\array_key_exists('base_shipping_refunded', $data) && \is_int($data['base_shipping_refunded'])) {
            $data['base_shipping_refunded'] = (float) $data['base_shipping_refunded'];
        }
        if (\array_key_exists('shipping_amount', $data) && \is_int($data['shipping_amount'])) {
            $data['shipping_amount'] = (float) $data['shipping_amount'];
        }
        if (\array_key_exists('shipping_captured', $data) && \is_int($data['shipping_captured'])) {
            $data['shipping_captured'] = (float) $data['shipping_captured'];
        }
        if (\array_key_exists('shipping_refunded', $data) && \is_int($data['shipping_refunded'])) {
            $data['shipping_refunded'] = (float) $data['shipping_refunded'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('account_status', $data)) {
            $object->setAccountStatus($data['account_status']);
        }
        if (\array_key_exists('additional_data', $data)) {
            $object->setAdditionalData($data['additional_data']);
        }
        if (\array_key_exists('additional_information', $data)) {
            $values = array();
            foreach ($data['additional_information'] as $value) {
                $values[] = $value;
            }
            $object->setAdditionalInformation($values);
        }
        if (\array_key_exists('address_status', $data)) {
            $object->setAddressStatus($data['address_status']);
        }
        if (\array_key_exists('amount_authorized', $data)) {
            $object->setAmountAuthorized($data['amount_authorized']);
        }
        if (\array_key_exists('amount_canceled', $data)) {
            $object->setAmountCanceled($data['amount_canceled']);
        }
        if (\array_key_exists('amount_ordered', $data)) {
            $object->setAmountOrdered($data['amount_ordered']);
        }
        if (\array_key_exists('amount_paid', $data)) {
            $object->setAmountPaid($data['amount_paid']);
        }
        if (\array_key_exists('amount_refunded', $data)) {
            $object->setAmountRefunded($data['amount_refunded']);
        }
        if (\array_key_exists('anet_trans_method', $data)) {
            $object->setAnetTransMethod($data['anet_trans_method']);
        }
        if (\array_key_exists('base_amount_authorized', $data)) {
            $object->setBaseAmountAuthorized($data['base_amount_authorized']);
        }
        if (\array_key_exists('base_amount_canceled', $data)) {
            $object->setBaseAmountCanceled($data['base_amount_canceled']);
        }
        if (\array_key_exists('base_amount_ordered', $data)) {
            $object->setBaseAmountOrdered($data['base_amount_ordered']);
        }
        if (\array_key_exists('base_amount_paid', $data)) {
            $object->setBaseAmountPaid($data['base_amount_paid']);
        }
        if (\array_key_exists('base_amount_paid_online', $data)) {
            $object->setBaseAmountPaidOnline($data['base_amount_paid_online']);
        }
        if (\array_key_exists('base_amount_refunded', $data)) {
            $object->setBaseAmountRefunded($data['base_amount_refunded']);
        }
        if (\array_key_exists('base_amount_refunded_online', $data)) {
            $object->setBaseAmountRefundedOnline($data['base_amount_refunded_online']);
        }
        if (\array_key_exists('base_shipping_amount', $data)) {
            $object->setBaseShippingAmount($data['base_shipping_amount']);
        }
        if (\array_key_exists('base_shipping_captured', $data)) {
            $object->setBaseShippingCaptured($data['base_shipping_captured']);
        }
        if (\array_key_exists('base_shipping_refunded', $data)) {
            $object->setBaseShippingRefunded($data['base_shipping_refunded']);
        }
        if (\array_key_exists('cc_approval', $data)) {
            $object->setCcApproval($data['cc_approval']);
        }
        if (\array_key_exists('cc_avs_status', $data)) {
            $object->setCcAvsStatus($data['cc_avs_status']);
        }
        if (\array_key_exists('cc_cid_status', $data)) {
            $object->setCcCidStatus($data['cc_cid_status']);
        }
        if (\array_key_exists('cc_debug_request_body', $data)) {
            $object->setCcDebugRequestBody($data['cc_debug_request_body']);
        }
        if (\array_key_exists('cc_debug_response_body', $data)) {
            $object->setCcDebugResponseBody($data['cc_debug_response_body']);
        }
        if (\array_key_exists('cc_debug_response_serialized', $data)) {
            $object->setCcDebugResponseSerialized($data['cc_debug_response_serialized']);
        }
        if (\array_key_exists('cc_exp_month', $data)) {
            $object->setCcExpMonth($data['cc_exp_month']);
        }
        if (\array_key_exists('cc_exp_year', $data)) {
            $object->setCcExpYear($data['cc_exp_year']);
        }
        if (\array_key_exists('cc_last4', $data)) {
            $object->setCcLast4($data['cc_last4']);
        }
        if (\array_key_exists('cc_number_enc', $data)) {
            $object->setCcNumberEnc($data['cc_number_enc']);
        }
        if (\array_key_exists('cc_owner', $data)) {
            $object->setCcOwner($data['cc_owner']);
        }
        if (\array_key_exists('cc_secure_verify', $data)) {
            $object->setCcSecureVerify($data['cc_secure_verify']);
        }
        if (\array_key_exists('cc_ss_issue', $data)) {
            $object->setCcSsIssue($data['cc_ss_issue']);
        }
        if (\array_key_exists('cc_ss_start_month', $data)) {
            $object->setCcSsStartMonth($data['cc_ss_start_month']);
        }
        if (\array_key_exists('cc_ss_start_year', $data)) {
            $object->setCcSsStartYear($data['cc_ss_start_year']);
        }
        if (\array_key_exists('cc_status', $data)) {
            $object->setCcStatus($data['cc_status']);
        }
        if (\array_key_exists('cc_status_description', $data)) {
            $object->setCcStatusDescription($data['cc_status_description']);
        }
        if (\array_key_exists('cc_trans_id', $data)) {
            $object->setCcTransId($data['cc_trans_id']);
        }
        if (\array_key_exists('cc_type', $data)) {
            $object->setCcType($data['cc_type']);
        }
        if (\array_key_exists('echeck_account_name', $data)) {
            $object->setEcheckAccountName($data['echeck_account_name']);
        }
        if (\array_key_exists('echeck_account_type', $data)) {
            $object->setEcheckAccountType($data['echeck_account_type']);
        }
        if (\array_key_exists('echeck_bank_name', $data)) {
            $object->setEcheckBankName($data['echeck_bank_name']);
        }
        if (\array_key_exists('echeck_routing_number', $data)) {
            $object->setEcheckRoutingNumber($data['echeck_routing_number']);
        }
        if (\array_key_exists('echeck_type', $data)) {
            $object->setEcheckType($data['echeck_type']);
        }
        if (\array_key_exists('entity_id', $data)) {
            $object->setEntityId($data['entity_id']);
        }
        if (\array_key_exists('last_trans_id', $data)) {
            $object->setLastTransId($data['last_trans_id']);
        }
        if (\array_key_exists('method', $data)) {
            $object->setMethod($data['method']);
        }
        if (\array_key_exists('parent_id', $data)) {
            $object->setParentId($data['parent_id']);
        }
        if (\array_key_exists('po_number', $data)) {
            $object->setPoNumber($data['po_number']);
        }
        if (\array_key_exists('protection_eligibility', $data)) {
            $object->setProtectionEligibility($data['protection_eligibility']);
        }
        if (\array_key_exists('quote_payment_id', $data)) {
            $object->setQuotePaymentId($data['quote_payment_id']);
        }
        if (\array_key_exists('shipping_amount', $data)) {
            $object->setShippingAmount($data['shipping_amount']);
        }
        if (\array_key_exists('shipping_captured', $data)) {
            $object->setShippingCaptured($data['shipping_captured']);
        }
        if (\array_key_exists('shipping_refunded', $data)) {
            $object->setShippingRefunded($data['shipping_refunded']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\v2_2\\Model\\SalesDataOrderPaymentExtensionInterface', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['account_status'] = $object->getAccountStatus();
        if (null !== $object->getAdditionalData()) {
            $data['additional_data'] = $object->getAdditionalData();
        }
        $values = array();
        foreach ($object->getAdditionalInformation() as $value) {
            $values[] = $value;
        }
        $data['additional_information'] = $values;
        if (null !== $object->getAddressStatus()) {
            $data['address_status'] = $object->getAddressStatus();
        }
        if (null !== $object->getAmountAuthorized()) {
            $data['amount_authorized'] = $object->getAmountAuthorized();
        }
        if (null !== $object->getAmountCanceled()) {
            $data['amount_canceled'] = $object->getAmountCanceled();
        }
        if (null !== $object->getAmountOrdered()) {
            $data['amount_ordered'] = $object->getAmountOrdered();
        }
        if (null !== $object->getAmountPaid()) {
            $data['amount_paid'] = $object->getAmountPaid();
        }
        if (null !== $object->getAmountRefunded()) {
            $data['amount_refunded'] = $object->getAmountRefunded();
        }
        if (null !== $object->getAnetTransMethod()) {
            $data['anet_trans_method'] = $object->getAnetTransMethod();
        }
        if (null !== $object->getBaseAmountAuthorized()) {
            $data['base_amount_authorized'] = $object->getBaseAmountAuthorized();
        }
        if (null !== $object->getBaseAmountCanceled()) {
            $data['base_amount_canceled'] = $object->getBaseAmountCanceled();
        }
        if (null !== $object->getBaseAmountOrdered()) {
            $data['base_amount_ordered'] = $object->getBaseAmountOrdered();
        }
        if (null !== $object->getBaseAmountPaid()) {
            $data['base_amount_paid'] = $object->getBaseAmountPaid();
        }
        if (null !== $object->getBaseAmountPaidOnline()) {
            $data['base_amount_paid_online'] = $object->getBaseAmountPaidOnline();
        }
        if (null !== $object->getBaseAmountRefunded()) {
            $data['base_amount_refunded'] = $object->getBaseAmountRefunded();
        }
        if (null !== $object->getBaseAmountRefundedOnline()) {
            $data['base_amount_refunded_online'] = $object->getBaseAmountRefundedOnline();
        }
        if (null !== $object->getBaseShippingAmount()) {
            $data['base_shipping_amount'] = $object->getBaseShippingAmount();
        }
        if (null !== $object->getBaseShippingCaptured()) {
            $data['base_shipping_captured'] = $object->getBaseShippingCaptured();
        }
        if (null !== $object->getBaseShippingRefunded()) {
            $data['base_shipping_refunded'] = $object->getBaseShippingRefunded();
        }
        if (null !== $object->getCcApproval()) {
            $data['cc_approval'] = $object->getCcApproval();
        }
        if (null !== $object->getCcAvsStatus()) {
            $data['cc_avs_status'] = $object->getCcAvsStatus();
        }
        if (null !== $object->getCcCidStatus()) {
            $data['cc_cid_status'] = $object->getCcCidStatus();
        }
        if (null !== $object->getCcDebugRequestBody()) {
            $data['cc_debug_request_body'] = $object->getCcDebugRequestBody();
        }
        if (null !== $object->getCcDebugResponseBody()) {
            $data['cc_debug_response_body'] = $object->getCcDebugResponseBody();
        }
        if (null !== $object->getCcDebugResponseSerialized()) {
            $data['cc_debug_response_serialized'] = $object->getCcDebugResponseSerialized();
        }
        if (null !== $object->getCcExpMonth()) {
            $data['cc_exp_month'] = $object->getCcExpMonth();
        }
        if (null !== $object->getCcExpYear()) {
            $data['cc_exp_year'] = $object->getCcExpYear();
        }
        $data['cc_last4'] = $object->getCcLast4();
        if (null !== $object->getCcNumberEnc()) {
            $data['cc_number_enc'] = $object->getCcNumberEnc();
        }
        if (null !== $object->getCcOwner()) {
            $data['cc_owner'] = $object->getCcOwner();
        }
        if (null !== $object->getCcSecureVerify()) {
            $data['cc_secure_verify'] = $object->getCcSecureVerify();
        }
        if (null !== $object->getCcSsIssue()) {
            $data['cc_ss_issue'] = $object->getCcSsIssue();
        }
        if (null !== $object->getCcSsStartMonth()) {
            $data['cc_ss_start_month'] = $object->getCcSsStartMonth();
        }
        if (null !== $object->getCcSsStartYear()) {
            $data['cc_ss_start_year'] = $object->getCcSsStartYear();
        }
        if (null !== $object->getCcStatus()) {
            $data['cc_status'] = $object->getCcStatus();
        }
        if (null !== $object->getCcStatusDescription()) {
            $data['cc_status_description'] = $object->getCcStatusDescription();
        }
        if (null !== $object->getCcTransId()) {
            $data['cc_trans_id'] = $object->getCcTransId();
        }
        if (null !== $object->getCcType()) {
            $data['cc_type'] = $object->getCcType();
        }
        if (null !== $object->getEcheckAccountName()) {
            $data['echeck_account_name'] = $object->getEcheckAccountName();
        }
        if (null !== $object->getEcheckAccountType()) {
            $data['echeck_account_type'] = $object->getEcheckAccountType();
        }
        if (null !== $object->getEcheckBankName()) {
            $data['echeck_bank_name'] = $object->getEcheckBankName();
        }
        if (null !== $object->getEcheckRoutingNumber()) {
            $data['echeck_routing_number'] = $object->getEcheckRoutingNumber();
        }
        if (null !== $object->getEcheckType()) {
            $data['echeck_type'] = $object->getEcheckType();
        }
        if (null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if (null !== $object->getLastTransId()) {
            $data['last_trans_id'] = $object->getLastTransId();
        }
        $data['method'] = $object->getMethod();
        if (null !== $object->getParentId()) {
            $data['parent_id'] = $object->getParentId();
        }
        if (null !== $object->getPoNumber()) {
            $data['po_number'] = $object->getPoNumber();
        }
        if (null !== $object->getProtectionEligibility()) {
            $data['protection_eligibility'] = $object->getProtectionEligibility();
        }
        if (null !== $object->getQuotePaymentId()) {
            $data['quote_payment_id'] = $object->getQuotePaymentId();
        }
        if (null !== $object->getShippingAmount()) {
            $data['shipping_amount'] = $object->getShippingAmount();
        }
        if (null !== $object->getShippingCaptured()) {
            $data['shipping_captured'] = $object->getShippingCaptured();
        }
        if (null !== $object->getShippingRefunded()) {
            $data['shipping_refunded'] = $object->getShippingRefunded();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        return $data;
    }
}
