<?php

namespace Kiboko\Magento\v2_4\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_4\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalesDataOrderItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_4\\Model\\SalesDataOrderItemInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_4\\Model\\SalesDataOrderItemInterface';
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
        $object = new \Kiboko\Magento\v2_4\Model\SalesDataOrderItemInterface();
        if (\array_key_exists('amount_refunded', $data) && \is_int($data['amount_refunded'])) {
            $data['amount_refunded'] = (float) $data['amount_refunded'];
        }
        if (\array_key_exists('base_amount_refunded', $data) && \is_int($data['base_amount_refunded'])) {
            $data['base_amount_refunded'] = (float) $data['base_amount_refunded'];
        }
        if (\array_key_exists('base_cost', $data) && \is_int($data['base_cost'])) {
            $data['base_cost'] = (float) $data['base_cost'];
        }
        if (\array_key_exists('base_discount_amount', $data) && \is_int($data['base_discount_amount'])) {
            $data['base_discount_amount'] = (float) $data['base_discount_amount'];
        }
        if (\array_key_exists('base_discount_invoiced', $data) && \is_int($data['base_discount_invoiced'])) {
            $data['base_discount_invoiced'] = (float) $data['base_discount_invoiced'];
        }
        if (\array_key_exists('base_discount_refunded', $data) && \is_int($data['base_discount_refunded'])) {
            $data['base_discount_refunded'] = (float) $data['base_discount_refunded'];
        }
        if (\array_key_exists('base_discount_tax_compensation_amount', $data) && \is_int($data['base_discount_tax_compensation_amount'])) {
            $data['base_discount_tax_compensation_amount'] = (float) $data['base_discount_tax_compensation_amount'];
        }
        if (\array_key_exists('base_discount_tax_compensation_invoiced', $data) && \is_int($data['base_discount_tax_compensation_invoiced'])) {
            $data['base_discount_tax_compensation_invoiced'] = (float) $data['base_discount_tax_compensation_invoiced'];
        }
        if (\array_key_exists('base_discount_tax_compensation_refunded', $data) && \is_int($data['base_discount_tax_compensation_refunded'])) {
            $data['base_discount_tax_compensation_refunded'] = (float) $data['base_discount_tax_compensation_refunded'];
        }
        if (\array_key_exists('base_original_price', $data) && \is_int($data['base_original_price'])) {
            $data['base_original_price'] = (float) $data['base_original_price'];
        }
        if (\array_key_exists('base_price', $data) && \is_int($data['base_price'])) {
            $data['base_price'] = (float) $data['base_price'];
        }
        if (\array_key_exists('base_price_incl_tax', $data) && \is_int($data['base_price_incl_tax'])) {
            $data['base_price_incl_tax'] = (float) $data['base_price_incl_tax'];
        }
        if (\array_key_exists('base_row_invoiced', $data) && \is_int($data['base_row_invoiced'])) {
            $data['base_row_invoiced'] = (float) $data['base_row_invoiced'];
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
        if (\array_key_exists('base_tax_before_discount', $data) && \is_int($data['base_tax_before_discount'])) {
            $data['base_tax_before_discount'] = (float) $data['base_tax_before_discount'];
        }
        if (\array_key_exists('base_tax_invoiced', $data) && \is_int($data['base_tax_invoiced'])) {
            $data['base_tax_invoiced'] = (float) $data['base_tax_invoiced'];
        }
        if (\array_key_exists('base_tax_refunded', $data) && \is_int($data['base_tax_refunded'])) {
            $data['base_tax_refunded'] = (float) $data['base_tax_refunded'];
        }
        if (\array_key_exists('base_weee_tax_applied_amount', $data) && \is_int($data['base_weee_tax_applied_amount'])) {
            $data['base_weee_tax_applied_amount'] = (float) $data['base_weee_tax_applied_amount'];
        }
        if (\array_key_exists('base_weee_tax_applied_row_amnt', $data) && \is_int($data['base_weee_tax_applied_row_amnt'])) {
            $data['base_weee_tax_applied_row_amnt'] = (float) $data['base_weee_tax_applied_row_amnt'];
        }
        if (\array_key_exists('base_weee_tax_disposition', $data) && \is_int($data['base_weee_tax_disposition'])) {
            $data['base_weee_tax_disposition'] = (float) $data['base_weee_tax_disposition'];
        }
        if (\array_key_exists('base_weee_tax_row_disposition', $data) && \is_int($data['base_weee_tax_row_disposition'])) {
            $data['base_weee_tax_row_disposition'] = (float) $data['base_weee_tax_row_disposition'];
        }
        if (\array_key_exists('discount_amount', $data) && \is_int($data['discount_amount'])) {
            $data['discount_amount'] = (float) $data['discount_amount'];
        }
        if (\array_key_exists('discount_invoiced', $data) && \is_int($data['discount_invoiced'])) {
            $data['discount_invoiced'] = (float) $data['discount_invoiced'];
        }
        if (\array_key_exists('discount_percent', $data) && \is_int($data['discount_percent'])) {
            $data['discount_percent'] = (float) $data['discount_percent'];
        }
        if (\array_key_exists('discount_refunded', $data) && \is_int($data['discount_refunded'])) {
            $data['discount_refunded'] = (float) $data['discount_refunded'];
        }
        if (\array_key_exists('discount_tax_compensation_amount', $data) && \is_int($data['discount_tax_compensation_amount'])) {
            $data['discount_tax_compensation_amount'] = (float) $data['discount_tax_compensation_amount'];
        }
        if (\array_key_exists('discount_tax_compensation_canceled', $data) && \is_int($data['discount_tax_compensation_canceled'])) {
            $data['discount_tax_compensation_canceled'] = (float) $data['discount_tax_compensation_canceled'];
        }
        if (\array_key_exists('discount_tax_compensation_invoiced', $data) && \is_int($data['discount_tax_compensation_invoiced'])) {
            $data['discount_tax_compensation_invoiced'] = (float) $data['discount_tax_compensation_invoiced'];
        }
        if (\array_key_exists('discount_tax_compensation_refunded', $data) && \is_int($data['discount_tax_compensation_refunded'])) {
            $data['discount_tax_compensation_refunded'] = (float) $data['discount_tax_compensation_refunded'];
        }
        if (\array_key_exists('gw_base_price', $data) && \is_int($data['gw_base_price'])) {
            $data['gw_base_price'] = (float) $data['gw_base_price'];
        }
        if (\array_key_exists('gw_base_price_invoiced', $data) && \is_int($data['gw_base_price_invoiced'])) {
            $data['gw_base_price_invoiced'] = (float) $data['gw_base_price_invoiced'];
        }
        if (\array_key_exists('gw_base_price_refunded', $data) && \is_int($data['gw_base_price_refunded'])) {
            $data['gw_base_price_refunded'] = (float) $data['gw_base_price_refunded'];
        }
        if (\array_key_exists('gw_base_tax_amount', $data) && \is_int($data['gw_base_tax_amount'])) {
            $data['gw_base_tax_amount'] = (float) $data['gw_base_tax_amount'];
        }
        if (\array_key_exists('gw_base_tax_amount_invoiced', $data) && \is_int($data['gw_base_tax_amount_invoiced'])) {
            $data['gw_base_tax_amount_invoiced'] = (float) $data['gw_base_tax_amount_invoiced'];
        }
        if (\array_key_exists('gw_base_tax_amount_refunded', $data) && \is_int($data['gw_base_tax_amount_refunded'])) {
            $data['gw_base_tax_amount_refunded'] = (float) $data['gw_base_tax_amount_refunded'];
        }
        if (\array_key_exists('gw_price', $data) && \is_int($data['gw_price'])) {
            $data['gw_price'] = (float) $data['gw_price'];
        }
        if (\array_key_exists('gw_price_invoiced', $data) && \is_int($data['gw_price_invoiced'])) {
            $data['gw_price_invoiced'] = (float) $data['gw_price_invoiced'];
        }
        if (\array_key_exists('gw_price_refunded', $data) && \is_int($data['gw_price_refunded'])) {
            $data['gw_price_refunded'] = (float) $data['gw_price_refunded'];
        }
        if (\array_key_exists('gw_tax_amount', $data) && \is_int($data['gw_tax_amount'])) {
            $data['gw_tax_amount'] = (float) $data['gw_tax_amount'];
        }
        if (\array_key_exists('gw_tax_amount_invoiced', $data) && \is_int($data['gw_tax_amount_invoiced'])) {
            $data['gw_tax_amount_invoiced'] = (float) $data['gw_tax_amount_invoiced'];
        }
        if (\array_key_exists('gw_tax_amount_refunded', $data) && \is_int($data['gw_tax_amount_refunded'])) {
            $data['gw_tax_amount_refunded'] = (float) $data['gw_tax_amount_refunded'];
        }
        if (\array_key_exists('original_price', $data) && \is_int($data['original_price'])) {
            $data['original_price'] = (float) $data['original_price'];
        }
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (\array_key_exists('price_incl_tax', $data) && \is_int($data['price_incl_tax'])) {
            $data['price_incl_tax'] = (float) $data['price_incl_tax'];
        }
        if (\array_key_exists('qty_backordered', $data) && \is_int($data['qty_backordered'])) {
            $data['qty_backordered'] = (float) $data['qty_backordered'];
        }
        if (\array_key_exists('qty_canceled', $data) && \is_int($data['qty_canceled'])) {
            $data['qty_canceled'] = (float) $data['qty_canceled'];
        }
        if (\array_key_exists('qty_invoiced', $data) && \is_int($data['qty_invoiced'])) {
            $data['qty_invoiced'] = (float) $data['qty_invoiced'];
        }
        if (\array_key_exists('qty_ordered', $data) && \is_int($data['qty_ordered'])) {
            $data['qty_ordered'] = (float) $data['qty_ordered'];
        }
        if (\array_key_exists('qty_refunded', $data) && \is_int($data['qty_refunded'])) {
            $data['qty_refunded'] = (float) $data['qty_refunded'];
        }
        if (\array_key_exists('qty_returned', $data) && \is_int($data['qty_returned'])) {
            $data['qty_returned'] = (float) $data['qty_returned'];
        }
        if (\array_key_exists('qty_shipped', $data) && \is_int($data['qty_shipped'])) {
            $data['qty_shipped'] = (float) $data['qty_shipped'];
        }
        if (\array_key_exists('row_invoiced', $data) && \is_int($data['row_invoiced'])) {
            $data['row_invoiced'] = (float) $data['row_invoiced'];
        }
        if (\array_key_exists('row_total', $data) && \is_int($data['row_total'])) {
            $data['row_total'] = (float) $data['row_total'];
        }
        if (\array_key_exists('row_total_incl_tax', $data) && \is_int($data['row_total_incl_tax'])) {
            $data['row_total_incl_tax'] = (float) $data['row_total_incl_tax'];
        }
        if (\array_key_exists('row_weight', $data) && \is_int($data['row_weight'])) {
            $data['row_weight'] = (float) $data['row_weight'];
        }
        if (\array_key_exists('tax_amount', $data) && \is_int($data['tax_amount'])) {
            $data['tax_amount'] = (float) $data['tax_amount'];
        }
        if (\array_key_exists('tax_before_discount', $data) && \is_int($data['tax_before_discount'])) {
            $data['tax_before_discount'] = (float) $data['tax_before_discount'];
        }
        if (\array_key_exists('tax_canceled', $data) && \is_int($data['tax_canceled'])) {
            $data['tax_canceled'] = (float) $data['tax_canceled'];
        }
        if (\array_key_exists('tax_invoiced', $data) && \is_int($data['tax_invoiced'])) {
            $data['tax_invoiced'] = (float) $data['tax_invoiced'];
        }
        if (\array_key_exists('tax_percent', $data) && \is_int($data['tax_percent'])) {
            $data['tax_percent'] = (float) $data['tax_percent'];
        }
        if (\array_key_exists('tax_refunded', $data) && \is_int($data['tax_refunded'])) {
            $data['tax_refunded'] = (float) $data['tax_refunded'];
        }
        if (\array_key_exists('weee_tax_applied_amount', $data) && \is_int($data['weee_tax_applied_amount'])) {
            $data['weee_tax_applied_amount'] = (float) $data['weee_tax_applied_amount'];
        }
        if (\array_key_exists('weee_tax_applied_row_amount', $data) && \is_int($data['weee_tax_applied_row_amount'])) {
            $data['weee_tax_applied_row_amount'] = (float) $data['weee_tax_applied_row_amount'];
        }
        if (\array_key_exists('weee_tax_disposition', $data) && \is_int($data['weee_tax_disposition'])) {
            $data['weee_tax_disposition'] = (float) $data['weee_tax_disposition'];
        }
        if (\array_key_exists('weee_tax_row_disposition', $data) && \is_int($data['weee_tax_row_disposition'])) {
            $data['weee_tax_row_disposition'] = (float) $data['weee_tax_row_disposition'];
        }
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (float) $data['weight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additional_data', $data)) {
            $object->setAdditionalData($data['additional_data']);
        }
        if (\array_key_exists('amount_refunded', $data)) {
            $object->setAmountRefunded($data['amount_refunded']);
        }
        if (\array_key_exists('applied_rule_ids', $data)) {
            $object->setAppliedRuleIds($data['applied_rule_ids']);
        }
        if (\array_key_exists('base_amount_refunded', $data)) {
            $object->setBaseAmountRefunded($data['base_amount_refunded']);
        }
        if (\array_key_exists('base_cost', $data)) {
            $object->setBaseCost($data['base_cost']);
        }
        if (\array_key_exists('base_discount_amount', $data)) {
            $object->setBaseDiscountAmount($data['base_discount_amount']);
        }
        if (\array_key_exists('base_discount_invoiced', $data)) {
            $object->setBaseDiscountInvoiced($data['base_discount_invoiced']);
        }
        if (\array_key_exists('base_discount_refunded', $data)) {
            $object->setBaseDiscountRefunded($data['base_discount_refunded']);
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
        if (\array_key_exists('base_original_price', $data)) {
            $object->setBaseOriginalPrice($data['base_original_price']);
        }
        if (\array_key_exists('base_price', $data)) {
            $object->setBasePrice($data['base_price']);
        }
        if (\array_key_exists('base_price_incl_tax', $data)) {
            $object->setBasePriceInclTax($data['base_price_incl_tax']);
        }
        if (\array_key_exists('base_row_invoiced', $data)) {
            $object->setBaseRowInvoiced($data['base_row_invoiced']);
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
        if (\array_key_exists('base_tax_before_discount', $data)) {
            $object->setBaseTaxBeforeDiscount($data['base_tax_before_discount']);
        }
        if (\array_key_exists('base_tax_invoiced', $data)) {
            $object->setBaseTaxInvoiced($data['base_tax_invoiced']);
        }
        if (\array_key_exists('base_tax_refunded', $data)) {
            $object->setBaseTaxRefunded($data['base_tax_refunded']);
        }
        if (\array_key_exists('base_weee_tax_applied_amount', $data)) {
            $object->setBaseWeeeTaxAppliedAmount($data['base_weee_tax_applied_amount']);
        }
        if (\array_key_exists('base_weee_tax_applied_row_amnt', $data)) {
            $object->setBaseWeeeTaxAppliedRowAmnt($data['base_weee_tax_applied_row_amnt']);
        }
        if (\array_key_exists('base_weee_tax_disposition', $data)) {
            $object->setBaseWeeeTaxDisposition($data['base_weee_tax_disposition']);
        }
        if (\array_key_exists('base_weee_tax_row_disposition', $data)) {
            $object->setBaseWeeeTaxRowDisposition($data['base_weee_tax_row_disposition']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('discount_amount', $data)) {
            $object->setDiscountAmount($data['discount_amount']);
        }
        if (\array_key_exists('discount_invoiced', $data)) {
            $object->setDiscountInvoiced($data['discount_invoiced']);
        }
        if (\array_key_exists('discount_percent', $data)) {
            $object->setDiscountPercent($data['discount_percent']);
        }
        if (\array_key_exists('discount_refunded', $data)) {
            $object->setDiscountRefunded($data['discount_refunded']);
        }
        if (\array_key_exists('discount_tax_compensation_amount', $data)) {
            $object->setDiscountTaxCompensationAmount($data['discount_tax_compensation_amount']);
        }
        if (\array_key_exists('discount_tax_compensation_canceled', $data)) {
            $object->setDiscountTaxCompensationCanceled($data['discount_tax_compensation_canceled']);
        }
        if (\array_key_exists('discount_tax_compensation_invoiced', $data)) {
            $object->setDiscountTaxCompensationInvoiced($data['discount_tax_compensation_invoiced']);
        }
        if (\array_key_exists('discount_tax_compensation_refunded', $data)) {
            $object->setDiscountTaxCompensationRefunded($data['discount_tax_compensation_refunded']);
        }
        if (\array_key_exists('event_id', $data)) {
            $object->setEventId($data['event_id']);
        }
        if (\array_key_exists('ext_order_item_id', $data)) {
            $object->setExtOrderItemId($data['ext_order_item_id']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\v2_4\\Model\\SalesDataOrderItemExtensionInterface', 'json', $context));
        }
        if (\array_key_exists('free_shipping', $data)) {
            $object->setFreeShipping($data['free_shipping']);
        }
        if (\array_key_exists('gw_base_price', $data)) {
            $object->setGwBasePrice($data['gw_base_price']);
        }
        if (\array_key_exists('gw_base_price_invoiced', $data)) {
            $object->setGwBasePriceInvoiced($data['gw_base_price_invoiced']);
        }
        if (\array_key_exists('gw_base_price_refunded', $data)) {
            $object->setGwBasePriceRefunded($data['gw_base_price_refunded']);
        }
        if (\array_key_exists('gw_base_tax_amount', $data)) {
            $object->setGwBaseTaxAmount($data['gw_base_tax_amount']);
        }
        if (\array_key_exists('gw_base_tax_amount_invoiced', $data)) {
            $object->setGwBaseTaxAmountInvoiced($data['gw_base_tax_amount_invoiced']);
        }
        if (\array_key_exists('gw_base_tax_amount_refunded', $data)) {
            $object->setGwBaseTaxAmountRefunded($data['gw_base_tax_amount_refunded']);
        }
        if (\array_key_exists('gw_id', $data)) {
            $object->setGwId($data['gw_id']);
        }
        if (\array_key_exists('gw_price', $data)) {
            $object->setGwPrice($data['gw_price']);
        }
        if (\array_key_exists('gw_price_invoiced', $data)) {
            $object->setGwPriceInvoiced($data['gw_price_invoiced']);
        }
        if (\array_key_exists('gw_price_refunded', $data)) {
            $object->setGwPriceRefunded($data['gw_price_refunded']);
        }
        if (\array_key_exists('gw_tax_amount', $data)) {
            $object->setGwTaxAmount($data['gw_tax_amount']);
        }
        if (\array_key_exists('gw_tax_amount_invoiced', $data)) {
            $object->setGwTaxAmountInvoiced($data['gw_tax_amount_invoiced']);
        }
        if (\array_key_exists('gw_tax_amount_refunded', $data)) {
            $object->setGwTaxAmountRefunded($data['gw_tax_amount_refunded']);
        }
        if (\array_key_exists('is_qty_decimal', $data)) {
            $object->setIsQtyDecimal($data['is_qty_decimal']);
        }
        if (\array_key_exists('is_virtual', $data)) {
            $object->setIsVirtual($data['is_virtual']);
        }
        if (\array_key_exists('item_id', $data)) {
            $object->setItemId($data['item_id']);
        }
        if (\array_key_exists('locked_do_invoice', $data)) {
            $object->setLockedDoInvoice($data['locked_do_invoice']);
        }
        if (\array_key_exists('locked_do_ship', $data)) {
            $object->setLockedDoShip($data['locked_do_ship']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('no_discount', $data)) {
            $object->setNoDiscount($data['no_discount']);
        }
        if (\array_key_exists('order_id', $data)) {
            $object->setOrderId($data['order_id']);
        }
        if (\array_key_exists('original_price', $data)) {
            $object->setOriginalPrice($data['original_price']);
        }
        if (\array_key_exists('parent_item', $data)) {
            $object->setParentItem($this->denormalizer->denormalize($data['parent_item'], 'Kiboko\\Magento\\v2_4\\Model\\SalesDataOrderItemInterface', 'json', $context));
        }
        if (\array_key_exists('parent_item_id', $data)) {
            $object->setParentItemId($data['parent_item_id']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
        }
        if (\array_key_exists('price_incl_tax', $data)) {
            $object->setPriceInclTax($data['price_incl_tax']);
        }
        if (\array_key_exists('product_id', $data)) {
            $object->setProductId($data['product_id']);
        }
        if (\array_key_exists('product_option', $data)) {
            $object->setProductOption($this->denormalizer->denormalize($data['product_option'], 'Kiboko\\Magento\\v2_4\\Model\\CatalogDataProductOptionInterface', 'json', $context));
        }
        if (\array_key_exists('product_type', $data)) {
            $object->setProductType($data['product_type']);
        }
        if (\array_key_exists('qty_backordered', $data)) {
            $object->setQtyBackordered($data['qty_backordered']);
        }
        if (\array_key_exists('qty_canceled', $data)) {
            $object->setQtyCanceled($data['qty_canceled']);
        }
        if (\array_key_exists('qty_invoiced', $data)) {
            $object->setQtyInvoiced($data['qty_invoiced']);
        }
        if (\array_key_exists('qty_ordered', $data)) {
            $object->setQtyOrdered($data['qty_ordered']);
        }
        if (\array_key_exists('qty_refunded', $data)) {
            $object->setQtyRefunded($data['qty_refunded']);
        }
        if (\array_key_exists('qty_returned', $data)) {
            $object->setQtyReturned($data['qty_returned']);
        }
        if (\array_key_exists('qty_shipped', $data)) {
            $object->setQtyShipped($data['qty_shipped']);
        }
        if (\array_key_exists('quote_item_id', $data)) {
            $object->setQuoteItemId($data['quote_item_id']);
        }
        if (\array_key_exists('row_invoiced', $data)) {
            $object->setRowInvoiced($data['row_invoiced']);
        }
        if (\array_key_exists('row_total', $data)) {
            $object->setRowTotal($data['row_total']);
        }
        if (\array_key_exists('row_total_incl_tax', $data)) {
            $object->setRowTotalInclTax($data['row_total_incl_tax']);
        }
        if (\array_key_exists('row_weight', $data)) {
            $object->setRowWeight($data['row_weight']);
        }
        if (\array_key_exists('sku', $data)) {
            $object->setSku($data['sku']);
        }
        if (\array_key_exists('store_id', $data)) {
            $object->setStoreId($data['store_id']);
        }
        if (\array_key_exists('tax_amount', $data)) {
            $object->setTaxAmount($data['tax_amount']);
        }
        if (\array_key_exists('tax_before_discount', $data)) {
            $object->setTaxBeforeDiscount($data['tax_before_discount']);
        }
        if (\array_key_exists('tax_canceled', $data)) {
            $object->setTaxCanceled($data['tax_canceled']);
        }
        if (\array_key_exists('tax_invoiced', $data)) {
            $object->setTaxInvoiced($data['tax_invoiced']);
        }
        if (\array_key_exists('tax_percent', $data)) {
            $object->setTaxPercent($data['tax_percent']);
        }
        if (\array_key_exists('tax_refunded', $data)) {
            $object->setTaxRefunded($data['tax_refunded']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (\array_key_exists('weee_tax_applied', $data)) {
            $object->setWeeeTaxApplied($data['weee_tax_applied']);
        }
        if (\array_key_exists('weee_tax_applied_amount', $data)) {
            $object->setWeeeTaxAppliedAmount($data['weee_tax_applied_amount']);
        }
        if (\array_key_exists('weee_tax_applied_row_amount', $data)) {
            $object->setWeeeTaxAppliedRowAmount($data['weee_tax_applied_row_amount']);
        }
        if (\array_key_exists('weee_tax_disposition', $data)) {
            $object->setWeeeTaxDisposition($data['weee_tax_disposition']);
        }
        if (\array_key_exists('weee_tax_row_disposition', $data)) {
            $object->setWeeeTaxRowDisposition($data['weee_tax_row_disposition']);
        }
        if (\array_key_exists('weight', $data)) {
            $object->setWeight($data['weight']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdditionalData()) {
            $data['additional_data'] = $object->getAdditionalData();
        }
        if (null !== $object->getAmountRefunded()) {
            $data['amount_refunded'] = $object->getAmountRefunded();
        }
        if (null !== $object->getAppliedRuleIds()) {
            $data['applied_rule_ids'] = $object->getAppliedRuleIds();
        }
        if (null !== $object->getBaseAmountRefunded()) {
            $data['base_amount_refunded'] = $object->getBaseAmountRefunded();
        }
        if (null !== $object->getBaseCost()) {
            $data['base_cost'] = $object->getBaseCost();
        }
        if (null !== $object->getBaseDiscountAmount()) {
            $data['base_discount_amount'] = $object->getBaseDiscountAmount();
        }
        if (null !== $object->getBaseDiscountInvoiced()) {
            $data['base_discount_invoiced'] = $object->getBaseDiscountInvoiced();
        }
        if (null !== $object->getBaseDiscountRefunded()) {
            $data['base_discount_refunded'] = $object->getBaseDiscountRefunded();
        }
        if (null !== $object->getBaseDiscountTaxCompensationAmount()) {
            $data['base_discount_tax_compensation_amount'] = $object->getBaseDiscountTaxCompensationAmount();
        }
        if (null !== $object->getBaseDiscountTaxCompensationInvoiced()) {
            $data['base_discount_tax_compensation_invoiced'] = $object->getBaseDiscountTaxCompensationInvoiced();
        }
        if (null !== $object->getBaseDiscountTaxCompensationRefunded()) {
            $data['base_discount_tax_compensation_refunded'] = $object->getBaseDiscountTaxCompensationRefunded();
        }
        if (null !== $object->getBaseOriginalPrice()) {
            $data['base_original_price'] = $object->getBaseOriginalPrice();
        }
        if (null !== $object->getBasePrice()) {
            $data['base_price'] = $object->getBasePrice();
        }
        if (null !== $object->getBasePriceInclTax()) {
            $data['base_price_incl_tax'] = $object->getBasePriceInclTax();
        }
        if (null !== $object->getBaseRowInvoiced()) {
            $data['base_row_invoiced'] = $object->getBaseRowInvoiced();
        }
        if (null !== $object->getBaseRowTotal()) {
            $data['base_row_total'] = $object->getBaseRowTotal();
        }
        if (null !== $object->getBaseRowTotalInclTax()) {
            $data['base_row_total_incl_tax'] = $object->getBaseRowTotalInclTax();
        }
        if (null !== $object->getBaseTaxAmount()) {
            $data['base_tax_amount'] = $object->getBaseTaxAmount();
        }
        if (null !== $object->getBaseTaxBeforeDiscount()) {
            $data['base_tax_before_discount'] = $object->getBaseTaxBeforeDiscount();
        }
        if (null !== $object->getBaseTaxInvoiced()) {
            $data['base_tax_invoiced'] = $object->getBaseTaxInvoiced();
        }
        if (null !== $object->getBaseTaxRefunded()) {
            $data['base_tax_refunded'] = $object->getBaseTaxRefunded();
        }
        if (null !== $object->getBaseWeeeTaxAppliedAmount()) {
            $data['base_weee_tax_applied_amount'] = $object->getBaseWeeeTaxAppliedAmount();
        }
        if (null !== $object->getBaseWeeeTaxAppliedRowAmnt()) {
            $data['base_weee_tax_applied_row_amnt'] = $object->getBaseWeeeTaxAppliedRowAmnt();
        }
        if (null !== $object->getBaseWeeeTaxDisposition()) {
            $data['base_weee_tax_disposition'] = $object->getBaseWeeeTaxDisposition();
        }
        if (null !== $object->getBaseWeeeTaxRowDisposition()) {
            $data['base_weee_tax_row_disposition'] = $object->getBaseWeeeTaxRowDisposition();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getDiscountAmount()) {
            $data['discount_amount'] = $object->getDiscountAmount();
        }
        if (null !== $object->getDiscountInvoiced()) {
            $data['discount_invoiced'] = $object->getDiscountInvoiced();
        }
        if (null !== $object->getDiscountPercent()) {
            $data['discount_percent'] = $object->getDiscountPercent();
        }
        if (null !== $object->getDiscountRefunded()) {
            $data['discount_refunded'] = $object->getDiscountRefunded();
        }
        if (null !== $object->getDiscountTaxCompensationAmount()) {
            $data['discount_tax_compensation_amount'] = $object->getDiscountTaxCompensationAmount();
        }
        if (null !== $object->getDiscountTaxCompensationCanceled()) {
            $data['discount_tax_compensation_canceled'] = $object->getDiscountTaxCompensationCanceled();
        }
        if (null !== $object->getDiscountTaxCompensationInvoiced()) {
            $data['discount_tax_compensation_invoiced'] = $object->getDiscountTaxCompensationInvoiced();
        }
        if (null !== $object->getDiscountTaxCompensationRefunded()) {
            $data['discount_tax_compensation_refunded'] = $object->getDiscountTaxCompensationRefunded();
        }
        if (null !== $object->getEventId()) {
            $data['event_id'] = $object->getEventId();
        }
        if (null !== $object->getExtOrderItemId()) {
            $data['ext_order_item_id'] = $object->getExtOrderItemId();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        if (null !== $object->getFreeShipping()) {
            $data['free_shipping'] = $object->getFreeShipping();
        }
        if (null !== $object->getGwBasePrice()) {
            $data['gw_base_price'] = $object->getGwBasePrice();
        }
        if (null !== $object->getGwBasePriceInvoiced()) {
            $data['gw_base_price_invoiced'] = $object->getGwBasePriceInvoiced();
        }
        if (null !== $object->getGwBasePriceRefunded()) {
            $data['gw_base_price_refunded'] = $object->getGwBasePriceRefunded();
        }
        if (null !== $object->getGwBaseTaxAmount()) {
            $data['gw_base_tax_amount'] = $object->getGwBaseTaxAmount();
        }
        if (null !== $object->getGwBaseTaxAmountInvoiced()) {
            $data['gw_base_tax_amount_invoiced'] = $object->getGwBaseTaxAmountInvoiced();
        }
        if (null !== $object->getGwBaseTaxAmountRefunded()) {
            $data['gw_base_tax_amount_refunded'] = $object->getGwBaseTaxAmountRefunded();
        }
        if (null !== $object->getGwId()) {
            $data['gw_id'] = $object->getGwId();
        }
        if (null !== $object->getGwPrice()) {
            $data['gw_price'] = $object->getGwPrice();
        }
        if (null !== $object->getGwPriceInvoiced()) {
            $data['gw_price_invoiced'] = $object->getGwPriceInvoiced();
        }
        if (null !== $object->getGwPriceRefunded()) {
            $data['gw_price_refunded'] = $object->getGwPriceRefunded();
        }
        if (null !== $object->getGwTaxAmount()) {
            $data['gw_tax_amount'] = $object->getGwTaxAmount();
        }
        if (null !== $object->getGwTaxAmountInvoiced()) {
            $data['gw_tax_amount_invoiced'] = $object->getGwTaxAmountInvoiced();
        }
        if (null !== $object->getGwTaxAmountRefunded()) {
            $data['gw_tax_amount_refunded'] = $object->getGwTaxAmountRefunded();
        }
        if (null !== $object->getIsQtyDecimal()) {
            $data['is_qty_decimal'] = $object->getIsQtyDecimal();
        }
        if (null !== $object->getIsVirtual()) {
            $data['is_virtual'] = $object->getIsVirtual();
        }
        if (null !== $object->getItemId()) {
            $data['item_id'] = $object->getItemId();
        }
        if (null !== $object->getLockedDoInvoice()) {
            $data['locked_do_invoice'] = $object->getLockedDoInvoice();
        }
        if (null !== $object->getLockedDoShip()) {
            $data['locked_do_ship'] = $object->getLockedDoShip();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getNoDiscount()) {
            $data['no_discount'] = $object->getNoDiscount();
        }
        if (null !== $object->getOrderId()) {
            $data['order_id'] = $object->getOrderId();
        }
        if (null !== $object->getOriginalPrice()) {
            $data['original_price'] = $object->getOriginalPrice();
        }
        if (null !== $object->getParentItem()) {
            $data['parent_item'] = $this->normalizer->normalize($object->getParentItem(), 'json', $context);
        }
        if (null !== $object->getParentItemId()) {
            $data['parent_item_id'] = $object->getParentItemId();
        }
        if (null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if (null !== $object->getPriceInclTax()) {
            $data['price_incl_tax'] = $object->getPriceInclTax();
        }
        if (null !== $object->getProductId()) {
            $data['product_id'] = $object->getProductId();
        }
        if (null !== $object->getProductOption()) {
            $data['product_option'] = $this->normalizer->normalize($object->getProductOption(), 'json', $context);
        }
        if (null !== $object->getProductType()) {
            $data['product_type'] = $object->getProductType();
        }
        if (null !== $object->getQtyBackordered()) {
            $data['qty_backordered'] = $object->getQtyBackordered();
        }
        if (null !== $object->getQtyCanceled()) {
            $data['qty_canceled'] = $object->getQtyCanceled();
        }
        if (null !== $object->getQtyInvoiced()) {
            $data['qty_invoiced'] = $object->getQtyInvoiced();
        }
        if (null !== $object->getQtyOrdered()) {
            $data['qty_ordered'] = $object->getQtyOrdered();
        }
        if (null !== $object->getQtyRefunded()) {
            $data['qty_refunded'] = $object->getQtyRefunded();
        }
        if (null !== $object->getQtyReturned()) {
            $data['qty_returned'] = $object->getQtyReturned();
        }
        if (null !== $object->getQtyShipped()) {
            $data['qty_shipped'] = $object->getQtyShipped();
        }
        if (null !== $object->getQuoteItemId()) {
            $data['quote_item_id'] = $object->getQuoteItemId();
        }
        if (null !== $object->getRowInvoiced()) {
            $data['row_invoiced'] = $object->getRowInvoiced();
        }
        if (null !== $object->getRowTotal()) {
            $data['row_total'] = $object->getRowTotal();
        }
        if (null !== $object->getRowTotalInclTax()) {
            $data['row_total_incl_tax'] = $object->getRowTotalInclTax();
        }
        if (null !== $object->getRowWeight()) {
            $data['row_weight'] = $object->getRowWeight();
        }
        $data['sku'] = $object->getSku();
        if (null !== $object->getStoreId()) {
            $data['store_id'] = $object->getStoreId();
        }
        if (null !== $object->getTaxAmount()) {
            $data['tax_amount'] = $object->getTaxAmount();
        }
        if (null !== $object->getTaxBeforeDiscount()) {
            $data['tax_before_discount'] = $object->getTaxBeforeDiscount();
        }
        if (null !== $object->getTaxCanceled()) {
            $data['tax_canceled'] = $object->getTaxCanceled();
        }
        if (null !== $object->getTaxInvoiced()) {
            $data['tax_invoiced'] = $object->getTaxInvoiced();
        }
        if (null !== $object->getTaxPercent()) {
            $data['tax_percent'] = $object->getTaxPercent();
        }
        if (null !== $object->getTaxRefunded()) {
            $data['tax_refunded'] = $object->getTaxRefunded();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if (null !== $object->getWeeeTaxApplied()) {
            $data['weee_tax_applied'] = $object->getWeeeTaxApplied();
        }
        if (null !== $object->getWeeeTaxAppliedAmount()) {
            $data['weee_tax_applied_amount'] = $object->getWeeeTaxAppliedAmount();
        }
        if (null !== $object->getWeeeTaxAppliedRowAmount()) {
            $data['weee_tax_applied_row_amount'] = $object->getWeeeTaxAppliedRowAmount();
        }
        if (null !== $object->getWeeeTaxDisposition()) {
            $data['weee_tax_disposition'] = $object->getWeeeTaxDisposition();
        }
        if (null !== $object->getWeeeTaxRowDisposition()) {
            $data['weee_tax_row_disposition'] = $object->getWeeeTaxRowDisposition();
        }
        if (null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }
        return $data;
    }
}
