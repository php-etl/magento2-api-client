<?php

namespace Kiboko\Magento\V2_3\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_3\Runtime\Normalizer\CheckArray;
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
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\QuoteDataTotalsItemInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\QuoteDataTotalsItemInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\QuoteDataTotalsItemInterface();
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
        if (\array_key_exists('base_discount_amount', $data) && $data['base_discount_amount'] !== null) {
            $object->setBaseDiscountAmount($data['base_discount_amount']);
        } elseif (\array_key_exists('base_discount_amount', $data) && $data['base_discount_amount'] === null) {
            $object->setBaseDiscountAmount(null);
        }
        if (\array_key_exists('base_price', $data) && $data['base_price'] !== null) {
            $object->setBasePrice($data['base_price']);
        } elseif (\array_key_exists('base_price', $data) && $data['base_price'] === null) {
            $object->setBasePrice(null);
        }
        if (\array_key_exists('base_price_incl_tax', $data) && $data['base_price_incl_tax'] !== null) {
            $object->setBasePriceInclTax($data['base_price_incl_tax']);
        } elseif (\array_key_exists('base_price_incl_tax', $data) && $data['base_price_incl_tax'] === null) {
            $object->setBasePriceInclTax(null);
        }
        if (\array_key_exists('base_row_total', $data) && $data['base_row_total'] !== null) {
            $object->setBaseRowTotal($data['base_row_total']);
        } elseif (\array_key_exists('base_row_total', $data) && $data['base_row_total'] === null) {
            $object->setBaseRowTotal(null);
        }
        if (\array_key_exists('base_row_total_incl_tax', $data) && $data['base_row_total_incl_tax'] !== null) {
            $object->setBaseRowTotalInclTax($data['base_row_total_incl_tax']);
        } elseif (\array_key_exists('base_row_total_incl_tax', $data) && $data['base_row_total_incl_tax'] === null) {
            $object->setBaseRowTotalInclTax(null);
        }
        if (\array_key_exists('base_tax_amount', $data) && $data['base_tax_amount'] !== null) {
            $object->setBaseTaxAmount($data['base_tax_amount']);
        } elseif (\array_key_exists('base_tax_amount', $data) && $data['base_tax_amount'] === null) {
            $object->setBaseTaxAmount(null);
        }
        if (\array_key_exists('discount_amount', $data) && $data['discount_amount'] !== null) {
            $object->setDiscountAmount($data['discount_amount']);
        } elseif (\array_key_exists('discount_amount', $data) && $data['discount_amount'] === null) {
            $object->setDiscountAmount(null);
        }
        if (\array_key_exists('discount_percent', $data) && $data['discount_percent'] !== null) {
            $object->setDiscountPercent($data['discount_percent']);
        } elseif (\array_key_exists('discount_percent', $data) && $data['discount_percent'] === null) {
            $object->setDiscountPercent(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_3\\Model\\QuoteDataTotalsItemExtensionInterface', 'json', $context));
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('item_id', $data) && $data['item_id'] !== null) {
            $object->setItemId($data['item_id']);
        } elseif (\array_key_exists('item_id', $data) && $data['item_id'] === null) {
            $object->setItemId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $object->setOptions($data['options']);
        } elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($data['price']);
        } elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('price_incl_tax', $data) && $data['price_incl_tax'] !== null) {
            $object->setPriceInclTax($data['price_incl_tax']);
        } elseif (\array_key_exists('price_incl_tax', $data) && $data['price_incl_tax'] === null) {
            $object->setPriceInclTax(null);
        }
        if (\array_key_exists('qty', $data) && $data['qty'] !== null) {
            $object->setQty($data['qty']);
        } elseif (\array_key_exists('qty', $data) && $data['qty'] === null) {
            $object->setQty(null);
        }
        if (\array_key_exists('row_total', $data) && $data['row_total'] !== null) {
            $object->setRowTotal($data['row_total']);
        } elseif (\array_key_exists('row_total', $data) && $data['row_total'] === null) {
            $object->setRowTotal(null);
        }
        if (\array_key_exists('row_total_incl_tax', $data) && $data['row_total_incl_tax'] !== null) {
            $object->setRowTotalInclTax($data['row_total_incl_tax']);
        } elseif (\array_key_exists('row_total_incl_tax', $data) && $data['row_total_incl_tax'] === null) {
            $object->setRowTotalInclTax(null);
        }
        if (\array_key_exists('row_total_with_discount', $data) && $data['row_total_with_discount'] !== null) {
            $object->setRowTotalWithDiscount($data['row_total_with_discount']);
        } elseif (\array_key_exists('row_total_with_discount', $data) && $data['row_total_with_discount'] === null) {
            $object->setRowTotalWithDiscount(null);
        }
        if (\array_key_exists('tax_amount', $data) && $data['tax_amount'] !== null) {
            $object->setTaxAmount($data['tax_amount']);
        } elseif (\array_key_exists('tax_amount', $data) && $data['tax_amount'] === null) {
            $object->setTaxAmount(null);
        }
        if (\array_key_exists('tax_percent', $data) && $data['tax_percent'] !== null) {
            $object->setTaxPercent($data['tax_percent']);
        } elseif (\array_key_exists('tax_percent', $data) && $data['tax_percent'] === null) {
            $object->setTaxPercent(null);
        }
        if (\array_key_exists('weee_tax_applied', $data) && $data['weee_tax_applied'] !== null) {
            $object->setWeeeTaxApplied($data['weee_tax_applied']);
        } elseif (\array_key_exists('weee_tax_applied', $data) && $data['weee_tax_applied'] === null) {
            $object->setWeeeTaxApplied(null);
        }
        if (\array_key_exists('weee_tax_applied_amount', $data) && $data['weee_tax_applied_amount'] !== null) {
            $object->setWeeeTaxAppliedAmount($data['weee_tax_applied_amount']);
        } elseif (\array_key_exists('weee_tax_applied_amount', $data) && $data['weee_tax_applied_amount'] === null) {
            $object->setWeeeTaxAppliedAmount(null);
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
