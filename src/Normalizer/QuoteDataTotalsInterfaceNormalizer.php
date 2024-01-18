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
class QuoteDataTotalsInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\QuoteDataTotalsInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\QuoteDataTotalsInterface';
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
        $object = new \Kiboko\Magento\Model\QuoteDataTotalsInterface();
        if (\array_key_exists('grand_total', $data) && \is_int($data['grand_total'])) {
            $data['grand_total'] = (double) $data['grand_total'];
        }
        if (\array_key_exists('base_grand_total', $data) && \is_int($data['base_grand_total'])) {
            $data['base_grand_total'] = (double) $data['base_grand_total'];
        }
        if (\array_key_exists('subtotal', $data) && \is_int($data['subtotal'])) {
            $data['subtotal'] = (double) $data['subtotal'];
        }
        if (\array_key_exists('base_subtotal', $data) && \is_int($data['base_subtotal'])) {
            $data['base_subtotal'] = (double) $data['base_subtotal'];
        }
        if (\array_key_exists('discount_amount', $data) && \is_int($data['discount_amount'])) {
            $data['discount_amount'] = (double) $data['discount_amount'];
        }
        if (\array_key_exists('base_discount_amount', $data) && \is_int($data['base_discount_amount'])) {
            $data['base_discount_amount'] = (double) $data['base_discount_amount'];
        }
        if (\array_key_exists('subtotal_with_discount', $data) && \is_int($data['subtotal_with_discount'])) {
            $data['subtotal_with_discount'] = (double) $data['subtotal_with_discount'];
        }
        if (\array_key_exists('base_subtotal_with_discount', $data) && \is_int($data['base_subtotal_with_discount'])) {
            $data['base_subtotal_with_discount'] = (double) $data['base_subtotal_with_discount'];
        }
        if (\array_key_exists('shipping_amount', $data) && \is_int($data['shipping_amount'])) {
            $data['shipping_amount'] = (double) $data['shipping_amount'];
        }
        if (\array_key_exists('base_shipping_amount', $data) && \is_int($data['base_shipping_amount'])) {
            $data['base_shipping_amount'] = (double) $data['base_shipping_amount'];
        }
        if (\array_key_exists('shipping_discount_amount', $data) && \is_int($data['shipping_discount_amount'])) {
            $data['shipping_discount_amount'] = (double) $data['shipping_discount_amount'];
        }
        if (\array_key_exists('base_shipping_discount_amount', $data) && \is_int($data['base_shipping_discount_amount'])) {
            $data['base_shipping_discount_amount'] = (double) $data['base_shipping_discount_amount'];
        }
        if (\array_key_exists('tax_amount', $data) && \is_int($data['tax_amount'])) {
            $data['tax_amount'] = (double) $data['tax_amount'];
        }
        if (\array_key_exists('base_tax_amount', $data) && \is_int($data['base_tax_amount'])) {
            $data['base_tax_amount'] = (double) $data['base_tax_amount'];
        }
        if (\array_key_exists('weee_tax_applied_amount', $data) && \is_int($data['weee_tax_applied_amount'])) {
            $data['weee_tax_applied_amount'] = (double) $data['weee_tax_applied_amount'];
        }
        if (\array_key_exists('shipping_tax_amount', $data) && \is_int($data['shipping_tax_amount'])) {
            $data['shipping_tax_amount'] = (double) $data['shipping_tax_amount'];
        }
        if (\array_key_exists('base_shipping_tax_amount', $data) && \is_int($data['base_shipping_tax_amount'])) {
            $data['base_shipping_tax_amount'] = (double) $data['base_shipping_tax_amount'];
        }
        if (\array_key_exists('subtotal_incl_tax', $data) && \is_int($data['subtotal_incl_tax'])) {
            $data['subtotal_incl_tax'] = (double) $data['subtotal_incl_tax'];
        }
        if (\array_key_exists('base_subtotal_incl_tax', $data) && \is_int($data['base_subtotal_incl_tax'])) {
            $data['base_subtotal_incl_tax'] = (double) $data['base_subtotal_incl_tax'];
        }
        if (\array_key_exists('shipping_incl_tax', $data) && \is_int($data['shipping_incl_tax'])) {
            $data['shipping_incl_tax'] = (double) $data['shipping_incl_tax'];
        }
        if (\array_key_exists('base_shipping_incl_tax', $data) && \is_int($data['base_shipping_incl_tax'])) {
            $data['base_shipping_incl_tax'] = (double) $data['base_shipping_incl_tax'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('grand_total', $data) && $data['grand_total'] !== null) {
            $object->setGrandTotal($data['grand_total']);
        }
        elseif (\array_key_exists('grand_total', $data) && $data['grand_total'] === null) {
            $object->setGrandTotal(null);
        }
        if (\array_key_exists('base_grand_total', $data) && $data['base_grand_total'] !== null) {
            $object->setBaseGrandTotal($data['base_grand_total']);
        }
        elseif (\array_key_exists('base_grand_total', $data) && $data['base_grand_total'] === null) {
            $object->setBaseGrandTotal(null);
        }
        if (\array_key_exists('subtotal', $data) && $data['subtotal'] !== null) {
            $object->setSubtotal($data['subtotal']);
        }
        elseif (\array_key_exists('subtotal', $data) && $data['subtotal'] === null) {
            $object->setSubtotal(null);
        }
        if (\array_key_exists('base_subtotal', $data) && $data['base_subtotal'] !== null) {
            $object->setBaseSubtotal($data['base_subtotal']);
        }
        elseif (\array_key_exists('base_subtotal', $data) && $data['base_subtotal'] === null) {
            $object->setBaseSubtotal(null);
        }
        if (\array_key_exists('discount_amount', $data) && $data['discount_amount'] !== null) {
            $object->setDiscountAmount($data['discount_amount']);
        }
        elseif (\array_key_exists('discount_amount', $data) && $data['discount_amount'] === null) {
            $object->setDiscountAmount(null);
        }
        if (\array_key_exists('base_discount_amount', $data) && $data['base_discount_amount'] !== null) {
            $object->setBaseDiscountAmount($data['base_discount_amount']);
        }
        elseif (\array_key_exists('base_discount_amount', $data) && $data['base_discount_amount'] === null) {
            $object->setBaseDiscountAmount(null);
        }
        if (\array_key_exists('subtotal_with_discount', $data) && $data['subtotal_with_discount'] !== null) {
            $object->setSubtotalWithDiscount($data['subtotal_with_discount']);
        }
        elseif (\array_key_exists('subtotal_with_discount', $data) && $data['subtotal_with_discount'] === null) {
            $object->setSubtotalWithDiscount(null);
        }
        if (\array_key_exists('base_subtotal_with_discount', $data) && $data['base_subtotal_with_discount'] !== null) {
            $object->setBaseSubtotalWithDiscount($data['base_subtotal_with_discount']);
        }
        elseif (\array_key_exists('base_subtotal_with_discount', $data) && $data['base_subtotal_with_discount'] === null) {
            $object->setBaseSubtotalWithDiscount(null);
        }
        if (\array_key_exists('shipping_amount', $data) && $data['shipping_amount'] !== null) {
            $object->setShippingAmount($data['shipping_amount']);
        }
        elseif (\array_key_exists('shipping_amount', $data) && $data['shipping_amount'] === null) {
            $object->setShippingAmount(null);
        }
        if (\array_key_exists('base_shipping_amount', $data) && $data['base_shipping_amount'] !== null) {
            $object->setBaseShippingAmount($data['base_shipping_amount']);
        }
        elseif (\array_key_exists('base_shipping_amount', $data) && $data['base_shipping_amount'] === null) {
            $object->setBaseShippingAmount(null);
        }
        if (\array_key_exists('shipping_discount_amount', $data) && $data['shipping_discount_amount'] !== null) {
            $object->setShippingDiscountAmount($data['shipping_discount_amount']);
        }
        elseif (\array_key_exists('shipping_discount_amount', $data) && $data['shipping_discount_amount'] === null) {
            $object->setShippingDiscountAmount(null);
        }
        if (\array_key_exists('base_shipping_discount_amount', $data) && $data['base_shipping_discount_amount'] !== null) {
            $object->setBaseShippingDiscountAmount($data['base_shipping_discount_amount']);
        }
        elseif (\array_key_exists('base_shipping_discount_amount', $data) && $data['base_shipping_discount_amount'] === null) {
            $object->setBaseShippingDiscountAmount(null);
        }
        if (\array_key_exists('tax_amount', $data) && $data['tax_amount'] !== null) {
            $object->setTaxAmount($data['tax_amount']);
        }
        elseif (\array_key_exists('tax_amount', $data) && $data['tax_amount'] === null) {
            $object->setTaxAmount(null);
        }
        if (\array_key_exists('base_tax_amount', $data) && $data['base_tax_amount'] !== null) {
            $object->setBaseTaxAmount($data['base_tax_amount']);
        }
        elseif (\array_key_exists('base_tax_amount', $data) && $data['base_tax_amount'] === null) {
            $object->setBaseTaxAmount(null);
        }
        if (\array_key_exists('weee_tax_applied_amount', $data) && $data['weee_tax_applied_amount'] !== null) {
            $object->setWeeeTaxAppliedAmount($data['weee_tax_applied_amount']);
        }
        elseif (\array_key_exists('weee_tax_applied_amount', $data) && $data['weee_tax_applied_amount'] === null) {
            $object->setWeeeTaxAppliedAmount(null);
        }
        if (\array_key_exists('shipping_tax_amount', $data) && $data['shipping_tax_amount'] !== null) {
            $object->setShippingTaxAmount($data['shipping_tax_amount']);
        }
        elseif (\array_key_exists('shipping_tax_amount', $data) && $data['shipping_tax_amount'] === null) {
            $object->setShippingTaxAmount(null);
        }
        if (\array_key_exists('base_shipping_tax_amount', $data) && $data['base_shipping_tax_amount'] !== null) {
            $object->setBaseShippingTaxAmount($data['base_shipping_tax_amount']);
        }
        elseif (\array_key_exists('base_shipping_tax_amount', $data) && $data['base_shipping_tax_amount'] === null) {
            $object->setBaseShippingTaxAmount(null);
        }
        if (\array_key_exists('subtotal_incl_tax', $data) && $data['subtotal_incl_tax'] !== null) {
            $object->setSubtotalInclTax($data['subtotal_incl_tax']);
        }
        elseif (\array_key_exists('subtotal_incl_tax', $data) && $data['subtotal_incl_tax'] === null) {
            $object->setSubtotalInclTax(null);
        }
        if (\array_key_exists('base_subtotal_incl_tax', $data) && $data['base_subtotal_incl_tax'] !== null) {
            $object->setBaseSubtotalInclTax($data['base_subtotal_incl_tax']);
        }
        elseif (\array_key_exists('base_subtotal_incl_tax', $data) && $data['base_subtotal_incl_tax'] === null) {
            $object->setBaseSubtotalInclTax(null);
        }
        if (\array_key_exists('shipping_incl_tax', $data) && $data['shipping_incl_tax'] !== null) {
            $object->setShippingInclTax($data['shipping_incl_tax']);
        }
        elseif (\array_key_exists('shipping_incl_tax', $data) && $data['shipping_incl_tax'] === null) {
            $object->setShippingInclTax(null);
        }
        if (\array_key_exists('base_shipping_incl_tax', $data) && $data['base_shipping_incl_tax'] !== null) {
            $object->setBaseShippingInclTax($data['base_shipping_incl_tax']);
        }
        elseif (\array_key_exists('base_shipping_incl_tax', $data) && $data['base_shipping_incl_tax'] === null) {
            $object->setBaseShippingInclTax(null);
        }
        if (\array_key_exists('base_currency_code', $data) && $data['base_currency_code'] !== null) {
            $object->setBaseCurrencyCode($data['base_currency_code']);
        }
        elseif (\array_key_exists('base_currency_code', $data) && $data['base_currency_code'] === null) {
            $object->setBaseCurrencyCode(null);
        }
        if (\array_key_exists('quote_currency_code', $data) && $data['quote_currency_code'] !== null) {
            $object->setQuoteCurrencyCode($data['quote_currency_code']);
        }
        elseif (\array_key_exists('quote_currency_code', $data) && $data['quote_currency_code'] === null) {
            $object->setQuoteCurrencyCode(null);
        }
        if (\array_key_exists('coupon_code', $data) && $data['coupon_code'] !== null) {
            $object->setCouponCode($data['coupon_code']);
        }
        elseif (\array_key_exists('coupon_code', $data) && $data['coupon_code'] === null) {
            $object->setCouponCode(null);
        }
        if (\array_key_exists('items_qty', $data) && $data['items_qty'] !== null) {
            $object->setItemsQty($data['items_qty']);
        }
        elseif (\array_key_exists('items_qty', $data) && $data['items_qty'] === null) {
            $object->setItemsQty(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values = array();
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\QuoteDataTotalsItemInterface', 'json', $context);
            }
            $object->setItems($values);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('total_segments', $data) && $data['total_segments'] !== null) {
            $values_1 = array();
            foreach ($data['total_segments'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\Model\\QuoteDataTotalSegmentInterface', 'json', $context);
            }
            $object->setTotalSegments($values_1);
        }
        elseif (\array_key_exists('total_segments', $data) && $data['total_segments'] === null) {
            $object->setTotalSegments(null);
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
        if ($object->isInitialized('grandTotal') && null !== $object->getGrandTotal()) {
            $data['grand_total'] = $object->getGrandTotal();
        }
        if ($object->isInitialized('baseGrandTotal') && null !== $object->getBaseGrandTotal()) {
            $data['base_grand_total'] = $object->getBaseGrandTotal();
        }
        if ($object->isInitialized('subtotal') && null !== $object->getSubtotal()) {
            $data['subtotal'] = $object->getSubtotal();
        }
        if ($object->isInitialized('baseSubtotal') && null !== $object->getBaseSubtotal()) {
            $data['base_subtotal'] = $object->getBaseSubtotal();
        }
        if ($object->isInitialized('discountAmount') && null !== $object->getDiscountAmount()) {
            $data['discount_amount'] = $object->getDiscountAmount();
        }
        if ($object->isInitialized('baseDiscountAmount') && null !== $object->getBaseDiscountAmount()) {
            $data['base_discount_amount'] = $object->getBaseDiscountAmount();
        }
        if ($object->isInitialized('subtotalWithDiscount') && null !== $object->getSubtotalWithDiscount()) {
            $data['subtotal_with_discount'] = $object->getSubtotalWithDiscount();
        }
        if ($object->isInitialized('baseSubtotalWithDiscount') && null !== $object->getBaseSubtotalWithDiscount()) {
            $data['base_subtotal_with_discount'] = $object->getBaseSubtotalWithDiscount();
        }
        if ($object->isInitialized('shippingAmount') && null !== $object->getShippingAmount()) {
            $data['shipping_amount'] = $object->getShippingAmount();
        }
        if ($object->isInitialized('baseShippingAmount') && null !== $object->getBaseShippingAmount()) {
            $data['base_shipping_amount'] = $object->getBaseShippingAmount();
        }
        if ($object->isInitialized('shippingDiscountAmount') && null !== $object->getShippingDiscountAmount()) {
            $data['shipping_discount_amount'] = $object->getShippingDiscountAmount();
        }
        if ($object->isInitialized('baseShippingDiscountAmount') && null !== $object->getBaseShippingDiscountAmount()) {
            $data['base_shipping_discount_amount'] = $object->getBaseShippingDiscountAmount();
        }
        if ($object->isInitialized('taxAmount') && null !== $object->getTaxAmount()) {
            $data['tax_amount'] = $object->getTaxAmount();
        }
        if ($object->isInitialized('baseTaxAmount') && null !== $object->getBaseTaxAmount()) {
            $data['base_tax_amount'] = $object->getBaseTaxAmount();
        }
        $data['weee_tax_applied_amount'] = $object->getWeeeTaxAppliedAmount();
        if ($object->isInitialized('shippingTaxAmount') && null !== $object->getShippingTaxAmount()) {
            $data['shipping_tax_amount'] = $object->getShippingTaxAmount();
        }
        if ($object->isInitialized('baseShippingTaxAmount') && null !== $object->getBaseShippingTaxAmount()) {
            $data['base_shipping_tax_amount'] = $object->getBaseShippingTaxAmount();
        }
        if ($object->isInitialized('subtotalInclTax') && null !== $object->getSubtotalInclTax()) {
            $data['subtotal_incl_tax'] = $object->getSubtotalInclTax();
        }
        if ($object->isInitialized('baseSubtotalInclTax') && null !== $object->getBaseSubtotalInclTax()) {
            $data['base_subtotal_incl_tax'] = $object->getBaseSubtotalInclTax();
        }
        if ($object->isInitialized('shippingInclTax') && null !== $object->getShippingInclTax()) {
            $data['shipping_incl_tax'] = $object->getShippingInclTax();
        }
        if ($object->isInitialized('baseShippingInclTax') && null !== $object->getBaseShippingInclTax()) {
            $data['base_shipping_incl_tax'] = $object->getBaseShippingInclTax();
        }
        if ($object->isInitialized('baseCurrencyCode') && null !== $object->getBaseCurrencyCode()) {
            $data['base_currency_code'] = $object->getBaseCurrencyCode();
        }
        if ($object->isInitialized('quoteCurrencyCode') && null !== $object->getQuoteCurrencyCode()) {
            $data['quote_currency_code'] = $object->getQuoteCurrencyCode();
        }
        if ($object->isInitialized('couponCode') && null !== $object->getCouponCode()) {
            $data['coupon_code'] = $object->getCouponCode();
        }
        if ($object->isInitialized('itemsQty') && null !== $object->getItemsQty()) {
            $data['items_qty'] = $object->getItemsQty();
        }
        if ($object->isInitialized('items') && null !== $object->getItems()) {
            $values = array();
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['items'] = $values;
        }
        $values_1 = array();
        foreach ($object->getTotalSegments() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['total_segments'] = $values_1;
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\QuoteDataTotalsInterface' => false);
    }
}