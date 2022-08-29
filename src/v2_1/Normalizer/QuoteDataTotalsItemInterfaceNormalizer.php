<?php

namespace Kiboko\Magento\v2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_1\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class QuoteDataTotalsItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_1\\Model\\QuoteDataTotalsItemInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_1\\Model\\QuoteDataTotalsItemInterface';
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
        $object = new \Kiboko\Magento\v2_1\Model\QuoteDataTotalsItemInterface();
        if (\array_key_exists('base_discount_amount', $data) && \is_int($data['base_discount_amount'])) {
            $data['base_discount_amount'] = (float) $data['base_discount_amount'];
        }
        if (\array_key_exists('base_price', $data) && \is_int($data['base_price'])) {
            $data['base_price'] = (float) $data['base_price'];
        }
        if (\array_key_exists('base_price_incl_tax', $data) && \is_int($data['base_price_incl_tax'])) {
            $data['base_price_incl_tax'] = (float) $data['base_price_incl_tax'];
        }
        if (\array_key_exists('base_row_total', $data) && \is_int($data['base_row_total'])) {
            $data['base_row_total'] = (float) $data['base_row_total'];
        }
        if (\array_key_exists('base_row_total_incl_tax', $data) && \is_int($data['base_row_total_incl_tax'])) {
            $data['base_row_total_incl_tax'] = (float) $data['base_row_total_incl_tax'];
        }
        if (\array_key_exists('base_tax_amount', $data) && \is_int($data['base_tax_amount'])) {
            $data['base_tax_amount'] = (float) $data['base_tax_amount'];
        }
        if (\array_key_exists('discount_amount', $data) && \is_int($data['discount_amount'])) {
            $data['discount_amount'] = (float) $data['discount_amount'];
        }
        if (\array_key_exists('discount_percent', $data) && \is_int($data['discount_percent'])) {
            $data['discount_percent'] = (float) $data['discount_percent'];
        }
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (\array_key_exists('price_incl_tax', $data) && \is_int($data['price_incl_tax'])) {
            $data['price_incl_tax'] = (float) $data['price_incl_tax'];
        }
        if (\array_key_exists('qty', $data) && \is_int($data['qty'])) {
            $data['qty'] = (float) $data['qty'];
        }
        if (\array_key_exists('row_total', $data) && \is_int($data['row_total'])) {
            $data['row_total'] = (float) $data['row_total'];
        }
        if (\array_key_exists('row_total_incl_tax', $data) && \is_int($data['row_total_incl_tax'])) {
            $data['row_total_incl_tax'] = (float) $data['row_total_incl_tax'];
        }
        if (\array_key_exists('row_total_with_discount', $data) && \is_int($data['row_total_with_discount'])) {
            $data['row_total_with_discount'] = (float) $data['row_total_with_discount'];
        }
        if (\array_key_exists('tax_amount', $data) && \is_int($data['tax_amount'])) {
            $data['tax_amount'] = (float) $data['tax_amount'];
        }
        if (\array_key_exists('tax_percent', $data) && \is_int($data['tax_percent'])) {
            $data['tax_percent'] = (float) $data['tax_percent'];
        }
        if (\array_key_exists('weee_tax_applied_amount', $data) && \is_int($data['weee_tax_applied_amount'])) {
            $data['weee_tax_applied_amount'] = (float) $data['weee_tax_applied_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('base_discount_amount', $data)) {
            $object->setBaseDiscountAmount($data['base_discount_amount']);
        }
        if (\array_key_exists('base_price', $data)) {
            $object->setBasePrice($data['base_price']);
        }
        if (\array_key_exists('base_price_incl_tax', $data)) {
            $object->setBasePriceInclTax($data['base_price_incl_tax']);
        }
        if (\array_key_exists('base_row_total', $data)) {
            $object->setBaseRowTotal($data['base_row_total']);
        }
        if (\array_key_exists('base_row_total_incl_tax', $data)) {
            $object->setBaseRowTotalInclTax($data['base_row_total_incl_tax']);
        }
        if (\array_key_exists('base_tax_amount', $data)) {
            $object->setBaseTaxAmount($data['base_tax_amount']);
        }
        if (\array_key_exists('discount_amount', $data)) {
            $object->setDiscountAmount($data['discount_amount']);
        }
        if (\array_key_exists('discount_percent', $data)) {
            $object->setDiscountPercent($data['discount_percent']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\v2_1\\Model\\QuoteDataTotalsItemExtensionInterface', 'json', $context));
        }
        if (\array_key_exists('item_id', $data)) {
            $object->setItemId($data['item_id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('options', $data)) {
            $object->setOptions($data['options']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
        }
        if (\array_key_exists('price_incl_tax', $data)) {
            $object->setPriceInclTax($data['price_incl_tax']);
        }
        if (\array_key_exists('qty', $data)) {
            $object->setQty($data['qty']);
        }
        if (\array_key_exists('row_total', $data)) {
            $object->setRowTotal($data['row_total']);
        }
        if (\array_key_exists('row_total_incl_tax', $data)) {
            $object->setRowTotalInclTax($data['row_total_incl_tax']);
        }
        if (\array_key_exists('row_total_with_discount', $data)) {
            $object->setRowTotalWithDiscount($data['row_total_with_discount']);
        }
        if (\array_key_exists('tax_amount', $data)) {
            $object->setTaxAmount($data['tax_amount']);
        }
        if (\array_key_exists('tax_percent', $data)) {
            $object->setTaxPercent($data['tax_percent']);
        }
        if (\array_key_exists('weee_tax_applied', $data)) {
            $object->setWeeeTaxApplied($data['weee_tax_applied']);
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
        if (null !== $object->getBaseDiscountAmount()) {
            $data['base_discount_amount'] = $object->getBaseDiscountAmount();
        }
        $data['base_price'] = $object->getBasePrice();
        if (null !== $object->getBasePriceInclTax()) {
            $data['base_price_incl_tax'] = $object->getBasePriceInclTax();
        }
        $data['base_row_total'] = $object->getBaseRowTotal();
        if (null !== $object->getBaseRowTotalInclTax()) {
            $data['base_row_total_incl_tax'] = $object->getBaseRowTotalInclTax();
        }
        if (null !== $object->getBaseTaxAmount()) {
            $data['base_tax_amount'] = $object->getBaseTaxAmount();
        }
        if (null !== $object->getDiscountAmount()) {
            $data['discount_amount'] = $object->getDiscountAmount();
        }
        if (null !== $object->getDiscountPercent()) {
            $data['discount_percent'] = $object->getDiscountPercent();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        $data['item_id'] = $object->getItemId();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        $data['options'] = $object->getOptions();
        $data['price'] = $object->getPrice();
        if (null !== $object->getPriceInclTax()) {
            $data['price_incl_tax'] = $object->getPriceInclTax();
        }
        $data['qty'] = $object->getQty();
        $data['row_total'] = $object->getRowTotal();
        if (null !== $object->getRowTotalInclTax()) {
            $data['row_total_incl_tax'] = $object->getRowTotalInclTax();
        }
        if (null !== $object->getRowTotalWithDiscount()) {
            $data['row_total_with_discount'] = $object->getRowTotalWithDiscount();
        }
        if (null !== $object->getTaxAmount()) {
            $data['tax_amount'] = $object->getTaxAmount();
        }
        if (null !== $object->getTaxPercent()) {
            $data['tax_percent'] = $object->getTaxPercent();
        }
        $data['weee_tax_applied'] = $object->getWeeeTaxApplied();
        $data['weee_tax_applied_amount'] = $object->getWeeeTaxAppliedAmount();
        return $data;
    }
}
