<?php

namespace Kiboko\Magento\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\Runtime\Normalizer\CheckArray;
use Kiboko\Magento\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SalesDataInvoiceInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\SalesDataInvoiceInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\SalesDataInvoiceInterface';
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
        $object = new \Kiboko\Magento\Model\SalesDataInvoiceInterface();
        if (\array_key_exists('base_discount_amount', $data) && \is_int($data['base_discount_amount'])) {
            $data['base_discount_amount'] = (double) $data['base_discount_amount'];
        }
        if (\array_key_exists('base_grand_total', $data) && \is_int($data['base_grand_total'])) {
            $data['base_grand_total'] = (double) $data['base_grand_total'];
        }
        if (\array_key_exists('base_discount_tax_compensation_amount', $data) && \is_int($data['base_discount_tax_compensation_amount'])) {
            $data['base_discount_tax_compensation_amount'] = (double) $data['base_discount_tax_compensation_amount'];
        }
        if (\array_key_exists('base_shipping_amount', $data) && \is_int($data['base_shipping_amount'])) {
            $data['base_shipping_amount'] = (double) $data['base_shipping_amount'];
        }
        if (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data) && \is_int($data['base_shipping_discount_tax_compensation_amnt'])) {
            $data['base_shipping_discount_tax_compensation_amnt'] = (double) $data['base_shipping_discount_tax_compensation_amnt'];
        }
        if (\array_key_exists('base_shipping_incl_tax', $data) && \is_int($data['base_shipping_incl_tax'])) {
            $data['base_shipping_incl_tax'] = (double) $data['base_shipping_incl_tax'];
        }
        if (\array_key_exists('base_shipping_tax_amount', $data) && \is_int($data['base_shipping_tax_amount'])) {
            $data['base_shipping_tax_amount'] = (double) $data['base_shipping_tax_amount'];
        }
        if (\array_key_exists('base_subtotal', $data) && \is_int($data['base_subtotal'])) {
            $data['base_subtotal'] = (double) $data['base_subtotal'];
        }
        if (\array_key_exists('base_subtotal_incl_tax', $data) && \is_int($data['base_subtotal_incl_tax'])) {
            $data['base_subtotal_incl_tax'] = (double) $data['base_subtotal_incl_tax'];
        }
        if (\array_key_exists('base_tax_amount', $data) && \is_int($data['base_tax_amount'])) {
            $data['base_tax_amount'] = (double) $data['base_tax_amount'];
        }
        if (\array_key_exists('base_total_refunded', $data) && \is_int($data['base_total_refunded'])) {
            $data['base_total_refunded'] = (double) $data['base_total_refunded'];
        }
        if (\array_key_exists('base_to_global_rate', $data) && \is_int($data['base_to_global_rate'])) {
            $data['base_to_global_rate'] = (double) $data['base_to_global_rate'];
        }
        if (\array_key_exists('base_to_order_rate', $data) && \is_int($data['base_to_order_rate'])) {
            $data['base_to_order_rate'] = (double) $data['base_to_order_rate'];
        }
        if (\array_key_exists('discount_amount', $data) && \is_int($data['discount_amount'])) {
            $data['discount_amount'] = (double) $data['discount_amount'];
        }
        if (\array_key_exists('grand_total', $data) && \is_int($data['grand_total'])) {
            $data['grand_total'] = (double) $data['grand_total'];
        }
        if (\array_key_exists('discount_tax_compensation_amount', $data) && \is_int($data['discount_tax_compensation_amount'])) {
            $data['discount_tax_compensation_amount'] = (double) $data['discount_tax_compensation_amount'];
        }
        if (\array_key_exists('shipping_amount', $data) && \is_int($data['shipping_amount'])) {
            $data['shipping_amount'] = (double) $data['shipping_amount'];
        }
        if (\array_key_exists('shipping_discount_tax_compensation_amount', $data) && \is_int($data['shipping_discount_tax_compensation_amount'])) {
            $data['shipping_discount_tax_compensation_amount'] = (double) $data['shipping_discount_tax_compensation_amount'];
        }
        if (\array_key_exists('shipping_incl_tax', $data) && \is_int($data['shipping_incl_tax'])) {
            $data['shipping_incl_tax'] = (double) $data['shipping_incl_tax'];
        }
        if (\array_key_exists('shipping_tax_amount', $data) && \is_int($data['shipping_tax_amount'])) {
            $data['shipping_tax_amount'] = (double) $data['shipping_tax_amount'];
        }
        if (\array_key_exists('store_to_base_rate', $data) && \is_int($data['store_to_base_rate'])) {
            $data['store_to_base_rate'] = (double) $data['store_to_base_rate'];
        }
        if (\array_key_exists('store_to_order_rate', $data) && \is_int($data['store_to_order_rate'])) {
            $data['store_to_order_rate'] = (double) $data['store_to_order_rate'];
        }
        if (\array_key_exists('subtotal', $data) && \is_int($data['subtotal'])) {
            $data['subtotal'] = (double) $data['subtotal'];
        }
        if (\array_key_exists('subtotal_incl_tax', $data) && \is_int($data['subtotal_incl_tax'])) {
            $data['subtotal_incl_tax'] = (double) $data['subtotal_incl_tax'];
        }
        if (\array_key_exists('tax_amount', $data) && \is_int($data['tax_amount'])) {
            $data['tax_amount'] = (double) $data['tax_amount'];
        }
        if (\array_key_exists('total_qty', $data) && \is_int($data['total_qty'])) {
            $data['total_qty'] = (double) $data['total_qty'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('base_currency_code', $data) && $data['base_currency_code'] !== null) {
            $object->setBaseCurrencyCode($data['base_currency_code']);
        }
        elseif (\array_key_exists('base_currency_code', $data) && $data['base_currency_code'] === null) {
            $object->setBaseCurrencyCode(null);
        }
        if (\array_key_exists('base_discount_amount', $data) && $data['base_discount_amount'] !== null) {
            $object->setBaseDiscountAmount($data['base_discount_amount']);
        }
        elseif (\array_key_exists('base_discount_amount', $data) && $data['base_discount_amount'] === null) {
            $object->setBaseDiscountAmount(null);
        }
        if (\array_key_exists('base_grand_total', $data) && $data['base_grand_total'] !== null) {
            $object->setBaseGrandTotal($data['base_grand_total']);
        }
        elseif (\array_key_exists('base_grand_total', $data) && $data['base_grand_total'] === null) {
            $object->setBaseGrandTotal(null);
        }
        if (\array_key_exists('base_discount_tax_compensation_amount', $data) && $data['base_discount_tax_compensation_amount'] !== null) {
            $object->setBaseDiscountTaxCompensationAmount($data['base_discount_tax_compensation_amount']);
        }
        elseif (\array_key_exists('base_discount_tax_compensation_amount', $data) && $data['base_discount_tax_compensation_amount'] === null) {
            $object->setBaseDiscountTaxCompensationAmount(null);
        }
        if (\array_key_exists('base_shipping_amount', $data) && $data['base_shipping_amount'] !== null) {
            $object->setBaseShippingAmount($data['base_shipping_amount']);
        }
        elseif (\array_key_exists('base_shipping_amount', $data) && $data['base_shipping_amount'] === null) {
            $object->setBaseShippingAmount(null);
        }
        if (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data) && $data['base_shipping_discount_tax_compensation_amnt'] !== null) {
            $object->setBaseShippingDiscountTaxCompensationAmnt($data['base_shipping_discount_tax_compensation_amnt']);
        }
        elseif (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data) && $data['base_shipping_discount_tax_compensation_amnt'] === null) {
            $object->setBaseShippingDiscountTaxCompensationAmnt(null);
        }
        if (\array_key_exists('base_shipping_incl_tax', $data) && $data['base_shipping_incl_tax'] !== null) {
            $object->setBaseShippingInclTax($data['base_shipping_incl_tax']);
        }
        elseif (\array_key_exists('base_shipping_incl_tax', $data) && $data['base_shipping_incl_tax'] === null) {
            $object->setBaseShippingInclTax(null);
        }
        if (\array_key_exists('base_shipping_tax_amount', $data) && $data['base_shipping_tax_amount'] !== null) {
            $object->setBaseShippingTaxAmount($data['base_shipping_tax_amount']);
        }
        elseif (\array_key_exists('base_shipping_tax_amount', $data) && $data['base_shipping_tax_amount'] === null) {
            $object->setBaseShippingTaxAmount(null);
        }
        if (\array_key_exists('base_subtotal', $data) && $data['base_subtotal'] !== null) {
            $object->setBaseSubtotal($data['base_subtotal']);
        }
        elseif (\array_key_exists('base_subtotal', $data) && $data['base_subtotal'] === null) {
            $object->setBaseSubtotal(null);
        }
        if (\array_key_exists('base_subtotal_incl_tax', $data) && $data['base_subtotal_incl_tax'] !== null) {
            $object->setBaseSubtotalInclTax($data['base_subtotal_incl_tax']);
        }
        elseif (\array_key_exists('base_subtotal_incl_tax', $data) && $data['base_subtotal_incl_tax'] === null) {
            $object->setBaseSubtotalInclTax(null);
        }
        if (\array_key_exists('base_tax_amount', $data) && $data['base_tax_amount'] !== null) {
            $object->setBaseTaxAmount($data['base_tax_amount']);
        }
        elseif (\array_key_exists('base_tax_amount', $data) && $data['base_tax_amount'] === null) {
            $object->setBaseTaxAmount(null);
        }
        if (\array_key_exists('base_total_refunded', $data) && $data['base_total_refunded'] !== null) {
            $object->setBaseTotalRefunded($data['base_total_refunded']);
        }
        elseif (\array_key_exists('base_total_refunded', $data) && $data['base_total_refunded'] === null) {
            $object->setBaseTotalRefunded(null);
        }
        if (\array_key_exists('base_to_global_rate', $data) && $data['base_to_global_rate'] !== null) {
            $object->setBaseToGlobalRate($data['base_to_global_rate']);
        }
        elseif (\array_key_exists('base_to_global_rate', $data) && $data['base_to_global_rate'] === null) {
            $object->setBaseToGlobalRate(null);
        }
        if (\array_key_exists('base_to_order_rate', $data) && $data['base_to_order_rate'] !== null) {
            $object->setBaseToOrderRate($data['base_to_order_rate']);
        }
        elseif (\array_key_exists('base_to_order_rate', $data) && $data['base_to_order_rate'] === null) {
            $object->setBaseToOrderRate(null);
        }
        if (\array_key_exists('billing_address_id', $data) && $data['billing_address_id'] !== null) {
            $object->setBillingAddressId($data['billing_address_id']);
        }
        elseif (\array_key_exists('billing_address_id', $data) && $data['billing_address_id'] === null) {
            $object->setBillingAddressId(null);
        }
        if (\array_key_exists('can_void_flag', $data) && $data['can_void_flag'] !== null) {
            $object->setCanVoidFlag($data['can_void_flag']);
        }
        elseif (\array_key_exists('can_void_flag', $data) && $data['can_void_flag'] === null) {
            $object->setCanVoidFlag(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt($data['created_at']);
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('discount_amount', $data) && $data['discount_amount'] !== null) {
            $object->setDiscountAmount($data['discount_amount']);
        }
        elseif (\array_key_exists('discount_amount', $data) && $data['discount_amount'] === null) {
            $object->setDiscountAmount(null);
        }
        if (\array_key_exists('discount_description', $data) && $data['discount_description'] !== null) {
            $object->setDiscountDescription($data['discount_description']);
        }
        elseif (\array_key_exists('discount_description', $data) && $data['discount_description'] === null) {
            $object->setDiscountDescription(null);
        }
        if (\array_key_exists('email_sent', $data) && $data['email_sent'] !== null) {
            $object->setEmailSent($data['email_sent']);
        }
        elseif (\array_key_exists('email_sent', $data) && $data['email_sent'] === null) {
            $object->setEmailSent(null);
        }
        if (\array_key_exists('entity_id', $data) && $data['entity_id'] !== null) {
            $object->setEntityId($data['entity_id']);
        }
        elseif (\array_key_exists('entity_id', $data) && $data['entity_id'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('global_currency_code', $data) && $data['global_currency_code'] !== null) {
            $object->setGlobalCurrencyCode($data['global_currency_code']);
        }
        elseif (\array_key_exists('global_currency_code', $data) && $data['global_currency_code'] === null) {
            $object->setGlobalCurrencyCode(null);
        }
        if (\array_key_exists('grand_total', $data) && $data['grand_total'] !== null) {
            $object->setGrandTotal($data['grand_total']);
        }
        elseif (\array_key_exists('grand_total', $data) && $data['grand_total'] === null) {
            $object->setGrandTotal(null);
        }
        if (\array_key_exists('discount_tax_compensation_amount', $data) && $data['discount_tax_compensation_amount'] !== null) {
            $object->setDiscountTaxCompensationAmount($data['discount_tax_compensation_amount']);
        }
        elseif (\array_key_exists('discount_tax_compensation_amount', $data) && $data['discount_tax_compensation_amount'] === null) {
            $object->setDiscountTaxCompensationAmount(null);
        }
        if (\array_key_exists('increment_id', $data) && $data['increment_id'] !== null) {
            $object->setIncrementId($data['increment_id']);
        }
        elseif (\array_key_exists('increment_id', $data) && $data['increment_id'] === null) {
            $object->setIncrementId(null);
        }
        if (\array_key_exists('is_used_for_refund', $data) && $data['is_used_for_refund'] !== null) {
            $object->setIsUsedForRefund($data['is_used_for_refund']);
        }
        elseif (\array_key_exists('is_used_for_refund', $data) && $data['is_used_for_refund'] === null) {
            $object->setIsUsedForRefund(null);
        }
        if (\array_key_exists('order_currency_code', $data) && $data['order_currency_code'] !== null) {
            $object->setOrderCurrencyCode($data['order_currency_code']);
        }
        elseif (\array_key_exists('order_currency_code', $data) && $data['order_currency_code'] === null) {
            $object->setOrderCurrencyCode(null);
        }
        if (\array_key_exists('order_id', $data) && $data['order_id'] !== null) {
            $object->setOrderId($data['order_id']);
        }
        elseif (\array_key_exists('order_id', $data) && $data['order_id'] === null) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('shipping_address_id', $data) && $data['shipping_address_id'] !== null) {
            $object->setShippingAddressId($data['shipping_address_id']);
        }
        elseif (\array_key_exists('shipping_address_id', $data) && $data['shipping_address_id'] === null) {
            $object->setShippingAddressId(null);
        }
        if (\array_key_exists('shipping_amount', $data) && $data['shipping_amount'] !== null) {
            $object->setShippingAmount($data['shipping_amount']);
        }
        elseif (\array_key_exists('shipping_amount', $data) && $data['shipping_amount'] === null) {
            $object->setShippingAmount(null);
        }
        if (\array_key_exists('shipping_discount_tax_compensation_amount', $data) && $data['shipping_discount_tax_compensation_amount'] !== null) {
            $object->setShippingDiscountTaxCompensationAmount($data['shipping_discount_tax_compensation_amount']);
        }
        elseif (\array_key_exists('shipping_discount_tax_compensation_amount', $data) && $data['shipping_discount_tax_compensation_amount'] === null) {
            $object->setShippingDiscountTaxCompensationAmount(null);
        }
        if (\array_key_exists('shipping_incl_tax', $data) && $data['shipping_incl_tax'] !== null) {
            $object->setShippingInclTax($data['shipping_incl_tax']);
        }
        elseif (\array_key_exists('shipping_incl_tax', $data) && $data['shipping_incl_tax'] === null) {
            $object->setShippingInclTax(null);
        }
        if (\array_key_exists('shipping_tax_amount', $data) && $data['shipping_tax_amount'] !== null) {
            $object->setShippingTaxAmount($data['shipping_tax_amount']);
        }
        elseif (\array_key_exists('shipping_tax_amount', $data) && $data['shipping_tax_amount'] === null) {
            $object->setShippingTaxAmount(null);
        }
        if (\array_key_exists('state', $data) && $data['state'] !== null) {
            $object->setState($data['state']);
        }
        elseif (\array_key_exists('state', $data) && $data['state'] === null) {
            $object->setState(null);
        }
        if (\array_key_exists('store_currency_code', $data) && $data['store_currency_code'] !== null) {
            $object->setStoreCurrencyCode($data['store_currency_code']);
        }
        elseif (\array_key_exists('store_currency_code', $data) && $data['store_currency_code'] === null) {
            $object->setStoreCurrencyCode(null);
        }
        if (\array_key_exists('store_id', $data) && $data['store_id'] !== null) {
            $object->setStoreId($data['store_id']);
        }
        elseif (\array_key_exists('store_id', $data) && $data['store_id'] === null) {
            $object->setStoreId(null);
        }
        if (\array_key_exists('store_to_base_rate', $data) && $data['store_to_base_rate'] !== null) {
            $object->setStoreToBaseRate($data['store_to_base_rate']);
        }
        elseif (\array_key_exists('store_to_base_rate', $data) && $data['store_to_base_rate'] === null) {
            $object->setStoreToBaseRate(null);
        }
        if (\array_key_exists('store_to_order_rate', $data) && $data['store_to_order_rate'] !== null) {
            $object->setStoreToOrderRate($data['store_to_order_rate']);
        }
        elseif (\array_key_exists('store_to_order_rate', $data) && $data['store_to_order_rate'] === null) {
            $object->setStoreToOrderRate(null);
        }
        if (\array_key_exists('subtotal', $data) && $data['subtotal'] !== null) {
            $object->setSubtotal($data['subtotal']);
        }
        elseif (\array_key_exists('subtotal', $data) && $data['subtotal'] === null) {
            $object->setSubtotal(null);
        }
        if (\array_key_exists('subtotal_incl_tax', $data) && $data['subtotal_incl_tax'] !== null) {
            $object->setSubtotalInclTax($data['subtotal_incl_tax']);
        }
        elseif (\array_key_exists('subtotal_incl_tax', $data) && $data['subtotal_incl_tax'] === null) {
            $object->setSubtotalInclTax(null);
        }
        if (\array_key_exists('tax_amount', $data) && $data['tax_amount'] !== null) {
            $object->setTaxAmount($data['tax_amount']);
        }
        elseif (\array_key_exists('tax_amount', $data) && $data['tax_amount'] === null) {
            $object->setTaxAmount(null);
        }
        if (\array_key_exists('total_qty', $data) && $data['total_qty'] !== null) {
            $object->setTotalQty($data['total_qty']);
        }
        elseif (\array_key_exists('total_qty', $data) && $data['total_qty'] === null) {
            $object->setTotalQty(null);
        }
        if (\array_key_exists('transaction_id', $data) && $data['transaction_id'] !== null) {
            $object->setTransactionId($data['transaction_id']);
        }
        elseif (\array_key_exists('transaction_id', $data) && $data['transaction_id'] === null) {
            $object->setTransactionId(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt($data['updated_at']);
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values = array();
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\SalesDataInvoiceItemInterface', 'json', $context);
            }
            $object->setItems($values);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
            $values_1 = array();
            foreach ($data['comments'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\Model\\SalesDataInvoiceCommentInterface', 'json', $context);
            }
            $object->setComments($values_1);
        }
        elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
            $object->setComments(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('baseCurrencyCode') && null !== $object->getBaseCurrencyCode()) {
            $data['base_currency_code'] = $object->getBaseCurrencyCode();
        }
        if ($object->isInitialized('baseDiscountAmount') && null !== $object->getBaseDiscountAmount()) {
            $data['base_discount_amount'] = $object->getBaseDiscountAmount();
        }
        if ($object->isInitialized('baseGrandTotal') && null !== $object->getBaseGrandTotal()) {
            $data['base_grand_total'] = $object->getBaseGrandTotal();
        }
        if ($object->isInitialized('baseDiscountTaxCompensationAmount') && null !== $object->getBaseDiscountTaxCompensationAmount()) {
            $data['base_discount_tax_compensation_amount'] = $object->getBaseDiscountTaxCompensationAmount();
        }
        if ($object->isInitialized('baseShippingAmount') && null !== $object->getBaseShippingAmount()) {
            $data['base_shipping_amount'] = $object->getBaseShippingAmount();
        }
        if ($object->isInitialized('baseShippingDiscountTaxCompensationAmnt') && null !== $object->getBaseShippingDiscountTaxCompensationAmnt()) {
            $data['base_shipping_discount_tax_compensation_amnt'] = $object->getBaseShippingDiscountTaxCompensationAmnt();
        }
        if ($object->isInitialized('baseShippingInclTax') && null !== $object->getBaseShippingInclTax()) {
            $data['base_shipping_incl_tax'] = $object->getBaseShippingInclTax();
        }
        if ($object->isInitialized('baseShippingTaxAmount') && null !== $object->getBaseShippingTaxAmount()) {
            $data['base_shipping_tax_amount'] = $object->getBaseShippingTaxAmount();
        }
        if ($object->isInitialized('baseSubtotal') && null !== $object->getBaseSubtotal()) {
            $data['base_subtotal'] = $object->getBaseSubtotal();
        }
        if ($object->isInitialized('baseSubtotalInclTax') && null !== $object->getBaseSubtotalInclTax()) {
            $data['base_subtotal_incl_tax'] = $object->getBaseSubtotalInclTax();
        }
        if ($object->isInitialized('baseTaxAmount') && null !== $object->getBaseTaxAmount()) {
            $data['base_tax_amount'] = $object->getBaseTaxAmount();
        }
        if ($object->isInitialized('baseTotalRefunded') && null !== $object->getBaseTotalRefunded()) {
            $data['base_total_refunded'] = $object->getBaseTotalRefunded();
        }
        if ($object->isInitialized('baseToGlobalRate') && null !== $object->getBaseToGlobalRate()) {
            $data['base_to_global_rate'] = $object->getBaseToGlobalRate();
        }
        if ($object->isInitialized('baseToOrderRate') && null !== $object->getBaseToOrderRate()) {
            $data['base_to_order_rate'] = $object->getBaseToOrderRate();
        }
        if ($object->isInitialized('billingAddressId') && null !== $object->getBillingAddressId()) {
            $data['billing_address_id'] = $object->getBillingAddressId();
        }
        if ($object->isInitialized('canVoidFlag') && null !== $object->getCanVoidFlag()) {
            $data['can_void_flag'] = $object->getCanVoidFlag();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('discountAmount') && null !== $object->getDiscountAmount()) {
            $data['discount_amount'] = $object->getDiscountAmount();
        }
        if ($object->isInitialized('discountDescription') && null !== $object->getDiscountDescription()) {
            $data['discount_description'] = $object->getDiscountDescription();
        }
        if ($object->isInitialized('emailSent') && null !== $object->getEmailSent()) {
            $data['email_sent'] = $object->getEmailSent();
        }
        if ($object->isInitialized('entityId') && null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if ($object->isInitialized('globalCurrencyCode') && null !== $object->getGlobalCurrencyCode()) {
            $data['global_currency_code'] = $object->getGlobalCurrencyCode();
        }
        if ($object->isInitialized('grandTotal') && null !== $object->getGrandTotal()) {
            $data['grand_total'] = $object->getGrandTotal();
        }
        if ($object->isInitialized('discountTaxCompensationAmount') && null !== $object->getDiscountTaxCompensationAmount()) {
            $data['discount_tax_compensation_amount'] = $object->getDiscountTaxCompensationAmount();
        }
        if ($object->isInitialized('incrementId') && null !== $object->getIncrementId()) {
            $data['increment_id'] = $object->getIncrementId();
        }
        if ($object->isInitialized('isUsedForRefund') && null !== $object->getIsUsedForRefund()) {
            $data['is_used_for_refund'] = $object->getIsUsedForRefund();
        }
        if ($object->isInitialized('orderCurrencyCode') && null !== $object->getOrderCurrencyCode()) {
            $data['order_currency_code'] = $object->getOrderCurrencyCode();
        }
        $data['order_id'] = $object->getOrderId();
        if ($object->isInitialized('shippingAddressId') && null !== $object->getShippingAddressId()) {
            $data['shipping_address_id'] = $object->getShippingAddressId();
        }
        if ($object->isInitialized('shippingAmount') && null !== $object->getShippingAmount()) {
            $data['shipping_amount'] = $object->getShippingAmount();
        }
        if ($object->isInitialized('shippingDiscountTaxCompensationAmount') && null !== $object->getShippingDiscountTaxCompensationAmount()) {
            $data['shipping_discount_tax_compensation_amount'] = $object->getShippingDiscountTaxCompensationAmount();
        }
        if ($object->isInitialized('shippingInclTax') && null !== $object->getShippingInclTax()) {
            $data['shipping_incl_tax'] = $object->getShippingInclTax();
        }
        if ($object->isInitialized('shippingTaxAmount') && null !== $object->getShippingTaxAmount()) {
            $data['shipping_tax_amount'] = $object->getShippingTaxAmount();
        }
        if ($object->isInitialized('state') && null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if ($object->isInitialized('storeCurrencyCode') && null !== $object->getStoreCurrencyCode()) {
            $data['store_currency_code'] = $object->getStoreCurrencyCode();
        }
        if ($object->isInitialized('storeId') && null !== $object->getStoreId()) {
            $data['store_id'] = $object->getStoreId();
        }
        if ($object->isInitialized('storeToBaseRate') && null !== $object->getStoreToBaseRate()) {
            $data['store_to_base_rate'] = $object->getStoreToBaseRate();
        }
        if ($object->isInitialized('storeToOrderRate') && null !== $object->getStoreToOrderRate()) {
            $data['store_to_order_rate'] = $object->getStoreToOrderRate();
        }
        if ($object->isInitialized('subtotal') && null !== $object->getSubtotal()) {
            $data['subtotal'] = $object->getSubtotal();
        }
        if ($object->isInitialized('subtotalInclTax') && null !== $object->getSubtotalInclTax()) {
            $data['subtotal_incl_tax'] = $object->getSubtotalInclTax();
        }
        if ($object->isInitialized('taxAmount') && null !== $object->getTaxAmount()) {
            $data['tax_amount'] = $object->getTaxAmount();
        }
        $data['total_qty'] = $object->getTotalQty();
        if ($object->isInitialized('transactionId') && null !== $object->getTransactionId()) {
            $data['transaction_id'] = $object->getTransactionId();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        $values = array();
        foreach ($object->getItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['items'] = $values;
        if ($object->isInitialized('comments') && null !== $object->getComments()) {
            $values_1 = array();
            foreach ($object->getComments() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['comments'] = $values_1;
        }
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\SalesDataInvoiceInterface' => false);
    }
}