<?php

namespace Kiboko\Magento\V2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_1\Runtime\Normalizer\CheckArray;
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
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\SalesDataOrderItemInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\SalesDataOrderItemInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\SalesDataOrderItemInterface();
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
        if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
            $object->setAdditionalData($data['additional_data']);
        } elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
            $object->setAdditionalData(null);
        }
        if (\array_key_exists('amount_refunded', $data) && $data['amount_refunded'] !== null) {
            $object->setAmountRefunded($data['amount_refunded']);
        } elseif (\array_key_exists('amount_refunded', $data) && $data['amount_refunded'] === null) {
            $object->setAmountRefunded(null);
        }
        if (\array_key_exists('applied_rule_ids', $data) && $data['applied_rule_ids'] !== null) {
            $object->setAppliedRuleIds($data['applied_rule_ids']);
        } elseif (\array_key_exists('applied_rule_ids', $data) && $data['applied_rule_ids'] === null) {
            $object->setAppliedRuleIds(null);
        }
        if (\array_key_exists('base_amount_refunded', $data) && $data['base_amount_refunded'] !== null) {
            $object->setBaseAmountRefunded($data['base_amount_refunded']);
        } elseif (\array_key_exists('base_amount_refunded', $data) && $data['base_amount_refunded'] === null) {
            $object->setBaseAmountRefunded(null);
        }
        if (\array_key_exists('base_cost', $data) && $data['base_cost'] !== null) {
            $object->setBaseCost($data['base_cost']);
        } elseif (\array_key_exists('base_cost', $data) && $data['base_cost'] === null) {
            $object->setBaseCost(null);
        }
        if (\array_key_exists('base_discount_amount', $data) && $data['base_discount_amount'] !== null) {
            $object->setBaseDiscountAmount($data['base_discount_amount']);
        } elseif (\array_key_exists('base_discount_amount', $data) && $data['base_discount_amount'] === null) {
            $object->setBaseDiscountAmount(null);
        }
        if (\array_key_exists('base_discount_invoiced', $data) && $data['base_discount_invoiced'] !== null) {
            $object->setBaseDiscountInvoiced($data['base_discount_invoiced']);
        } elseif (\array_key_exists('base_discount_invoiced', $data) && $data['base_discount_invoiced'] === null) {
            $object->setBaseDiscountInvoiced(null);
        }
        if (\array_key_exists('base_discount_refunded', $data) && $data['base_discount_refunded'] !== null) {
            $object->setBaseDiscountRefunded($data['base_discount_refunded']);
        } elseif (\array_key_exists('base_discount_refunded', $data) && $data['base_discount_refunded'] === null) {
            $object->setBaseDiscountRefunded(null);
        }
        if (\array_key_exists('base_discount_tax_compensation_amount', $data) && $data['base_discount_tax_compensation_amount'] !== null) {
            $object->setBaseDiscountTaxCompensationAmount($data['base_discount_tax_compensation_amount']);
        } elseif (\array_key_exists('base_discount_tax_compensation_amount', $data) && $data['base_discount_tax_compensation_amount'] === null) {
            $object->setBaseDiscountTaxCompensationAmount(null);
        }
        if (\array_key_exists('base_discount_tax_compensation_invoiced', $data) && $data['base_discount_tax_compensation_invoiced'] !== null) {
            $object->setBaseDiscountTaxCompensationInvoiced($data['base_discount_tax_compensation_invoiced']);
        } elseif (\array_key_exists('base_discount_tax_compensation_invoiced', $data) && $data['base_discount_tax_compensation_invoiced'] === null) {
            $object->setBaseDiscountTaxCompensationInvoiced(null);
        }
        if (\array_key_exists('base_discount_tax_compensation_refunded', $data) && $data['base_discount_tax_compensation_refunded'] !== null) {
            $object->setBaseDiscountTaxCompensationRefunded($data['base_discount_tax_compensation_refunded']);
        } elseif (\array_key_exists('base_discount_tax_compensation_refunded', $data) && $data['base_discount_tax_compensation_refunded'] === null) {
            $object->setBaseDiscountTaxCompensationRefunded(null);
        }
        if (\array_key_exists('base_original_price', $data) && $data['base_original_price'] !== null) {
            $object->setBaseOriginalPrice($data['base_original_price']);
        } elseif (\array_key_exists('base_original_price', $data) && $data['base_original_price'] === null) {
            $object->setBaseOriginalPrice(null);
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
        if (\array_key_exists('base_row_invoiced', $data) && $data['base_row_invoiced'] !== null) {
            $object->setBaseRowInvoiced($data['base_row_invoiced']);
        } elseif (\array_key_exists('base_row_invoiced', $data) && $data['base_row_invoiced'] === null) {
            $object->setBaseRowInvoiced(null);
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
        if (\array_key_exists('base_tax_before_discount', $data) && $data['base_tax_before_discount'] !== null) {
            $object->setBaseTaxBeforeDiscount($data['base_tax_before_discount']);
        } elseif (\array_key_exists('base_tax_before_discount', $data) && $data['base_tax_before_discount'] === null) {
            $object->setBaseTaxBeforeDiscount(null);
        }
        if (\array_key_exists('base_tax_invoiced', $data) && $data['base_tax_invoiced'] !== null) {
            $object->setBaseTaxInvoiced($data['base_tax_invoiced']);
        } elseif (\array_key_exists('base_tax_invoiced', $data) && $data['base_tax_invoiced'] === null) {
            $object->setBaseTaxInvoiced(null);
        }
        if (\array_key_exists('base_tax_refunded', $data) && $data['base_tax_refunded'] !== null) {
            $object->setBaseTaxRefunded($data['base_tax_refunded']);
        } elseif (\array_key_exists('base_tax_refunded', $data) && $data['base_tax_refunded'] === null) {
            $object->setBaseTaxRefunded(null);
        }
        if (\array_key_exists('base_weee_tax_applied_amount', $data) && $data['base_weee_tax_applied_amount'] !== null) {
            $object->setBaseWeeeTaxAppliedAmount($data['base_weee_tax_applied_amount']);
        } elseif (\array_key_exists('base_weee_tax_applied_amount', $data) && $data['base_weee_tax_applied_amount'] === null) {
            $object->setBaseWeeeTaxAppliedAmount(null);
        }
        if (\array_key_exists('base_weee_tax_applied_row_amnt', $data) && $data['base_weee_tax_applied_row_amnt'] !== null) {
            $object->setBaseWeeeTaxAppliedRowAmnt($data['base_weee_tax_applied_row_amnt']);
        } elseif (\array_key_exists('base_weee_tax_applied_row_amnt', $data) && $data['base_weee_tax_applied_row_amnt'] === null) {
            $object->setBaseWeeeTaxAppliedRowAmnt(null);
        }
        if (\array_key_exists('base_weee_tax_disposition', $data) && $data['base_weee_tax_disposition'] !== null) {
            $object->setBaseWeeeTaxDisposition($data['base_weee_tax_disposition']);
        } elseif (\array_key_exists('base_weee_tax_disposition', $data) && $data['base_weee_tax_disposition'] === null) {
            $object->setBaseWeeeTaxDisposition(null);
        }
        if (\array_key_exists('base_weee_tax_row_disposition', $data) && $data['base_weee_tax_row_disposition'] !== null) {
            $object->setBaseWeeeTaxRowDisposition($data['base_weee_tax_row_disposition']);
        } elseif (\array_key_exists('base_weee_tax_row_disposition', $data) && $data['base_weee_tax_row_disposition'] === null) {
            $object->setBaseWeeeTaxRowDisposition(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt($data['created_at']);
        } elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('discount_amount', $data) && $data['discount_amount'] !== null) {
            $object->setDiscountAmount($data['discount_amount']);
        } elseif (\array_key_exists('discount_amount', $data) && $data['discount_amount'] === null) {
            $object->setDiscountAmount(null);
        }
        if (\array_key_exists('discount_invoiced', $data) && $data['discount_invoiced'] !== null) {
            $object->setDiscountInvoiced($data['discount_invoiced']);
        } elseif (\array_key_exists('discount_invoiced', $data) && $data['discount_invoiced'] === null) {
            $object->setDiscountInvoiced(null);
        }
        if (\array_key_exists('discount_percent', $data) && $data['discount_percent'] !== null) {
            $object->setDiscountPercent($data['discount_percent']);
        } elseif (\array_key_exists('discount_percent', $data) && $data['discount_percent'] === null) {
            $object->setDiscountPercent(null);
        }
        if (\array_key_exists('discount_refunded', $data) && $data['discount_refunded'] !== null) {
            $object->setDiscountRefunded($data['discount_refunded']);
        } elseif (\array_key_exists('discount_refunded', $data) && $data['discount_refunded'] === null) {
            $object->setDiscountRefunded(null);
        }
        if (\array_key_exists('discount_tax_compensation_amount', $data) && $data['discount_tax_compensation_amount'] !== null) {
            $object->setDiscountTaxCompensationAmount($data['discount_tax_compensation_amount']);
        } elseif (\array_key_exists('discount_tax_compensation_amount', $data) && $data['discount_tax_compensation_amount'] === null) {
            $object->setDiscountTaxCompensationAmount(null);
        }
        if (\array_key_exists('discount_tax_compensation_canceled', $data) && $data['discount_tax_compensation_canceled'] !== null) {
            $object->setDiscountTaxCompensationCanceled($data['discount_tax_compensation_canceled']);
        } elseif (\array_key_exists('discount_tax_compensation_canceled', $data) && $data['discount_tax_compensation_canceled'] === null) {
            $object->setDiscountTaxCompensationCanceled(null);
        }
        if (\array_key_exists('discount_tax_compensation_invoiced', $data) && $data['discount_tax_compensation_invoiced'] !== null) {
            $object->setDiscountTaxCompensationInvoiced($data['discount_tax_compensation_invoiced']);
        } elseif (\array_key_exists('discount_tax_compensation_invoiced', $data) && $data['discount_tax_compensation_invoiced'] === null) {
            $object->setDiscountTaxCompensationInvoiced(null);
        }
        if (\array_key_exists('discount_tax_compensation_refunded', $data) && $data['discount_tax_compensation_refunded'] !== null) {
            $object->setDiscountTaxCompensationRefunded($data['discount_tax_compensation_refunded']);
        } elseif (\array_key_exists('discount_tax_compensation_refunded', $data) && $data['discount_tax_compensation_refunded'] === null) {
            $object->setDiscountTaxCompensationRefunded(null);
        }
        if (\array_key_exists('event_id', $data) && $data['event_id'] !== null) {
            $object->setEventId($data['event_id']);
        } elseif (\array_key_exists('event_id', $data) && $data['event_id'] === null) {
            $object->setEventId(null);
        }
        if (\array_key_exists('ext_order_item_id', $data) && $data['ext_order_item_id'] !== null) {
            $object->setExtOrderItemId($data['ext_order_item_id']);
        } elseif (\array_key_exists('ext_order_item_id', $data) && $data['ext_order_item_id'] === null) {
            $object->setExtOrderItemId(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_1\\Model\\SalesDataOrderItemExtensionInterface', 'json', $context));
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('free_shipping', $data) && $data['free_shipping'] !== null) {
            $object->setFreeShipping($data['free_shipping']);
        } elseif (\array_key_exists('free_shipping', $data) && $data['free_shipping'] === null) {
            $object->setFreeShipping(null);
        }
        if (\array_key_exists('gw_base_price', $data) && $data['gw_base_price'] !== null) {
            $object->setGwBasePrice($data['gw_base_price']);
        } elseif (\array_key_exists('gw_base_price', $data) && $data['gw_base_price'] === null) {
            $object->setGwBasePrice(null);
        }
        if (\array_key_exists('gw_base_price_invoiced', $data) && $data['gw_base_price_invoiced'] !== null) {
            $object->setGwBasePriceInvoiced($data['gw_base_price_invoiced']);
        } elseif (\array_key_exists('gw_base_price_invoiced', $data) && $data['gw_base_price_invoiced'] === null) {
            $object->setGwBasePriceInvoiced(null);
        }
        if (\array_key_exists('gw_base_price_refunded', $data) && $data['gw_base_price_refunded'] !== null) {
            $object->setGwBasePriceRefunded($data['gw_base_price_refunded']);
        } elseif (\array_key_exists('gw_base_price_refunded', $data) && $data['gw_base_price_refunded'] === null) {
            $object->setGwBasePriceRefunded(null);
        }
        if (\array_key_exists('gw_base_tax_amount', $data) && $data['gw_base_tax_amount'] !== null) {
            $object->setGwBaseTaxAmount($data['gw_base_tax_amount']);
        } elseif (\array_key_exists('gw_base_tax_amount', $data) && $data['gw_base_tax_amount'] === null) {
            $object->setGwBaseTaxAmount(null);
        }
        if (\array_key_exists('gw_base_tax_amount_invoiced', $data) && $data['gw_base_tax_amount_invoiced'] !== null) {
            $object->setGwBaseTaxAmountInvoiced($data['gw_base_tax_amount_invoiced']);
        } elseif (\array_key_exists('gw_base_tax_amount_invoiced', $data) && $data['gw_base_tax_amount_invoiced'] === null) {
            $object->setGwBaseTaxAmountInvoiced(null);
        }
        if (\array_key_exists('gw_base_tax_amount_refunded', $data) && $data['gw_base_tax_amount_refunded'] !== null) {
            $object->setGwBaseTaxAmountRefunded($data['gw_base_tax_amount_refunded']);
        } elseif (\array_key_exists('gw_base_tax_amount_refunded', $data) && $data['gw_base_tax_amount_refunded'] === null) {
            $object->setGwBaseTaxAmountRefunded(null);
        }
        if (\array_key_exists('gw_id', $data) && $data['gw_id'] !== null) {
            $object->setGwId($data['gw_id']);
        } elseif (\array_key_exists('gw_id', $data) && $data['gw_id'] === null) {
            $object->setGwId(null);
        }
        if (\array_key_exists('gw_price', $data) && $data['gw_price'] !== null) {
            $object->setGwPrice($data['gw_price']);
        } elseif (\array_key_exists('gw_price', $data) && $data['gw_price'] === null) {
            $object->setGwPrice(null);
        }
        if (\array_key_exists('gw_price_invoiced', $data) && $data['gw_price_invoiced'] !== null) {
            $object->setGwPriceInvoiced($data['gw_price_invoiced']);
        } elseif (\array_key_exists('gw_price_invoiced', $data) && $data['gw_price_invoiced'] === null) {
            $object->setGwPriceInvoiced(null);
        }
        if (\array_key_exists('gw_price_refunded', $data) && $data['gw_price_refunded'] !== null) {
            $object->setGwPriceRefunded($data['gw_price_refunded']);
        } elseif (\array_key_exists('gw_price_refunded', $data) && $data['gw_price_refunded'] === null) {
            $object->setGwPriceRefunded(null);
        }
        if (\array_key_exists('gw_tax_amount', $data) && $data['gw_tax_amount'] !== null) {
            $object->setGwTaxAmount($data['gw_tax_amount']);
        } elseif (\array_key_exists('gw_tax_amount', $data) && $data['gw_tax_amount'] === null) {
            $object->setGwTaxAmount(null);
        }
        if (\array_key_exists('gw_tax_amount_invoiced', $data) && $data['gw_tax_amount_invoiced'] !== null) {
            $object->setGwTaxAmountInvoiced($data['gw_tax_amount_invoiced']);
        } elseif (\array_key_exists('gw_tax_amount_invoiced', $data) && $data['gw_tax_amount_invoiced'] === null) {
            $object->setGwTaxAmountInvoiced(null);
        }
        if (\array_key_exists('gw_tax_amount_refunded', $data) && $data['gw_tax_amount_refunded'] !== null) {
            $object->setGwTaxAmountRefunded($data['gw_tax_amount_refunded']);
        } elseif (\array_key_exists('gw_tax_amount_refunded', $data) && $data['gw_tax_amount_refunded'] === null) {
            $object->setGwTaxAmountRefunded(null);
        }
        if (\array_key_exists('is_qty_decimal', $data) && $data['is_qty_decimal'] !== null) {
            $object->setIsQtyDecimal($data['is_qty_decimal']);
        } elseif (\array_key_exists('is_qty_decimal', $data) && $data['is_qty_decimal'] === null) {
            $object->setIsQtyDecimal(null);
        }
        if (\array_key_exists('is_virtual', $data) && $data['is_virtual'] !== null) {
            $object->setIsVirtual($data['is_virtual']);
        } elseif (\array_key_exists('is_virtual', $data) && $data['is_virtual'] === null) {
            $object->setIsVirtual(null);
        }
        if (\array_key_exists('item_id', $data) && $data['item_id'] !== null) {
            $object->setItemId($data['item_id']);
        } elseif (\array_key_exists('item_id', $data) && $data['item_id'] === null) {
            $object->setItemId(null);
        }
        if (\array_key_exists('locked_do_invoice', $data) && $data['locked_do_invoice'] !== null) {
            $object->setLockedDoInvoice($data['locked_do_invoice']);
        } elseif (\array_key_exists('locked_do_invoice', $data) && $data['locked_do_invoice'] === null) {
            $object->setLockedDoInvoice(null);
        }
        if (\array_key_exists('locked_do_ship', $data) && $data['locked_do_ship'] !== null) {
            $object->setLockedDoShip($data['locked_do_ship']);
        } elseif (\array_key_exists('locked_do_ship', $data) && $data['locked_do_ship'] === null) {
            $object->setLockedDoShip(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('no_discount', $data) && $data['no_discount'] !== null) {
            $object->setNoDiscount($data['no_discount']);
        } elseif (\array_key_exists('no_discount', $data) && $data['no_discount'] === null) {
            $object->setNoDiscount(null);
        }
        if (\array_key_exists('order_id', $data) && $data['order_id'] !== null) {
            $object->setOrderId($data['order_id']);
        } elseif (\array_key_exists('order_id', $data) && $data['order_id'] === null) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('original_price', $data) && $data['original_price'] !== null) {
            $object->setOriginalPrice($data['original_price']);
        } elseif (\array_key_exists('original_price', $data) && $data['original_price'] === null) {
            $object->setOriginalPrice(null);
        }
        if (\array_key_exists('parent_item', $data) && $data['parent_item'] !== null) {
            $object->setParentItem($this->denormalizer->denormalize($data['parent_item'], 'Kiboko\\Magento\\V2_1\\Model\\SalesDataOrderItemInterface', 'json', $context));
        } elseif (\array_key_exists('parent_item', $data) && $data['parent_item'] === null) {
            $object->setParentItem(null);
        }
        if (\array_key_exists('parent_item_id', $data) && $data['parent_item_id'] !== null) {
            $object->setParentItemId($data['parent_item_id']);
        } elseif (\array_key_exists('parent_item_id', $data) && $data['parent_item_id'] === null) {
            $object->setParentItemId(null);
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
        if (\array_key_exists('product_id', $data) && $data['product_id'] !== null) {
            $object->setProductId($data['product_id']);
        } elseif (\array_key_exists('product_id', $data) && $data['product_id'] === null) {
            $object->setProductId(null);
        }
        if (\array_key_exists('product_option', $data) && $data['product_option'] !== null) {
            $object->setProductOption($this->denormalizer->denormalize($data['product_option'], 'Kiboko\\Magento\\V2_1\\Model\\CatalogDataProductOptionInterface', 'json', $context));
        } elseif (\array_key_exists('product_option', $data) && $data['product_option'] === null) {
            $object->setProductOption(null);
        }
        if (\array_key_exists('product_type', $data) && $data['product_type'] !== null) {
            $object->setProductType($data['product_type']);
        } elseif (\array_key_exists('product_type', $data) && $data['product_type'] === null) {
            $object->setProductType(null);
        }
        if (\array_key_exists('qty_backordered', $data) && $data['qty_backordered'] !== null) {
            $object->setQtyBackordered($data['qty_backordered']);
        } elseif (\array_key_exists('qty_backordered', $data) && $data['qty_backordered'] === null) {
            $object->setQtyBackordered(null);
        }
        if (\array_key_exists('qty_canceled', $data) && $data['qty_canceled'] !== null) {
            $object->setQtyCanceled($data['qty_canceled']);
        } elseif (\array_key_exists('qty_canceled', $data) && $data['qty_canceled'] === null) {
            $object->setQtyCanceled(null);
        }
        if (\array_key_exists('qty_invoiced', $data) && $data['qty_invoiced'] !== null) {
            $object->setQtyInvoiced($data['qty_invoiced']);
        } elseif (\array_key_exists('qty_invoiced', $data) && $data['qty_invoiced'] === null) {
            $object->setQtyInvoiced(null);
        }
        if (\array_key_exists('qty_ordered', $data) && $data['qty_ordered'] !== null) {
            $object->setQtyOrdered($data['qty_ordered']);
        } elseif (\array_key_exists('qty_ordered', $data) && $data['qty_ordered'] === null) {
            $object->setQtyOrdered(null);
        }
        if (\array_key_exists('qty_refunded', $data) && $data['qty_refunded'] !== null) {
            $object->setQtyRefunded($data['qty_refunded']);
        } elseif (\array_key_exists('qty_refunded', $data) && $data['qty_refunded'] === null) {
            $object->setQtyRefunded(null);
        }
        if (\array_key_exists('qty_returned', $data) && $data['qty_returned'] !== null) {
            $object->setQtyReturned($data['qty_returned']);
        } elseif (\array_key_exists('qty_returned', $data) && $data['qty_returned'] === null) {
            $object->setQtyReturned(null);
        }
        if (\array_key_exists('qty_shipped', $data) && $data['qty_shipped'] !== null) {
            $object->setQtyShipped($data['qty_shipped']);
        } elseif (\array_key_exists('qty_shipped', $data) && $data['qty_shipped'] === null) {
            $object->setQtyShipped(null);
        }
        if (\array_key_exists('quote_item_id', $data) && $data['quote_item_id'] !== null) {
            $object->setQuoteItemId($data['quote_item_id']);
        } elseif (\array_key_exists('quote_item_id', $data) && $data['quote_item_id'] === null) {
            $object->setQuoteItemId(null);
        }
        if (\array_key_exists('row_invoiced', $data) && $data['row_invoiced'] !== null) {
            $object->setRowInvoiced($data['row_invoiced']);
        } elseif (\array_key_exists('row_invoiced', $data) && $data['row_invoiced'] === null) {
            $object->setRowInvoiced(null);
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
        if (\array_key_exists('row_weight', $data) && $data['row_weight'] !== null) {
            $object->setRowWeight($data['row_weight']);
        } elseif (\array_key_exists('row_weight', $data) && $data['row_weight'] === null) {
            $object->setRowWeight(null);
        }
        if (\array_key_exists('sku', $data) && $data['sku'] !== null) {
            $object->setSku($data['sku']);
        } elseif (\array_key_exists('sku', $data) && $data['sku'] === null) {
            $object->setSku(null);
        }
        if (\array_key_exists('store_id', $data) && $data['store_id'] !== null) {
            $object->setStoreId($data['store_id']);
        } elseif (\array_key_exists('store_id', $data) && $data['store_id'] === null) {
            $object->setStoreId(null);
        }
        if (\array_key_exists('tax_amount', $data) && $data['tax_amount'] !== null) {
            $object->setTaxAmount($data['tax_amount']);
        } elseif (\array_key_exists('tax_amount', $data) && $data['tax_amount'] === null) {
            $object->setTaxAmount(null);
        }
        if (\array_key_exists('tax_before_discount', $data) && $data['tax_before_discount'] !== null) {
            $object->setTaxBeforeDiscount($data['tax_before_discount']);
        } elseif (\array_key_exists('tax_before_discount', $data) && $data['tax_before_discount'] === null) {
            $object->setTaxBeforeDiscount(null);
        }
        if (\array_key_exists('tax_canceled', $data) && $data['tax_canceled'] !== null) {
            $object->setTaxCanceled($data['tax_canceled']);
        } elseif (\array_key_exists('tax_canceled', $data) && $data['tax_canceled'] === null) {
            $object->setTaxCanceled(null);
        }
        if (\array_key_exists('tax_invoiced', $data) && $data['tax_invoiced'] !== null) {
            $object->setTaxInvoiced($data['tax_invoiced']);
        } elseif (\array_key_exists('tax_invoiced', $data) && $data['tax_invoiced'] === null) {
            $object->setTaxInvoiced(null);
        }
        if (\array_key_exists('tax_percent', $data) && $data['tax_percent'] !== null) {
            $object->setTaxPercent($data['tax_percent']);
        } elseif (\array_key_exists('tax_percent', $data) && $data['tax_percent'] === null) {
            $object->setTaxPercent(null);
        }
        if (\array_key_exists('tax_refunded', $data) && $data['tax_refunded'] !== null) {
            $object->setTaxRefunded($data['tax_refunded']);
        } elseif (\array_key_exists('tax_refunded', $data) && $data['tax_refunded'] === null) {
            $object->setTaxRefunded(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt($data['updated_at']);
        } elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
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
        if (\array_key_exists('weee_tax_applied_row_amount', $data) && $data['weee_tax_applied_row_amount'] !== null) {
            $object->setWeeeTaxAppliedRowAmount($data['weee_tax_applied_row_amount']);
        } elseif (\array_key_exists('weee_tax_applied_row_amount', $data) && $data['weee_tax_applied_row_amount'] === null) {
            $object->setWeeeTaxAppliedRowAmount(null);
        }
        if (\array_key_exists('weee_tax_disposition', $data) && $data['weee_tax_disposition'] !== null) {
            $object->setWeeeTaxDisposition($data['weee_tax_disposition']);
        } elseif (\array_key_exists('weee_tax_disposition', $data) && $data['weee_tax_disposition'] === null) {
            $object->setWeeeTaxDisposition(null);
        }
        if (\array_key_exists('weee_tax_row_disposition', $data) && $data['weee_tax_row_disposition'] !== null) {
            $object->setWeeeTaxRowDisposition($data['weee_tax_row_disposition']);
        } elseif (\array_key_exists('weee_tax_row_disposition', $data) && $data['weee_tax_row_disposition'] === null) {
            $object->setWeeeTaxRowDisposition(null);
        }
        if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
            $object->setWeight($data['weight']);
        } elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
            $object->setWeight(null);
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
