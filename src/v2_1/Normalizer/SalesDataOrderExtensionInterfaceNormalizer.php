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
class SalesDataOrderExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\v2_1\\Model\\SalesDataOrderExtensionInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_1\\Model\\SalesDataOrderExtensionInterface';
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
        $object = new \Kiboko\Magento\v2_1\Model\SalesDataOrderExtensionInterface();
        if (\array_key_exists('base_customer_balance_amount', $data) && \is_int($data['base_customer_balance_amount'])) {
            $data['base_customer_balance_amount'] = (double) $data['base_customer_balance_amount'];
        }
        if (\array_key_exists('customer_balance_amount', $data) && \is_int($data['customer_balance_amount'])) {
            $data['customer_balance_amount'] = (double) $data['customer_balance_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shipping_assignments', $data)) {
            $values = array();
            foreach ($data['shipping_assignments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_1\\Model\\SalesDataShippingAssignmentInterface', 'json', $context);
            }
            $object->setShippingAssignments($values);
        }
        if (\array_key_exists('applied_taxes', $data)) {
            $values_1 = array();
            foreach ($data['applied_taxes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\v2_1\\Model\\TaxDataOrderTaxDetailsAppliedTaxInterface', 'json', $context);
            }
            $object->setAppliedTaxes($values_1);
        }
        if (\array_key_exists('item_applied_taxes', $data)) {
            $values_2 = array();
            foreach ($data['item_applied_taxes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\v2_1\\Model\\TaxDataOrderTaxDetailsItemInterface', 'json', $context);
            }
            $object->setItemAppliedTaxes($values_2);
        }
        if (\array_key_exists('converting_from_quote', $data)) {
            $object->setConvertingFromQuote($data['converting_from_quote']);
        }
        if (\array_key_exists('base_customer_balance_amount', $data)) {
            $object->setBaseCustomerBalanceAmount($data['base_customer_balance_amount']);
        }
        if (\array_key_exists('customer_balance_amount', $data)) {
            $object->setCustomerBalanceAmount($data['customer_balance_amount']);
        }
        if (\array_key_exists('gift_message', $data)) {
            $object->setGiftMessage($this->denormalizer->denormalize($data['gift_message'], 'Kiboko\\Magento\\v2_1\\Model\\GiftMessageDataMessageInterface', 'json', $context));
        }
        if (\array_key_exists('gw_id', $data)) {
            $object->setGwId($data['gw_id']);
        }
        if (\array_key_exists('gw_allow_gift_receipt', $data)) {
            $object->setGwAllowGiftReceipt($data['gw_allow_gift_receipt']);
        }
        if (\array_key_exists('gw_add_card', $data)) {
            $object->setGwAddCard($data['gw_add_card']);
        }
        if (\array_key_exists('gw_price', $data)) {
            $object->setGwPrice($data['gw_price']);
        }
        if (\array_key_exists('gw_base_price', $data)) {
            $object->setGwBasePrice($data['gw_base_price']);
        }
        if (\array_key_exists('gw_items_price', $data)) {
            $object->setGwItemsPrice($data['gw_items_price']);
        }
        if (\array_key_exists('gw_items_base_price', $data)) {
            $object->setGwItemsBasePrice($data['gw_items_base_price']);
        }
        if (\array_key_exists('gw_card_price', $data)) {
            $object->setGwCardPrice($data['gw_card_price']);
        }
        if (\array_key_exists('gw_card_base_price', $data)) {
            $object->setGwCardBasePrice($data['gw_card_base_price']);
        }
        if (\array_key_exists('gw_base_tax_amount', $data)) {
            $object->setGwBaseTaxAmount($data['gw_base_tax_amount']);
        }
        if (\array_key_exists('gw_tax_amount', $data)) {
            $object->setGwTaxAmount($data['gw_tax_amount']);
        }
        if (\array_key_exists('gw_items_base_tax_amount', $data)) {
            $object->setGwItemsBaseTaxAmount($data['gw_items_base_tax_amount']);
        }
        if (\array_key_exists('gw_items_tax_amount', $data)) {
            $object->setGwItemsTaxAmount($data['gw_items_tax_amount']);
        }
        if (\array_key_exists('gw_card_base_tax_amount', $data)) {
            $object->setGwCardBaseTaxAmount($data['gw_card_base_tax_amount']);
        }
        if (\array_key_exists('gw_card_tax_amount', $data)) {
            $object->setGwCardTaxAmount($data['gw_card_tax_amount']);
        }
        if (\array_key_exists('gw_price_incl_tax', $data)) {
            $object->setGwPriceInclTax($data['gw_price_incl_tax']);
        }
        if (\array_key_exists('gw_base_price_incl_tax', $data)) {
            $object->setGwBasePriceInclTax($data['gw_base_price_incl_tax']);
        }
        if (\array_key_exists('gw_card_price_incl_tax', $data)) {
            $object->setGwCardPriceInclTax($data['gw_card_price_incl_tax']);
        }
        if (\array_key_exists('gw_card_base_price_incl_tax', $data)) {
            $object->setGwCardBasePriceInclTax($data['gw_card_base_price_incl_tax']);
        }
        if (\array_key_exists('gw_items_price_incl_tax', $data)) {
            $object->setGwItemsPriceInclTax($data['gw_items_price_incl_tax']);
        }
        if (\array_key_exists('gw_items_base_price_incl_tax', $data)) {
            $object->setGwItemsBasePriceInclTax($data['gw_items_base_price_incl_tax']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getShippingAssignments()) {
            $values = array();
            foreach ($object->getShippingAssignments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['shipping_assignments'] = $values;
        }
        if (null !== $object->getAppliedTaxes()) {
            $values_1 = array();
            foreach ($object->getAppliedTaxes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['applied_taxes'] = $values_1;
        }
        if (null !== $object->getItemAppliedTaxes()) {
            $values_2 = array();
            foreach ($object->getItemAppliedTaxes() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['item_applied_taxes'] = $values_2;
        }
        if (null !== $object->getConvertingFromQuote()) {
            $data['converting_from_quote'] = $object->getConvertingFromQuote();
        }
        if (null !== $object->getBaseCustomerBalanceAmount()) {
            $data['base_customer_balance_amount'] = $object->getBaseCustomerBalanceAmount();
        }
        if (null !== $object->getCustomerBalanceAmount()) {
            $data['customer_balance_amount'] = $object->getCustomerBalanceAmount();
        }
        if (null !== $object->getGiftMessage()) {
            $data['gift_message'] = $this->normalizer->normalize($object->getGiftMessage(), 'json', $context);
        }
        if (null !== $object->getGwId()) {
            $data['gw_id'] = $object->getGwId();
        }
        if (null !== $object->getGwAllowGiftReceipt()) {
            $data['gw_allow_gift_receipt'] = $object->getGwAllowGiftReceipt();
        }
        if (null !== $object->getGwAddCard()) {
            $data['gw_add_card'] = $object->getGwAddCard();
        }
        if (null !== $object->getGwPrice()) {
            $data['gw_price'] = $object->getGwPrice();
        }
        if (null !== $object->getGwBasePrice()) {
            $data['gw_base_price'] = $object->getGwBasePrice();
        }
        if (null !== $object->getGwItemsPrice()) {
            $data['gw_items_price'] = $object->getGwItemsPrice();
        }
        if (null !== $object->getGwItemsBasePrice()) {
            $data['gw_items_base_price'] = $object->getGwItemsBasePrice();
        }
        if (null !== $object->getGwCardPrice()) {
            $data['gw_card_price'] = $object->getGwCardPrice();
        }
        if (null !== $object->getGwCardBasePrice()) {
            $data['gw_card_base_price'] = $object->getGwCardBasePrice();
        }
        if (null !== $object->getGwBaseTaxAmount()) {
            $data['gw_base_tax_amount'] = $object->getGwBaseTaxAmount();
        }
        if (null !== $object->getGwTaxAmount()) {
            $data['gw_tax_amount'] = $object->getGwTaxAmount();
        }
        if (null !== $object->getGwItemsBaseTaxAmount()) {
            $data['gw_items_base_tax_amount'] = $object->getGwItemsBaseTaxAmount();
        }
        if (null !== $object->getGwItemsTaxAmount()) {
            $data['gw_items_tax_amount'] = $object->getGwItemsTaxAmount();
        }
        if (null !== $object->getGwCardBaseTaxAmount()) {
            $data['gw_card_base_tax_amount'] = $object->getGwCardBaseTaxAmount();
        }
        if (null !== $object->getGwCardTaxAmount()) {
            $data['gw_card_tax_amount'] = $object->getGwCardTaxAmount();
        }
        if (null !== $object->getGwPriceInclTax()) {
            $data['gw_price_incl_tax'] = $object->getGwPriceInclTax();
        }
        if (null !== $object->getGwBasePriceInclTax()) {
            $data['gw_base_price_incl_tax'] = $object->getGwBasePriceInclTax();
        }
        if (null !== $object->getGwCardPriceInclTax()) {
            $data['gw_card_price_incl_tax'] = $object->getGwCardPriceInclTax();
        }
        if (null !== $object->getGwCardBasePriceInclTax()) {
            $data['gw_card_base_price_incl_tax'] = $object->getGwCardBasePriceInclTax();
        }
        if (null !== $object->getGwItemsPriceInclTax()) {
            $data['gw_items_price_incl_tax'] = $object->getGwItemsPriceInclTax();
        }
        if (null !== $object->getGwItemsBasePriceInclTax()) {
            $data['gw_items_base_price_incl_tax'] = $object->getGwItemsBasePriceInclTax();
        }
        return $data;
    }
}