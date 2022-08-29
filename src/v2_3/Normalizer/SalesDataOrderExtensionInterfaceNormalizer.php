<?php

namespace Kiboko\Magento\v2_3\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_3\Runtime\Normalizer\CheckArray;
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
        return $type === 'Kiboko\\Magento\\v2_3\\Model\\SalesDataOrderExtensionInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_3\\Model\\SalesDataOrderExtensionInterface';
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
        $object = new \Kiboko\Magento\v2_3\Model\SalesDataOrderExtensionInterface();
        if (\array_key_exists('base_customer_balance_amount', $data) && \is_int($data['base_customer_balance_amount'])) {
            $data['base_customer_balance_amount'] = (double) $data['base_customer_balance_amount'];
        }
        if (\array_key_exists('customer_balance_amount', $data) && \is_int($data['customer_balance_amount'])) {
            $data['customer_balance_amount'] = (double) $data['customer_balance_amount'];
        }
        if (\array_key_exists('base_customer_balance_invoiced', $data) && \is_int($data['base_customer_balance_invoiced'])) {
            $data['base_customer_balance_invoiced'] = (double) $data['base_customer_balance_invoiced'];
        }
        if (\array_key_exists('customer_balance_invoiced', $data) && \is_int($data['customer_balance_invoiced'])) {
            $data['customer_balance_invoiced'] = (double) $data['customer_balance_invoiced'];
        }
        if (\array_key_exists('base_customer_balance_refunded', $data) && \is_int($data['base_customer_balance_refunded'])) {
            $data['base_customer_balance_refunded'] = (double) $data['base_customer_balance_refunded'];
        }
        if (\array_key_exists('customer_balance_refunded', $data) && \is_int($data['customer_balance_refunded'])) {
            $data['customer_balance_refunded'] = (double) $data['customer_balance_refunded'];
        }
        if (\array_key_exists('base_customer_balance_total_refunded', $data) && \is_int($data['base_customer_balance_total_refunded'])) {
            $data['base_customer_balance_total_refunded'] = (double) $data['base_customer_balance_total_refunded'];
        }
        if (\array_key_exists('customer_balance_total_refunded', $data) && \is_int($data['customer_balance_total_refunded'])) {
            $data['customer_balance_total_refunded'] = (double) $data['customer_balance_total_refunded'];
        }
        if (\array_key_exists('base_gift_cards_amount', $data) && \is_int($data['base_gift_cards_amount'])) {
            $data['base_gift_cards_amount'] = (double) $data['base_gift_cards_amount'];
        }
        if (\array_key_exists('gift_cards_amount', $data) && \is_int($data['gift_cards_amount'])) {
            $data['gift_cards_amount'] = (double) $data['gift_cards_amount'];
        }
        if (\array_key_exists('base_gift_cards_invoiced', $data) && \is_int($data['base_gift_cards_invoiced'])) {
            $data['base_gift_cards_invoiced'] = (double) $data['base_gift_cards_invoiced'];
        }
        if (\array_key_exists('gift_cards_invoiced', $data) && \is_int($data['gift_cards_invoiced'])) {
            $data['gift_cards_invoiced'] = (double) $data['gift_cards_invoiced'];
        }
        if (\array_key_exists('base_gift_cards_refunded', $data) && \is_int($data['base_gift_cards_refunded'])) {
            $data['base_gift_cards_refunded'] = (double) $data['base_gift_cards_refunded'];
        }
        if (\array_key_exists('gift_cards_refunded', $data) && \is_int($data['gift_cards_refunded'])) {
            $data['gift_cards_refunded'] = (double) $data['gift_cards_refunded'];
        }
        if (\array_key_exists('reward_currency_amount', $data) && \is_int($data['reward_currency_amount'])) {
            $data['reward_currency_amount'] = (double) $data['reward_currency_amount'];
        }
        if (\array_key_exists('base_reward_currency_amount', $data) && \is_int($data['base_reward_currency_amount'])) {
            $data['base_reward_currency_amount'] = (double) $data['base_reward_currency_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shipping_assignments', $data)) {
            $values = array();
            foreach ($data['shipping_assignments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_3\\Model\\SalesDataShippingAssignmentInterface', 'json', $context);
            }
            $object->setShippingAssignments($values);
        }
        if (\array_key_exists('payment_additional_info', $data)) {
            $values_1 = array();
            foreach ($data['payment_additional_info'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\v2_3\\Model\\PaymentDataPaymentAdditionalInfoInterface', 'json', $context);
            }
            $object->setPaymentAdditionalInfo($values_1);
        }
        if (\array_key_exists('applied_taxes', $data)) {
            $values_2 = array();
            foreach ($data['applied_taxes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\v2_3\\Model\\TaxDataOrderTaxDetailsAppliedTaxInterface', 'json', $context);
            }
            $object->setAppliedTaxes($values_2);
        }
        if (\array_key_exists('item_applied_taxes', $data)) {
            $values_3 = array();
            foreach ($data['item_applied_taxes'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\v2_3\\Model\\TaxDataOrderTaxDetailsItemInterface', 'json', $context);
            }
            $object->setItemAppliedTaxes($values_3);
        }
        if (\array_key_exists('converting_from_quote', $data)) {
            $object->setConvertingFromQuote($data['converting_from_quote']);
        }
        if (\array_key_exists('company_order_attributes', $data)) {
            $object->setCompanyOrderAttributes($this->denormalizer->denormalize($data['company_order_attributes'], 'Kiboko\\Magento\\v2_3\\Model\\CompanyDataCompanyOrderInterface', 'json', $context));
        }
        if (\array_key_exists('base_customer_balance_amount', $data)) {
            $object->setBaseCustomerBalanceAmount($data['base_customer_balance_amount']);
        }
        if (\array_key_exists('customer_balance_amount', $data)) {
            $object->setCustomerBalanceAmount($data['customer_balance_amount']);
        }
        if (\array_key_exists('base_customer_balance_invoiced', $data)) {
            $object->setBaseCustomerBalanceInvoiced($data['base_customer_balance_invoiced']);
        }
        if (\array_key_exists('customer_balance_invoiced', $data)) {
            $object->setCustomerBalanceInvoiced($data['customer_balance_invoiced']);
        }
        if (\array_key_exists('base_customer_balance_refunded', $data)) {
            $object->setBaseCustomerBalanceRefunded($data['base_customer_balance_refunded']);
        }
        if (\array_key_exists('customer_balance_refunded', $data)) {
            $object->setCustomerBalanceRefunded($data['customer_balance_refunded']);
        }
        if (\array_key_exists('base_customer_balance_total_refunded', $data)) {
            $object->setBaseCustomerBalanceTotalRefunded($data['base_customer_balance_total_refunded']);
        }
        if (\array_key_exists('customer_balance_total_refunded', $data)) {
            $object->setCustomerBalanceTotalRefunded($data['customer_balance_total_refunded']);
        }
        if (\array_key_exists('gift_cards', $data)) {
            $values_4 = array();
            foreach ($data['gift_cards'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Kiboko\\Magento\\v2_3\\Model\\GiftCardAccountDataGiftCardInterface', 'json', $context);
            }
            $object->setGiftCards($values_4);
        }
        if (\array_key_exists('base_gift_cards_amount', $data)) {
            $object->setBaseGiftCardsAmount($data['base_gift_cards_amount']);
        }
        if (\array_key_exists('gift_cards_amount', $data)) {
            $object->setGiftCardsAmount($data['gift_cards_amount']);
        }
        if (\array_key_exists('base_gift_cards_invoiced', $data)) {
            $object->setBaseGiftCardsInvoiced($data['base_gift_cards_invoiced']);
        }
        if (\array_key_exists('gift_cards_invoiced', $data)) {
            $object->setGiftCardsInvoiced($data['gift_cards_invoiced']);
        }
        if (\array_key_exists('base_gift_cards_refunded', $data)) {
            $object->setBaseGiftCardsRefunded($data['base_gift_cards_refunded']);
        }
        if (\array_key_exists('gift_cards_refunded', $data)) {
            $object->setGiftCardsRefunded($data['gift_cards_refunded']);
        }
        if (\array_key_exists('gift_message', $data)) {
            $object->setGiftMessage($this->denormalizer->denormalize($data['gift_message'], 'Kiboko\\Magento\\v2_3\\Model\\GiftMessageDataMessageInterface', 'json', $context));
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
        if (\array_key_exists('gw_base_price', $data)) {
            $object->setGwBasePrice($data['gw_base_price']);
        }
        if (\array_key_exists('gw_price', $data)) {
            $object->setGwPrice($data['gw_price']);
        }
        if (\array_key_exists('gw_items_base_price', $data)) {
            $object->setGwItemsBasePrice($data['gw_items_base_price']);
        }
        if (\array_key_exists('gw_items_price', $data)) {
            $object->setGwItemsPrice($data['gw_items_price']);
        }
        if (\array_key_exists('gw_card_base_price', $data)) {
            $object->setGwCardBasePrice($data['gw_card_base_price']);
        }
        if (\array_key_exists('gw_card_price', $data)) {
            $object->setGwCardPrice($data['gw_card_price']);
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
        if (\array_key_exists('gw_base_price_incl_tax', $data)) {
            $object->setGwBasePriceInclTax($data['gw_base_price_incl_tax']);
        }
        if (\array_key_exists('gw_price_incl_tax', $data)) {
            $object->setGwPriceInclTax($data['gw_price_incl_tax']);
        }
        if (\array_key_exists('gw_items_base_price_incl_tax', $data)) {
            $object->setGwItemsBasePriceInclTax($data['gw_items_base_price_incl_tax']);
        }
        if (\array_key_exists('gw_items_price_incl_tax', $data)) {
            $object->setGwItemsPriceInclTax($data['gw_items_price_incl_tax']);
        }
        if (\array_key_exists('gw_card_base_price_incl_tax', $data)) {
            $object->setGwCardBasePriceInclTax($data['gw_card_base_price_incl_tax']);
        }
        if (\array_key_exists('gw_card_price_incl_tax', $data)) {
            $object->setGwCardPriceInclTax($data['gw_card_price_incl_tax']);
        }
        if (\array_key_exists('gw_base_price_invoiced', $data)) {
            $object->setGwBasePriceInvoiced($data['gw_base_price_invoiced']);
        }
        if (\array_key_exists('gw_price_invoiced', $data)) {
            $object->setGwPriceInvoiced($data['gw_price_invoiced']);
        }
        if (\array_key_exists('gw_items_base_price_invoiced', $data)) {
            $object->setGwItemsBasePriceInvoiced($data['gw_items_base_price_invoiced']);
        }
        if (\array_key_exists('gw_items_price_invoiced', $data)) {
            $object->setGwItemsPriceInvoiced($data['gw_items_price_invoiced']);
        }
        if (\array_key_exists('gw_card_base_price_invoiced', $data)) {
            $object->setGwCardBasePriceInvoiced($data['gw_card_base_price_invoiced']);
        }
        if (\array_key_exists('gw_card_price_invoiced', $data)) {
            $object->setGwCardPriceInvoiced($data['gw_card_price_invoiced']);
        }
        if (\array_key_exists('gw_base_tax_amount_invoiced', $data)) {
            $object->setGwBaseTaxAmountInvoiced($data['gw_base_tax_amount_invoiced']);
        }
        if (\array_key_exists('gw_tax_amount_invoiced', $data)) {
            $object->setGwTaxAmountInvoiced($data['gw_tax_amount_invoiced']);
        }
        if (\array_key_exists('gw_items_base_tax_invoiced', $data)) {
            $object->setGwItemsBaseTaxInvoiced($data['gw_items_base_tax_invoiced']);
        }
        if (\array_key_exists('gw_items_tax_invoiced', $data)) {
            $object->setGwItemsTaxInvoiced($data['gw_items_tax_invoiced']);
        }
        if (\array_key_exists('gw_card_base_tax_invoiced', $data)) {
            $object->setGwCardBaseTaxInvoiced($data['gw_card_base_tax_invoiced']);
        }
        if (\array_key_exists('gw_card_tax_invoiced', $data)) {
            $object->setGwCardTaxInvoiced($data['gw_card_tax_invoiced']);
        }
        if (\array_key_exists('gw_base_price_refunded', $data)) {
            $object->setGwBasePriceRefunded($data['gw_base_price_refunded']);
        }
        if (\array_key_exists('gw_price_refunded', $data)) {
            $object->setGwPriceRefunded($data['gw_price_refunded']);
        }
        if (\array_key_exists('gw_items_base_price_refunded', $data)) {
            $object->setGwItemsBasePriceRefunded($data['gw_items_base_price_refunded']);
        }
        if (\array_key_exists('gw_items_price_refunded', $data)) {
            $object->setGwItemsPriceRefunded($data['gw_items_price_refunded']);
        }
        if (\array_key_exists('gw_card_base_price_refunded', $data)) {
            $object->setGwCardBasePriceRefunded($data['gw_card_base_price_refunded']);
        }
        if (\array_key_exists('gw_card_price_refunded', $data)) {
            $object->setGwCardPriceRefunded($data['gw_card_price_refunded']);
        }
        if (\array_key_exists('gw_base_tax_amount_refunded', $data)) {
            $object->setGwBaseTaxAmountRefunded($data['gw_base_tax_amount_refunded']);
        }
        if (\array_key_exists('gw_tax_amount_refunded', $data)) {
            $object->setGwTaxAmountRefunded($data['gw_tax_amount_refunded']);
        }
        if (\array_key_exists('gw_items_base_tax_refunded', $data)) {
            $object->setGwItemsBaseTaxRefunded($data['gw_items_base_tax_refunded']);
        }
        if (\array_key_exists('gw_items_tax_refunded', $data)) {
            $object->setGwItemsTaxRefunded($data['gw_items_tax_refunded']);
        }
        if (\array_key_exists('gw_card_base_tax_refunded', $data)) {
            $object->setGwCardBaseTaxRefunded($data['gw_card_base_tax_refunded']);
        }
        if (\array_key_exists('gw_card_tax_refunded', $data)) {
            $object->setGwCardTaxRefunded($data['gw_card_tax_refunded']);
        }
        if (\array_key_exists('reward_points_balance', $data)) {
            $object->setRewardPointsBalance($data['reward_points_balance']);
        }
        if (\array_key_exists('reward_currency_amount', $data)) {
            $object->setRewardCurrencyAmount($data['reward_currency_amount']);
        }
        if (\array_key_exists('base_reward_currency_amount', $data)) {
            $object->setBaseRewardCurrencyAmount($data['base_reward_currency_amount']);
        }
        if (\array_key_exists('amazon_order_reference_id', $data)) {
            $object->setAmazonOrderReferenceId($this->denormalizer->denormalize($data['amazon_order_reference_id'], 'Kiboko\\Magento\\v2_3\\Model\\AmazonPaymentDataOrderLinkInterface', 'json', $context));
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
        if (null !== $object->getPaymentAdditionalInfo()) {
            $values_1 = array();
            foreach ($object->getPaymentAdditionalInfo() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['payment_additional_info'] = $values_1;
        }
        if (null !== $object->getAppliedTaxes()) {
            $values_2 = array();
            foreach ($object->getAppliedTaxes() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['applied_taxes'] = $values_2;
        }
        if (null !== $object->getItemAppliedTaxes()) {
            $values_3 = array();
            foreach ($object->getItemAppliedTaxes() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['item_applied_taxes'] = $values_3;
        }
        if (null !== $object->getConvertingFromQuote()) {
            $data['converting_from_quote'] = $object->getConvertingFromQuote();
        }
        if (null !== $object->getCompanyOrderAttributes()) {
            $data['company_order_attributes'] = $this->normalizer->normalize($object->getCompanyOrderAttributes(), 'json', $context);
        }
        if (null !== $object->getBaseCustomerBalanceAmount()) {
            $data['base_customer_balance_amount'] = $object->getBaseCustomerBalanceAmount();
        }
        if (null !== $object->getCustomerBalanceAmount()) {
            $data['customer_balance_amount'] = $object->getCustomerBalanceAmount();
        }
        if (null !== $object->getBaseCustomerBalanceInvoiced()) {
            $data['base_customer_balance_invoiced'] = $object->getBaseCustomerBalanceInvoiced();
        }
        if (null !== $object->getCustomerBalanceInvoiced()) {
            $data['customer_balance_invoiced'] = $object->getCustomerBalanceInvoiced();
        }
        if (null !== $object->getBaseCustomerBalanceRefunded()) {
            $data['base_customer_balance_refunded'] = $object->getBaseCustomerBalanceRefunded();
        }
        if (null !== $object->getCustomerBalanceRefunded()) {
            $data['customer_balance_refunded'] = $object->getCustomerBalanceRefunded();
        }
        if (null !== $object->getBaseCustomerBalanceTotalRefunded()) {
            $data['base_customer_balance_total_refunded'] = $object->getBaseCustomerBalanceTotalRefunded();
        }
        if (null !== $object->getCustomerBalanceTotalRefunded()) {
            $data['customer_balance_total_refunded'] = $object->getCustomerBalanceTotalRefunded();
        }
        if (null !== $object->getGiftCards()) {
            $values_4 = array();
            foreach ($object->getGiftCards() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['gift_cards'] = $values_4;
        }
        if (null !== $object->getBaseGiftCardsAmount()) {
            $data['base_gift_cards_amount'] = $object->getBaseGiftCardsAmount();
        }
        if (null !== $object->getGiftCardsAmount()) {
            $data['gift_cards_amount'] = $object->getGiftCardsAmount();
        }
        if (null !== $object->getBaseGiftCardsInvoiced()) {
            $data['base_gift_cards_invoiced'] = $object->getBaseGiftCardsInvoiced();
        }
        if (null !== $object->getGiftCardsInvoiced()) {
            $data['gift_cards_invoiced'] = $object->getGiftCardsInvoiced();
        }
        if (null !== $object->getBaseGiftCardsRefunded()) {
            $data['base_gift_cards_refunded'] = $object->getBaseGiftCardsRefunded();
        }
        if (null !== $object->getGiftCardsRefunded()) {
            $data['gift_cards_refunded'] = $object->getGiftCardsRefunded();
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
        if (null !== $object->getGwBasePrice()) {
            $data['gw_base_price'] = $object->getGwBasePrice();
        }
        if (null !== $object->getGwPrice()) {
            $data['gw_price'] = $object->getGwPrice();
        }
        if (null !== $object->getGwItemsBasePrice()) {
            $data['gw_items_base_price'] = $object->getGwItemsBasePrice();
        }
        if (null !== $object->getGwItemsPrice()) {
            $data['gw_items_price'] = $object->getGwItemsPrice();
        }
        if (null !== $object->getGwCardBasePrice()) {
            $data['gw_card_base_price'] = $object->getGwCardBasePrice();
        }
        if (null !== $object->getGwCardPrice()) {
            $data['gw_card_price'] = $object->getGwCardPrice();
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
        if (null !== $object->getGwBasePriceInclTax()) {
            $data['gw_base_price_incl_tax'] = $object->getGwBasePriceInclTax();
        }
        if (null !== $object->getGwPriceInclTax()) {
            $data['gw_price_incl_tax'] = $object->getGwPriceInclTax();
        }
        if (null !== $object->getGwItemsBasePriceInclTax()) {
            $data['gw_items_base_price_incl_tax'] = $object->getGwItemsBasePriceInclTax();
        }
        if (null !== $object->getGwItemsPriceInclTax()) {
            $data['gw_items_price_incl_tax'] = $object->getGwItemsPriceInclTax();
        }
        if (null !== $object->getGwCardBasePriceInclTax()) {
            $data['gw_card_base_price_incl_tax'] = $object->getGwCardBasePriceInclTax();
        }
        if (null !== $object->getGwCardPriceInclTax()) {
            $data['gw_card_price_incl_tax'] = $object->getGwCardPriceInclTax();
        }
        if (null !== $object->getGwBasePriceInvoiced()) {
            $data['gw_base_price_invoiced'] = $object->getGwBasePriceInvoiced();
        }
        if (null !== $object->getGwPriceInvoiced()) {
            $data['gw_price_invoiced'] = $object->getGwPriceInvoiced();
        }
        if (null !== $object->getGwItemsBasePriceInvoiced()) {
            $data['gw_items_base_price_invoiced'] = $object->getGwItemsBasePriceInvoiced();
        }
        if (null !== $object->getGwItemsPriceInvoiced()) {
            $data['gw_items_price_invoiced'] = $object->getGwItemsPriceInvoiced();
        }
        if (null !== $object->getGwCardBasePriceInvoiced()) {
            $data['gw_card_base_price_invoiced'] = $object->getGwCardBasePriceInvoiced();
        }
        if (null !== $object->getGwCardPriceInvoiced()) {
            $data['gw_card_price_invoiced'] = $object->getGwCardPriceInvoiced();
        }
        if (null !== $object->getGwBaseTaxAmountInvoiced()) {
            $data['gw_base_tax_amount_invoiced'] = $object->getGwBaseTaxAmountInvoiced();
        }
        if (null !== $object->getGwTaxAmountInvoiced()) {
            $data['gw_tax_amount_invoiced'] = $object->getGwTaxAmountInvoiced();
        }
        if (null !== $object->getGwItemsBaseTaxInvoiced()) {
            $data['gw_items_base_tax_invoiced'] = $object->getGwItemsBaseTaxInvoiced();
        }
        if (null !== $object->getGwItemsTaxInvoiced()) {
            $data['gw_items_tax_invoiced'] = $object->getGwItemsTaxInvoiced();
        }
        if (null !== $object->getGwCardBaseTaxInvoiced()) {
            $data['gw_card_base_tax_invoiced'] = $object->getGwCardBaseTaxInvoiced();
        }
        if (null !== $object->getGwCardTaxInvoiced()) {
            $data['gw_card_tax_invoiced'] = $object->getGwCardTaxInvoiced();
        }
        if (null !== $object->getGwBasePriceRefunded()) {
            $data['gw_base_price_refunded'] = $object->getGwBasePriceRefunded();
        }
        if (null !== $object->getGwPriceRefunded()) {
            $data['gw_price_refunded'] = $object->getGwPriceRefunded();
        }
        if (null !== $object->getGwItemsBasePriceRefunded()) {
            $data['gw_items_base_price_refunded'] = $object->getGwItemsBasePriceRefunded();
        }
        if (null !== $object->getGwItemsPriceRefunded()) {
            $data['gw_items_price_refunded'] = $object->getGwItemsPriceRefunded();
        }
        if (null !== $object->getGwCardBasePriceRefunded()) {
            $data['gw_card_base_price_refunded'] = $object->getGwCardBasePriceRefunded();
        }
        if (null !== $object->getGwCardPriceRefunded()) {
            $data['gw_card_price_refunded'] = $object->getGwCardPriceRefunded();
        }
        if (null !== $object->getGwBaseTaxAmountRefunded()) {
            $data['gw_base_tax_amount_refunded'] = $object->getGwBaseTaxAmountRefunded();
        }
        if (null !== $object->getGwTaxAmountRefunded()) {
            $data['gw_tax_amount_refunded'] = $object->getGwTaxAmountRefunded();
        }
        if (null !== $object->getGwItemsBaseTaxRefunded()) {
            $data['gw_items_base_tax_refunded'] = $object->getGwItemsBaseTaxRefunded();
        }
        if (null !== $object->getGwItemsTaxRefunded()) {
            $data['gw_items_tax_refunded'] = $object->getGwItemsTaxRefunded();
        }
        if (null !== $object->getGwCardBaseTaxRefunded()) {
            $data['gw_card_base_tax_refunded'] = $object->getGwCardBaseTaxRefunded();
        }
        if (null !== $object->getGwCardTaxRefunded()) {
            $data['gw_card_tax_refunded'] = $object->getGwCardTaxRefunded();
        }
        if (null !== $object->getRewardPointsBalance()) {
            $data['reward_points_balance'] = $object->getRewardPointsBalance();
        }
        if (null !== $object->getRewardCurrencyAmount()) {
            $data['reward_currency_amount'] = $object->getRewardCurrencyAmount();
        }
        if (null !== $object->getBaseRewardCurrencyAmount()) {
            $data['base_reward_currency_amount'] = $object->getBaseRewardCurrencyAmount();
        }
        if (null !== $object->getAmazonOrderReferenceId()) {
            $data['amazon_order_reference_id'] = $this->normalizer->normalize($object->getAmazonOrderReferenceId(), 'json', $context);
        }
        return $data;
    }
}