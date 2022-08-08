<?php

namespace Kiboko\Magento\V2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalesDataOrderInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2\\Model\\SalesDataOrderInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2\\Model\\SalesDataOrderInterface';
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
        $object = new \Kiboko\Magento\V2\Model\SalesDataOrderInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('adjustment_negative', $data)) {
            $object->setAdjustmentNegative($data['adjustment_negative']);
        }
        if (\array_key_exists('adjustment_positive', $data)) {
            $object->setAdjustmentPositive($data['adjustment_positive']);
        }
        if (\array_key_exists('applied_rule_ids', $data)) {
            $object->setAppliedRuleIds($data['applied_rule_ids']);
        }
        if (\array_key_exists('base_adjustment_negative', $data)) {
            $object->setBaseAdjustmentNegative($data['base_adjustment_negative']);
        }
        if (\array_key_exists('base_adjustment_positive', $data)) {
            $object->setBaseAdjustmentPositive($data['base_adjustment_positive']);
        }
        if (\array_key_exists('base_currency_code', $data)) {
            $object->setBaseCurrencyCode($data['base_currency_code']);
        }
        if (\array_key_exists('base_discount_amount', $data)) {
            $object->setBaseDiscountAmount($data['base_discount_amount']);
        }
        if (\array_key_exists('base_discount_canceled', $data)) {
            $object->setBaseDiscountCanceled($data['base_discount_canceled']);
        }
        if (\array_key_exists('base_discount_invoiced', $data)) {
            $object->setBaseDiscountInvoiced($data['base_discount_invoiced']);
        }
        if (\array_key_exists('base_discount_refunded', $data)) {
            $object->setBaseDiscountRefunded($data['base_discount_refunded']);
        }
        if (\array_key_exists('base_grand_total', $data)) {
            $object->setBaseGrandTotal($data['base_grand_total']);
        }
        if (\array_key_exists('base_discount_tax_compensation_amount', $data)) {
            $object->setBaseDiscountTaxCompensationAmount($data['base_discount_tax_compensation_amount']);
        }
        if (\array_key_exists('base_discount_tax_compensation_invoiced', $data)) {
            $object->setBaseDiscountTaxCompensationInvoiced($data['base_discount_tax_compensation_invoiced']);
        }
        if (\array_key_exists('base_discount_tax_compensation_refunded', $data)) {
            $object->setBaseDiscountTaxCompensationRefunded($data['base_discount_tax_compensation_refunded']);
        }
        if (\array_key_exists('base_shipping_amount', $data)) {
            $object->setBaseShippingAmount($data['base_shipping_amount']);
        }
        if (\array_key_exists('base_shipping_canceled', $data)) {
            $object->setBaseShippingCanceled($data['base_shipping_canceled']);
        }
        if (\array_key_exists('base_shipping_discount_amount', $data)) {
            $object->setBaseShippingDiscountAmount($data['base_shipping_discount_amount']);
        }
        if (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data)) {
            $object->setBaseShippingDiscountTaxCompensationAmnt($data['base_shipping_discount_tax_compensation_amnt']);
        }
        if (\array_key_exists('base_shipping_incl_tax', $data)) {
            $object->setBaseShippingInclTax($data['base_shipping_incl_tax']);
        }
        if (\array_key_exists('base_shipping_invoiced', $data)) {
            $object->setBaseShippingInvoiced($data['base_shipping_invoiced']);
        }
        if (\array_key_exists('base_shipping_refunded', $data)) {
            $object->setBaseShippingRefunded($data['base_shipping_refunded']);
        }
        if (\array_key_exists('base_shipping_tax_amount', $data)) {
            $object->setBaseShippingTaxAmount($data['base_shipping_tax_amount']);
        }
        if (\array_key_exists('base_shipping_tax_refunded', $data)) {
            $object->setBaseShippingTaxRefunded($data['base_shipping_tax_refunded']);
        }
        if (\array_key_exists('base_subtotal', $data)) {
            $object->setBaseSubtotal($data['base_subtotal']);
        }
        if (\array_key_exists('base_subtotal_canceled', $data)) {
            $object->setBaseSubtotalCanceled($data['base_subtotal_canceled']);
        }
        if (\array_key_exists('base_subtotal_incl_tax', $data)) {
            $object->setBaseSubtotalInclTax($data['base_subtotal_incl_tax']);
        }
        if (\array_key_exists('base_subtotal_invoiced', $data)) {
            $object->setBaseSubtotalInvoiced($data['base_subtotal_invoiced']);
        }
        if (\array_key_exists('base_subtotal_refunded', $data)) {
            $object->setBaseSubtotalRefunded($data['base_subtotal_refunded']);
        }
        if (\array_key_exists('base_tax_amount', $data)) {
            $object->setBaseTaxAmount($data['base_tax_amount']);
        }
        if (\array_key_exists('base_tax_canceled', $data)) {
            $object->setBaseTaxCanceled($data['base_tax_canceled']);
        }
        if (\array_key_exists('base_tax_invoiced', $data)) {
            $object->setBaseTaxInvoiced($data['base_tax_invoiced']);
        }
        if (\array_key_exists('base_tax_refunded', $data)) {
            $object->setBaseTaxRefunded($data['base_tax_refunded']);
        }
        if (\array_key_exists('base_total_canceled', $data)) {
            $object->setBaseTotalCanceled($data['base_total_canceled']);
        }
        if (\array_key_exists('base_total_due', $data)) {
            $object->setBaseTotalDue($data['base_total_due']);
        }
        if (\array_key_exists('base_total_invoiced', $data)) {
            $object->setBaseTotalInvoiced($data['base_total_invoiced']);
        }
        if (\array_key_exists('base_total_invoiced_cost', $data)) {
            $object->setBaseTotalInvoicedCost($data['base_total_invoiced_cost']);
        }
        if (\array_key_exists('base_total_offline_refunded', $data)) {
            $object->setBaseTotalOfflineRefunded($data['base_total_offline_refunded']);
        }
        if (\array_key_exists('base_total_online_refunded', $data)) {
            $object->setBaseTotalOnlineRefunded($data['base_total_online_refunded']);
        }
        if (\array_key_exists('base_total_paid', $data)) {
            $object->setBaseTotalPaid($data['base_total_paid']);
        }
        if (\array_key_exists('base_total_qty_ordered', $data)) {
            $object->setBaseTotalQtyOrdered($data['base_total_qty_ordered']);
        }
        if (\array_key_exists('base_total_refunded', $data)) {
            $object->setBaseTotalRefunded($data['base_total_refunded']);
        }
        if (\array_key_exists('base_to_global_rate', $data)) {
            $object->setBaseToGlobalRate($data['base_to_global_rate']);
        }
        if (\array_key_exists('base_to_order_rate', $data)) {
            $object->setBaseToOrderRate($data['base_to_order_rate']);
        }
        if (\array_key_exists('billing_address_id', $data)) {
            $object->setBillingAddressId($data['billing_address_id']);
        }
        if (\array_key_exists('can_ship_partially', $data)) {
            $object->setCanShipPartially($data['can_ship_partially']);
        }
        if (\array_key_exists('can_ship_partially_item', $data)) {
            $object->setCanShipPartiallyItem($data['can_ship_partially_item']);
        }
        if (\array_key_exists('coupon_code', $data)) {
            $object->setCouponCode($data['coupon_code']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('customer_dob', $data)) {
            $object->setCustomerDob($data['customer_dob']);
        }
        if (\array_key_exists('customer_email', $data)) {
            $object->setCustomerEmail($data['customer_email']);
        }
        if (\array_key_exists('customer_firstname', $data)) {
            $object->setCustomerFirstname($data['customer_firstname']);
        }
        if (\array_key_exists('customer_gender', $data)) {
            $object->setCustomerGender($data['customer_gender']);
        }
        if (\array_key_exists('customer_group_id', $data)) {
            $object->setCustomerGroupId($data['customer_group_id']);
        }
        if (\array_key_exists('customer_id', $data)) {
            $object->setCustomerId($data['customer_id']);
        }
        if (\array_key_exists('customer_is_guest', $data)) {
            $object->setCustomerIsGuest($data['customer_is_guest']);
        }
        if (\array_key_exists('customer_lastname', $data)) {
            $object->setCustomerLastname($data['customer_lastname']);
        }
        if (\array_key_exists('customer_middlename', $data)) {
            $object->setCustomerMiddlename($data['customer_middlename']);
        }
        if (\array_key_exists('customer_note', $data)) {
            $object->setCustomerNote($data['customer_note']);
        }
        if (\array_key_exists('customer_note_notify', $data)) {
            $object->setCustomerNoteNotify($data['customer_note_notify']);
        }
        if (\array_key_exists('customer_prefix', $data)) {
            $object->setCustomerPrefix($data['customer_prefix']);
        }
        if (\array_key_exists('customer_suffix', $data)) {
            $object->setCustomerSuffix($data['customer_suffix']);
        }
        if (\array_key_exists('customer_taxvat', $data)) {
            $object->setCustomerTaxvat($data['customer_taxvat']);
        }
        if (\array_key_exists('discount_amount', $data)) {
            $object->setDiscountAmount($data['discount_amount']);
        }
        if (\array_key_exists('discount_canceled', $data)) {
            $object->setDiscountCanceled($data['discount_canceled']);
        }
        if (\array_key_exists('discount_description', $data)) {
            $object->setDiscountDescription($data['discount_description']);
        }
        if (\array_key_exists('discount_invoiced', $data)) {
            $object->setDiscountInvoiced($data['discount_invoiced']);
        }
        if (\array_key_exists('discount_refunded', $data)) {
            $object->setDiscountRefunded($data['discount_refunded']);
        }
        if (\array_key_exists('edit_increment', $data)) {
            $object->setEditIncrement($data['edit_increment']);
        }
        if (\array_key_exists('email_sent', $data)) {
            $object->setEmailSent($data['email_sent']);
        }
        if (\array_key_exists('entity_id', $data)) {
            $object->setEntityId($data['entity_id']);
        }
        if (\array_key_exists('ext_customer_id', $data)) {
            $object->setExtCustomerId($data['ext_customer_id']);
        }
        if (\array_key_exists('ext_order_id', $data)) {
            $object->setExtOrderId($data['ext_order_id']);
        }
        if (\array_key_exists('forced_shipment_with_invoice', $data)) {
            $object->setForcedShipmentWithInvoice($data['forced_shipment_with_invoice']);
        }
        if (\array_key_exists('global_currency_code', $data)) {
            $object->setGlobalCurrencyCode($data['global_currency_code']);
        }
        if (\array_key_exists('grand_total', $data)) {
            $object->setGrandTotal($data['grand_total']);
        }
        if (\array_key_exists('discount_tax_compensation_amount', $data)) {
            $object->setDiscountTaxCompensationAmount($data['discount_tax_compensation_amount']);
        }
        if (\array_key_exists('discount_tax_compensation_invoiced', $data)) {
            $object->setDiscountTaxCompensationInvoiced($data['discount_tax_compensation_invoiced']);
        }
        if (\array_key_exists('discount_tax_compensation_refunded', $data)) {
            $object->setDiscountTaxCompensationRefunded($data['discount_tax_compensation_refunded']);
        }
        if (\array_key_exists('hold_before_state', $data)) {
            $object->setHoldBeforeState($data['hold_before_state']);
        }
        if (\array_key_exists('hold_before_status', $data)) {
            $object->setHoldBeforeStatus($data['hold_before_status']);
        }
        if (\array_key_exists('increment_id', $data)) {
            $object->setIncrementId($data['increment_id']);
        }
        if (\array_key_exists('is_virtual', $data)) {
            $object->setIsVirtual($data['is_virtual']);
        }
        if (\array_key_exists('order_currency_code', $data)) {
            $object->setOrderCurrencyCode($data['order_currency_code']);
        }
        if (\array_key_exists('original_increment_id', $data)) {
            $object->setOriginalIncrementId($data['original_increment_id']);
        }
        if (\array_key_exists('payment_authorization_amount', $data)) {
            $object->setPaymentAuthorizationAmount($data['payment_authorization_amount']);
        }
        if (\array_key_exists('payment_auth_expiration', $data)) {
            $object->setPaymentAuthExpiration($data['payment_auth_expiration']);
        }
        if (\array_key_exists('protect_code', $data)) {
            $object->setProtectCode($data['protect_code']);
        }
        if (\array_key_exists('quote_address_id', $data)) {
            $object->setQuoteAddressId($data['quote_address_id']);
        }
        if (\array_key_exists('quote_id', $data)) {
            $object->setQuoteId($data['quote_id']);
        }
        if (\array_key_exists('relation_child_id', $data)) {
            $object->setRelationChildId($data['relation_child_id']);
        }
        if (\array_key_exists('relation_child_real_id', $data)) {
            $object->setRelationChildRealId($data['relation_child_real_id']);
        }
        if (\array_key_exists('relation_parent_id', $data)) {
            $object->setRelationParentId($data['relation_parent_id']);
        }
        if (\array_key_exists('relation_parent_real_id', $data)) {
            $object->setRelationParentRealId($data['relation_parent_real_id']);
        }
        if (\array_key_exists('remote_ip', $data)) {
            $object->setRemoteIp($data['remote_ip']);
        }
        if (\array_key_exists('shipping_amount', $data)) {
            $object->setShippingAmount($data['shipping_amount']);
        }
        if (\array_key_exists('shipping_canceled', $data)) {
            $object->setShippingCanceled($data['shipping_canceled']);
        }
        if (\array_key_exists('shipping_description', $data)) {
            $object->setShippingDescription($data['shipping_description']);
        }
        if (\array_key_exists('shipping_discount_amount', $data)) {
            $object->setShippingDiscountAmount($data['shipping_discount_amount']);
        }
        if (\array_key_exists('shipping_discount_tax_compensation_amount', $data)) {
            $object->setShippingDiscountTaxCompensationAmount($data['shipping_discount_tax_compensation_amount']);
        }
        if (\array_key_exists('shipping_incl_tax', $data)) {
            $object->setShippingInclTax($data['shipping_incl_tax']);
        }
        if (\array_key_exists('shipping_invoiced', $data)) {
            $object->setShippingInvoiced($data['shipping_invoiced']);
        }
        if (\array_key_exists('shipping_refunded', $data)) {
            $object->setShippingRefunded($data['shipping_refunded']);
        }
        if (\array_key_exists('shipping_tax_amount', $data)) {
            $object->setShippingTaxAmount($data['shipping_tax_amount']);
        }
        if (\array_key_exists('shipping_tax_refunded', $data)) {
            $object->setShippingTaxRefunded($data['shipping_tax_refunded']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('store_currency_code', $data)) {
            $object->setStoreCurrencyCode($data['store_currency_code']);
        }
        if (\array_key_exists('store_id', $data)) {
            $object->setStoreId($data['store_id']);
        }
        if (\array_key_exists('store_name', $data)) {
            $object->setStoreName($data['store_name']);
        }
        if (\array_key_exists('store_to_base_rate', $data)) {
            $object->setStoreToBaseRate($data['store_to_base_rate']);
        }
        if (\array_key_exists('store_to_order_rate', $data)) {
            $object->setStoreToOrderRate($data['store_to_order_rate']);
        }
        if (\array_key_exists('subtotal', $data)) {
            $object->setSubtotal($data['subtotal']);
        }
        if (\array_key_exists('subtotal_canceled', $data)) {
            $object->setSubtotalCanceled($data['subtotal_canceled']);
        }
        if (\array_key_exists('subtotal_incl_tax', $data)) {
            $object->setSubtotalInclTax($data['subtotal_incl_tax']);
        }
        if (\array_key_exists('subtotal_invoiced', $data)) {
            $object->setSubtotalInvoiced($data['subtotal_invoiced']);
        }
        if (\array_key_exists('subtotal_refunded', $data)) {
            $object->setSubtotalRefunded($data['subtotal_refunded']);
        }
        if (\array_key_exists('tax_amount', $data)) {
            $object->setTaxAmount($data['tax_amount']);
        }
        if (\array_key_exists('tax_canceled', $data)) {
            $object->setTaxCanceled($data['tax_canceled']);
        }
        if (\array_key_exists('tax_invoiced', $data)) {
            $object->setTaxInvoiced($data['tax_invoiced']);
        }
        if (\array_key_exists('tax_refunded', $data)) {
            $object->setTaxRefunded($data['tax_refunded']);
        }
        if (\array_key_exists('total_canceled', $data)) {
            $object->setTotalCanceled($data['total_canceled']);
        }
        if (\array_key_exists('total_due', $data)) {
            $object->setTotalDue($data['total_due']);
        }
        if (\array_key_exists('total_invoiced', $data)) {
            $object->setTotalInvoiced($data['total_invoiced']);
        }
        if (\array_key_exists('total_item_count', $data)) {
            $object->setTotalItemCount($data['total_item_count']);
        }
        if (\array_key_exists('total_offline_refunded', $data)) {
            $object->setTotalOfflineRefunded($data['total_offline_refunded']);
        }
        if (\array_key_exists('total_online_refunded', $data)) {
            $object->setTotalOnlineRefunded($data['total_online_refunded']);
        }
        if (\array_key_exists('total_paid', $data)) {
            $object->setTotalPaid($data['total_paid']);
        }
        if (\array_key_exists('total_qty_ordered', $data)) {
            $object->setTotalQtyOrdered($data['total_qty_ordered']);
        }
        if (\array_key_exists('total_refunded', $data)) {
            $object->setTotalRefunded($data['total_refunded']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (\array_key_exists('weight', $data)) {
            $object->setWeight($data['weight']);
        }
        if (\array_key_exists('x_forwarded_for', $data)) {
            $object->setXForwardedFor($data['x_forwarded_for']);
        }
        if (\array_key_exists('items', $data)) {
            $values = array();
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2\\Model\\SalesDataOrderItemInterface', 'json', $context);
            }
            $object->setItems($values);
        }
        if (\array_key_exists('billing_address', $data)) {
            $object->setBillingAddress($this->denormalizer->denormalize($data['billing_address'], 'Kiboko\\Magento\\V2\\Model\\SalesDataOrderAddressInterface', 'json', $context));
        }
        if (\array_key_exists('payment', $data)) {
            $object->setPayment($this->denormalizer->denormalize($data['payment'], 'Kiboko\\Magento\\V2\\Model\\SalesDataOrderPaymentInterface', 'json', $context));
        }
        if (\array_key_exists('status_histories', $data)) {
            $values_1 = array();
            foreach ($data['status_histories'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2\\Model\\SalesDataOrderStatusHistoryInterface', 'json', $context);
            }
            $object->setStatusHistories($values_1);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2\\Model\\SalesDataOrderExtensionInterface', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdjustmentNegative()) {
            $data['adjustment_negative'] = $object->getAdjustmentNegative();
        }
        if (null !== $object->getAdjustmentPositive()) {
            $data['adjustment_positive'] = $object->getAdjustmentPositive();
        }
        if (null !== $object->getAppliedRuleIds()) {
            $data['applied_rule_ids'] = $object->getAppliedRuleIds();
        }
        if (null !== $object->getBaseAdjustmentNegative()) {
            $data['base_adjustment_negative'] = $object->getBaseAdjustmentNegative();
        }
        if (null !== $object->getBaseAdjustmentPositive()) {
            $data['base_adjustment_positive'] = $object->getBaseAdjustmentPositive();
        }
        if (null !== $object->getBaseCurrencyCode()) {
            $data['base_currency_code'] = $object->getBaseCurrencyCode();
        }
        if (null !== $object->getBaseDiscountAmount()) {
            $data['base_discount_amount'] = $object->getBaseDiscountAmount();
        }
        if (null !== $object->getBaseDiscountCanceled()) {
            $data['base_discount_canceled'] = $object->getBaseDiscountCanceled();
        }
        if (null !== $object->getBaseDiscountInvoiced()) {
            $data['base_discount_invoiced'] = $object->getBaseDiscountInvoiced();
        }
        if (null !== $object->getBaseDiscountRefunded()) {
            $data['base_discount_refunded'] = $object->getBaseDiscountRefunded();
        }
        $data['base_grand_total'] = $object->getBaseGrandTotal();
        if (null !== $object->getBaseDiscountTaxCompensationAmount()) {
            $data['base_discount_tax_compensation_amount'] = $object->getBaseDiscountTaxCompensationAmount();
        }
        if (null !== $object->getBaseDiscountTaxCompensationInvoiced()) {
            $data['base_discount_tax_compensation_invoiced'] = $object->getBaseDiscountTaxCompensationInvoiced();
        }
        if (null !== $object->getBaseDiscountTaxCompensationRefunded()) {
            $data['base_discount_tax_compensation_refunded'] = $object->getBaseDiscountTaxCompensationRefunded();
        }
        if (null !== $object->getBaseShippingAmount()) {
            $data['base_shipping_amount'] = $object->getBaseShippingAmount();
        }
        if (null !== $object->getBaseShippingCanceled()) {
            $data['base_shipping_canceled'] = $object->getBaseShippingCanceled();
        }
        if (null !== $object->getBaseShippingDiscountAmount()) {
            $data['base_shipping_discount_amount'] = $object->getBaseShippingDiscountAmount();
        }
        if (null !== $object->getBaseShippingDiscountTaxCompensationAmnt()) {
            $data['base_shipping_discount_tax_compensation_amnt'] = $object->getBaseShippingDiscountTaxCompensationAmnt();
        }
        if (null !== $object->getBaseShippingInclTax()) {
            $data['base_shipping_incl_tax'] = $object->getBaseShippingInclTax();
        }
        if (null !== $object->getBaseShippingInvoiced()) {
            $data['base_shipping_invoiced'] = $object->getBaseShippingInvoiced();
        }
        if (null !== $object->getBaseShippingRefunded()) {
            $data['base_shipping_refunded'] = $object->getBaseShippingRefunded();
        }
        if (null !== $object->getBaseShippingTaxAmount()) {
            $data['base_shipping_tax_amount'] = $object->getBaseShippingTaxAmount();
        }
        if (null !== $object->getBaseShippingTaxRefunded()) {
            $data['base_shipping_tax_refunded'] = $object->getBaseShippingTaxRefunded();
        }
        if (null !== $object->getBaseSubtotal()) {
            $data['base_subtotal'] = $object->getBaseSubtotal();
        }
        if (null !== $object->getBaseSubtotalCanceled()) {
            $data['base_subtotal_canceled'] = $object->getBaseSubtotalCanceled();
        }
        if (null !== $object->getBaseSubtotalInclTax()) {
            $data['base_subtotal_incl_tax'] = $object->getBaseSubtotalInclTax();
        }
        if (null !== $object->getBaseSubtotalInvoiced()) {
            $data['base_subtotal_invoiced'] = $object->getBaseSubtotalInvoiced();
        }
        if (null !== $object->getBaseSubtotalRefunded()) {
            $data['base_subtotal_refunded'] = $object->getBaseSubtotalRefunded();
        }
        if (null !== $object->getBaseTaxAmount()) {
            $data['base_tax_amount'] = $object->getBaseTaxAmount();
        }
        if (null !== $object->getBaseTaxCanceled()) {
            $data['base_tax_canceled'] = $object->getBaseTaxCanceled();
        }
        if (null !== $object->getBaseTaxInvoiced()) {
            $data['base_tax_invoiced'] = $object->getBaseTaxInvoiced();
        }
        if (null !== $object->getBaseTaxRefunded()) {
            $data['base_tax_refunded'] = $object->getBaseTaxRefunded();
        }
        if (null !== $object->getBaseTotalCanceled()) {
            $data['base_total_canceled'] = $object->getBaseTotalCanceled();
        }
        if (null !== $object->getBaseTotalDue()) {
            $data['base_total_due'] = $object->getBaseTotalDue();
        }
        if (null !== $object->getBaseTotalInvoiced()) {
            $data['base_total_invoiced'] = $object->getBaseTotalInvoiced();
        }
        if (null !== $object->getBaseTotalInvoicedCost()) {
            $data['base_total_invoiced_cost'] = $object->getBaseTotalInvoicedCost();
        }
        if (null !== $object->getBaseTotalOfflineRefunded()) {
            $data['base_total_offline_refunded'] = $object->getBaseTotalOfflineRefunded();
        }
        if (null !== $object->getBaseTotalOnlineRefunded()) {
            $data['base_total_online_refunded'] = $object->getBaseTotalOnlineRefunded();
        }
        if (null !== $object->getBaseTotalPaid()) {
            $data['base_total_paid'] = $object->getBaseTotalPaid();
        }
        if (null !== $object->getBaseTotalQtyOrdered()) {
            $data['base_total_qty_ordered'] = $object->getBaseTotalQtyOrdered();
        }
        if (null !== $object->getBaseTotalRefunded()) {
            $data['base_total_refunded'] = $object->getBaseTotalRefunded();
        }
        if (null !== $object->getBaseToGlobalRate()) {
            $data['base_to_global_rate'] = $object->getBaseToGlobalRate();
        }
        if (null !== $object->getBaseToOrderRate()) {
            $data['base_to_order_rate'] = $object->getBaseToOrderRate();
        }
        if (null !== $object->getBillingAddressId()) {
            $data['billing_address_id'] = $object->getBillingAddressId();
        }
        if (null !== $object->getCanShipPartially()) {
            $data['can_ship_partially'] = $object->getCanShipPartially();
        }
        if (null !== $object->getCanShipPartiallyItem()) {
            $data['can_ship_partially_item'] = $object->getCanShipPartiallyItem();
        }
        if (null !== $object->getCouponCode()) {
            $data['coupon_code'] = $object->getCouponCode();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getCustomerDob()) {
            $data['customer_dob'] = $object->getCustomerDob();
        }
        $data['customer_email'] = $object->getCustomerEmail();
        if (null !== $object->getCustomerFirstname()) {
            $data['customer_firstname'] = $object->getCustomerFirstname();
        }
        if (null !== $object->getCustomerGender()) {
            $data['customer_gender'] = $object->getCustomerGender();
        }
        if (null !== $object->getCustomerGroupId()) {
            $data['customer_group_id'] = $object->getCustomerGroupId();
        }
        if (null !== $object->getCustomerId()) {
            $data['customer_id'] = $object->getCustomerId();
        }
        if (null !== $object->getCustomerIsGuest()) {
            $data['customer_is_guest'] = $object->getCustomerIsGuest();
        }
        if (null !== $object->getCustomerLastname()) {
            $data['customer_lastname'] = $object->getCustomerLastname();
        }
        if (null !== $object->getCustomerMiddlename()) {
            $data['customer_middlename'] = $object->getCustomerMiddlename();
        }
        if (null !== $object->getCustomerNote()) {
            $data['customer_note'] = $object->getCustomerNote();
        }
        if (null !== $object->getCustomerNoteNotify()) {
            $data['customer_note_notify'] = $object->getCustomerNoteNotify();
        }
        if (null !== $object->getCustomerPrefix()) {
            $data['customer_prefix'] = $object->getCustomerPrefix();
        }
        if (null !== $object->getCustomerSuffix()) {
            $data['customer_suffix'] = $object->getCustomerSuffix();
        }
        if (null !== $object->getCustomerTaxvat()) {
            $data['customer_taxvat'] = $object->getCustomerTaxvat();
        }
        if (null !== $object->getDiscountAmount()) {
            $data['discount_amount'] = $object->getDiscountAmount();
        }
        if (null !== $object->getDiscountCanceled()) {
            $data['discount_canceled'] = $object->getDiscountCanceled();
        }
        if (null !== $object->getDiscountDescription()) {
            $data['discount_description'] = $object->getDiscountDescription();
        }
        if (null !== $object->getDiscountInvoiced()) {
            $data['discount_invoiced'] = $object->getDiscountInvoiced();
        }
        if (null !== $object->getDiscountRefunded()) {
            $data['discount_refunded'] = $object->getDiscountRefunded();
        }
        if (null !== $object->getEditIncrement()) {
            $data['edit_increment'] = $object->getEditIncrement();
        }
        if (null !== $object->getEmailSent()) {
            $data['email_sent'] = $object->getEmailSent();
        }
        if (null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if (null !== $object->getExtCustomerId()) {
            $data['ext_customer_id'] = $object->getExtCustomerId();
        }
        if (null !== $object->getExtOrderId()) {
            $data['ext_order_id'] = $object->getExtOrderId();
        }
        if (null !== $object->getForcedShipmentWithInvoice()) {
            $data['forced_shipment_with_invoice'] = $object->getForcedShipmentWithInvoice();
        }
        if (null !== $object->getGlobalCurrencyCode()) {
            $data['global_currency_code'] = $object->getGlobalCurrencyCode();
        }
        $data['grand_total'] = $object->getGrandTotal();
        if (null !== $object->getDiscountTaxCompensationAmount()) {
            $data['discount_tax_compensation_amount'] = $object->getDiscountTaxCompensationAmount();
        }
        if (null !== $object->getDiscountTaxCompensationInvoiced()) {
            $data['discount_tax_compensation_invoiced'] = $object->getDiscountTaxCompensationInvoiced();
        }
        if (null !== $object->getDiscountTaxCompensationRefunded()) {
            $data['discount_tax_compensation_refunded'] = $object->getDiscountTaxCompensationRefunded();
        }
        if (null !== $object->getHoldBeforeState()) {
            $data['hold_before_state'] = $object->getHoldBeforeState();
        }
        if (null !== $object->getHoldBeforeStatus()) {
            $data['hold_before_status'] = $object->getHoldBeforeStatus();
        }
        if (null !== $object->getIncrementId()) {
            $data['increment_id'] = $object->getIncrementId();
        }
        if (null !== $object->getIsVirtual()) {
            $data['is_virtual'] = $object->getIsVirtual();
        }
        if (null !== $object->getOrderCurrencyCode()) {
            $data['order_currency_code'] = $object->getOrderCurrencyCode();
        }
        if (null !== $object->getOriginalIncrementId()) {
            $data['original_increment_id'] = $object->getOriginalIncrementId();
        }
        if (null !== $object->getPaymentAuthorizationAmount()) {
            $data['payment_authorization_amount'] = $object->getPaymentAuthorizationAmount();
        }
        if (null !== $object->getPaymentAuthExpiration()) {
            $data['payment_auth_expiration'] = $object->getPaymentAuthExpiration();
        }
        if (null !== $object->getProtectCode()) {
            $data['protect_code'] = $object->getProtectCode();
        }
        if (null !== $object->getQuoteAddressId()) {
            $data['quote_address_id'] = $object->getQuoteAddressId();
        }
        if (null !== $object->getQuoteId()) {
            $data['quote_id'] = $object->getQuoteId();
        }
        if (null !== $object->getRelationChildId()) {
            $data['relation_child_id'] = $object->getRelationChildId();
        }
        if (null !== $object->getRelationChildRealId()) {
            $data['relation_child_real_id'] = $object->getRelationChildRealId();
        }
        if (null !== $object->getRelationParentId()) {
            $data['relation_parent_id'] = $object->getRelationParentId();
        }
        if (null !== $object->getRelationParentRealId()) {
            $data['relation_parent_real_id'] = $object->getRelationParentRealId();
        }
        if (null !== $object->getRemoteIp()) {
            $data['remote_ip'] = $object->getRemoteIp();
        }
        if (null !== $object->getShippingAmount()) {
            $data['shipping_amount'] = $object->getShippingAmount();
        }
        if (null !== $object->getShippingCanceled()) {
            $data['shipping_canceled'] = $object->getShippingCanceled();
        }
        if (null !== $object->getShippingDescription()) {
            $data['shipping_description'] = $object->getShippingDescription();
        }
        if (null !== $object->getShippingDiscountAmount()) {
            $data['shipping_discount_amount'] = $object->getShippingDiscountAmount();
        }
        if (null !== $object->getShippingDiscountTaxCompensationAmount()) {
            $data['shipping_discount_tax_compensation_amount'] = $object->getShippingDiscountTaxCompensationAmount();
        }
        if (null !== $object->getShippingInclTax()) {
            $data['shipping_incl_tax'] = $object->getShippingInclTax();
        }
        if (null !== $object->getShippingInvoiced()) {
            $data['shipping_invoiced'] = $object->getShippingInvoiced();
        }
        if (null !== $object->getShippingRefunded()) {
            $data['shipping_refunded'] = $object->getShippingRefunded();
        }
        if (null !== $object->getShippingTaxAmount()) {
            $data['shipping_tax_amount'] = $object->getShippingTaxAmount();
        }
        if (null !== $object->getShippingTaxRefunded()) {
            $data['shipping_tax_refunded'] = $object->getShippingTaxRefunded();
        }
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getStoreCurrencyCode()) {
            $data['store_currency_code'] = $object->getStoreCurrencyCode();
        }
        if (null !== $object->getStoreId()) {
            $data['store_id'] = $object->getStoreId();
        }
        if (null !== $object->getStoreName()) {
            $data['store_name'] = $object->getStoreName();
        }
        if (null !== $object->getStoreToBaseRate()) {
            $data['store_to_base_rate'] = $object->getStoreToBaseRate();
        }
        if (null !== $object->getStoreToOrderRate()) {
            $data['store_to_order_rate'] = $object->getStoreToOrderRate();
        }
        if (null !== $object->getSubtotal()) {
            $data['subtotal'] = $object->getSubtotal();
        }
        if (null !== $object->getSubtotalCanceled()) {
            $data['subtotal_canceled'] = $object->getSubtotalCanceled();
        }
        if (null !== $object->getSubtotalInclTax()) {
            $data['subtotal_incl_tax'] = $object->getSubtotalInclTax();
        }
        if (null !== $object->getSubtotalInvoiced()) {
            $data['subtotal_invoiced'] = $object->getSubtotalInvoiced();
        }
        if (null !== $object->getSubtotalRefunded()) {
            $data['subtotal_refunded'] = $object->getSubtotalRefunded();
        }
        if (null !== $object->getTaxAmount()) {
            $data['tax_amount'] = $object->getTaxAmount();
        }
        if (null !== $object->getTaxCanceled()) {
            $data['tax_canceled'] = $object->getTaxCanceled();
        }
        if (null !== $object->getTaxInvoiced()) {
            $data['tax_invoiced'] = $object->getTaxInvoiced();
        }
        if (null !== $object->getTaxRefunded()) {
            $data['tax_refunded'] = $object->getTaxRefunded();
        }
        if (null !== $object->getTotalCanceled()) {
            $data['total_canceled'] = $object->getTotalCanceled();
        }
        if (null !== $object->getTotalDue()) {
            $data['total_due'] = $object->getTotalDue();
        }
        if (null !== $object->getTotalInvoiced()) {
            $data['total_invoiced'] = $object->getTotalInvoiced();
        }
        if (null !== $object->getTotalItemCount()) {
            $data['total_item_count'] = $object->getTotalItemCount();
        }
        if (null !== $object->getTotalOfflineRefunded()) {
            $data['total_offline_refunded'] = $object->getTotalOfflineRefunded();
        }
        if (null !== $object->getTotalOnlineRefunded()) {
            $data['total_online_refunded'] = $object->getTotalOnlineRefunded();
        }
        if (null !== $object->getTotalPaid()) {
            $data['total_paid'] = $object->getTotalPaid();
        }
        if (null !== $object->getTotalQtyOrdered()) {
            $data['total_qty_ordered'] = $object->getTotalQtyOrdered();
        }
        if (null !== $object->getTotalRefunded()) {
            $data['total_refunded'] = $object->getTotalRefunded();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if (null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }
        if (null !== $object->getXForwardedFor()) {
            $data['x_forwarded_for'] = $object->getXForwardedFor();
        }
        $values = array();
        foreach ($object->getItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['items'] = $values;
        if (null !== $object->getBillingAddress()) {
            $data['billing_address'] = $this->normalizer->normalize($object->getBillingAddress(), 'json', $context);
        }
        if (null !== $object->getPayment()) {
            $data['payment'] = $this->normalizer->normalize($object->getPayment(), 'json', $context);
        }
        if (null !== $object->getStatusHistories()) {
            $values_1 = array();
            foreach ($object->getStatusHistories() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['status_histories'] = $values_1;
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        return $data;
    }
}
