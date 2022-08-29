<?php

namespace Kiboko\Magento\v2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class QuoteDataTotalSegmentExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_2\\Model\\QuoteDataTotalSegmentExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_2\\Model\\QuoteDataTotalSegmentExtensionInterface';
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
        $object = new \Kiboko\Magento\v2_2\Model\QuoteDataTotalSegmentExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tax_grandtotal_details', $data)) {
            $values = array();
            foreach ($data['tax_grandtotal_details'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_2\\Model\\TaxDataGrandTotalDetailsInterface', 'json', $context);
            }
            $object->setTaxGrandtotalDetails($values);
        }
        if (\array_key_exists('gift_cards', $data)) {
            $object->setGiftCards($data['gift_cards']);
        }
        if (\array_key_exists('gw_order_id', $data)) {
            $object->setGwOrderId($data['gw_order_id']);
        }
        if (\array_key_exists('gw_item_ids', $data)) {
            $values_1 = array();
            foreach ($data['gw_item_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setGwItemIds($values_1);
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
        if (\array_key_exists('vertex_tax_calculation_messages', $data)) {
            $values_2 = array();
            foreach ($data['vertex_tax_calculation_messages'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setVertexTaxCalculationMessages($values_2);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTaxGrandtotalDetails()) {
            $values = array();
            foreach ($object->getTaxGrandtotalDetails() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['tax_grandtotal_details'] = $values;
        }
        if (null !== $object->getGiftCards()) {
            $data['gift_cards'] = $object->getGiftCards();
        }
        if (null !== $object->getGwOrderId()) {
            $data['gw_order_id'] = $object->getGwOrderId();
        }
        if (null !== $object->getGwItemIds()) {
            $values_1 = array();
            foreach ($object->getGwItemIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['gw_item_ids'] = $values_1;
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
        if (null !== $object->getVertexTaxCalculationMessages()) {
            $values_2 = array();
            foreach ($object->getVertexTaxCalculationMessages() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['vertex_tax_calculation_messages'] = $values_2;
        }
        return $data;
    }
}
