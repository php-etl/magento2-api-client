<?php

namespace Kiboko\Magento\v2_3\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_3\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalesDataCreditmemoInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\SalesDataCreditmemoInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\SalesDataCreditmemoInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\SalesDataCreditmemoInterface();
        if (\array_key_exists('adjustment', $data) && \is_int($data['adjustment'])) {
            $data['adjustment'] = (float) $data['adjustment'];
        }
        if (\array_key_exists('adjustment_negative', $data) && \is_int($data['adjustment_negative'])) {
            $data['adjustment_negative'] = (float) $data['adjustment_negative'];
        }
        if (\array_key_exists('adjustment_positive', $data) && \is_int($data['adjustment_positive'])) {
            $data['adjustment_positive'] = (float) $data['adjustment_positive'];
        }
        if (\array_key_exists('base_adjustment', $data) && \is_int($data['base_adjustment'])) {
            $data['base_adjustment'] = (float) $data['base_adjustment'];
        }
        if (\array_key_exists('base_adjustment_negative', $data) && \is_int($data['base_adjustment_negative'])) {
            $data['base_adjustment_negative'] = (float) $data['base_adjustment_negative'];
        }
        if (\array_key_exists('base_adjustment_positive', $data) && \is_int($data['base_adjustment_positive'])) {
            $data['base_adjustment_positive'] = (float) $data['base_adjustment_positive'];
        }
        if (\array_key_exists('base_discount_amount', $data) && \is_int($data['base_discount_amount'])) {
            $data['base_discount_amount'] = (float) $data['base_discount_amount'];
        }
        if (\array_key_exists('base_grand_total', $data) && \is_int($data['base_grand_total'])) {
            $data['base_grand_total'] = (float) $data['base_grand_total'];
        }
        if (\array_key_exists('base_discount_tax_compensation_amount', $data) && \is_int($data['base_discount_tax_compensation_amount'])) {
            $data['base_discount_tax_compensation_amount'] = (float) $data['base_discount_tax_compensation_amount'];
        }
        if (\array_key_exists('base_shipping_amount', $data) && \is_int($data['base_shipping_amount'])) {
            $data['base_shipping_amount'] = (float) $data['base_shipping_amount'];
        }
        if (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data) && \is_int($data['base_shipping_discount_tax_compensation_amnt'])) {
            $data['base_shipping_discount_tax_compensation_amnt'] = (float) $data['base_shipping_discount_tax_compensation_amnt'];
        }
        if (\array_key_exists('base_shipping_incl_tax', $data) && \is_int($data['base_shipping_incl_tax'])) {
            $data['base_shipping_incl_tax'] = (float) $data['base_shipping_incl_tax'];
        }
        if (\array_key_exists('base_shipping_tax_amount', $data) && \is_int($data['base_shipping_tax_amount'])) {
            $data['base_shipping_tax_amount'] = (float) $data['base_shipping_tax_amount'];
        }
        if (\array_key_exists('base_subtotal', $data) && \is_int($data['base_subtotal'])) {
            $data['base_subtotal'] = (float) $data['base_subtotal'];
        }
        if (\array_key_exists('base_subtotal_incl_tax', $data) && \is_int($data['base_subtotal_incl_tax'])) {
            $data['base_subtotal_incl_tax'] = (float) $data['base_subtotal_incl_tax'];
        }
        if (\array_key_exists('base_tax_amount', $data) && \is_int($data['base_tax_amount'])) {
            $data['base_tax_amount'] = (float) $data['base_tax_amount'];
        }
        if (\array_key_exists('base_to_global_rate', $data) && \is_int($data['base_to_global_rate'])) {
            $data['base_to_global_rate'] = (float) $data['base_to_global_rate'];
        }
        if (\array_key_exists('base_to_order_rate', $data) && \is_int($data['base_to_order_rate'])) {
            $data['base_to_order_rate'] = (float) $data['base_to_order_rate'];
        }
        if (\array_key_exists('discount_amount', $data) && \is_int($data['discount_amount'])) {
            $data['discount_amount'] = (float) $data['discount_amount'];
        }
        if (\array_key_exists('grand_total', $data) && \is_int($data['grand_total'])) {
            $data['grand_total'] = (float) $data['grand_total'];
        }
        if (\array_key_exists('discount_tax_compensation_amount', $data) && \is_int($data['discount_tax_compensation_amount'])) {
            $data['discount_tax_compensation_amount'] = (float) $data['discount_tax_compensation_amount'];
        }
        if (\array_key_exists('shipping_amount', $data) && \is_int($data['shipping_amount'])) {
            $data['shipping_amount'] = (float) $data['shipping_amount'];
        }
        if (\array_key_exists('shipping_discount_tax_compensation_amount', $data) && \is_int($data['shipping_discount_tax_compensation_amount'])) {
            $data['shipping_discount_tax_compensation_amount'] = (float) $data['shipping_discount_tax_compensation_amount'];
        }
        if (\array_key_exists('shipping_incl_tax', $data) && \is_int($data['shipping_incl_tax'])) {
            $data['shipping_incl_tax'] = (float) $data['shipping_incl_tax'];
        }
        if (\array_key_exists('shipping_tax_amount', $data) && \is_int($data['shipping_tax_amount'])) {
            $data['shipping_tax_amount'] = (float) $data['shipping_tax_amount'];
        }
        if (\array_key_exists('store_to_base_rate', $data) && \is_int($data['store_to_base_rate'])) {
            $data['store_to_base_rate'] = (float) $data['store_to_base_rate'];
        }
        if (\array_key_exists('store_to_order_rate', $data) && \is_int($data['store_to_order_rate'])) {
            $data['store_to_order_rate'] = (float) $data['store_to_order_rate'];
        }
        if (\array_key_exists('subtotal', $data) && \is_int($data['subtotal'])) {
            $data['subtotal'] = (float) $data['subtotal'];
        }
        if (\array_key_exists('subtotal_incl_tax', $data) && \is_int($data['subtotal_incl_tax'])) {
            $data['subtotal_incl_tax'] = (float) $data['subtotal_incl_tax'];
        }
        if (\array_key_exists('tax_amount', $data) && \is_int($data['tax_amount'])) {
            $data['tax_amount'] = (float) $data['tax_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('adjustment', $data)) {
            $object->setAdjustment($data['adjustment']);
        }
        if (\array_key_exists('adjustment_negative', $data)) {
            $object->setAdjustmentNegative($data['adjustment_negative']);
        }
        if (\array_key_exists('adjustment_positive', $data)) {
            $object->setAdjustmentPositive($data['adjustment_positive']);
        }
        if (\array_key_exists('base_adjustment', $data)) {
            $object->setBaseAdjustment($data['base_adjustment']);
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
        if (\array_key_exists('base_grand_total', $data)) {
            $object->setBaseGrandTotal($data['base_grand_total']);
        }
        if (\array_key_exists('base_discount_tax_compensation_amount', $data)) {
            $object->setBaseDiscountTaxCompensationAmount($data['base_discount_tax_compensation_amount']);
        }
        if (\array_key_exists('base_shipping_amount', $data)) {
            $object->setBaseShippingAmount($data['base_shipping_amount']);
        }
        if (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data)) {
            $object->setBaseShippingDiscountTaxCompensationAmnt($data['base_shipping_discount_tax_compensation_amnt']);
        }
        if (\array_key_exists('base_shipping_incl_tax', $data)) {
            $object->setBaseShippingInclTax($data['base_shipping_incl_tax']);
        }
        if (\array_key_exists('base_shipping_tax_amount', $data)) {
            $object->setBaseShippingTaxAmount($data['base_shipping_tax_amount']);
        }
        if (\array_key_exists('base_subtotal', $data)) {
            $object->setBaseSubtotal($data['base_subtotal']);
        }
        if (\array_key_exists('base_subtotal_incl_tax', $data)) {
            $object->setBaseSubtotalInclTax($data['base_subtotal_incl_tax']);
        }
        if (\array_key_exists('base_tax_amount', $data)) {
            $object->setBaseTaxAmount($data['base_tax_amount']);
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
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('creditmemo_status', $data)) {
            $object->setCreditmemoStatus($data['creditmemo_status']);
        }
        if (\array_key_exists('discount_amount', $data)) {
            $object->setDiscountAmount($data['discount_amount']);
        }
        if (\array_key_exists('discount_description', $data)) {
            $object->setDiscountDescription($data['discount_description']);
        }
        if (\array_key_exists('email_sent', $data)) {
            $object->setEmailSent($data['email_sent']);
        }
        if (\array_key_exists('entity_id', $data)) {
            $object->setEntityId($data['entity_id']);
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
        if (\array_key_exists('increment_id', $data)) {
            $object->setIncrementId($data['increment_id']);
        }
        if (\array_key_exists('invoice_id', $data)) {
            $object->setInvoiceId($data['invoice_id']);
        }
        if (\array_key_exists('order_currency_code', $data)) {
            $object->setOrderCurrencyCode($data['order_currency_code']);
        }
        if (\array_key_exists('order_id', $data)) {
            $object->setOrderId($data['order_id']);
        }
        if (\array_key_exists('shipping_address_id', $data)) {
            $object->setShippingAddressId($data['shipping_address_id']);
        }
        if (\array_key_exists('shipping_amount', $data)) {
            $object->setShippingAmount($data['shipping_amount']);
        }
        if (\array_key_exists('shipping_discount_tax_compensation_amount', $data)) {
            $object->setShippingDiscountTaxCompensationAmount($data['shipping_discount_tax_compensation_amount']);
        }
        if (\array_key_exists('shipping_incl_tax', $data)) {
            $object->setShippingInclTax($data['shipping_incl_tax']);
        }
        if (\array_key_exists('shipping_tax_amount', $data)) {
            $object->setShippingTaxAmount($data['shipping_tax_amount']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('store_currency_code', $data)) {
            $object->setStoreCurrencyCode($data['store_currency_code']);
        }
        if (\array_key_exists('store_id', $data)) {
            $object->setStoreId($data['store_id']);
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
        if (\array_key_exists('subtotal_incl_tax', $data)) {
            $object->setSubtotalInclTax($data['subtotal_incl_tax']);
        }
        if (\array_key_exists('tax_amount', $data)) {
            $object->setTaxAmount($data['tax_amount']);
        }
        if (\array_key_exists('transaction_id', $data)) {
            $object->setTransactionId($data['transaction_id']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (\array_key_exists('items', $data)) {
            $values = array();
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_3\\Model\\SalesDataCreditmemoItemInterface', 'json', $context);
            }
            $object->setItems($values);
        }
        if (\array_key_exists('comments', $data)) {
            $values_1 = array();
            foreach ($data['comments'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\v2_3\\Model\\SalesDataCreditmemoCommentInterface', 'json', $context);
            }
            $object->setComments($values_1);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\v2_3\\Model\\SalesDataCreditmemoExtensionInterface', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdjustment()) {
            $data['adjustment'] = $object->getAdjustment();
        }
        if (null !== $object->getAdjustmentNegative()) {
            $data['adjustment_negative'] = $object->getAdjustmentNegative();
        }
        if (null !== $object->getAdjustmentPositive()) {
            $data['adjustment_positive'] = $object->getAdjustmentPositive();
        }
        if (null !== $object->getBaseAdjustment()) {
            $data['base_adjustment'] = $object->getBaseAdjustment();
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
        if (null !== $object->getBaseGrandTotal()) {
            $data['base_grand_total'] = $object->getBaseGrandTotal();
        }
        if (null !== $object->getBaseDiscountTaxCompensationAmount()) {
            $data['base_discount_tax_compensation_amount'] = $object->getBaseDiscountTaxCompensationAmount();
        }
        if (null !== $object->getBaseShippingAmount()) {
            $data['base_shipping_amount'] = $object->getBaseShippingAmount();
        }
        if (null !== $object->getBaseShippingDiscountTaxCompensationAmnt()) {
            $data['base_shipping_discount_tax_compensation_amnt'] = $object->getBaseShippingDiscountTaxCompensationAmnt();
        }
        if (null !== $object->getBaseShippingInclTax()) {
            $data['base_shipping_incl_tax'] = $object->getBaseShippingInclTax();
        }
        if (null !== $object->getBaseShippingTaxAmount()) {
            $data['base_shipping_tax_amount'] = $object->getBaseShippingTaxAmount();
        }
        if (null !== $object->getBaseSubtotal()) {
            $data['base_subtotal'] = $object->getBaseSubtotal();
        }
        if (null !== $object->getBaseSubtotalInclTax()) {
            $data['base_subtotal_incl_tax'] = $object->getBaseSubtotalInclTax();
        }
        if (null !== $object->getBaseTaxAmount()) {
            $data['base_tax_amount'] = $object->getBaseTaxAmount();
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
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getCreditmemoStatus()) {
            $data['creditmemo_status'] = $object->getCreditmemoStatus();
        }
        if (null !== $object->getDiscountAmount()) {
            $data['discount_amount'] = $object->getDiscountAmount();
        }
        if (null !== $object->getDiscountDescription()) {
            $data['discount_description'] = $object->getDiscountDescription();
        }
        if (null !== $object->getEmailSent()) {
            $data['email_sent'] = $object->getEmailSent();
        }
        if (null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if (null !== $object->getGlobalCurrencyCode()) {
            $data['global_currency_code'] = $object->getGlobalCurrencyCode();
        }
        if (null !== $object->getGrandTotal()) {
            $data['grand_total'] = $object->getGrandTotal();
        }
        if (null !== $object->getDiscountTaxCompensationAmount()) {
            $data['discount_tax_compensation_amount'] = $object->getDiscountTaxCompensationAmount();
        }
        if (null !== $object->getIncrementId()) {
            $data['increment_id'] = $object->getIncrementId();
        }
        if (null !== $object->getInvoiceId()) {
            $data['invoice_id'] = $object->getInvoiceId();
        }
        if (null !== $object->getOrderCurrencyCode()) {
            $data['order_currency_code'] = $object->getOrderCurrencyCode();
        }
        $data['order_id'] = $object->getOrderId();
        if (null !== $object->getShippingAddressId()) {
            $data['shipping_address_id'] = $object->getShippingAddressId();
        }
        if (null !== $object->getShippingAmount()) {
            $data['shipping_amount'] = $object->getShippingAmount();
        }
        if (null !== $object->getShippingDiscountTaxCompensationAmount()) {
            $data['shipping_discount_tax_compensation_amount'] = $object->getShippingDiscountTaxCompensationAmount();
        }
        if (null !== $object->getShippingInclTax()) {
            $data['shipping_incl_tax'] = $object->getShippingInclTax();
        }
        if (null !== $object->getShippingTaxAmount()) {
            $data['shipping_tax_amount'] = $object->getShippingTaxAmount();
        }
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if (null !== $object->getStoreCurrencyCode()) {
            $data['store_currency_code'] = $object->getStoreCurrencyCode();
        }
        if (null !== $object->getStoreId()) {
            $data['store_id'] = $object->getStoreId();
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
        if (null !== $object->getSubtotalInclTax()) {
            $data['subtotal_incl_tax'] = $object->getSubtotalInclTax();
        }
        if (null !== $object->getTaxAmount()) {
            $data['tax_amount'] = $object->getTaxAmount();
        }
        if (null !== $object->getTransactionId()) {
            $data['transaction_id'] = $object->getTransactionId();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        $values = array();
        foreach ($object->getItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['items'] = $values;
        if (null !== $object->getComments()) {
            $values_1 = array();
            foreach ($object->getComments() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['comments'] = $values_1;
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        return $data;
    }
}
