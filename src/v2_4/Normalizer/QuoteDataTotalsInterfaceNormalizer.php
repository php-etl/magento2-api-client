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

class QuoteDataTotalsInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\QuoteDataTotalsInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\QuoteDataTotalsInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\QuoteDataTotalsInterface();
        if (\array_key_exists('base_discount_amount', $data) && \is_int($data['base_discount_amount'])) {
            $data['base_discount_amount'] = (float) $data['base_discount_amount'];
        }
        if (\array_key_exists('base_grand_total', $data) && \is_int($data['base_grand_total'])) {
            $data['base_grand_total'] = (float) $data['base_grand_total'];
        }
        if (\array_key_exists('base_shipping_amount', $data) && \is_int($data['base_shipping_amount'])) {
            $data['base_shipping_amount'] = (float) $data['base_shipping_amount'];
        }
        if (\array_key_exists('base_shipping_discount_amount', $data) && \is_int($data['base_shipping_discount_amount'])) {
            $data['base_shipping_discount_amount'] = (float) $data['base_shipping_discount_amount'];
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
        if (\array_key_exists('base_subtotal_with_discount', $data) && \is_int($data['base_subtotal_with_discount'])) {
            $data['base_subtotal_with_discount'] = (float) $data['base_subtotal_with_discount'];
        }
        if (\array_key_exists('base_tax_amount', $data) && \is_int($data['base_tax_amount'])) {
            $data['base_tax_amount'] = (float) $data['base_tax_amount'];
        }
        if (\array_key_exists('discount_amount', $data) && \is_int($data['discount_amount'])) {
            $data['discount_amount'] = (float) $data['discount_amount'];
        }
        if (\array_key_exists('grand_total', $data) && \is_int($data['grand_total'])) {
            $data['grand_total'] = (float) $data['grand_total'];
        }
        if (\array_key_exists('shipping_amount', $data) && \is_int($data['shipping_amount'])) {
            $data['shipping_amount'] = (float) $data['shipping_amount'];
        }
        if (\array_key_exists('shipping_discount_amount', $data) && \is_int($data['shipping_discount_amount'])) {
            $data['shipping_discount_amount'] = (float) $data['shipping_discount_amount'];
        }
        if (\array_key_exists('shipping_incl_tax', $data) && \is_int($data['shipping_incl_tax'])) {
            $data['shipping_incl_tax'] = (float) $data['shipping_incl_tax'];
        }
        if (\array_key_exists('shipping_tax_amount', $data) && \is_int($data['shipping_tax_amount'])) {
            $data['shipping_tax_amount'] = (float) $data['shipping_tax_amount'];
        }
        if (\array_key_exists('subtotal', $data) && \is_int($data['subtotal'])) {
            $data['subtotal'] = (float) $data['subtotal'];
        }
        if (\array_key_exists('subtotal_incl_tax', $data) && \is_int($data['subtotal_incl_tax'])) {
            $data['subtotal_incl_tax'] = (float) $data['subtotal_incl_tax'];
        }
        if (\array_key_exists('subtotal_with_discount', $data) && \is_int($data['subtotal_with_discount'])) {
            $data['subtotal_with_discount'] = (float) $data['subtotal_with_discount'];
        }
        if (\array_key_exists('tax_amount', $data) && \is_int($data['tax_amount'])) {
            $data['tax_amount'] = (float) $data['tax_amount'];
        }
        if (\array_key_exists('weee_tax_applied_amount', $data) && \is_int($data['weee_tax_applied_amount'])) {
            $data['weee_tax_applied_amount'] = (float) $data['weee_tax_applied_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('base_shipping_amount', $data)) {
            $object->setBaseShippingAmount($data['base_shipping_amount']);
        }
        if (\array_key_exists('base_shipping_discount_amount', $data)) {
            $object->setBaseShippingDiscountAmount($data['base_shipping_discount_amount']);
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
        if (\array_key_exists('base_subtotal_with_discount', $data)) {
            $object->setBaseSubtotalWithDiscount($data['base_subtotal_with_discount']);
        }
        if (\array_key_exists('base_tax_amount', $data)) {
            $object->setBaseTaxAmount($data['base_tax_amount']);
        }
        if (\array_key_exists('coupon_code', $data)) {
            $object->setCouponCode($data['coupon_code']);
        }
        if (\array_key_exists('discount_amount', $data)) {
            $object->setDiscountAmount($data['discount_amount']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_4\\Model\\QuoteDataTotalsExtensionInterface', 'json', $context));
        }
        if (\array_key_exists('grand_total', $data)) {
            $object->setGrandTotal($data['grand_total']);
        }
        if (\array_key_exists('items', $data)) {
            $values = array();
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_4\\Model\\QuoteDataTotalsItemInterface', 'json', $context);
            }
            $object->setItems($values);
        }
        if (\array_key_exists('items_qty', $data)) {
            $object->setItemsQty($data['items_qty']);
        }
        if (\array_key_exists('quote_currency_code', $data)) {
            $object->setQuoteCurrencyCode($data['quote_currency_code']);
        }
        if (\array_key_exists('shipping_amount', $data)) {
            $object->setShippingAmount($data['shipping_amount']);
        }
        if (\array_key_exists('shipping_discount_amount', $data)) {
            $object->setShippingDiscountAmount($data['shipping_discount_amount']);
        }
        if (\array_key_exists('shipping_incl_tax', $data)) {
            $object->setShippingInclTax($data['shipping_incl_tax']);
        }
        if (\array_key_exists('shipping_tax_amount', $data)) {
            $object->setShippingTaxAmount($data['shipping_tax_amount']);
        }
        if (\array_key_exists('subtotal', $data)) {
            $object->setSubtotal($data['subtotal']);
        }
        if (\array_key_exists('subtotal_incl_tax', $data)) {
            $object->setSubtotalInclTax($data['subtotal_incl_tax']);
        }
        if (\array_key_exists('subtotal_with_discount', $data)) {
            $object->setSubtotalWithDiscount($data['subtotal_with_discount']);
        }
        if (\array_key_exists('tax_amount', $data)) {
            $object->setTaxAmount($data['tax_amount']);
        }
        if (\array_key_exists('total_segments', $data)) {
            $values_1 = array();
            foreach ($data['total_segments'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_4\\Model\\QuoteDataTotalSegmentInterface', 'json', $context);
            }
            $object->setTotalSegments($values_1);
        }
        if (\array_key_exists('weee_tax_applied_amount', $data)) {
            $object->setWeeeTaxAppliedAmount($data['weee_tax_applied_amount']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBaseCurrencyCode()) {
            $data['base_currency_code'] = $object->getBaseCurrencyCode();
        }
        if (null !== $object->getBaseDiscountAmount()) {
            $data['base_discount_amount'] = $object->getBaseDiscountAmount();
        }
        if (null !== $object->getBaseGrandTotal()) {
            $data['base_grand_total'] = $object->getBaseGrandTotal();
        }
        if (null !== $object->getBaseShippingAmount()) {
            $data['base_shipping_amount'] = $object->getBaseShippingAmount();
        }
        if (null !== $object->getBaseShippingDiscountAmount()) {
            $data['base_shipping_discount_amount'] = $object->getBaseShippingDiscountAmount();
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
        if (null !== $object->getBaseSubtotalWithDiscount()) {
            $data['base_subtotal_with_discount'] = $object->getBaseSubtotalWithDiscount();
        }
        if (null !== $object->getBaseTaxAmount()) {
            $data['base_tax_amount'] = $object->getBaseTaxAmount();
        }
        if (null !== $object->getCouponCode()) {
            $data['coupon_code'] = $object->getCouponCode();
        }
        if (null !== $object->getDiscountAmount()) {
            $data['discount_amount'] = $object->getDiscountAmount();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        if (null !== $object->getGrandTotal()) {
            $data['grand_total'] = $object->getGrandTotal();
        }
        if (null !== $object->getItems()) {
            $values = array();
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['items'] = $values;
        }
        if (null !== $object->getItemsQty()) {
            $data['items_qty'] = $object->getItemsQty();
        }
        if (null !== $object->getQuoteCurrencyCode()) {
            $data['quote_currency_code'] = $object->getQuoteCurrencyCode();
        }
        if (null !== $object->getShippingAmount()) {
            $data['shipping_amount'] = $object->getShippingAmount();
        }
        if (null !== $object->getShippingDiscountAmount()) {
            $data['shipping_discount_amount'] = $object->getShippingDiscountAmount();
        }
        if (null !== $object->getShippingInclTax()) {
            $data['shipping_incl_tax'] = $object->getShippingInclTax();
        }
        if (null !== $object->getShippingTaxAmount()) {
            $data['shipping_tax_amount'] = $object->getShippingTaxAmount();
        }
        if (null !== $object->getSubtotal()) {
            $data['subtotal'] = $object->getSubtotal();
        }
        if (null !== $object->getSubtotalInclTax()) {
            $data['subtotal_incl_tax'] = $object->getSubtotalInclTax();
        }
        if (null !== $object->getSubtotalWithDiscount()) {
            $data['subtotal_with_discount'] = $object->getSubtotalWithDiscount();
        }
        if (null !== $object->getTaxAmount()) {
            $data['tax_amount'] = $object->getTaxAmount();
        }
        $values_1 = array();
        foreach ($object->getTotalSegments() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['total_segments'] = $values_1;
        $data['weee_tax_applied_amount'] = $object->getWeeeTaxAppliedAmount();
        return $data;
    }
}
