<?php

namespace Kiboko\Magento\V2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalesDataOrderInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_2\\Model\\SalesDataOrderInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_2\\Model\\SalesDataOrderInterface';
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
        $object = new \Kiboko\Magento\V2_2\Model\SalesDataOrderInterface();
        if (\array_key_exists('adjustment_negative', $data) && \is_int($data['adjustment_negative'])) {
            $data['adjustment_negative'] = (float) $data['adjustment_negative'];
        }
        if (\array_key_exists('adjustment_positive', $data) && \is_int($data['adjustment_positive'])) {
            $data['adjustment_positive'] = (float) $data['adjustment_positive'];
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
        if (\array_key_exists('base_discount_canceled', $data) && \is_int($data['base_discount_canceled'])) {
            $data['base_discount_canceled'] = (float) $data['base_discount_canceled'];
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
        if (\array_key_exists('base_grand_total', $data) && \is_int($data['base_grand_total'])) {
            $data['base_grand_total'] = (float) $data['base_grand_total'];
        }
        if (\array_key_exists('base_shipping_amount', $data) && \is_int($data['base_shipping_amount'])) {
            $data['base_shipping_amount'] = (float) $data['base_shipping_amount'];
        }
        if (\array_key_exists('base_shipping_canceled', $data) && \is_int($data['base_shipping_canceled'])) {
            $data['base_shipping_canceled'] = (float) $data['base_shipping_canceled'];
        }
        if (\array_key_exists('base_shipping_discount_amount', $data) && \is_int($data['base_shipping_discount_amount'])) {
            $data['base_shipping_discount_amount'] = (float) $data['base_shipping_discount_amount'];
        }
        if (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data) && \is_int($data['base_shipping_discount_tax_compensation_amnt'])) {
            $data['base_shipping_discount_tax_compensation_amnt'] = (float) $data['base_shipping_discount_tax_compensation_amnt'];
        }
        if (\array_key_exists('base_shipping_incl_tax', $data) && \is_int($data['base_shipping_incl_tax'])) {
            $data['base_shipping_incl_tax'] = (float) $data['base_shipping_incl_tax'];
        }
        if (\array_key_exists('base_shipping_invoiced', $data) && \is_int($data['base_shipping_invoiced'])) {
            $data['base_shipping_invoiced'] = (float) $data['base_shipping_invoiced'];
        }
        if (\array_key_exists('base_shipping_refunded', $data) && \is_int($data['base_shipping_refunded'])) {
            $data['base_shipping_refunded'] = (float) $data['base_shipping_refunded'];
        }
        if (\array_key_exists('base_shipping_tax_amount', $data) && \is_int($data['base_shipping_tax_amount'])) {
            $data['base_shipping_tax_amount'] = (float) $data['base_shipping_tax_amount'];
        }
        if (\array_key_exists('base_shipping_tax_refunded', $data) && \is_int($data['base_shipping_tax_refunded'])) {
            $data['base_shipping_tax_refunded'] = (float) $data['base_shipping_tax_refunded'];
        }
        if (\array_key_exists('base_subtotal', $data) && \is_int($data['base_subtotal'])) {
            $data['base_subtotal'] = (float) $data['base_subtotal'];
        }
        if (\array_key_exists('base_subtotal_canceled', $data) && \is_int($data['base_subtotal_canceled'])) {
            $data['base_subtotal_canceled'] = (float) $data['base_subtotal_canceled'];
        }
        if (\array_key_exists('base_subtotal_incl_tax', $data) && \is_int($data['base_subtotal_incl_tax'])) {
            $data['base_subtotal_incl_tax'] = (float) $data['base_subtotal_incl_tax'];
        }
        if (\array_key_exists('base_subtotal_invoiced', $data) && \is_int($data['base_subtotal_invoiced'])) {
            $data['base_subtotal_invoiced'] = (float) $data['base_subtotal_invoiced'];
        }
        if (\array_key_exists('base_subtotal_refunded', $data) && \is_int($data['base_subtotal_refunded'])) {
            $data['base_subtotal_refunded'] = (float) $data['base_subtotal_refunded'];
        }
        if (\array_key_exists('base_tax_amount', $data) && \is_int($data['base_tax_amount'])) {
            $data['base_tax_amount'] = (float) $data['base_tax_amount'];
        }
        if (\array_key_exists('base_tax_canceled', $data) && \is_int($data['base_tax_canceled'])) {
            $data['base_tax_canceled'] = (float) $data['base_tax_canceled'];
        }
        if (\array_key_exists('base_tax_invoiced', $data) && \is_int($data['base_tax_invoiced'])) {
            $data['base_tax_invoiced'] = (float) $data['base_tax_invoiced'];
        }
        if (\array_key_exists('base_tax_refunded', $data) && \is_int($data['base_tax_refunded'])) {
            $data['base_tax_refunded'] = (float) $data['base_tax_refunded'];
        }
        if (\array_key_exists('base_to_global_rate', $data) && \is_int($data['base_to_global_rate'])) {
            $data['base_to_global_rate'] = (float) $data['base_to_global_rate'];
        }
        if (\array_key_exists('base_to_order_rate', $data) && \is_int($data['base_to_order_rate'])) {
            $data['base_to_order_rate'] = (float) $data['base_to_order_rate'];
        }
        if (\array_key_exists('base_total_canceled', $data) && \is_int($data['base_total_canceled'])) {
            $data['base_total_canceled'] = (float) $data['base_total_canceled'];
        }
        if (\array_key_exists('base_total_due', $data) && \is_int($data['base_total_due'])) {
            $data['base_total_due'] = (float) $data['base_total_due'];
        }
        if (\array_key_exists('base_total_invoiced', $data) && \is_int($data['base_total_invoiced'])) {
            $data['base_total_invoiced'] = (float) $data['base_total_invoiced'];
        }
        if (\array_key_exists('base_total_invoiced_cost', $data) && \is_int($data['base_total_invoiced_cost'])) {
            $data['base_total_invoiced_cost'] = (float) $data['base_total_invoiced_cost'];
        }
        if (\array_key_exists('base_total_offline_refunded', $data) && \is_int($data['base_total_offline_refunded'])) {
            $data['base_total_offline_refunded'] = (float) $data['base_total_offline_refunded'];
        }
        if (\array_key_exists('base_total_online_refunded', $data) && \is_int($data['base_total_online_refunded'])) {
            $data['base_total_online_refunded'] = (float) $data['base_total_online_refunded'];
        }
        if (\array_key_exists('base_total_paid', $data) && \is_int($data['base_total_paid'])) {
            $data['base_total_paid'] = (float) $data['base_total_paid'];
        }
        if (\array_key_exists('base_total_qty_ordered', $data) && \is_int($data['base_total_qty_ordered'])) {
            $data['base_total_qty_ordered'] = (float) $data['base_total_qty_ordered'];
        }
        if (\array_key_exists('base_total_refunded', $data) && \is_int($data['base_total_refunded'])) {
            $data['base_total_refunded'] = (float) $data['base_total_refunded'];
        }
        if (\array_key_exists('discount_amount', $data) && \is_int($data['discount_amount'])) {
            $data['discount_amount'] = (float) $data['discount_amount'];
        }
        if (\array_key_exists('discount_canceled', $data) && \is_int($data['discount_canceled'])) {
            $data['discount_canceled'] = (float) $data['discount_canceled'];
        }
        if (\array_key_exists('discount_invoiced', $data) && \is_int($data['discount_invoiced'])) {
            $data['discount_invoiced'] = (float) $data['discount_invoiced'];
        }
        if (\array_key_exists('discount_refunded', $data) && \is_int($data['discount_refunded'])) {
            $data['discount_refunded'] = (float) $data['discount_refunded'];
        }
        if (\array_key_exists('discount_tax_compensation_amount', $data) && \is_int($data['discount_tax_compensation_amount'])) {
            $data['discount_tax_compensation_amount'] = (float) $data['discount_tax_compensation_amount'];
        }
        if (\array_key_exists('discount_tax_compensation_invoiced', $data) && \is_int($data['discount_tax_compensation_invoiced'])) {
            $data['discount_tax_compensation_invoiced'] = (float) $data['discount_tax_compensation_invoiced'];
        }
        if (\array_key_exists('discount_tax_compensation_refunded', $data) && \is_int($data['discount_tax_compensation_refunded'])) {
            $data['discount_tax_compensation_refunded'] = (float) $data['discount_tax_compensation_refunded'];
        }
        if (\array_key_exists('grand_total', $data) && \is_int($data['grand_total'])) {
            $data['grand_total'] = (float) $data['grand_total'];
        }
        if (\array_key_exists('payment_authorization_amount', $data) && \is_int($data['payment_authorization_amount'])) {
            $data['payment_authorization_amount'] = (float) $data['payment_authorization_amount'];
        }
        if (\array_key_exists('shipping_amount', $data) && \is_int($data['shipping_amount'])) {
            $data['shipping_amount'] = (float) $data['shipping_amount'];
        }
        if (\array_key_exists('shipping_canceled', $data) && \is_int($data['shipping_canceled'])) {
            $data['shipping_canceled'] = (float) $data['shipping_canceled'];
        }
        if (\array_key_exists('shipping_discount_amount', $data) && \is_int($data['shipping_discount_amount'])) {
            $data['shipping_discount_amount'] = (float) $data['shipping_discount_amount'];
        }
        if (\array_key_exists('shipping_discount_tax_compensation_amount', $data) && \is_int($data['shipping_discount_tax_compensation_amount'])) {
            $data['shipping_discount_tax_compensation_amount'] = (float) $data['shipping_discount_tax_compensation_amount'];
        }
        if (\array_key_exists('shipping_incl_tax', $data) && \is_int($data['shipping_incl_tax'])) {
            $data['shipping_incl_tax'] = (float) $data['shipping_incl_tax'];
        }
        if (\array_key_exists('shipping_invoiced', $data) && \is_int($data['shipping_invoiced'])) {
            $data['shipping_invoiced'] = (float) $data['shipping_invoiced'];
        }
        if (\array_key_exists('shipping_refunded', $data) && \is_int($data['shipping_refunded'])) {
            $data['shipping_refunded'] = (float) $data['shipping_refunded'];
        }
        if (\array_key_exists('shipping_tax_amount', $data) && \is_int($data['shipping_tax_amount'])) {
            $data['shipping_tax_amount'] = (float) $data['shipping_tax_amount'];
        }
        if (\array_key_exists('shipping_tax_refunded', $data) && \is_int($data['shipping_tax_refunded'])) {
            $data['shipping_tax_refunded'] = (float) $data['shipping_tax_refunded'];
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
        if (\array_key_exists('subtotal_canceled', $data) && \is_int($data['subtotal_canceled'])) {
            $data['subtotal_canceled'] = (float) $data['subtotal_canceled'];
        }
        if (\array_key_exists('subtotal_incl_tax', $data) && \is_int($data['subtotal_incl_tax'])) {
            $data['subtotal_incl_tax'] = (float) $data['subtotal_incl_tax'];
        }
        if (\array_key_exists('subtotal_invoiced', $data) && \is_int($data['subtotal_invoiced'])) {
            $data['subtotal_invoiced'] = (float) $data['subtotal_invoiced'];
        }
        if (\array_key_exists('subtotal_refunded', $data) && \is_int($data['subtotal_refunded'])) {
            $data['subtotal_refunded'] = (float) $data['subtotal_refunded'];
        }
        if (\array_key_exists('tax_amount', $data) && \is_int($data['tax_amount'])) {
            $data['tax_amount'] = (float) $data['tax_amount'];
        }
        if (\array_key_exists('tax_canceled', $data) && \is_int($data['tax_canceled'])) {
            $data['tax_canceled'] = (float) $data['tax_canceled'];
        }
        if (\array_key_exists('tax_invoiced', $data) && \is_int($data['tax_invoiced'])) {
            $data['tax_invoiced'] = (float) $data['tax_invoiced'];
        }
        if (\array_key_exists('tax_refunded', $data) && \is_int($data['tax_refunded'])) {
            $data['tax_refunded'] = (float) $data['tax_refunded'];
        }
        if (\array_key_exists('total_canceled', $data) && \is_int($data['total_canceled'])) {
            $data['total_canceled'] = (float) $data['total_canceled'];
        }
        if (\array_key_exists('total_due', $data) && \is_int($data['total_due'])) {
            $data['total_due'] = (float) $data['total_due'];
        }
        if (\array_key_exists('total_invoiced', $data) && \is_int($data['total_invoiced'])) {
            $data['total_invoiced'] = (float) $data['total_invoiced'];
        }
        if (\array_key_exists('total_offline_refunded', $data) && \is_int($data['total_offline_refunded'])) {
            $data['total_offline_refunded'] = (float) $data['total_offline_refunded'];
        }
        if (\array_key_exists('total_online_refunded', $data) && \is_int($data['total_online_refunded'])) {
            $data['total_online_refunded'] = (float) $data['total_online_refunded'];
        }
        if (\array_key_exists('total_paid', $data) && \is_int($data['total_paid'])) {
            $data['total_paid'] = (float) $data['total_paid'];
        }
        if (\array_key_exists('total_qty_ordered', $data) && \is_int($data['total_qty_ordered'])) {
            $data['total_qty_ordered'] = (float) $data['total_qty_ordered'];
        }
        if (\array_key_exists('total_refunded', $data) && \is_int($data['total_refunded'])) {
            $data['total_refunded'] = (float) $data['total_refunded'];
        }
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (float) $data['weight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('adjustment_negative', $data) && $data['adjustment_negative'] !== null) {
            $object->setAdjustmentNegative($data['adjustment_negative']);
        } elseif (\array_key_exists('adjustment_negative', $data) && $data['adjustment_negative'] === null) {
            $object->setAdjustmentNegative(null);
        }
        if (\array_key_exists('adjustment_positive', $data) && $data['adjustment_positive'] !== null) {
            $object->setAdjustmentPositive($data['adjustment_positive']);
        } elseif (\array_key_exists('adjustment_positive', $data) && $data['adjustment_positive'] === null) {
            $object->setAdjustmentPositive(null);
        }
        if (\array_key_exists('applied_rule_ids', $data) && $data['applied_rule_ids'] !== null) {
            $object->setAppliedRuleIds($data['applied_rule_ids']);
        } elseif (\array_key_exists('applied_rule_ids', $data) && $data['applied_rule_ids'] === null) {
            $object->setAppliedRuleIds(null);
        }
        if (\array_key_exists('base_adjustment_negative', $data) && $data['base_adjustment_negative'] !== null) {
            $object->setBaseAdjustmentNegative($data['base_adjustment_negative']);
        } elseif (\array_key_exists('base_adjustment_negative', $data) && $data['base_adjustment_negative'] === null) {
            $object->setBaseAdjustmentNegative(null);
        }
        if (\array_key_exists('base_adjustment_positive', $data) && $data['base_adjustment_positive'] !== null) {
            $object->setBaseAdjustmentPositive($data['base_adjustment_positive']);
        } elseif (\array_key_exists('base_adjustment_positive', $data) && $data['base_adjustment_positive'] === null) {
            $object->setBaseAdjustmentPositive(null);
        }
        if (\array_key_exists('base_currency_code', $data) && $data['base_currency_code'] !== null) {
            $object->setBaseCurrencyCode($data['base_currency_code']);
        } elseif (\array_key_exists('base_currency_code', $data) && $data['base_currency_code'] === null) {
            $object->setBaseCurrencyCode(null);
        }
        if (\array_key_exists('base_discount_amount', $data) && $data['base_discount_amount'] !== null) {
            $object->setBaseDiscountAmount($data['base_discount_amount']);
        } elseif (\array_key_exists('base_discount_amount', $data) && $data['base_discount_amount'] === null) {
            $object->setBaseDiscountAmount(null);
        }
        if (\array_key_exists('base_discount_canceled', $data) && $data['base_discount_canceled'] !== null) {
            $object->setBaseDiscountCanceled($data['base_discount_canceled']);
        } elseif (\array_key_exists('base_discount_canceled', $data) && $data['base_discount_canceled'] === null) {
            $object->setBaseDiscountCanceled(null);
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
        if (\array_key_exists('base_grand_total', $data) && $data['base_grand_total'] !== null) {
            $object->setBaseGrandTotal($data['base_grand_total']);
        } elseif (\array_key_exists('base_grand_total', $data) && $data['base_grand_total'] === null) {
            $object->setBaseGrandTotal(null);
        }
        if (\array_key_exists('base_shipping_amount', $data) && $data['base_shipping_amount'] !== null) {
            $object->setBaseShippingAmount($data['base_shipping_amount']);
        } elseif (\array_key_exists('base_shipping_amount', $data) && $data['base_shipping_amount'] === null) {
            $object->setBaseShippingAmount(null);
        }
        if (\array_key_exists('base_shipping_canceled', $data) && $data['base_shipping_canceled'] !== null) {
            $object->setBaseShippingCanceled($data['base_shipping_canceled']);
        } elseif (\array_key_exists('base_shipping_canceled', $data) && $data['base_shipping_canceled'] === null) {
            $object->setBaseShippingCanceled(null);
        }
        if (\array_key_exists('base_shipping_discount_amount', $data) && $data['base_shipping_discount_amount'] !== null) {
            $object->setBaseShippingDiscountAmount($data['base_shipping_discount_amount']);
        } elseif (\array_key_exists('base_shipping_discount_amount', $data) && $data['base_shipping_discount_amount'] === null) {
            $object->setBaseShippingDiscountAmount(null);
        }
        if (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data) && $data['base_shipping_discount_tax_compensation_amnt'] !== null) {
            $object->setBaseShippingDiscountTaxCompensationAmnt($data['base_shipping_discount_tax_compensation_amnt']);
        } elseif (\array_key_exists('base_shipping_discount_tax_compensation_amnt', $data) && $data['base_shipping_discount_tax_compensation_amnt'] === null) {
            $object->setBaseShippingDiscountTaxCompensationAmnt(null);
        }
        if (\array_key_exists('base_shipping_incl_tax', $data) && $data['base_shipping_incl_tax'] !== null) {
            $object->setBaseShippingInclTax($data['base_shipping_incl_tax']);
        } elseif (\array_key_exists('base_shipping_incl_tax', $data) && $data['base_shipping_incl_tax'] === null) {
            $object->setBaseShippingInclTax(null);
        }
        if (\array_key_exists('base_shipping_invoiced', $data) && $data['base_shipping_invoiced'] !== null) {
            $object->setBaseShippingInvoiced($data['base_shipping_invoiced']);
        } elseif (\array_key_exists('base_shipping_invoiced', $data) && $data['base_shipping_invoiced'] === null) {
            $object->setBaseShippingInvoiced(null);
        }
        if (\array_key_exists('base_shipping_refunded', $data) && $data['base_shipping_refunded'] !== null) {
            $object->setBaseShippingRefunded($data['base_shipping_refunded']);
        } elseif (\array_key_exists('base_shipping_refunded', $data) && $data['base_shipping_refunded'] === null) {
            $object->setBaseShippingRefunded(null);
        }
        if (\array_key_exists('base_shipping_tax_amount', $data) && $data['base_shipping_tax_amount'] !== null) {
            $object->setBaseShippingTaxAmount($data['base_shipping_tax_amount']);
        } elseif (\array_key_exists('base_shipping_tax_amount', $data) && $data['base_shipping_tax_amount'] === null) {
            $object->setBaseShippingTaxAmount(null);
        }
        if (\array_key_exists('base_shipping_tax_refunded', $data) && $data['base_shipping_tax_refunded'] !== null) {
            $object->setBaseShippingTaxRefunded($data['base_shipping_tax_refunded']);
        } elseif (\array_key_exists('base_shipping_tax_refunded', $data) && $data['base_shipping_tax_refunded'] === null) {
            $object->setBaseShippingTaxRefunded(null);
        }
        if (\array_key_exists('base_subtotal', $data) && $data['base_subtotal'] !== null) {
            $object->setBaseSubtotal($data['base_subtotal']);
        } elseif (\array_key_exists('base_subtotal', $data) && $data['base_subtotal'] === null) {
            $object->setBaseSubtotal(null);
        }
        if (\array_key_exists('base_subtotal_canceled', $data) && $data['base_subtotal_canceled'] !== null) {
            $object->setBaseSubtotalCanceled($data['base_subtotal_canceled']);
        } elseif (\array_key_exists('base_subtotal_canceled', $data) && $data['base_subtotal_canceled'] === null) {
            $object->setBaseSubtotalCanceled(null);
        }
        if (\array_key_exists('base_subtotal_incl_tax', $data) && $data['base_subtotal_incl_tax'] !== null) {
            $object->setBaseSubtotalInclTax($data['base_subtotal_incl_tax']);
        } elseif (\array_key_exists('base_subtotal_incl_tax', $data) && $data['base_subtotal_incl_tax'] === null) {
            $object->setBaseSubtotalInclTax(null);
        }
        if (\array_key_exists('base_subtotal_invoiced', $data) && $data['base_subtotal_invoiced'] !== null) {
            $object->setBaseSubtotalInvoiced($data['base_subtotal_invoiced']);
        } elseif (\array_key_exists('base_subtotal_invoiced', $data) && $data['base_subtotal_invoiced'] === null) {
            $object->setBaseSubtotalInvoiced(null);
        }
        if (\array_key_exists('base_subtotal_refunded', $data) && $data['base_subtotal_refunded'] !== null) {
            $object->setBaseSubtotalRefunded($data['base_subtotal_refunded']);
        } elseif (\array_key_exists('base_subtotal_refunded', $data) && $data['base_subtotal_refunded'] === null) {
            $object->setBaseSubtotalRefunded(null);
        }
        if (\array_key_exists('base_tax_amount', $data) && $data['base_tax_amount'] !== null) {
            $object->setBaseTaxAmount($data['base_tax_amount']);
        } elseif (\array_key_exists('base_tax_amount', $data) && $data['base_tax_amount'] === null) {
            $object->setBaseTaxAmount(null);
        }
        if (\array_key_exists('base_tax_canceled', $data) && $data['base_tax_canceled'] !== null) {
            $object->setBaseTaxCanceled($data['base_tax_canceled']);
        } elseif (\array_key_exists('base_tax_canceled', $data) && $data['base_tax_canceled'] === null) {
            $object->setBaseTaxCanceled(null);
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
        if (\array_key_exists('base_to_global_rate', $data) && $data['base_to_global_rate'] !== null) {
            $object->setBaseToGlobalRate($data['base_to_global_rate']);
        } elseif (\array_key_exists('base_to_global_rate', $data) && $data['base_to_global_rate'] === null) {
            $object->setBaseToGlobalRate(null);
        }
        if (\array_key_exists('base_to_order_rate', $data) && $data['base_to_order_rate'] !== null) {
            $object->setBaseToOrderRate($data['base_to_order_rate']);
        } elseif (\array_key_exists('base_to_order_rate', $data) && $data['base_to_order_rate'] === null) {
            $object->setBaseToOrderRate(null);
        }
        if (\array_key_exists('base_total_canceled', $data) && $data['base_total_canceled'] !== null) {
            $object->setBaseTotalCanceled($data['base_total_canceled']);
        } elseif (\array_key_exists('base_total_canceled', $data) && $data['base_total_canceled'] === null) {
            $object->setBaseTotalCanceled(null);
        }
        if (\array_key_exists('base_total_due', $data) && $data['base_total_due'] !== null) {
            $object->setBaseTotalDue($data['base_total_due']);
        } elseif (\array_key_exists('base_total_due', $data) && $data['base_total_due'] === null) {
            $object->setBaseTotalDue(null);
        }
        if (\array_key_exists('base_total_invoiced', $data) && $data['base_total_invoiced'] !== null) {
            $object->setBaseTotalInvoiced($data['base_total_invoiced']);
        } elseif (\array_key_exists('base_total_invoiced', $data) && $data['base_total_invoiced'] === null) {
            $object->setBaseTotalInvoiced(null);
        }
        if (\array_key_exists('base_total_invoiced_cost', $data) && $data['base_total_invoiced_cost'] !== null) {
            $object->setBaseTotalInvoicedCost($data['base_total_invoiced_cost']);
        } elseif (\array_key_exists('base_total_invoiced_cost', $data) && $data['base_total_invoiced_cost'] === null) {
            $object->setBaseTotalInvoicedCost(null);
        }
        if (\array_key_exists('base_total_offline_refunded', $data) && $data['base_total_offline_refunded'] !== null) {
            $object->setBaseTotalOfflineRefunded($data['base_total_offline_refunded']);
        } elseif (\array_key_exists('base_total_offline_refunded', $data) && $data['base_total_offline_refunded'] === null) {
            $object->setBaseTotalOfflineRefunded(null);
        }
        if (\array_key_exists('base_total_online_refunded', $data) && $data['base_total_online_refunded'] !== null) {
            $object->setBaseTotalOnlineRefunded($data['base_total_online_refunded']);
        } elseif (\array_key_exists('base_total_online_refunded', $data) && $data['base_total_online_refunded'] === null) {
            $object->setBaseTotalOnlineRefunded(null);
        }
        if (\array_key_exists('base_total_paid', $data) && $data['base_total_paid'] !== null) {
            $object->setBaseTotalPaid($data['base_total_paid']);
        } elseif (\array_key_exists('base_total_paid', $data) && $data['base_total_paid'] === null) {
            $object->setBaseTotalPaid(null);
        }
        if (\array_key_exists('base_total_qty_ordered', $data) && $data['base_total_qty_ordered'] !== null) {
            $object->setBaseTotalQtyOrdered($data['base_total_qty_ordered']);
        } elseif (\array_key_exists('base_total_qty_ordered', $data) && $data['base_total_qty_ordered'] === null) {
            $object->setBaseTotalQtyOrdered(null);
        }
        if (\array_key_exists('base_total_refunded', $data) && $data['base_total_refunded'] !== null) {
            $object->setBaseTotalRefunded($data['base_total_refunded']);
        } elseif (\array_key_exists('base_total_refunded', $data) && $data['base_total_refunded'] === null) {
            $object->setBaseTotalRefunded(null);
        }
        if (\array_key_exists('billing_address', $data) && $data['billing_address'] !== null) {
            $object->setBillingAddress($this->denormalizer->denormalize($data['billing_address'], 'Kiboko\\Magento\\V2_2\\Model\\SalesDataOrderAddressInterface', 'json', $context));
        } elseif (\array_key_exists('billing_address', $data) && $data['billing_address'] === null) {
            $object->setBillingAddress(null);
        }
        if (\array_key_exists('billing_address_id', $data) && $data['billing_address_id'] !== null) {
            $object->setBillingAddressId($data['billing_address_id']);
        } elseif (\array_key_exists('billing_address_id', $data) && $data['billing_address_id'] === null) {
            $object->setBillingAddressId(null);
        }
        if (\array_key_exists('can_ship_partially', $data) && $data['can_ship_partially'] !== null) {
            $object->setCanShipPartially($data['can_ship_partially']);
        } elseif (\array_key_exists('can_ship_partially', $data) && $data['can_ship_partially'] === null) {
            $object->setCanShipPartially(null);
        }
        if (\array_key_exists('can_ship_partially_item', $data) && $data['can_ship_partially_item'] !== null) {
            $object->setCanShipPartiallyItem($data['can_ship_partially_item']);
        } elseif (\array_key_exists('can_ship_partially_item', $data) && $data['can_ship_partially_item'] === null) {
            $object->setCanShipPartiallyItem(null);
        }
        if (\array_key_exists('coupon_code', $data) && $data['coupon_code'] !== null) {
            $object->setCouponCode($data['coupon_code']);
        } elseif (\array_key_exists('coupon_code', $data) && $data['coupon_code'] === null) {
            $object->setCouponCode(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt($data['created_at']);
        } elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('customer_dob', $data) && $data['customer_dob'] !== null) {
            $object->setCustomerDob($data['customer_dob']);
        } elseif (\array_key_exists('customer_dob', $data) && $data['customer_dob'] === null) {
            $object->setCustomerDob(null);
        }
        if (\array_key_exists('customer_email', $data) && $data['customer_email'] !== null) {
            $object->setCustomerEmail($data['customer_email']);
        } elseif (\array_key_exists('customer_email', $data) && $data['customer_email'] === null) {
            $object->setCustomerEmail(null);
        }
        if (\array_key_exists('customer_firstname', $data) && $data['customer_firstname'] !== null) {
            $object->setCustomerFirstname($data['customer_firstname']);
        } elseif (\array_key_exists('customer_firstname', $data) && $data['customer_firstname'] === null) {
            $object->setCustomerFirstname(null);
        }
        if (\array_key_exists('customer_gender', $data) && $data['customer_gender'] !== null) {
            $object->setCustomerGender($data['customer_gender']);
        } elseif (\array_key_exists('customer_gender', $data) && $data['customer_gender'] === null) {
            $object->setCustomerGender(null);
        }
        if (\array_key_exists('customer_group_id', $data) && $data['customer_group_id'] !== null) {
            $object->setCustomerGroupId($data['customer_group_id']);
        } elseif (\array_key_exists('customer_group_id', $data) && $data['customer_group_id'] === null) {
            $object->setCustomerGroupId(null);
        }
        if (\array_key_exists('customer_id', $data) && $data['customer_id'] !== null) {
            $object->setCustomerId($data['customer_id']);
        } elseif (\array_key_exists('customer_id', $data) && $data['customer_id'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('customer_is_guest', $data) && $data['customer_is_guest'] !== null) {
            $object->setCustomerIsGuest($data['customer_is_guest']);
        } elseif (\array_key_exists('customer_is_guest', $data) && $data['customer_is_guest'] === null) {
            $object->setCustomerIsGuest(null);
        }
        if (\array_key_exists('customer_lastname', $data) && $data['customer_lastname'] !== null) {
            $object->setCustomerLastname($data['customer_lastname']);
        } elseif (\array_key_exists('customer_lastname', $data) && $data['customer_lastname'] === null) {
            $object->setCustomerLastname(null);
        }
        if (\array_key_exists('customer_middlename', $data) && $data['customer_middlename'] !== null) {
            $object->setCustomerMiddlename($data['customer_middlename']);
        } elseif (\array_key_exists('customer_middlename', $data) && $data['customer_middlename'] === null) {
            $object->setCustomerMiddlename(null);
        }
        if (\array_key_exists('customer_note', $data) && $data['customer_note'] !== null) {
            $object->setCustomerNote($data['customer_note']);
        } elseif (\array_key_exists('customer_note', $data) && $data['customer_note'] === null) {
            $object->setCustomerNote(null);
        }
        if (\array_key_exists('customer_note_notify', $data) && $data['customer_note_notify'] !== null) {
            $object->setCustomerNoteNotify($data['customer_note_notify']);
        } elseif (\array_key_exists('customer_note_notify', $data) && $data['customer_note_notify'] === null) {
            $object->setCustomerNoteNotify(null);
        }
        if (\array_key_exists('customer_prefix', $data) && $data['customer_prefix'] !== null) {
            $object->setCustomerPrefix($data['customer_prefix']);
        } elseif (\array_key_exists('customer_prefix', $data) && $data['customer_prefix'] === null) {
            $object->setCustomerPrefix(null);
        }
        if (\array_key_exists('customer_suffix', $data) && $data['customer_suffix'] !== null) {
            $object->setCustomerSuffix($data['customer_suffix']);
        } elseif (\array_key_exists('customer_suffix', $data) && $data['customer_suffix'] === null) {
            $object->setCustomerSuffix(null);
        }
        if (\array_key_exists('customer_taxvat', $data) && $data['customer_taxvat'] !== null) {
            $object->setCustomerTaxvat($data['customer_taxvat']);
        } elseif (\array_key_exists('customer_taxvat', $data) && $data['customer_taxvat'] === null) {
            $object->setCustomerTaxvat(null);
        }
        if (\array_key_exists('discount_amount', $data) && $data['discount_amount'] !== null) {
            $object->setDiscountAmount($data['discount_amount']);
        } elseif (\array_key_exists('discount_amount', $data) && $data['discount_amount'] === null) {
            $object->setDiscountAmount(null);
        }
        if (\array_key_exists('discount_canceled', $data) && $data['discount_canceled'] !== null) {
            $object->setDiscountCanceled($data['discount_canceled']);
        } elseif (\array_key_exists('discount_canceled', $data) && $data['discount_canceled'] === null) {
            $object->setDiscountCanceled(null);
        }
        if (\array_key_exists('discount_description', $data) && $data['discount_description'] !== null) {
            $object->setDiscountDescription($data['discount_description']);
        } elseif (\array_key_exists('discount_description', $data) && $data['discount_description'] === null) {
            $object->setDiscountDescription(null);
        }
        if (\array_key_exists('discount_invoiced', $data) && $data['discount_invoiced'] !== null) {
            $object->setDiscountInvoiced($data['discount_invoiced']);
        } elseif (\array_key_exists('discount_invoiced', $data) && $data['discount_invoiced'] === null) {
            $object->setDiscountInvoiced(null);
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
        if (\array_key_exists('edit_increment', $data) && $data['edit_increment'] !== null) {
            $object->setEditIncrement($data['edit_increment']);
        } elseif (\array_key_exists('edit_increment', $data) && $data['edit_increment'] === null) {
            $object->setEditIncrement(null);
        }
        if (\array_key_exists('email_sent', $data) && $data['email_sent'] !== null) {
            $object->setEmailSent($data['email_sent']);
        } elseif (\array_key_exists('email_sent', $data) && $data['email_sent'] === null) {
            $object->setEmailSent(null);
        }
        if (\array_key_exists('entity_id', $data) && $data['entity_id'] !== null) {
            $object->setEntityId($data['entity_id']);
        } elseif (\array_key_exists('entity_id', $data) && $data['entity_id'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('ext_customer_id', $data) && $data['ext_customer_id'] !== null) {
            $object->setExtCustomerId($data['ext_customer_id']);
        } elseif (\array_key_exists('ext_customer_id', $data) && $data['ext_customer_id'] === null) {
            $object->setExtCustomerId(null);
        }
        if (\array_key_exists('ext_order_id', $data) && $data['ext_order_id'] !== null) {
            $object->setExtOrderId($data['ext_order_id']);
        } elseif (\array_key_exists('ext_order_id', $data) && $data['ext_order_id'] === null) {
            $object->setExtOrderId(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_2\\Model\\SalesDataOrderExtensionInterface', 'json', $context));
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('forced_shipment_with_invoice', $data) && $data['forced_shipment_with_invoice'] !== null) {
            $object->setForcedShipmentWithInvoice($data['forced_shipment_with_invoice']);
        } elseif (\array_key_exists('forced_shipment_with_invoice', $data) && $data['forced_shipment_with_invoice'] === null) {
            $object->setForcedShipmentWithInvoice(null);
        }
        if (\array_key_exists('global_currency_code', $data) && $data['global_currency_code'] !== null) {
            $object->setGlobalCurrencyCode($data['global_currency_code']);
        } elseif (\array_key_exists('global_currency_code', $data) && $data['global_currency_code'] === null) {
            $object->setGlobalCurrencyCode(null);
        }
        if (\array_key_exists('grand_total', $data) && $data['grand_total'] !== null) {
            $object->setGrandTotal($data['grand_total']);
        } elseif (\array_key_exists('grand_total', $data) && $data['grand_total'] === null) {
            $object->setGrandTotal(null);
        }
        if (\array_key_exists('hold_before_state', $data) && $data['hold_before_state'] !== null) {
            $object->setHoldBeforeState($data['hold_before_state']);
        } elseif (\array_key_exists('hold_before_state', $data) && $data['hold_before_state'] === null) {
            $object->setHoldBeforeState(null);
        }
        if (\array_key_exists('hold_before_status', $data) && $data['hold_before_status'] !== null) {
            $object->setHoldBeforeStatus($data['hold_before_status']);
        } elseif (\array_key_exists('hold_before_status', $data) && $data['hold_before_status'] === null) {
            $object->setHoldBeforeStatus(null);
        }
        if (\array_key_exists('increment_id', $data) && $data['increment_id'] !== null) {
            $object->setIncrementId($data['increment_id']);
        } elseif (\array_key_exists('increment_id', $data) && $data['increment_id'] === null) {
            $object->setIncrementId(null);
        }
        if (\array_key_exists('is_virtual', $data) && $data['is_virtual'] !== null) {
            $object->setIsVirtual($data['is_virtual']);
        } elseif (\array_key_exists('is_virtual', $data) && $data['is_virtual'] === null) {
            $object->setIsVirtual(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values = array();
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_2\\Model\\SalesDataOrderItemInterface', 'json', $context);
            }
            $object->setItems($values);
        } elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('order_currency_code', $data) && $data['order_currency_code'] !== null) {
            $object->setOrderCurrencyCode($data['order_currency_code']);
        } elseif (\array_key_exists('order_currency_code', $data) && $data['order_currency_code'] === null) {
            $object->setOrderCurrencyCode(null);
        }
        if (\array_key_exists('original_increment_id', $data) && $data['original_increment_id'] !== null) {
            $object->setOriginalIncrementId($data['original_increment_id']);
        } elseif (\array_key_exists('original_increment_id', $data) && $data['original_increment_id'] === null) {
            $object->setOriginalIncrementId(null);
        }
        if (\array_key_exists('payment', $data) && $data['payment'] !== null) {
            $object->setPayment($this->denormalizer->denormalize($data['payment'], 'Kiboko\\Magento\\V2_2\\Model\\SalesDataOrderPaymentInterface', 'json', $context));
        } elseif (\array_key_exists('payment', $data) && $data['payment'] === null) {
            $object->setPayment(null);
        }
        if (\array_key_exists('payment_auth_expiration', $data) && $data['payment_auth_expiration'] !== null) {
            $object->setPaymentAuthExpiration($data['payment_auth_expiration']);
        } elseif (\array_key_exists('payment_auth_expiration', $data) && $data['payment_auth_expiration'] === null) {
            $object->setPaymentAuthExpiration(null);
        }
        if (\array_key_exists('payment_authorization_amount', $data) && $data['payment_authorization_amount'] !== null) {
            $object->setPaymentAuthorizationAmount($data['payment_authorization_amount']);
        } elseif (\array_key_exists('payment_authorization_amount', $data) && $data['payment_authorization_amount'] === null) {
            $object->setPaymentAuthorizationAmount(null);
        }
        if (\array_key_exists('protect_code', $data) && $data['protect_code'] !== null) {
            $object->setProtectCode($data['protect_code']);
        } elseif (\array_key_exists('protect_code', $data) && $data['protect_code'] === null) {
            $object->setProtectCode(null);
        }
        if (\array_key_exists('quote_address_id', $data) && $data['quote_address_id'] !== null) {
            $object->setQuoteAddressId($data['quote_address_id']);
        } elseif (\array_key_exists('quote_address_id', $data) && $data['quote_address_id'] === null) {
            $object->setQuoteAddressId(null);
        }
        if (\array_key_exists('quote_id', $data) && $data['quote_id'] !== null) {
            $object->setQuoteId($data['quote_id']);
        } elseif (\array_key_exists('quote_id', $data) && $data['quote_id'] === null) {
            $object->setQuoteId(null);
        }
        if (\array_key_exists('relation_child_id', $data) && $data['relation_child_id'] !== null) {
            $object->setRelationChildId($data['relation_child_id']);
        } elseif (\array_key_exists('relation_child_id', $data) && $data['relation_child_id'] === null) {
            $object->setRelationChildId(null);
        }
        if (\array_key_exists('relation_child_real_id', $data) && $data['relation_child_real_id'] !== null) {
            $object->setRelationChildRealId($data['relation_child_real_id']);
        } elseif (\array_key_exists('relation_child_real_id', $data) && $data['relation_child_real_id'] === null) {
            $object->setRelationChildRealId(null);
        }
        if (\array_key_exists('relation_parent_id', $data) && $data['relation_parent_id'] !== null) {
            $object->setRelationParentId($data['relation_parent_id']);
        } elseif (\array_key_exists('relation_parent_id', $data) && $data['relation_parent_id'] === null) {
            $object->setRelationParentId(null);
        }
        if (\array_key_exists('relation_parent_real_id', $data) && $data['relation_parent_real_id'] !== null) {
            $object->setRelationParentRealId($data['relation_parent_real_id']);
        } elseif (\array_key_exists('relation_parent_real_id', $data) && $data['relation_parent_real_id'] === null) {
            $object->setRelationParentRealId(null);
        }
        if (\array_key_exists('remote_ip', $data) && $data['remote_ip'] !== null) {
            $object->setRemoteIp($data['remote_ip']);
        } elseif (\array_key_exists('remote_ip', $data) && $data['remote_ip'] === null) {
            $object->setRemoteIp(null);
        }
        if (\array_key_exists('shipping_amount', $data) && $data['shipping_amount'] !== null) {
            $object->setShippingAmount($data['shipping_amount']);
        } elseif (\array_key_exists('shipping_amount', $data) && $data['shipping_amount'] === null) {
            $object->setShippingAmount(null);
        }
        if (\array_key_exists('shipping_canceled', $data) && $data['shipping_canceled'] !== null) {
            $object->setShippingCanceled($data['shipping_canceled']);
        } elseif (\array_key_exists('shipping_canceled', $data) && $data['shipping_canceled'] === null) {
            $object->setShippingCanceled(null);
        }
        if (\array_key_exists('shipping_description', $data) && $data['shipping_description'] !== null) {
            $object->setShippingDescription($data['shipping_description']);
        } elseif (\array_key_exists('shipping_description', $data) && $data['shipping_description'] === null) {
            $object->setShippingDescription(null);
        }
        if (\array_key_exists('shipping_discount_amount', $data) && $data['shipping_discount_amount'] !== null) {
            $object->setShippingDiscountAmount($data['shipping_discount_amount']);
        } elseif (\array_key_exists('shipping_discount_amount', $data) && $data['shipping_discount_amount'] === null) {
            $object->setShippingDiscountAmount(null);
        }
        if (\array_key_exists('shipping_discount_tax_compensation_amount', $data) && $data['shipping_discount_tax_compensation_amount'] !== null) {
            $object->setShippingDiscountTaxCompensationAmount($data['shipping_discount_tax_compensation_amount']);
        } elseif (\array_key_exists('shipping_discount_tax_compensation_amount', $data) && $data['shipping_discount_tax_compensation_amount'] === null) {
            $object->setShippingDiscountTaxCompensationAmount(null);
        }
        if (\array_key_exists('shipping_incl_tax', $data) && $data['shipping_incl_tax'] !== null) {
            $object->setShippingInclTax($data['shipping_incl_tax']);
        } elseif (\array_key_exists('shipping_incl_tax', $data) && $data['shipping_incl_tax'] === null) {
            $object->setShippingInclTax(null);
        }
        if (\array_key_exists('shipping_invoiced', $data) && $data['shipping_invoiced'] !== null) {
            $object->setShippingInvoiced($data['shipping_invoiced']);
        } elseif (\array_key_exists('shipping_invoiced', $data) && $data['shipping_invoiced'] === null) {
            $object->setShippingInvoiced(null);
        }
        if (\array_key_exists('shipping_refunded', $data) && $data['shipping_refunded'] !== null) {
            $object->setShippingRefunded($data['shipping_refunded']);
        } elseif (\array_key_exists('shipping_refunded', $data) && $data['shipping_refunded'] === null) {
            $object->setShippingRefunded(null);
        }
        if (\array_key_exists('shipping_tax_amount', $data) && $data['shipping_tax_amount'] !== null) {
            $object->setShippingTaxAmount($data['shipping_tax_amount']);
        } elseif (\array_key_exists('shipping_tax_amount', $data) && $data['shipping_tax_amount'] === null) {
            $object->setShippingTaxAmount(null);
        }
        if (\array_key_exists('shipping_tax_refunded', $data) && $data['shipping_tax_refunded'] !== null) {
            $object->setShippingTaxRefunded($data['shipping_tax_refunded']);
        } elseif (\array_key_exists('shipping_tax_refunded', $data) && $data['shipping_tax_refunded'] === null) {
            $object->setShippingTaxRefunded(null);
        }
        if (\array_key_exists('state', $data) && $data['state'] !== null) {
            $object->setState($data['state']);
        } elseif (\array_key_exists('state', $data) && $data['state'] === null) {
            $object->setState(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('status_histories', $data) && $data['status_histories'] !== null) {
            $values_1 = array();
            foreach ($data['status_histories'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_2\\Model\\SalesDataOrderStatusHistoryInterface', 'json', $context);
            }
            $object->setStatusHistories($values_1);
        } elseif (\array_key_exists('status_histories', $data) && $data['status_histories'] === null) {
            $object->setStatusHistories(null);
        }
        if (\array_key_exists('store_currency_code', $data) && $data['store_currency_code'] !== null) {
            $object->setStoreCurrencyCode($data['store_currency_code']);
        } elseif (\array_key_exists('store_currency_code', $data) && $data['store_currency_code'] === null) {
            $object->setStoreCurrencyCode(null);
        }
        if (\array_key_exists('store_id', $data) && $data['store_id'] !== null) {
            $object->setStoreId($data['store_id']);
        } elseif (\array_key_exists('store_id', $data) && $data['store_id'] === null) {
            $object->setStoreId(null);
        }
        if (\array_key_exists('store_name', $data) && $data['store_name'] !== null) {
            $object->setStoreName($data['store_name']);
        } elseif (\array_key_exists('store_name', $data) && $data['store_name'] === null) {
            $object->setStoreName(null);
        }
        if (\array_key_exists('store_to_base_rate', $data) && $data['store_to_base_rate'] !== null) {
            $object->setStoreToBaseRate($data['store_to_base_rate']);
        } elseif (\array_key_exists('store_to_base_rate', $data) && $data['store_to_base_rate'] === null) {
            $object->setStoreToBaseRate(null);
        }
        if (\array_key_exists('store_to_order_rate', $data) && $data['store_to_order_rate'] !== null) {
            $object->setStoreToOrderRate($data['store_to_order_rate']);
        } elseif (\array_key_exists('store_to_order_rate', $data) && $data['store_to_order_rate'] === null) {
            $object->setStoreToOrderRate(null);
        }
        if (\array_key_exists('subtotal', $data) && $data['subtotal'] !== null) {
            $object->setSubtotal($data['subtotal']);
        } elseif (\array_key_exists('subtotal', $data) && $data['subtotal'] === null) {
            $object->setSubtotal(null);
        }
        if (\array_key_exists('subtotal_canceled', $data) && $data['subtotal_canceled'] !== null) {
            $object->setSubtotalCanceled($data['subtotal_canceled']);
        } elseif (\array_key_exists('subtotal_canceled', $data) && $data['subtotal_canceled'] === null) {
            $object->setSubtotalCanceled(null);
        }
        if (\array_key_exists('subtotal_incl_tax', $data) && $data['subtotal_incl_tax'] !== null) {
            $object->setSubtotalInclTax($data['subtotal_incl_tax']);
        } elseif (\array_key_exists('subtotal_incl_tax', $data) && $data['subtotal_incl_tax'] === null) {
            $object->setSubtotalInclTax(null);
        }
        if (\array_key_exists('subtotal_invoiced', $data) && $data['subtotal_invoiced'] !== null) {
            $object->setSubtotalInvoiced($data['subtotal_invoiced']);
        } elseif (\array_key_exists('subtotal_invoiced', $data) && $data['subtotal_invoiced'] === null) {
            $object->setSubtotalInvoiced(null);
        }
        if (\array_key_exists('subtotal_refunded', $data) && $data['subtotal_refunded'] !== null) {
            $object->setSubtotalRefunded($data['subtotal_refunded']);
        } elseif (\array_key_exists('subtotal_refunded', $data) && $data['subtotal_refunded'] === null) {
            $object->setSubtotalRefunded(null);
        }
        if (\array_key_exists('tax_amount', $data) && $data['tax_amount'] !== null) {
            $object->setTaxAmount($data['tax_amount']);
        } elseif (\array_key_exists('tax_amount', $data) && $data['tax_amount'] === null) {
            $object->setTaxAmount(null);
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
        if (\array_key_exists('tax_refunded', $data) && $data['tax_refunded'] !== null) {
            $object->setTaxRefunded($data['tax_refunded']);
        } elseif (\array_key_exists('tax_refunded', $data) && $data['tax_refunded'] === null) {
            $object->setTaxRefunded(null);
        }
        if (\array_key_exists('total_canceled', $data) && $data['total_canceled'] !== null) {
            $object->setTotalCanceled($data['total_canceled']);
        } elseif (\array_key_exists('total_canceled', $data) && $data['total_canceled'] === null) {
            $object->setTotalCanceled(null);
        }
        if (\array_key_exists('total_due', $data) && $data['total_due'] !== null) {
            $object->setTotalDue($data['total_due']);
        } elseif (\array_key_exists('total_due', $data) && $data['total_due'] === null) {
            $object->setTotalDue(null);
        }
        if (\array_key_exists('total_invoiced', $data) && $data['total_invoiced'] !== null) {
            $object->setTotalInvoiced($data['total_invoiced']);
        } elseif (\array_key_exists('total_invoiced', $data) && $data['total_invoiced'] === null) {
            $object->setTotalInvoiced(null);
        }
        if (\array_key_exists('total_item_count', $data) && $data['total_item_count'] !== null) {
            $object->setTotalItemCount($data['total_item_count']);
        } elseif (\array_key_exists('total_item_count', $data) && $data['total_item_count'] === null) {
            $object->setTotalItemCount(null);
        }
        if (\array_key_exists('total_offline_refunded', $data) && $data['total_offline_refunded'] !== null) {
            $object->setTotalOfflineRefunded($data['total_offline_refunded']);
        } elseif (\array_key_exists('total_offline_refunded', $data) && $data['total_offline_refunded'] === null) {
            $object->setTotalOfflineRefunded(null);
        }
        if (\array_key_exists('total_online_refunded', $data) && $data['total_online_refunded'] !== null) {
            $object->setTotalOnlineRefunded($data['total_online_refunded']);
        } elseif (\array_key_exists('total_online_refunded', $data) && $data['total_online_refunded'] === null) {
            $object->setTotalOnlineRefunded(null);
        }
        if (\array_key_exists('total_paid', $data) && $data['total_paid'] !== null) {
            $object->setTotalPaid($data['total_paid']);
        } elseif (\array_key_exists('total_paid', $data) && $data['total_paid'] === null) {
            $object->setTotalPaid(null);
        }
        if (\array_key_exists('total_qty_ordered', $data) && $data['total_qty_ordered'] !== null) {
            $object->setTotalQtyOrdered($data['total_qty_ordered']);
        } elseif (\array_key_exists('total_qty_ordered', $data) && $data['total_qty_ordered'] === null) {
            $object->setTotalQtyOrdered(null);
        }
        if (\array_key_exists('total_refunded', $data) && $data['total_refunded'] !== null) {
            $object->setTotalRefunded($data['total_refunded']);
        } elseif (\array_key_exists('total_refunded', $data) && $data['total_refunded'] === null) {
            $object->setTotalRefunded(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt($data['updated_at']);
        } elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
            $object->setWeight($data['weight']);
        } elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
            $object->setWeight(null);
        }
        if (\array_key_exists('x_forwarded_for', $data) && $data['x_forwarded_for'] !== null) {
            $object->setXForwardedFor($data['x_forwarded_for']);
        } elseif (\array_key_exists('x_forwarded_for', $data) && $data['x_forwarded_for'] === null) {
            $object->setXForwardedFor(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdjustmentNegative()) {
            $data['adjustment_negative'] = $object->getAdjustmentNegative();
        }
        if (null !== $object->getAdjustmentPositive()) {
            $data['adjustment_positive'] = $object->getAdjustmentPositive();
        }
        if (null !== $object->getAppliedRuleIds()) {
            $data['applied_rule_ids'] = $object->getAppliedRuleIds();
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
        if (null !== $object->getBaseDiscountCanceled()) {
            $data['base_discount_canceled'] = $object->getBaseDiscountCanceled();
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
        $data['base_grand_total'] = $object->getBaseGrandTotal();
        if (null !== $object->getBaseShippingAmount()) {
            $data['base_shipping_amount'] = $object->getBaseShippingAmount();
        }
        if (null !== $object->getBaseShippingCanceled()) {
            $data['base_shipping_canceled'] = $object->getBaseShippingCanceled();
        }
        if (null !== $object->getBaseShippingDiscountAmount()) {
            $data['base_shipping_discount_amount'] = $object->getBaseShippingDiscountAmount();
        }
        if (null !== $object->getBaseShippingDiscountTaxCompensationAmnt()) {
            $data['base_shipping_discount_tax_compensation_amnt'] = $object->getBaseShippingDiscountTaxCompensationAmnt();
        }
        if (null !== $object->getBaseShippingInclTax()) {
            $data['base_shipping_incl_tax'] = $object->getBaseShippingInclTax();
        }
        if (null !== $object->getBaseShippingInvoiced()) {
            $data['base_shipping_invoiced'] = $object->getBaseShippingInvoiced();
        }
        if (null !== $object->getBaseShippingRefunded()) {
            $data['base_shipping_refunded'] = $object->getBaseShippingRefunded();
        }
        if (null !== $object->getBaseShippingTaxAmount()) {
            $data['base_shipping_tax_amount'] = $object->getBaseShippingTaxAmount();
        }
        if (null !== $object->getBaseShippingTaxRefunded()) {
            $data['base_shipping_tax_refunded'] = $object->getBaseShippingTaxRefunded();
        }
        if (null !== $object->getBaseSubtotal()) {
            $data['base_subtotal'] = $object->getBaseSubtotal();
        }
        if (null !== $object->getBaseSubtotalCanceled()) {
            $data['base_subtotal_canceled'] = $object->getBaseSubtotalCanceled();
        }
        if (null !== $object->getBaseSubtotalInclTax()) {
            $data['base_subtotal_incl_tax'] = $object->getBaseSubtotalInclTax();
        }
        if (null !== $object->getBaseSubtotalInvoiced()) {
            $data['base_subtotal_invoiced'] = $object->getBaseSubtotalInvoiced();
        }
        if (null !== $object->getBaseSubtotalRefunded()) {
            $data['base_subtotal_refunded'] = $object->getBaseSubtotalRefunded();
        }
        if (null !== $object->getBaseTaxAmount()) {
            $data['base_tax_amount'] = $object->getBaseTaxAmount();
        }
        if (null !== $object->getBaseTaxCanceled()) {
            $data['base_tax_canceled'] = $object->getBaseTaxCanceled();
        }
        if (null !== $object->getBaseTaxInvoiced()) {
            $data['base_tax_invoiced'] = $object->getBaseTaxInvoiced();
        }
        if (null !== $object->getBaseTaxRefunded()) {
            $data['base_tax_refunded'] = $object->getBaseTaxRefunded();
        }
        if (null !== $object->getBaseToGlobalRate()) {
            $data['base_to_global_rate'] = $object->getBaseToGlobalRate();
        }
        if (null !== $object->getBaseToOrderRate()) {
            $data['base_to_order_rate'] = $object->getBaseToOrderRate();
        }
        if (null !== $object->getBaseTotalCanceled()) {
            $data['base_total_canceled'] = $object->getBaseTotalCanceled();
        }
        if (null !== $object->getBaseTotalDue()) {
            $data['base_total_due'] = $object->getBaseTotalDue();
        }
        if (null !== $object->getBaseTotalInvoiced()) {
            $data['base_total_invoiced'] = $object->getBaseTotalInvoiced();
        }
        if (null !== $object->getBaseTotalInvoicedCost()) {
            $data['base_total_invoiced_cost'] = $object->getBaseTotalInvoicedCost();
        }
        if (null !== $object->getBaseTotalOfflineRefunded()) {
            $data['base_total_offline_refunded'] = $object->getBaseTotalOfflineRefunded();
        }
        if (null !== $object->getBaseTotalOnlineRefunded()) {
            $data['base_total_online_refunded'] = $object->getBaseTotalOnlineRefunded();
        }
        if (null !== $object->getBaseTotalPaid()) {
            $data['base_total_paid'] = $object->getBaseTotalPaid();
        }
        if (null !== $object->getBaseTotalQtyOrdered()) {
            $data['base_total_qty_ordered'] = $object->getBaseTotalQtyOrdered();
        }
        if (null !== $object->getBaseTotalRefunded()) {
            $data['base_total_refunded'] = $object->getBaseTotalRefunded();
        }
        if (null !== $object->getBillingAddress()) {
            $data['billing_address'] = $this->normalizer->normalize($object->getBillingAddress(), 'json', $context);
        }
        if (null !== $object->getBillingAddressId()) {
            $data['billing_address_id'] = $object->getBillingAddressId();
        }
        if (null !== $object->getCanShipPartially()) {
            $data['can_ship_partially'] = $object->getCanShipPartially();
        }
        if (null !== $object->getCanShipPartiallyItem()) {
            $data['can_ship_partially_item'] = $object->getCanShipPartiallyItem();
        }
        if (null !== $object->getCouponCode()) {
            $data['coupon_code'] = $object->getCouponCode();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getCustomerDob()) {
            $data['customer_dob'] = $object->getCustomerDob();
        }
        $data['customer_email'] = $object->getCustomerEmail();
        if (null !== $object->getCustomerFirstname()) {
            $data['customer_firstname'] = $object->getCustomerFirstname();
        }
        if (null !== $object->getCustomerGender()) {
            $data['customer_gender'] = $object->getCustomerGender();
        }
        if (null !== $object->getCustomerGroupId()) {
            $data['customer_group_id'] = $object->getCustomerGroupId();
        }
        if (null !== $object->getCustomerId()) {
            $data['customer_id'] = $object->getCustomerId();
        }
        if (null !== $object->getCustomerIsGuest()) {
            $data['customer_is_guest'] = $object->getCustomerIsGuest();
        }
        if (null !== $object->getCustomerLastname()) {
            $data['customer_lastname'] = $object->getCustomerLastname();
        }
        if (null !== $object->getCustomerMiddlename()) {
            $data['customer_middlename'] = $object->getCustomerMiddlename();
        }
        if (null !== $object->getCustomerNote()) {
            $data['customer_note'] = $object->getCustomerNote();
        }
        if (null !== $object->getCustomerNoteNotify()) {
            $data['customer_note_notify'] = $object->getCustomerNoteNotify();
        }
        if (null !== $object->getCustomerPrefix()) {
            $data['customer_prefix'] = $object->getCustomerPrefix();
        }
        if (null !== $object->getCustomerSuffix()) {
            $data['customer_suffix'] = $object->getCustomerSuffix();
        }
        if (null !== $object->getCustomerTaxvat()) {
            $data['customer_taxvat'] = $object->getCustomerTaxvat();
        }
        if (null !== $object->getDiscountAmount()) {
            $data['discount_amount'] = $object->getDiscountAmount();
        }
        if (null !== $object->getDiscountCanceled()) {
            $data['discount_canceled'] = $object->getDiscountCanceled();
        }
        if (null !== $object->getDiscountDescription()) {
            $data['discount_description'] = $object->getDiscountDescription();
        }
        if (null !== $object->getDiscountInvoiced()) {
            $data['discount_invoiced'] = $object->getDiscountInvoiced();
        }
        if (null !== $object->getDiscountRefunded()) {
            $data['discount_refunded'] = $object->getDiscountRefunded();
        }
        if (null !== $object->getDiscountTaxCompensationAmount()) {
            $data['discount_tax_compensation_amount'] = $object->getDiscountTaxCompensationAmount();
        }
        if (null !== $object->getDiscountTaxCompensationInvoiced()) {
            $data['discount_tax_compensation_invoiced'] = $object->getDiscountTaxCompensationInvoiced();
        }
        if (null !== $object->getDiscountTaxCompensationRefunded()) {
            $data['discount_tax_compensation_refunded'] = $object->getDiscountTaxCompensationRefunded();
        }
        if (null !== $object->getEditIncrement()) {
            $data['edit_increment'] = $object->getEditIncrement();
        }
        if (null !== $object->getEmailSent()) {
            $data['email_sent'] = $object->getEmailSent();
        }
        if (null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if (null !== $object->getExtCustomerId()) {
            $data['ext_customer_id'] = $object->getExtCustomerId();
        }
        if (null !== $object->getExtOrderId()) {
            $data['ext_order_id'] = $object->getExtOrderId();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        if (null !== $object->getForcedShipmentWithInvoice()) {
            $data['forced_shipment_with_invoice'] = $object->getForcedShipmentWithInvoice();
        }
        if (null !== $object->getGlobalCurrencyCode()) {
            $data['global_currency_code'] = $object->getGlobalCurrencyCode();
        }
        $data['grand_total'] = $object->getGrandTotal();
        if (null !== $object->getHoldBeforeState()) {
            $data['hold_before_state'] = $object->getHoldBeforeState();
        }
        if (null !== $object->getHoldBeforeStatus()) {
            $data['hold_before_status'] = $object->getHoldBeforeStatus();
        }
        if (null !== $object->getIncrementId()) {
            $data['increment_id'] = $object->getIncrementId();
        }
        if (null !== $object->getIsVirtual()) {
            $data['is_virtual'] = $object->getIsVirtual();
        }
        $values = array();
        foreach ($object->getItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['items'] = $values;
        if (null !== $object->getOrderCurrencyCode()) {
            $data['order_currency_code'] = $object->getOrderCurrencyCode();
        }
        if (null !== $object->getOriginalIncrementId()) {
            $data['original_increment_id'] = $object->getOriginalIncrementId();
        }
        if (null !== $object->getPayment()) {
            $data['payment'] = $this->normalizer->normalize($object->getPayment(), 'json', $context);
        }
        if (null !== $object->getPaymentAuthExpiration()) {
            $data['payment_auth_expiration'] = $object->getPaymentAuthExpiration();
        }
        if (null !== $object->getPaymentAuthorizationAmount()) {
            $data['payment_authorization_amount'] = $object->getPaymentAuthorizationAmount();
        }
        if (null !== $object->getProtectCode()) {
            $data['protect_code'] = $object->getProtectCode();
        }
        if (null !== $object->getQuoteAddressId()) {
            $data['quote_address_id'] = $object->getQuoteAddressId();
        }
        if (null !== $object->getQuoteId()) {
            $data['quote_id'] = $object->getQuoteId();
        }
        if (null !== $object->getRelationChildId()) {
            $data['relation_child_id'] = $object->getRelationChildId();
        }
        if (null !== $object->getRelationChildRealId()) {
            $data['relation_child_real_id'] = $object->getRelationChildRealId();
        }
        if (null !== $object->getRelationParentId()) {
            $data['relation_parent_id'] = $object->getRelationParentId();
        }
        if (null !== $object->getRelationParentRealId()) {
            $data['relation_parent_real_id'] = $object->getRelationParentRealId();
        }
        if (null !== $object->getRemoteIp()) {
            $data['remote_ip'] = $object->getRemoteIp();
        }
        if (null !== $object->getShippingAmount()) {
            $data['shipping_amount'] = $object->getShippingAmount();
        }
        if (null !== $object->getShippingCanceled()) {
            $data['shipping_canceled'] = $object->getShippingCanceled();
        }
        if (null !== $object->getShippingDescription()) {
            $data['shipping_description'] = $object->getShippingDescription();
        }
        if (null !== $object->getShippingDiscountAmount()) {
            $data['shipping_discount_amount'] = $object->getShippingDiscountAmount();
        }
        if (null !== $object->getShippingDiscountTaxCompensationAmount()) {
            $data['shipping_discount_tax_compensation_amount'] = $object->getShippingDiscountTaxCompensationAmount();
        }
        if (null !== $object->getShippingInclTax()) {
            $data['shipping_incl_tax'] = $object->getShippingInclTax();
        }
        if (null !== $object->getShippingInvoiced()) {
            $data['shipping_invoiced'] = $object->getShippingInvoiced();
        }
        if (null !== $object->getShippingRefunded()) {
            $data['shipping_refunded'] = $object->getShippingRefunded();
        }
        if (null !== $object->getShippingTaxAmount()) {
            $data['shipping_tax_amount'] = $object->getShippingTaxAmount();
        }
        if (null !== $object->getShippingTaxRefunded()) {
            $data['shipping_tax_refunded'] = $object->getShippingTaxRefunded();
        }
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getStatusHistories()) {
            $values_1 = array();
            foreach ($object->getStatusHistories() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['status_histories'] = $values_1;
        }
        if (null !== $object->getStoreCurrencyCode()) {
            $data['store_currency_code'] = $object->getStoreCurrencyCode();
        }
        if (null !== $object->getStoreId()) {
            $data['store_id'] = $object->getStoreId();
        }
        if (null !== $object->getStoreName()) {
            $data['store_name'] = $object->getStoreName();
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
        if (null !== $object->getSubtotalCanceled()) {
            $data['subtotal_canceled'] = $object->getSubtotalCanceled();
        }
        if (null !== $object->getSubtotalInclTax()) {
            $data['subtotal_incl_tax'] = $object->getSubtotalInclTax();
        }
        if (null !== $object->getSubtotalInvoiced()) {
            $data['subtotal_invoiced'] = $object->getSubtotalInvoiced();
        }
        if (null !== $object->getSubtotalRefunded()) {
            $data['subtotal_refunded'] = $object->getSubtotalRefunded();
        }
        if (null !== $object->getTaxAmount()) {
            $data['tax_amount'] = $object->getTaxAmount();
        }
        if (null !== $object->getTaxCanceled()) {
            $data['tax_canceled'] = $object->getTaxCanceled();
        }
        if (null !== $object->getTaxInvoiced()) {
            $data['tax_invoiced'] = $object->getTaxInvoiced();
        }
        if (null !== $object->getTaxRefunded()) {
            $data['tax_refunded'] = $object->getTaxRefunded();
        }
        if (null !== $object->getTotalCanceled()) {
            $data['total_canceled'] = $object->getTotalCanceled();
        }
        if (null !== $object->getTotalDue()) {
            $data['total_due'] = $object->getTotalDue();
        }
        if (null !== $object->getTotalInvoiced()) {
            $data['total_invoiced'] = $object->getTotalInvoiced();
        }
        if (null !== $object->getTotalItemCount()) {
            $data['total_item_count'] = $object->getTotalItemCount();
        }
        if (null !== $object->getTotalOfflineRefunded()) {
            $data['total_offline_refunded'] = $object->getTotalOfflineRefunded();
        }
        if (null !== $object->getTotalOnlineRefunded()) {
            $data['total_online_refunded'] = $object->getTotalOnlineRefunded();
        }
        if (null !== $object->getTotalPaid()) {
            $data['total_paid'] = $object->getTotalPaid();
        }
        if (null !== $object->getTotalQtyOrdered()) {
            $data['total_qty_ordered'] = $object->getTotalQtyOrdered();
        }
        if (null !== $object->getTotalRefunded()) {
            $data['total_refunded'] = $object->getTotalRefunded();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if (null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }
        if (null !== $object->getXForwardedFor()) {
            $data['x_forwarded_for'] = $object->getXForwardedFor();
        }
        return $data;
    }
}
