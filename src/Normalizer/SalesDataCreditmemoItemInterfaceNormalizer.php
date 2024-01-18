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
class SalesDataCreditmemoItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\SalesDataCreditmemoItemInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\SalesDataCreditmemoItemInterface';
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
        $object = new \Kiboko\Magento\Model\SalesDataCreditmemoItemInterface();
        if (\array_key_exists('base_cost', $data) && \is_int($data['base_cost'])) {
            $data['base_cost'] = (double) $data['base_cost'];
        }
        if (\array_key_exists('base_discount_amount', $data) && \is_int($data['base_discount_amount'])) {
            $data['base_discount_amount'] = (double) $data['base_discount_amount'];
        }
        if (\array_key_exists('base_discount_tax_compensation_amount', $data) && \is_int($data['base_discount_tax_compensation_amount'])) {
            $data['base_discount_tax_compensation_amount'] = (double) $data['base_discount_tax_compensation_amount'];
        }
        if (\array_key_exists('base_price', $data) && \is_int($data['base_price'])) {
            $data['base_price'] = (double) $data['base_price'];
        }
        if (\array_key_exists('base_price_incl_tax', $data) && \is_int($data['base_price_incl_tax'])) {
            $data['base_price_incl_tax'] = (double) $data['base_price_incl_tax'];
        }
        if (\array_key_exists('base_row_total', $data) && \is_int($data['base_row_total'])) {
            $data['base_row_total'] = (double) $data['base_row_total'];
        }
        if (\array_key_exists('base_row_total_incl_tax', $data) && \is_int($data['base_row_total_incl_tax'])) {
            $data['base_row_total_incl_tax'] = (double) $data['base_row_total_incl_tax'];
        }
        if (\array_key_exists('base_tax_amount', $data) && \is_int($data['base_tax_amount'])) {
            $data['base_tax_amount'] = (double) $data['base_tax_amount'];
        }
        if (\array_key_exists('base_weee_tax_applied_amount', $data) && \is_int($data['base_weee_tax_applied_amount'])) {
            $data['base_weee_tax_applied_amount'] = (double) $data['base_weee_tax_applied_amount'];
        }
        if (\array_key_exists('base_weee_tax_applied_row_amnt', $data) && \is_int($data['base_weee_tax_applied_row_amnt'])) {
            $data['base_weee_tax_applied_row_amnt'] = (double) $data['base_weee_tax_applied_row_amnt'];
        }
        if (\array_key_exists('base_weee_tax_disposition', $data) && \is_int($data['base_weee_tax_disposition'])) {
            $data['base_weee_tax_disposition'] = (double) $data['base_weee_tax_disposition'];
        }
        if (\array_key_exists('base_weee_tax_row_disposition', $data) && \is_int($data['base_weee_tax_row_disposition'])) {
            $data['base_weee_tax_row_disposition'] = (double) $data['base_weee_tax_row_disposition'];
        }
        if (\array_key_exists('discount_amount', $data) && \is_int($data['discount_amount'])) {
            $data['discount_amount'] = (double) $data['discount_amount'];
        }
        if (\array_key_exists('discount_tax_compensation_amount', $data) && \is_int($data['discount_tax_compensation_amount'])) {
            $data['discount_tax_compensation_amount'] = (double) $data['discount_tax_compensation_amount'];
        }
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (double) $data['price'];
        }
        if (\array_key_exists('price_incl_tax', $data) && \is_int($data['price_incl_tax'])) {
            $data['price_incl_tax'] = (double) $data['price_incl_tax'];
        }
        if (\array_key_exists('qty', $data) && \is_int($data['qty'])) {
            $data['qty'] = (double) $data['qty'];
        }
        if (\array_key_exists('row_total', $data) && \is_int($data['row_total'])) {
            $data['row_total'] = (double) $data['row_total'];
        }
        if (\array_key_exists('row_total_incl_tax', $data) && \is_int($data['row_total_incl_tax'])) {
            $data['row_total_incl_tax'] = (double) $data['row_total_incl_tax'];
        }
        if (\array_key_exists('tax_amount', $data) && \is_int($data['tax_amount'])) {
            $data['tax_amount'] = (double) $data['tax_amount'];
        }
        if (\array_key_exists('weee_tax_applied_amount', $data) && \is_int($data['weee_tax_applied_amount'])) {
            $data['weee_tax_applied_amount'] = (double) $data['weee_tax_applied_amount'];
        }
        if (\array_key_exists('weee_tax_applied_row_amount', $data) && \is_int($data['weee_tax_applied_row_amount'])) {
            $data['weee_tax_applied_row_amount'] = (double) $data['weee_tax_applied_row_amount'];
        }
        if (\array_key_exists('weee_tax_disposition', $data) && \is_int($data['weee_tax_disposition'])) {
            $data['weee_tax_disposition'] = (double) $data['weee_tax_disposition'];
        }
        if (\array_key_exists('weee_tax_row_disposition', $data) && \is_int($data['weee_tax_row_disposition'])) {
            $data['weee_tax_row_disposition'] = (double) $data['weee_tax_row_disposition'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
            $object->setAdditionalData($data['additional_data']);
        }
        elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
            $object->setAdditionalData(null);
        }
        if (\array_key_exists('base_cost', $data) && $data['base_cost'] !== null) {
            $object->setBaseCost($data['base_cost']);
        }
        elseif (\array_key_exists('base_cost', $data) && $data['base_cost'] === null) {
            $object->setBaseCost(null);
        }
        if (\array_key_exists('base_discount_amount', $data) && $data['base_discount_amount'] !== null) {
            $object->setBaseDiscountAmount($data['base_discount_amount']);
        }
        elseif (\array_key_exists('base_discount_amount', $data) && $data['base_discount_amount'] === null) {
            $object->setBaseDiscountAmount(null);
        }
        if (\array_key_exists('base_discount_tax_compensation_amount', $data) && $data['base_discount_tax_compensation_amount'] !== null) {
            $object->setBaseDiscountTaxCompensationAmount($data['base_discount_tax_compensation_amount']);
        }
        elseif (\array_key_exists('base_discount_tax_compensation_amount', $data) && $data['base_discount_tax_compensation_amount'] === null) {
            $object->setBaseDiscountTaxCompensationAmount(null);
        }
        if (\array_key_exists('base_price', $data) && $data['base_price'] !== null) {
            $object->setBasePrice($data['base_price']);
        }
        elseif (\array_key_exists('base_price', $data) && $data['base_price'] === null) {
            $object->setBasePrice(null);
        }
        if (\array_key_exists('base_price_incl_tax', $data) && $data['base_price_incl_tax'] !== null) {
            $object->setBasePriceInclTax($data['base_price_incl_tax']);
        }
        elseif (\array_key_exists('base_price_incl_tax', $data) && $data['base_price_incl_tax'] === null) {
            $object->setBasePriceInclTax(null);
        }
        if (\array_key_exists('base_row_total', $data) && $data['base_row_total'] !== null) {
            $object->setBaseRowTotal($data['base_row_total']);
        }
        elseif (\array_key_exists('base_row_total', $data) && $data['base_row_total'] === null) {
            $object->setBaseRowTotal(null);
        }
        if (\array_key_exists('base_row_total_incl_tax', $data) && $data['base_row_total_incl_tax'] !== null) {
            $object->setBaseRowTotalInclTax($data['base_row_total_incl_tax']);
        }
        elseif (\array_key_exists('base_row_total_incl_tax', $data) && $data['base_row_total_incl_tax'] === null) {
            $object->setBaseRowTotalInclTax(null);
        }
        if (\array_key_exists('base_tax_amount', $data) && $data['base_tax_amount'] !== null) {
            $object->setBaseTaxAmount($data['base_tax_amount']);
        }
        elseif (\array_key_exists('base_tax_amount', $data) && $data['base_tax_amount'] === null) {
            $object->setBaseTaxAmount(null);
        }
        if (\array_key_exists('base_weee_tax_applied_amount', $data) && $data['base_weee_tax_applied_amount'] !== null) {
            $object->setBaseWeeeTaxAppliedAmount($data['base_weee_tax_applied_amount']);
        }
        elseif (\array_key_exists('base_weee_tax_applied_amount', $data) && $data['base_weee_tax_applied_amount'] === null) {
            $object->setBaseWeeeTaxAppliedAmount(null);
        }
        if (\array_key_exists('base_weee_tax_applied_row_amnt', $data) && $data['base_weee_tax_applied_row_amnt'] !== null) {
            $object->setBaseWeeeTaxAppliedRowAmnt($data['base_weee_tax_applied_row_amnt']);
        }
        elseif (\array_key_exists('base_weee_tax_applied_row_amnt', $data) && $data['base_weee_tax_applied_row_amnt'] === null) {
            $object->setBaseWeeeTaxAppliedRowAmnt(null);
        }
        if (\array_key_exists('base_weee_tax_disposition', $data) && $data['base_weee_tax_disposition'] !== null) {
            $object->setBaseWeeeTaxDisposition($data['base_weee_tax_disposition']);
        }
        elseif (\array_key_exists('base_weee_tax_disposition', $data) && $data['base_weee_tax_disposition'] === null) {
            $object->setBaseWeeeTaxDisposition(null);
        }
        if (\array_key_exists('base_weee_tax_row_disposition', $data) && $data['base_weee_tax_row_disposition'] !== null) {
            $object->setBaseWeeeTaxRowDisposition($data['base_weee_tax_row_disposition']);
        }
        elseif (\array_key_exists('base_weee_tax_row_disposition', $data) && $data['base_weee_tax_row_disposition'] === null) {
            $object->setBaseWeeeTaxRowDisposition(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('discount_amount', $data) && $data['discount_amount'] !== null) {
            $object->setDiscountAmount($data['discount_amount']);
        }
        elseif (\array_key_exists('discount_amount', $data) && $data['discount_amount'] === null) {
            $object->setDiscountAmount(null);
        }
        if (\array_key_exists('entity_id', $data) && $data['entity_id'] !== null) {
            $object->setEntityId($data['entity_id']);
        }
        elseif (\array_key_exists('entity_id', $data) && $data['entity_id'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('discount_tax_compensation_amount', $data) && $data['discount_tax_compensation_amount'] !== null) {
            $object->setDiscountTaxCompensationAmount($data['discount_tax_compensation_amount']);
        }
        elseif (\array_key_exists('discount_tax_compensation_amount', $data) && $data['discount_tax_compensation_amount'] === null) {
            $object->setDiscountTaxCompensationAmount(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('order_item_id', $data) && $data['order_item_id'] !== null) {
            $object->setOrderItemId($data['order_item_id']);
        }
        elseif (\array_key_exists('order_item_id', $data) && $data['order_item_id'] === null) {
            $object->setOrderItemId(null);
        }
        if (\array_key_exists('parent_id', $data) && $data['parent_id'] !== null) {
            $object->setParentId($data['parent_id']);
        }
        elseif (\array_key_exists('parent_id', $data) && $data['parent_id'] === null) {
            $object->setParentId(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($data['price']);
        }
        elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('price_incl_tax', $data) && $data['price_incl_tax'] !== null) {
            $object->setPriceInclTax($data['price_incl_tax']);
        }
        elseif (\array_key_exists('price_incl_tax', $data) && $data['price_incl_tax'] === null) {
            $object->setPriceInclTax(null);
        }
        if (\array_key_exists('product_id', $data) && $data['product_id'] !== null) {
            $object->setProductId($data['product_id']);
        }
        elseif (\array_key_exists('product_id', $data) && $data['product_id'] === null) {
            $object->setProductId(null);
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
        if (\array_key_exists('row_total_incl_tax', $data) && $data['row_total_incl_tax'] !== null) {
            $object->setRowTotalInclTax($data['row_total_incl_tax']);
        }
        elseif (\array_key_exists('row_total_incl_tax', $data) && $data['row_total_incl_tax'] === null) {
            $object->setRowTotalInclTax(null);
        }
        if (\array_key_exists('sku', $data) && $data['sku'] !== null) {
            $object->setSku($data['sku']);
        }
        elseif (\array_key_exists('sku', $data) && $data['sku'] === null) {
            $object->setSku(null);
        }
        if (\array_key_exists('tax_amount', $data) && $data['tax_amount'] !== null) {
            $object->setTaxAmount($data['tax_amount']);
        }
        elseif (\array_key_exists('tax_amount', $data) && $data['tax_amount'] === null) {
            $object->setTaxAmount(null);
        }
        if (\array_key_exists('weee_tax_applied', $data) && $data['weee_tax_applied'] !== null) {
            $object->setWeeeTaxApplied($data['weee_tax_applied']);
        }
        elseif (\array_key_exists('weee_tax_applied', $data) && $data['weee_tax_applied'] === null) {
            $object->setWeeeTaxApplied(null);
        }
        if (\array_key_exists('weee_tax_applied_amount', $data) && $data['weee_tax_applied_amount'] !== null) {
            $object->setWeeeTaxAppliedAmount($data['weee_tax_applied_amount']);
        }
        elseif (\array_key_exists('weee_tax_applied_amount', $data) && $data['weee_tax_applied_amount'] === null) {
            $object->setWeeeTaxAppliedAmount(null);
        }
        if (\array_key_exists('weee_tax_applied_row_amount', $data) && $data['weee_tax_applied_row_amount'] !== null) {
            $object->setWeeeTaxAppliedRowAmount($data['weee_tax_applied_row_amount']);
        }
        elseif (\array_key_exists('weee_tax_applied_row_amount', $data) && $data['weee_tax_applied_row_amount'] === null) {
            $object->setWeeeTaxAppliedRowAmount(null);
        }
        if (\array_key_exists('weee_tax_disposition', $data) && $data['weee_tax_disposition'] !== null) {
            $object->setWeeeTaxDisposition($data['weee_tax_disposition']);
        }
        elseif (\array_key_exists('weee_tax_disposition', $data) && $data['weee_tax_disposition'] === null) {
            $object->setWeeeTaxDisposition(null);
        }
        if (\array_key_exists('weee_tax_row_disposition', $data) && $data['weee_tax_row_disposition'] !== null) {
            $object->setWeeeTaxRowDisposition($data['weee_tax_row_disposition']);
        }
        elseif (\array_key_exists('weee_tax_row_disposition', $data) && $data['weee_tax_row_disposition'] === null) {
            $object->setWeeeTaxRowDisposition(null);
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
        if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
            $data['additional_data'] = $object->getAdditionalData();
        }
        $data['base_cost'] = $object->getBaseCost();
        if ($object->isInitialized('baseDiscountAmount') && null !== $object->getBaseDiscountAmount()) {
            $data['base_discount_amount'] = $object->getBaseDiscountAmount();
        }
        if ($object->isInitialized('baseDiscountTaxCompensationAmount') && null !== $object->getBaseDiscountTaxCompensationAmount()) {
            $data['base_discount_tax_compensation_amount'] = $object->getBaseDiscountTaxCompensationAmount();
        }
        $data['base_price'] = $object->getBasePrice();
        if ($object->isInitialized('basePriceInclTax') && null !== $object->getBasePriceInclTax()) {
            $data['base_price_incl_tax'] = $object->getBasePriceInclTax();
        }
        if ($object->isInitialized('baseRowTotal') && null !== $object->getBaseRowTotal()) {
            $data['base_row_total'] = $object->getBaseRowTotal();
        }
        if ($object->isInitialized('baseRowTotalInclTax') && null !== $object->getBaseRowTotalInclTax()) {
            $data['base_row_total_incl_tax'] = $object->getBaseRowTotalInclTax();
        }
        if ($object->isInitialized('baseTaxAmount') && null !== $object->getBaseTaxAmount()) {
            $data['base_tax_amount'] = $object->getBaseTaxAmount();
        }
        if ($object->isInitialized('baseWeeeTaxAppliedAmount') && null !== $object->getBaseWeeeTaxAppliedAmount()) {
            $data['base_weee_tax_applied_amount'] = $object->getBaseWeeeTaxAppliedAmount();
        }
        if ($object->isInitialized('baseWeeeTaxAppliedRowAmnt') && null !== $object->getBaseWeeeTaxAppliedRowAmnt()) {
            $data['base_weee_tax_applied_row_amnt'] = $object->getBaseWeeeTaxAppliedRowAmnt();
        }
        if ($object->isInitialized('baseWeeeTaxDisposition') && null !== $object->getBaseWeeeTaxDisposition()) {
            $data['base_weee_tax_disposition'] = $object->getBaseWeeeTaxDisposition();
        }
        if ($object->isInitialized('baseWeeeTaxRowDisposition') && null !== $object->getBaseWeeeTaxRowDisposition()) {
            $data['base_weee_tax_row_disposition'] = $object->getBaseWeeeTaxRowDisposition();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('discountAmount') && null !== $object->getDiscountAmount()) {
            $data['discount_amount'] = $object->getDiscountAmount();
        }
        $data['entity_id'] = $object->getEntityId();
        if ($object->isInitialized('discountTaxCompensationAmount') && null !== $object->getDiscountTaxCompensationAmount()) {
            $data['discount_tax_compensation_amount'] = $object->getDiscountTaxCompensationAmount();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        $data['order_item_id'] = $object->getOrderItemId();
        if ($object->isInitialized('parentId') && null !== $object->getParentId()) {
            $data['parent_id'] = $object->getParentId();
        }
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if ($object->isInitialized('priceInclTax') && null !== $object->getPriceInclTax()) {
            $data['price_incl_tax'] = $object->getPriceInclTax();
        }
        if ($object->isInitialized('productId') && null !== $object->getProductId()) {
            $data['product_id'] = $object->getProductId();
        }
        $data['qty'] = $object->getQty();
        if ($object->isInitialized('rowTotal') && null !== $object->getRowTotal()) {
            $data['row_total'] = $object->getRowTotal();
        }
        if ($object->isInitialized('rowTotalInclTax') && null !== $object->getRowTotalInclTax()) {
            $data['row_total_incl_tax'] = $object->getRowTotalInclTax();
        }
        if ($object->isInitialized('sku') && null !== $object->getSku()) {
            $data['sku'] = $object->getSku();
        }
        if ($object->isInitialized('taxAmount') && null !== $object->getTaxAmount()) {
            $data['tax_amount'] = $object->getTaxAmount();
        }
        if ($object->isInitialized('weeeTaxApplied') && null !== $object->getWeeeTaxApplied()) {
            $data['weee_tax_applied'] = $object->getWeeeTaxApplied();
        }
        if ($object->isInitialized('weeeTaxAppliedAmount') && null !== $object->getWeeeTaxAppliedAmount()) {
            $data['weee_tax_applied_amount'] = $object->getWeeeTaxAppliedAmount();
        }
        if ($object->isInitialized('weeeTaxAppliedRowAmount') && null !== $object->getWeeeTaxAppliedRowAmount()) {
            $data['weee_tax_applied_row_amount'] = $object->getWeeeTaxAppliedRowAmount();
        }
        if ($object->isInitialized('weeeTaxDisposition') && null !== $object->getWeeeTaxDisposition()) {
            $data['weee_tax_disposition'] = $object->getWeeeTaxDisposition();
        }
        if ($object->isInitialized('weeeTaxRowDisposition') && null !== $object->getWeeeTaxRowDisposition()) {
            $data['weee_tax_row_disposition'] = $object->getWeeeTaxRowDisposition();
        }
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\SalesDataCreditmemoItemInterface' => false);
    }
}