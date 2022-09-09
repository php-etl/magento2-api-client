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

class SalesDataInvoiceExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\SalesDataInvoiceExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\SalesDataInvoiceExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\SalesDataInvoiceExtensionInterface();
        if (\array_key_exists('base_customer_balance_amount', $data) && \is_int($data['base_customer_balance_amount'])) {
            $data['base_customer_balance_amount'] = (float) $data['base_customer_balance_amount'];
        }
        if (\array_key_exists('base_gift_cards_amount', $data) && \is_int($data['base_gift_cards_amount'])) {
            $data['base_gift_cards_amount'] = (float) $data['base_gift_cards_amount'];
        }
        if (\array_key_exists('customer_balance_amount', $data) && \is_int($data['customer_balance_amount'])) {
            $data['customer_balance_amount'] = (float) $data['customer_balance_amount'];
        }
        if (\array_key_exists('gift_cards_amount', $data) && \is_int($data['gift_cards_amount'])) {
            $data['gift_cards_amount'] = (float) $data['gift_cards_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('base_customer_balance_amount', $data) && $data['base_customer_balance_amount'] !== null) {
            $object->setBaseCustomerBalanceAmount($data['base_customer_balance_amount']);
        } elseif (\array_key_exists('base_customer_balance_amount', $data) && $data['base_customer_balance_amount'] === null) {
            $object->setBaseCustomerBalanceAmount(null);
        }
        if (\array_key_exists('base_gift_cards_amount', $data) && $data['base_gift_cards_amount'] !== null) {
            $object->setBaseGiftCardsAmount($data['base_gift_cards_amount']);
        } elseif (\array_key_exists('base_gift_cards_amount', $data) && $data['base_gift_cards_amount'] === null) {
            $object->setBaseGiftCardsAmount(null);
        }
        if (\array_key_exists('customer_balance_amount', $data) && $data['customer_balance_amount'] !== null) {
            $object->setCustomerBalanceAmount($data['customer_balance_amount']);
        } elseif (\array_key_exists('customer_balance_amount', $data) && $data['customer_balance_amount'] === null) {
            $object->setCustomerBalanceAmount(null);
        }
        if (\array_key_exists('gift_cards_amount', $data) && $data['gift_cards_amount'] !== null) {
            $object->setGiftCardsAmount($data['gift_cards_amount']);
        } elseif (\array_key_exists('gift_cards_amount', $data) && $data['gift_cards_amount'] === null) {
            $object->setGiftCardsAmount(null);
        }
        if (\array_key_exists('gw_base_price', $data) && $data['gw_base_price'] !== null) {
            $object->setGwBasePrice($data['gw_base_price']);
        } elseif (\array_key_exists('gw_base_price', $data) && $data['gw_base_price'] === null) {
            $object->setGwBasePrice(null);
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
        if (\array_key_exists('gw_card_tax_amount', $data) && $data['gw_card_tax_amount'] !== null) {
            $object->setGwCardTaxAmount($data['gw_card_tax_amount']);
        } elseif (\array_key_exists('gw_card_tax_amount', $data) && $data['gw_card_tax_amount'] === null) {
            $object->setGwCardTaxAmount(null);
        }
        if (\array_key_exists('gw_items_base_price', $data) && $data['gw_items_base_price'] !== null) {
            $object->setGwItemsBasePrice($data['gw_items_base_price']);
        } elseif (\array_key_exists('gw_items_base_price', $data) && $data['gw_items_base_price'] === null) {
            $object->setGwItemsBasePrice(null);
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
        if (\array_key_exists('gw_items_tax_amount', $data) && $data['gw_items_tax_amount'] !== null) {
            $object->setGwItemsTaxAmount($data['gw_items_tax_amount']);
        } elseif (\array_key_exists('gw_items_tax_amount', $data) && $data['gw_items_tax_amount'] === null) {
            $object->setGwItemsTaxAmount(null);
        }
        if (\array_key_exists('gw_price', $data) && $data['gw_price'] !== null) {
            $object->setGwPrice($data['gw_price']);
        } elseif (\array_key_exists('gw_price', $data) && $data['gw_price'] === null) {
            $object->setGwPrice(null);
        }
        if (\array_key_exists('gw_tax_amount', $data) && $data['gw_tax_amount'] !== null) {
            $object->setGwTaxAmount($data['gw_tax_amount']);
        } elseif (\array_key_exists('gw_tax_amount', $data) && $data['gw_tax_amount'] === null) {
            $object->setGwTaxAmount(null);
        }
        if (\array_key_exists('vertex_tax_calculation_billing_address', $data) && $data['vertex_tax_calculation_billing_address'] !== null) {
            $object->setVertexTaxCalculationBillingAddress($this->denormalizer->denormalize($data['vertex_tax_calculation_billing_address'], 'Kiboko\\Magento\\V2_3\\Model\\SalesDataOrderAddressInterface', 'json', $context));
        } elseif (\array_key_exists('vertex_tax_calculation_billing_address', $data) && $data['vertex_tax_calculation_billing_address'] === null) {
            $object->setVertexTaxCalculationBillingAddress(null);
        }
        if (\array_key_exists('vertex_tax_calculation_order', $data) && $data['vertex_tax_calculation_order'] !== null) {
            $object->setVertexTaxCalculationOrder($this->denormalizer->denormalize($data['vertex_tax_calculation_order'], 'Kiboko\\Magento\\V2_3\\Model\\SalesDataOrderInterface', 'json', $context));
        } elseif (\array_key_exists('vertex_tax_calculation_order', $data) && $data['vertex_tax_calculation_order'] === null) {
            $object->setVertexTaxCalculationOrder(null);
        }
        if (\array_key_exists('vertex_tax_calculation_shipping_address', $data) && $data['vertex_tax_calculation_shipping_address'] !== null) {
            $object->setVertexTaxCalculationShippingAddress($this->denormalizer->denormalize($data['vertex_tax_calculation_shipping_address'], 'Kiboko\\Magento\\V2_3\\Model\\SalesDataOrderAddressInterface', 'json', $context));
        } elseif (\array_key_exists('vertex_tax_calculation_shipping_address', $data) && $data['vertex_tax_calculation_shipping_address'] === null) {
            $object->setVertexTaxCalculationShippingAddress(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBaseCustomerBalanceAmount()) {
            $data['base_customer_balance_amount'] = $object->getBaseCustomerBalanceAmount();
        }
        if (null !== $object->getBaseGiftCardsAmount()) {
            $data['base_gift_cards_amount'] = $object->getBaseGiftCardsAmount();
        }
        if (null !== $object->getCustomerBalanceAmount()) {
            $data['customer_balance_amount'] = $object->getCustomerBalanceAmount();
        }
        if (null !== $object->getGiftCardsAmount()) {
            $data['gift_cards_amount'] = $object->getGiftCardsAmount();
        }
        if (null !== $object->getGwBasePrice()) {
            $data['gw_base_price'] = $object->getGwBasePrice();
        }
        if (null !== $object->getGwBaseTaxAmount()) {
            $data['gw_base_tax_amount'] = $object->getGwBaseTaxAmount();
        }
        if (null !== $object->getGwCardBasePrice()) {
            $data['gw_card_base_price'] = $object->getGwCardBasePrice();
        }
        if (null !== $object->getGwCardBaseTaxAmount()) {
            $data['gw_card_base_tax_amount'] = $object->getGwCardBaseTaxAmount();
        }
        if (null !== $object->getGwCardPrice()) {
            $data['gw_card_price'] = $object->getGwCardPrice();
        }
        if (null !== $object->getGwCardTaxAmount()) {
            $data['gw_card_tax_amount'] = $object->getGwCardTaxAmount();
        }
        if (null !== $object->getGwItemsBasePrice()) {
            $data['gw_items_base_price'] = $object->getGwItemsBasePrice();
        }
        if (null !== $object->getGwItemsBaseTaxAmount()) {
            $data['gw_items_base_tax_amount'] = $object->getGwItemsBaseTaxAmount();
        }
        if (null !== $object->getGwItemsPrice()) {
            $data['gw_items_price'] = $object->getGwItemsPrice();
        }
        if (null !== $object->getGwItemsTaxAmount()) {
            $data['gw_items_tax_amount'] = $object->getGwItemsTaxAmount();
        }
        if (null !== $object->getGwPrice()) {
            $data['gw_price'] = $object->getGwPrice();
        }
        if (null !== $object->getGwTaxAmount()) {
            $data['gw_tax_amount'] = $object->getGwTaxAmount();
        }
        if (null !== $object->getVertexTaxCalculationBillingAddress()) {
            $data['vertex_tax_calculation_billing_address'] = $this->normalizer->normalize($object->getVertexTaxCalculationBillingAddress(), 'json', $context);
        }
        if (null !== $object->getVertexTaxCalculationOrder()) {
            $data['vertex_tax_calculation_order'] = $this->normalizer->normalize($object->getVertexTaxCalculationOrder(), 'json', $context);
        }
        if (null !== $object->getVertexTaxCalculationShippingAddress()) {
            $data['vertex_tax_calculation_shipping_address'] = $this->normalizer->normalize($object->getVertexTaxCalculationShippingAddress(), 'json', $context);
        }
        return $data;
    }
}
