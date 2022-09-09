<?php

namespace Kiboko\Magento\V2_4\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_4\Runtime\Normalizer\CheckArray;
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
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\QuoteDataTotalSegmentExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\QuoteDataTotalSegmentExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\QuoteDataTotalSegmentExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('gift_cards', $data) && $data['gift_cards'] !== null) {
            $object->setGiftCards($data['gift_cards']);
        } elseif (\array_key_exists('gift_cards', $data) && $data['gift_cards'] === null) {
            $object->setGiftCards(null);
        }
        if (\array_key_exists('gw_add_card', $data) && $data['gw_add_card'] !== null) {
            $object->setGwAddCard($data['gw_add_card']);
        } elseif (\array_key_exists('gw_add_card', $data) && $data['gw_add_card'] === null) {
            $object->setGwAddCard(null);
        }
        if (\array_key_exists('gw_allow_gift_receipt', $data) && $data['gw_allow_gift_receipt'] !== null) {
            $object->setGwAllowGiftReceipt($data['gw_allow_gift_receipt']);
        } elseif (\array_key_exists('gw_allow_gift_receipt', $data) && $data['gw_allow_gift_receipt'] === null) {
            $object->setGwAllowGiftReceipt(null);
        }
        if (\array_key_exists('gw_base_price', $data) && $data['gw_base_price'] !== null) {
            $object->setGwBasePrice($data['gw_base_price']);
        } elseif (\array_key_exists('gw_base_price', $data) && $data['gw_base_price'] === null) {
            $object->setGwBasePrice(null);
        }
        if (\array_key_exists('gw_base_price_incl_tax', $data) && $data['gw_base_price_incl_tax'] !== null) {
            $object->setGwBasePriceInclTax($data['gw_base_price_incl_tax']);
        } elseif (\array_key_exists('gw_base_price_incl_tax', $data) && $data['gw_base_price_incl_tax'] === null) {
            $object->setGwBasePriceInclTax(null);
        }
        if (\array_key_exists('gw_base_tax_amount', $data) && $data['gw_base_tax_amount'] !== null) {
            $object->setGwBaseTaxAmount($data['gw_base_tax_amount']);
        } elseif (\array_key_exists('gw_base_tax_amount', $data) && $data['gw_base_tax_amount'] === null) {
            $object->setGwBaseTaxAmount(null);
        }
        if (\array_key_exists('gw_card_base_price', $data) && $data['gw_card_base_price'] !== null) {
            $object->setGwCardBasePrice($data['gw_card_base_price']);
        } elseif (\array_key_exists('gw_card_base_price', $data) && $data['gw_card_base_price'] === null) {
            $object->setGwCardBasePrice(null);
        }
        if (\array_key_exists('gw_card_base_price_incl_tax', $data) && $data['gw_card_base_price_incl_tax'] !== null) {
            $object->setGwCardBasePriceInclTax($data['gw_card_base_price_incl_tax']);
        } elseif (\array_key_exists('gw_card_base_price_incl_tax', $data) && $data['gw_card_base_price_incl_tax'] === null) {
            $object->setGwCardBasePriceInclTax(null);
        }
        if (\array_key_exists('gw_card_base_tax_amount', $data) && $data['gw_card_base_tax_amount'] !== null) {
            $object->setGwCardBaseTaxAmount($data['gw_card_base_tax_amount']);
        } elseif (\array_key_exists('gw_card_base_tax_amount', $data) && $data['gw_card_base_tax_amount'] === null) {
            $object->setGwCardBaseTaxAmount(null);
        }
        if (\array_key_exists('gw_card_price', $data) && $data['gw_card_price'] !== null) {
            $object->setGwCardPrice($data['gw_card_price']);
        } elseif (\array_key_exists('gw_card_price', $data) && $data['gw_card_price'] === null) {
            $object->setGwCardPrice(null);
        }
        if (\array_key_exists('gw_card_price_incl_tax', $data) && $data['gw_card_price_incl_tax'] !== null) {
            $object->setGwCardPriceInclTax($data['gw_card_price_incl_tax']);
        } elseif (\array_key_exists('gw_card_price_incl_tax', $data) && $data['gw_card_price_incl_tax'] === null) {
            $object->setGwCardPriceInclTax(null);
        }
        if (\array_key_exists('gw_card_tax_amount', $data) && $data['gw_card_tax_amount'] !== null) {
            $object->setGwCardTaxAmount($data['gw_card_tax_amount']);
        } elseif (\array_key_exists('gw_card_tax_amount', $data) && $data['gw_card_tax_amount'] === null) {
            $object->setGwCardTaxAmount(null);
        }
        if (\array_key_exists('gw_item_ids', $data) && $data['gw_item_ids'] !== null) {
            $values = array();
            foreach ($data['gw_item_ids'] as $value) {
                $values[] = $value;
            }
            $object->setGwItemIds($values);
        } elseif (\array_key_exists('gw_item_ids', $data) && $data['gw_item_ids'] === null) {
            $object->setGwItemIds(null);
        }
        if (\array_key_exists('gw_items_base_price', $data) && $data['gw_items_base_price'] !== null) {
            $object->setGwItemsBasePrice($data['gw_items_base_price']);
        } elseif (\array_key_exists('gw_items_base_price', $data) && $data['gw_items_base_price'] === null) {
            $object->setGwItemsBasePrice(null);
        }
        if (\array_key_exists('gw_items_base_price_incl_tax', $data) && $data['gw_items_base_price_incl_tax'] !== null) {
            $object->setGwItemsBasePriceInclTax($data['gw_items_base_price_incl_tax']);
        } elseif (\array_key_exists('gw_items_base_price_incl_tax', $data) && $data['gw_items_base_price_incl_tax'] === null) {
            $object->setGwItemsBasePriceInclTax(null);
        }
        if (\array_key_exists('gw_items_base_tax_amount', $data) && $data['gw_items_base_tax_amount'] !== null) {
            $object->setGwItemsBaseTaxAmount($data['gw_items_base_tax_amount']);
        } elseif (\array_key_exists('gw_items_base_tax_amount', $data) && $data['gw_items_base_tax_amount'] === null) {
            $object->setGwItemsBaseTaxAmount(null);
        }
        if (\array_key_exists('gw_items_price', $data) && $data['gw_items_price'] !== null) {
            $object->setGwItemsPrice($data['gw_items_price']);
        } elseif (\array_key_exists('gw_items_price', $data) && $data['gw_items_price'] === null) {
            $object->setGwItemsPrice(null);
        }
        if (\array_key_exists('gw_items_price_incl_tax', $data) && $data['gw_items_price_incl_tax'] !== null) {
            $object->setGwItemsPriceInclTax($data['gw_items_price_incl_tax']);
        } elseif (\array_key_exists('gw_items_price_incl_tax', $data) && $data['gw_items_price_incl_tax'] === null) {
            $object->setGwItemsPriceInclTax(null);
        }
        if (\array_key_exists('gw_items_tax_amount', $data) && $data['gw_items_tax_amount'] !== null) {
            $object->setGwItemsTaxAmount($data['gw_items_tax_amount']);
        } elseif (\array_key_exists('gw_items_tax_amount', $data) && $data['gw_items_tax_amount'] === null) {
            $object->setGwItemsTaxAmount(null);
        }
        if (\array_key_exists('gw_order_id', $data) && $data['gw_order_id'] !== null) {
            $object->setGwOrderId($data['gw_order_id']);
        } elseif (\array_key_exists('gw_order_id', $data) && $data['gw_order_id'] === null) {
            $object->setGwOrderId(null);
        }
        if (\array_key_exists('gw_price', $data) && $data['gw_price'] !== null) {
            $object->setGwPrice($data['gw_price']);
        } elseif (\array_key_exists('gw_price', $data) && $data['gw_price'] === null) {
            $object->setGwPrice(null);
        }
        if (\array_key_exists('gw_price_incl_tax', $data) && $data['gw_price_incl_tax'] !== null) {
            $object->setGwPriceInclTax($data['gw_price_incl_tax']);
        } elseif (\array_key_exists('gw_price_incl_tax', $data) && $data['gw_price_incl_tax'] === null) {
            $object->setGwPriceInclTax(null);
        }
        if (\array_key_exists('gw_tax_amount', $data) && $data['gw_tax_amount'] !== null) {
            $object->setGwTaxAmount($data['gw_tax_amount']);
        } elseif (\array_key_exists('gw_tax_amount', $data) && $data['gw_tax_amount'] === null) {
            $object->setGwTaxAmount(null);
        }
        if (\array_key_exists('tax_grandtotal_details', $data) && $data['tax_grandtotal_details'] !== null) {
            $values_1 = array();
            foreach ($data['tax_grandtotal_details'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_4\\Model\\TaxDataGrandTotalDetailsInterface', 'json', $context);
            }
            $object->setTaxGrandtotalDetails($values_1);
        } elseif (\array_key_exists('tax_grandtotal_details', $data) && $data['tax_grandtotal_details'] === null) {
            $object->setTaxGrandtotalDetails(null);
        }
        if (\array_key_exists('vertex_tax_calculation_messages', $data) && $data['vertex_tax_calculation_messages'] !== null) {
            $values_2 = array();
            foreach ($data['vertex_tax_calculation_messages'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setVertexTaxCalculationMessages($values_2);
        } elseif (\array_key_exists('vertex_tax_calculation_messages', $data) && $data['vertex_tax_calculation_messages'] === null) {
            $object->setVertexTaxCalculationMessages(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGiftCards()) {
            $data['gift_cards'] = $object->getGiftCards();
        }
        if (null !== $object->getGwAddCard()) {
            $data['gw_add_card'] = $object->getGwAddCard();
        }
        if (null !== $object->getGwAllowGiftReceipt()) {
            $data['gw_allow_gift_receipt'] = $object->getGwAllowGiftReceipt();
        }
        if (null !== $object->getGwBasePrice()) {
            $data['gw_base_price'] = $object->getGwBasePrice();
        }
        if (null !== $object->getGwBasePriceInclTax()) {
            $data['gw_base_price_incl_tax'] = $object->getGwBasePriceInclTax();
        }
        if (null !== $object->getGwBaseTaxAmount()) {
            $data['gw_base_tax_amount'] = $object->getGwBaseTaxAmount();
        }
        if (null !== $object->getGwCardBasePrice()) {
            $data['gw_card_base_price'] = $object->getGwCardBasePrice();
        }
        if (null !== $object->getGwCardBasePriceInclTax()) {
            $data['gw_card_base_price_incl_tax'] = $object->getGwCardBasePriceInclTax();
        }
        if (null !== $object->getGwCardBaseTaxAmount()) {
            $data['gw_card_base_tax_amount'] = $object->getGwCardBaseTaxAmount();
        }
        if (null !== $object->getGwCardPrice()) {
            $data['gw_card_price'] = $object->getGwCardPrice();
        }
        if (null !== $object->getGwCardPriceInclTax()) {
            $data['gw_card_price_incl_tax'] = $object->getGwCardPriceInclTax();
        }
        if (null !== $object->getGwCardTaxAmount()) {
            $data['gw_card_tax_amount'] = $object->getGwCardTaxAmount();
        }
        if (null !== $object->getGwItemIds()) {
            $values = array();
            foreach ($object->getGwItemIds() as $value) {
                $values[] = $value;
            }
            $data['gw_item_ids'] = $values;
        }
        if (null !== $object->getGwItemsBasePrice()) {
            $data['gw_items_base_price'] = $object->getGwItemsBasePrice();
        }
        if (null !== $object->getGwItemsBasePriceInclTax()) {
            $data['gw_items_base_price_incl_tax'] = $object->getGwItemsBasePriceInclTax();
        }
        if (null !== $object->getGwItemsBaseTaxAmount()) {
            $data['gw_items_base_tax_amount'] = $object->getGwItemsBaseTaxAmount();
        }
        if (null !== $object->getGwItemsPrice()) {
            $data['gw_items_price'] = $object->getGwItemsPrice();
        }
        if (null !== $object->getGwItemsPriceInclTax()) {
            $data['gw_items_price_incl_tax'] = $object->getGwItemsPriceInclTax();
        }
        if (null !== $object->getGwItemsTaxAmount()) {
            $data['gw_items_tax_amount'] = $object->getGwItemsTaxAmount();
        }
        if (null !== $object->getGwOrderId()) {
            $data['gw_order_id'] = $object->getGwOrderId();
        }
        if (null !== $object->getGwPrice()) {
            $data['gw_price'] = $object->getGwPrice();
        }
        if (null !== $object->getGwPriceInclTax()) {
            $data['gw_price_incl_tax'] = $object->getGwPriceInclTax();
        }
        if (null !== $object->getGwTaxAmount()) {
            $data['gw_tax_amount'] = $object->getGwTaxAmount();
        }
        if (null !== $object->getTaxGrandtotalDetails()) {
            $values_1 = array();
            foreach ($object->getTaxGrandtotalDetails() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['tax_grandtotal_details'] = $values_1;
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
