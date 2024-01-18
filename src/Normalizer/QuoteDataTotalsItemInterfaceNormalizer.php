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
class QuoteDataTotalsItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\QuoteDataTotalsItemInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\QuoteDataTotalsItemInterface';
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
        $object = new \Kiboko\Magento\Model\QuoteDataTotalsItemInterface();
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (double) $data['price'];
        }
        if (\array_key_exists('base_price', $data) && \is_int($data['base_price'])) {
            $data['base_price'] = (double) $data['base_price'];
        }
        if (\array_key_exists('qty', $data) && \is_int($data['qty'])) {
            $data['qty'] = (double) $data['qty'];
        }
        if (\array_key_exists('row_total', $data) && \is_int($data['row_total'])) {
            $data['row_total'] = (double) $data['row_total'];
        }
        if (\array_key_exists('base_row_total', $data) && \is_int($data['base_row_total'])) {
            $data['base_row_total'] = (double) $data['base_row_total'];
        }
        if (\array_key_exists('row_total_with_discount', $data) && \is_int($data['row_total_with_discount'])) {
            $data['row_total_with_discount'] = (double) $data['row_total_with_discount'];
        }
        if (\array_key_exists('tax_amount', $data) && \is_int($data['tax_amount'])) {
            $data['tax_amount'] = (double) $data['tax_amount'];
        }
        if (\array_key_exists('base_tax_amount', $data) && \is_int($data['base_tax_amount'])) {
            $data['base_tax_amount'] = (double) $data['base_tax_amount'];
        }
        if (\array_key_exists('tax_percent', $data) && \is_int($data['tax_percent'])) {
            $data['tax_percent'] = (double) $data['tax_percent'];
        }
        if (\array_key_exists('discount_amount', $data) && \is_int($data['discount_amount'])) {
            $data['discount_amount'] = (double) $data['discount_amount'];
        }
        if (\array_key_exists('base_discount_amount', $data) && \is_int($data['base_discount_amount'])) {
            $data['base_discount_amount'] = (double) $data['base_discount_amount'];
        }
        if (\array_key_exists('discount_percent', $data) && \is_int($data['discount_percent'])) {
            $data['discount_percent'] = (double) $data['discount_percent'];
        }
        if (\array_key_exists('price_incl_tax', $data) && \is_int($data['price_incl_tax'])) {
            $data['price_incl_tax'] = (double) $data['price_incl_tax'];
        }
        if (\array_key_exists('base_price_incl_tax', $data) && \is_int($data['base_price_incl_tax'])) {
            $data['base_price_incl_tax'] = (double) $data['base_price_incl_tax'];
        }
        if (\array_key_exists('row_total_incl_tax', $data) && \is_int($data['row_total_incl_tax'])) {
            $data['row_total_incl_tax'] = (double) $data['row_total_incl_tax'];
        }
        if (\array_key_exists('base_row_total_incl_tax', $data) && \is_int($data['base_row_total_incl_tax'])) {
            $data['base_row_total_incl_tax'] = (double) $data['base_row_total_incl_tax'];
        }
        if (\array_key_exists('weee_tax_applied_amount', $data) && \is_int($data['weee_tax_applied_amount'])) {
            $data['weee_tax_applied_amount'] = (double) $data['weee_tax_applied_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('item_id', $data) && $data['item_id'] !== null) {
            $object->setItemId($data['item_id']);
        }
        elseif (\array_key_exists('item_id', $data) && $data['item_id'] === null) {
            $object->setItemId(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($data['price']);
        }
        elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('base_price', $data) && $data['base_price'] !== null) {
            $object->setBasePrice($data['base_price']);
        }
        elseif (\array_key_exists('base_price', $data) && $data['base_price'] === null) {
            $object->setBasePrice(null);
        }
        if (\array_key_exists('qty', $data) && $data['qty'] !== null) {
            $object->setQty($data['qty']);
        }
        elseif (\array_key_exists('qty', $data) && $data['qty'] === null) {
            $object->setQty(null);
        }
        if (\array_key_exists('row_total', $data) && $data['row_total'] !== null) {
            $object->setRowTotal($data['row_total']);
        }
        elseif (\array_key_exists('row_total', $data) && $data['row_total'] === null) {
            $object->setRowTotal(null);
        }
        if (\array_key_exists('base_row_total', $data) && $data['base_row_total'] !== null) {
            $object->setBaseRowTotal($data['base_row_total']);
        }
        elseif (\array_key_exists('base_row_total', $data) && $data['base_row_total'] === null) {
            $object->setBaseRowTotal(null);
        }
        if (\array_key_exists('row_total_with_discount', $data) && $data['row_total_with_discount'] !== null) {
            $object->setRowTotalWithDiscount($data['row_total_with_discount']);
        }
        elseif (\array_key_exists('row_total_with_discount', $data) && $data['row_total_with_discount'] === null) {
            $object->setRowTotalWithDiscount(null);
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
        if (\array_key_exists('tax_percent', $data) && $data['tax_percent'] !== null) {
            $object->setTaxPercent($data['tax_percent']);
        }
        elseif (\array_key_exists('tax_percent', $data) && $data['tax_percent'] === null) {
            $object->setTaxPercent(null);
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
        if (\array_key_exists('discount_percent', $data) && $data['discount_percent'] !== null) {
            $object->setDiscountPercent($data['discount_percent']);
        }
        elseif (\array_key_exists('discount_percent', $data) && $data['discount_percent'] === null) {
            $object->setDiscountPercent(null);
        }
        if (\array_key_exists('price_incl_tax', $data) && $data['price_incl_tax'] !== null) {
            $object->setPriceInclTax($data['price_incl_tax']);
        }
        elseif (\array_key_exists('price_incl_tax', $data) && $data['price_incl_tax'] === null) {
            $object->setPriceInclTax(null);
        }
        if (\array_key_exists('base_price_incl_tax', $data) && $data['base_price_incl_tax'] !== null) {
            $object->setBasePriceInclTax($data['base_price_incl_tax']);
        }
        elseif (\array_key_exists('base_price_incl_tax', $data) && $data['base_price_incl_tax'] === null) {
            $object->setBasePriceInclTax(null);
        }
        if (\array_key_exists('row_total_incl_tax', $data) && $data['row_total_incl_tax'] !== null) {
            $object->setRowTotalInclTax($data['row_total_incl_tax']);
        }
        elseif (\array_key_exists('row_total_incl_tax', $data) && $data['row_total_incl_tax'] === null) {
            $object->setRowTotalInclTax(null);
        }
        if (\array_key_exists('base_row_total_incl_tax', $data) && $data['base_row_total_incl_tax'] !== null) {
            $object->setBaseRowTotalInclTax($data['base_row_total_incl_tax']);
        }
        elseif (\array_key_exists('base_row_total_incl_tax', $data) && $data['base_row_total_incl_tax'] === null) {
            $object->setBaseRowTotalInclTax(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $object->setOptions($data['options']);
        }
        elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('weee_tax_applied_amount', $data) && $data['weee_tax_applied_amount'] !== null) {
            $object->setWeeeTaxAppliedAmount($data['weee_tax_applied_amount']);
        }
        elseif (\array_key_exists('weee_tax_applied_amount', $data) && $data['weee_tax_applied_amount'] === null) {
            $object->setWeeeTaxAppliedAmount(null);
        }
        if (\array_key_exists('weee_tax_applied', $data) && $data['weee_tax_applied'] !== null) {
            $object->setWeeeTaxApplied($data['weee_tax_applied']);
        }
        elseif (\array_key_exists('weee_tax_applied', $data) && $data['weee_tax_applied'] === null) {
            $object->setWeeeTaxApplied(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['item_id'] = $object->getItemId();
        $data['price'] = $object->getPrice();
        $data['base_price'] = $object->getBasePrice();
        $data['qty'] = $object->getQty();
        $data['row_total'] = $object->getRowTotal();
        $data['base_row_total'] = $object->getBaseRowTotal();
        if ($object->isInitialized('rowTotalWithDiscount') && null !== $object->getRowTotalWithDiscount()) {
            $data['row_total_with_discount'] = $object->getRowTotalWithDiscount();
        }
        if ($object->isInitialized('taxAmount') && null !== $object->getTaxAmount()) {
            $data['tax_amount'] = $object->getTaxAmount();
        }
        if ($object->isInitialized('baseTaxAmount') && null !== $object->getBaseTaxAmount()) {
            $data['base_tax_amount'] = $object->getBaseTaxAmount();
        }
        if ($object->isInitialized('taxPercent') && null !== $object->getTaxPercent()) {
            $data['tax_percent'] = $object->getTaxPercent();
        }
        if ($object->isInitialized('discountAmount') && null !== $object->getDiscountAmount()) {
            $data['discount_amount'] = $object->getDiscountAmount();
        }
        if ($object->isInitialized('baseDiscountAmount') && null !== $object->getBaseDiscountAmount()) {
            $data['base_discount_amount'] = $object->getBaseDiscountAmount();
        }
        if ($object->isInitialized('discountPercent') && null !== $object->getDiscountPercent()) {
            $data['discount_percent'] = $object->getDiscountPercent();
        }
        if ($object->isInitialized('priceInclTax') && null !== $object->getPriceInclTax()) {
            $data['price_incl_tax'] = $object->getPriceInclTax();
        }
        if ($object->isInitialized('basePriceInclTax') && null !== $object->getBasePriceInclTax()) {
            $data['base_price_incl_tax'] = $object->getBasePriceInclTax();
        }
        if ($object->isInitialized('rowTotalInclTax') && null !== $object->getRowTotalInclTax()) {
            $data['row_total_incl_tax'] = $object->getRowTotalInclTax();
        }
        if ($object->isInitialized('baseRowTotalInclTax') && null !== $object->getBaseRowTotalInclTax()) {
            $data['base_row_total_incl_tax'] = $object->getBaseRowTotalInclTax();
        }
        $data['options'] = $object->getOptions();
        $data['weee_tax_applied_amount'] = $object->getWeeeTaxAppliedAmount();
        $data['weee_tax_applied'] = $object->getWeeeTaxApplied();
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\QuoteDataTotalsItemInterface' => false);
    }
}