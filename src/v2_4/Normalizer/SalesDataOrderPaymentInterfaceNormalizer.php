<?php

namespace Kiboko\Magento\V2_4\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_4\Runtime\Normalizer\CheckArray;
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
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\SalesDataOrderPaymentInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\SalesDataOrderPaymentInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\SalesDataOrderPaymentInterface();
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
        if (\array_key_exists('account_status', $data) && $data['account_status'] !== null) {
            $object->setAccountStatus($data['account_status']);
        } elseif (\array_key_exists('account_status', $data) && $data['account_status'] === null) {
            $object->setAccountStatus(null);
        }
        if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
            $object->setAdditionalData($data['additional_data']);
        } elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
            $object->setAdditionalData(null);
        }
        if (\array_key_exists('additional_information', $data) && $data['additional_information'] !== null) {
            $values = array();
            foreach ($data['additional_information'] as $value) {
                $values[] = $value;
            }
            $object->setAdditionalInformation($values);
        } elseif (\array_key_exists('additional_information', $data) && $data['additional_information'] === null) {
            $object->setAdditionalInformation(null);
        }
        if (\array_key_exists('address_status', $data) && $data['address_status'] !== null) {
            $object->setAddressStatus($data['address_status']);
        } elseif (\array_key_exists('address_status', $data) && $data['address_status'] === null) {
            $object->setAddressStatus(null);
        }
        if (\array_key_exists('amount_authorized', $data) && $data['amount_authorized'] !== null) {
            $object->setAmountAuthorized($data['amount_authorized']);
        } elseif (\array_key_exists('amount_authorized', $data) && $data['amount_authorized'] === null) {
            $object->setAmountAuthorized(null);
        }
        if (\array_key_exists('amount_canceled', $data) && $data['amount_canceled'] !== null) {
            $object->setAmountCanceled($data['amount_canceled']);
        } elseif (\array_key_exists('amount_canceled', $data) && $data['amount_canceled'] === null) {
            $object->setAmountCanceled(null);
        }
        if (\array_key_exists('amount_ordered', $data) && $data['amount_ordered'] !== null) {
            $object->setAmountOrdered($data['amount_ordered']);
        } elseif (\array_key_exists('amount_ordered', $data) && $data['amount_ordered'] === null) {
            $object->setAmountOrdered(null);
        }
        if (\array_key_exists('amount_paid', $data) && $data['amount_paid'] !== null) {
            $object->setAmountPaid($data['amount_paid']);
        } elseif (\array_key_exists('amount_paid', $data) && $data['amount_paid'] === null) {
            $object->setAmountPaid(null);
        }
        if (\array_key_exists('amount_refunded', $data) && $data['amount_refunded'] !== null) {
            $object->setAmountRefunded($data['amount_refunded']);
        } elseif (\array_key_exists('amount_refunded', $data) && $data['amount_refunded'] === null) {
            $object->setAmountRefunded(null);
        }
        if (\array_key_exists('anet_trans_method', $data) && $data['anet_trans_method'] !== null) {
            $object->setAnetTransMethod($data['anet_trans_method']);
        } elseif (\array_key_exists('anet_trans_method', $data) && $data['anet_trans_method'] === null) {
            $object->setAnetTransMethod(null);
        }
        if (\array_key_exists('base_amount_authorized', $data) && $data['base_amount_authorized'] !== null) {
            $object->setBaseAmountAuthorized($data['base_amount_authorized']);
        } elseif (\array_key_exists('base_amount_authorized', $data) && $data['base_amount_authorized'] === null) {
            $object->setBaseAmountAuthorized(null);
        }
        if (\array_key_exists('base_amount_canceled', $data) && $data['base_amount_canceled'] !== null) {
            $object->setBaseAmountCanceled($data['base_amount_canceled']);
        } elseif (\array_key_exists('base_amount_canceled', $data) && $data['base_amount_canceled'] === null) {
            $object->setBaseAmountCanceled(null);
        }
        if (\array_key_exists('base_amount_ordered', $data) && $data['base_amount_ordered'] !== null) {
            $object->setBaseAmountOrdered($data['base_amount_ordered']);
        } elseif (\array_key_exists('base_amount_ordered', $data) && $data['base_amount_ordered'] === null) {
            $object->setBaseAmountOrdered(null);
        }
        if (\array_key_exists('base_amount_paid', $data) && $data['base_amount_paid'] !== null) {
            $object->setBaseAmountPaid($data['base_amount_paid']);
        } elseif (\array_key_exists('base_amount_paid', $data) && $data['base_amount_paid'] === null) {
            $object->setBaseAmountPaid(null);
        }
        if (\array_key_exists('base_amount_paid_online', $data) && $data['base_amount_paid_online'] !== null) {
            $object->setBaseAmountPaidOnline($data['base_amount_paid_online']);
        } elseif (\array_key_exists('base_amount_paid_online', $data) && $data['base_amount_paid_online'] === null) {
            $object->setBaseAmountPaidOnline(null);
        }
        if (\array_key_exists('base_amount_refunded', $data) && $data['base_amount_refunded'] !== null) {
            $object->setBaseAmountRefunded($data['base_amount_refunded']);
        } elseif (\array_key_exists('base_amount_refunded', $data) && $data['base_amount_refunded'] === null) {
            $object->setBaseAmountRefunded(null);
        }
        if (\array_key_exists('base_amount_refunded_online', $data) && $data['base_amount_refunded_online'] !== null) {
            $object->setBaseAmountRefundedOnline($data['base_amount_refunded_online']);
        } elseif (\array_key_exists('base_amount_refunded_online', $data) && $data['base_amount_refunded_online'] === null) {
            $object->setBaseAmountRefundedOnline(null);
        }
        if (\array_key_exists('base_shipping_amount', $data) && $data['base_shipping_amount'] !== null) {
            $object->setBaseShippingAmount($data['base_shipping_amount']);
        } elseif (\array_key_exists('base_shipping_amount', $data) && $data['base_shipping_amount'] === null) {
            $object->setBaseShippingAmount(null);
        }
        if (\array_key_exists('base_shipping_captured', $data) && $data['base_shipping_captured'] !== null) {
            $object->setBaseShippingCaptured($data['base_shipping_captured']);
        } elseif (\array_key_exists('base_shipping_captured', $data) && $data['base_shipping_captured'] === null) {
            $object->setBaseShippingCaptured(null);
        }
        if (\array_key_exists('base_shipping_refunded', $data) && $data['base_shipping_refunded'] !== null) {
            $object->setBaseShippingRefunded($data['base_shipping_refunded']);
        } elseif (\array_key_exists('base_shipping_refunded', $data) && $data['base_shipping_refunded'] === null) {
            $object->setBaseShippingRefunded(null);
        }
        if (\array_key_exists('cc_approval', $data) && $data['cc_approval'] !== null) {
            $object->setCcApproval($data['cc_approval']);
        } elseif (\array_key_exists('cc_approval', $data) && $data['cc_approval'] === null) {
            $object->setCcApproval(null);
        }
        if (\array_key_exists('cc_avs_status', $data) && $data['cc_avs_status'] !== null) {
            $object->setCcAvsStatus($data['cc_avs_status']);
        } elseif (\array_key_exists('cc_avs_status', $data) && $data['cc_avs_status'] === null) {
            $object->setCcAvsStatus(null);
        }
        if (\array_key_exists('cc_cid_status', $data) && $data['cc_cid_status'] !== null) {
            $object->setCcCidStatus($data['cc_cid_status']);
        } elseif (\array_key_exists('cc_cid_status', $data) && $data['cc_cid_status'] === null) {
            $object->setCcCidStatus(null);
        }
        if (\array_key_exists('cc_debug_request_body', $data) && $data['cc_debug_request_body'] !== null) {
            $object->setCcDebugRequestBody($data['cc_debug_request_body']);
        } elseif (\array_key_exists('cc_debug_request_body', $data) && $data['cc_debug_request_body'] === null) {
            $object->setCcDebugRequestBody(null);
        }
        if (\array_key_exists('cc_debug_response_body', $data) && $data['cc_debug_response_body'] !== null) {
            $object->setCcDebugResponseBody($data['cc_debug_response_body']);
        } elseif (\array_key_exists('cc_debug_response_body', $data) && $data['cc_debug_response_body'] === null) {
            $object->setCcDebugResponseBody(null);
        }
        if (\array_key_exists('cc_debug_response_serialized', $data) && $data['cc_debug_response_serialized'] !== null) {
            $object->setCcDebugResponseSerialized($data['cc_debug_response_serialized']);
        } elseif (\array_key_exists('cc_debug_response_serialized', $data) && $data['cc_debug_response_serialized'] === null) {
            $object->setCcDebugResponseSerialized(null);
        }
        if (\array_key_exists('cc_exp_month', $data) && $data['cc_exp_month'] !== null) {
            $object->setCcExpMonth($data['cc_exp_month']);
        } elseif (\array_key_exists('cc_exp_month', $data) && $data['cc_exp_month'] === null) {
            $object->setCcExpMonth(null);
        }
        if (\array_key_exists('cc_exp_year', $data) && $data['cc_exp_year'] !== null) {
            $object->setCcExpYear($data['cc_exp_year']);
        } elseif (\array_key_exists('cc_exp_year', $data) && $data['cc_exp_year'] === null) {
            $object->setCcExpYear(null);
        }
        if (\array_key_exists('cc_last4', $data) && $data['cc_last4'] !== null) {
            $object->setCcLast4($data['cc_last4']);
        } elseif (\array_key_exists('cc_last4', $data) && $data['cc_last4'] === null) {
            $object->setCcLast4(null);
        }
        if (\array_key_exists('cc_number_enc', $data) && $data['cc_number_enc'] !== null) {
            $object->setCcNumberEnc($data['cc_number_enc']);
        } elseif (\array_key_exists('cc_number_enc', $data) && $data['cc_number_enc'] === null) {
            $object->setCcNumberEnc(null);
        }
        if (\array_key_exists('cc_owner', $data) && $data['cc_owner'] !== null) {
            $object->setCcOwner($data['cc_owner']);
        } elseif (\array_key_exists('cc_owner', $data) && $data['cc_owner'] === null) {
            $object->setCcOwner(null);
        }
        if (\array_key_exists('cc_secure_verify', $data) && $data['cc_secure_verify'] !== null) {
            $object->setCcSecureVerify($data['cc_secure_verify']);
        } elseif (\array_key_exists('cc_secure_verify', $data) && $data['cc_secure_verify'] === null) {
            $object->setCcSecureVerify(null);
        }
        if (\array_key_exists('cc_ss_issue', $data) && $data['cc_ss_issue'] !== null) {
            $object->setCcSsIssue($data['cc_ss_issue']);
        } elseif (\array_key_exists('cc_ss_issue', $data) && $data['cc_ss_issue'] === null) {
            $object->setCcSsIssue(null);
        }
        if (\array_key_exists('cc_ss_start_month', $data) && $data['cc_ss_start_month'] !== null) {
            $object->setCcSsStartMonth($data['cc_ss_start_month']);
        } elseif (\array_key_exists('cc_ss_start_month', $data) && $data['cc_ss_start_month'] === null) {
            $object->setCcSsStartMonth(null);
        }
        if (\array_key_exists('cc_ss_start_year', $data) && $data['cc_ss_start_year'] !== null) {
            $object->setCcSsStartYear($data['cc_ss_start_year']);
        } elseif (\array_key_exists('cc_ss_start_year', $data) && $data['cc_ss_start_year'] === null) {
            $object->setCcSsStartYear(null);
        }
        if (\array_key_exists('cc_status', $data) && $data['cc_status'] !== null) {
            $object->setCcStatus($data['cc_status']);
        } elseif (\array_key_exists('cc_status', $data) && $data['cc_status'] === null) {
            $object->setCcStatus(null);
        }
        if (\array_key_exists('cc_status_description', $data) && $data['cc_status_description'] !== null) {
            $object->setCcStatusDescription($data['cc_status_description']);
        } elseif (\array_key_exists('cc_status_description', $data) && $data['cc_status_description'] === null) {
            $object->setCcStatusDescription(null);
        }
        if (\array_key_exists('cc_trans_id', $data) && $data['cc_trans_id'] !== null) {
            $object->setCcTransId($data['cc_trans_id']);
        } elseif (\array_key_exists('cc_trans_id', $data) && $data['cc_trans_id'] === null) {
            $object->setCcTransId(null);
        }
        if (\array_key_exists('cc_type', $data) && $data['cc_type'] !== null) {
            $object->setCcType($data['cc_type']);
        } elseif (\array_key_exists('cc_type', $data) && $data['cc_type'] === null) {
            $object->setCcType(null);
        }
        if (\array_key_exists('echeck_account_name', $data) && $data['echeck_account_name'] !== null) {
            $object->setEcheckAccountName($data['echeck_account_name']);
        } elseif (\array_key_exists('echeck_account_name', $data) && $data['echeck_account_name'] === null) {
            $object->setEcheckAccountName(null);
        }
        if (\array_key_exists('echeck_account_type', $data) && $data['echeck_account_type'] !== null) {
            $object->setEcheckAccountType($data['echeck_account_type']);
        } elseif (\array_key_exists('echeck_account_type', $data) && $data['echeck_account_type'] === null) {
            $object->setEcheckAccountType(null);
        }
        if (\array_key_exists('echeck_bank_name', $data) && $data['echeck_bank_name'] !== null) {
            $object->setEcheckBankName($data['echeck_bank_name']);
        } elseif (\array_key_exists('echeck_bank_name', $data) && $data['echeck_bank_name'] === null) {
            $object->setEcheckBankName(null);
        }
        if (\array_key_exists('echeck_routing_number', $data) && $data['echeck_routing_number'] !== null) {
            $object->setEcheckRoutingNumber($data['echeck_routing_number']);
        } elseif (\array_key_exists('echeck_routing_number', $data) && $data['echeck_routing_number'] === null) {
            $object->setEcheckRoutingNumber(null);
        }
        if (\array_key_exists('echeck_type', $data) && $data['echeck_type'] !== null) {
            $object->setEcheckType($data['echeck_type']);
        } elseif (\array_key_exists('echeck_type', $data) && $data['echeck_type'] === null) {
            $object->setEcheckType(null);
        }
        if (\array_key_exists('entity_id', $data) && $data['entity_id'] !== null) {
            $object->setEntityId($data['entity_id']);
        } elseif (\array_key_exists('entity_id', $data) && $data['entity_id'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_4\\Model\\SalesDataOrderPaymentExtensionInterface', 'json', $context));
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('last_trans_id', $data) && $data['last_trans_id'] !== null) {
            $object->setLastTransId($data['last_trans_id']);
        } elseif (\array_key_exists('last_trans_id', $data) && $data['last_trans_id'] === null) {
            $object->setLastTransId(null);
        }
        if (\array_key_exists('method', $data) && $data['method'] !== null) {
            $object->setMethod($data['method']);
        } elseif (\array_key_exists('method', $data) && $data['method'] === null) {
            $object->setMethod(null);
        }
        if (\array_key_exists('parent_id', $data) && $data['parent_id'] !== null) {
            $object->setParentId($data['parent_id']);
        } elseif (\array_key_exists('parent_id', $data) && $data['parent_id'] === null) {
            $object->setParentId(null);
        }
        if (\array_key_exists('po_number', $data) && $data['po_number'] !== null) {
            $object->setPoNumber($data['po_number']);
        } elseif (\array_key_exists('po_number', $data) && $data['po_number'] === null) {
            $object->setPoNumber(null);
        }
        if (\array_key_exists('protection_eligibility', $data) && $data['protection_eligibility'] !== null) {
            $object->setProtectionEligibility($data['protection_eligibility']);
        } elseif (\array_key_exists('protection_eligibility', $data) && $data['protection_eligibility'] === null) {
            $object->setProtectionEligibility(null);
        }
        if (\array_key_exists('quote_payment_id', $data) && $data['quote_payment_id'] !== null) {
            $object->setQuotePaymentId($data['quote_payment_id']);
        } elseif (\array_key_exists('quote_payment_id', $data) && $data['quote_payment_id'] === null) {
            $object->setQuotePaymentId(null);
        }
        if (\array_key_exists('shipping_amount', $data) && $data['shipping_amount'] !== null) {
            $object->setShippingAmount($data['shipping_amount']);
        } elseif (\array_key_exists('shipping_amount', $data) && $data['shipping_amount'] === null) {
            $object->setShippingAmount(null);
        }
        if (\array_key_exists('shipping_captured', $data) && $data['shipping_captured'] !== null) {
            $object->setShippingCaptured($data['shipping_captured']);
        } elseif (\array_key_exists('shipping_captured', $data) && $data['shipping_captured'] === null) {
            $object->setShippingCaptured(null);
        }
        if (\array_key_exists('shipping_refunded', $data) && $data['shipping_refunded'] !== null) {
            $object->setShippingRefunded($data['shipping_refunded']);
        } elseif (\array_key_exists('shipping_refunded', $data) && $data['shipping_refunded'] === null) {
            $object->setShippingRefunded(null);
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
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
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
        return $data;
    }
}
