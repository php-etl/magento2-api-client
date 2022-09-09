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

class SalesDataOrderExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\SalesDataOrderExtensionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\SalesDataOrderExtensionInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\SalesDataOrderExtensionInterface();
        if (\array_key_exists('base_customer_balance_amount', $data) && \is_int($data['base_customer_balance_amount'])) {
            $data['base_customer_balance_amount'] = (float) $data['base_customer_balance_amount'];
        }
        if (\array_key_exists('base_customer_balance_invoiced', $data) && \is_int($data['base_customer_balance_invoiced'])) {
            $data['base_customer_balance_invoiced'] = (float) $data['base_customer_balance_invoiced'];
        }
        if (\array_key_exists('base_customer_balance_refunded', $data) && \is_int($data['base_customer_balance_refunded'])) {
            $data['base_customer_balance_refunded'] = (float) $data['base_customer_balance_refunded'];
        }
        if (\array_key_exists('base_customer_balance_total_refunded', $data) && \is_int($data['base_customer_balance_total_refunded'])) {
            $data['base_customer_balance_total_refunded'] = (float) $data['base_customer_balance_total_refunded'];
        }
        if (\array_key_exists('base_gift_cards_amount', $data) && \is_int($data['base_gift_cards_amount'])) {
            $data['base_gift_cards_amount'] = (float) $data['base_gift_cards_amount'];
        }
        if (\array_key_exists('base_gift_cards_invoiced', $data) && \is_int($data['base_gift_cards_invoiced'])) {
            $data['base_gift_cards_invoiced'] = (float) $data['base_gift_cards_invoiced'];
        }
        if (\array_key_exists('base_gift_cards_refunded', $data) && \is_int($data['base_gift_cards_refunded'])) {
            $data['base_gift_cards_refunded'] = (float) $data['base_gift_cards_refunded'];
        }
        if (\array_key_exists('base_reward_currency_amount', $data) && \is_int($data['base_reward_currency_amount'])) {
            $data['base_reward_currency_amount'] = (float) $data['base_reward_currency_amount'];
        }
        if (\array_key_exists('customer_balance_amount', $data) && \is_int($data['customer_balance_amount'])) {
            $data['customer_balance_amount'] = (float) $data['customer_balance_amount'];
        }
        if (\array_key_exists('customer_balance_invoiced', $data) && \is_int($data['customer_balance_invoiced'])) {
            $data['customer_balance_invoiced'] = (float) $data['customer_balance_invoiced'];
        }
        if (\array_key_exists('customer_balance_refunded', $data) && \is_int($data['customer_balance_refunded'])) {
            $data['customer_balance_refunded'] = (float) $data['customer_balance_refunded'];
        }
        if (\array_key_exists('customer_balance_total_refunded', $data) && \is_int($data['customer_balance_total_refunded'])) {
            $data['customer_balance_total_refunded'] = (float) $data['customer_balance_total_refunded'];
        }
        if (\array_key_exists('gift_cards_amount', $data) && \is_int($data['gift_cards_amount'])) {
            $data['gift_cards_amount'] = (float) $data['gift_cards_amount'];
        }
        if (\array_key_exists('gift_cards_invoiced', $data) && \is_int($data['gift_cards_invoiced'])) {
            $data['gift_cards_invoiced'] = (float) $data['gift_cards_invoiced'];
        }
        if (\array_key_exists('gift_cards_refunded', $data) && \is_int($data['gift_cards_refunded'])) {
            $data['gift_cards_refunded'] = (float) $data['gift_cards_refunded'];
        }
        if (\array_key_exists('reward_currency_amount', $data) && \is_int($data['reward_currency_amount'])) {
            $data['reward_currency_amount'] = (float) $data['reward_currency_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amazon_order_reference_id', $data) && $data['amazon_order_reference_id'] !== null) {
            $object->setAmazonOrderReferenceId($data['amazon_order_reference_id']);
        } elseif (\array_key_exists('amazon_order_reference_id', $data) && $data['amazon_order_reference_id'] === null) {
            $object->setAmazonOrderReferenceId(null);
        }
        if (\array_key_exists('applied_taxes', $data) && $data['applied_taxes'] !== null) {
            $values = array();
            foreach ($data['applied_taxes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_4\\Model\\TaxDataOrderTaxDetailsAppliedTaxInterface', 'json', $context);
            }
            $object->setAppliedTaxes($values);
        } elseif (\array_key_exists('applied_taxes', $data) && $data['applied_taxes'] === null) {
            $object->setAppliedTaxes(null);
        }
        if (\array_key_exists('base_customer_balance_amount', $data) && $data['base_customer_balance_amount'] !== null) {
            $object->setBaseCustomerBalanceAmount($data['base_customer_balance_amount']);
        } elseif (\array_key_exists('base_customer_balance_amount', $data) && $data['base_customer_balance_amount'] === null) {
            $object->setBaseCustomerBalanceAmount(null);
        }
        if (\array_key_exists('base_customer_balance_invoiced', $data) && $data['base_customer_balance_invoiced'] !== null) {
            $object->setBaseCustomerBalanceInvoiced($data['base_customer_balance_invoiced']);
        } elseif (\array_key_exists('base_customer_balance_invoiced', $data) && $data['base_customer_balance_invoiced'] === null) {
            $object->setBaseCustomerBalanceInvoiced(null);
        }
        if (\array_key_exists('base_customer_balance_refunded', $data) && $data['base_customer_balance_refunded'] !== null) {
            $object->setBaseCustomerBalanceRefunded($data['base_customer_balance_refunded']);
        } elseif (\array_key_exists('base_customer_balance_refunded', $data) && $data['base_customer_balance_refunded'] === null) {
            $object->setBaseCustomerBalanceRefunded(null);
        }
        if (\array_key_exists('base_customer_balance_total_refunded', $data) && $data['base_customer_balance_total_refunded'] !== null) {
            $object->setBaseCustomerBalanceTotalRefunded($data['base_customer_balance_total_refunded']);
        } elseif (\array_key_exists('base_customer_balance_total_refunded', $data) && $data['base_customer_balance_total_refunded'] === null) {
            $object->setBaseCustomerBalanceTotalRefunded(null);
        }
        if (\array_key_exists('base_gift_cards_amount', $data) && $data['base_gift_cards_amount'] !== null) {
            $object->setBaseGiftCardsAmount($data['base_gift_cards_amount']);
        } elseif (\array_key_exists('base_gift_cards_amount', $data) && $data['base_gift_cards_amount'] === null) {
            $object->setBaseGiftCardsAmount(null);
        }
        if (\array_key_exists('base_gift_cards_invoiced', $data) && $data['base_gift_cards_invoiced'] !== null) {
            $object->setBaseGiftCardsInvoiced($data['base_gift_cards_invoiced']);
        } elseif (\array_key_exists('base_gift_cards_invoiced', $data) && $data['base_gift_cards_invoiced'] === null) {
            $object->setBaseGiftCardsInvoiced(null);
        }
        if (\array_key_exists('base_gift_cards_refunded', $data) && $data['base_gift_cards_refunded'] !== null) {
            $object->setBaseGiftCardsRefunded($data['base_gift_cards_refunded']);
        } elseif (\array_key_exists('base_gift_cards_refunded', $data) && $data['base_gift_cards_refunded'] === null) {
            $object->setBaseGiftCardsRefunded(null);
        }
        if (\array_key_exists('base_reward_currency_amount', $data) && $data['base_reward_currency_amount'] !== null) {
            $object->setBaseRewardCurrencyAmount($data['base_reward_currency_amount']);
        } elseif (\array_key_exists('base_reward_currency_amount', $data) && $data['base_reward_currency_amount'] === null) {
            $object->setBaseRewardCurrencyAmount(null);
        }
        if (\array_key_exists('company_order_attributes', $data) && $data['company_order_attributes'] !== null) {
            $object->setCompanyOrderAttributes($this->denormalizer->denormalize($data['company_order_attributes'], 'Kiboko\\Magento\\V2_4\\Model\\CompanyDataCompanyOrderInterface', 'json', $context));
        } elseif (\array_key_exists('company_order_attributes', $data) && $data['company_order_attributes'] === null) {
            $object->setCompanyOrderAttributes(null);
        }
        if (\array_key_exists('converting_from_quote', $data) && $data['converting_from_quote'] !== null) {
            $object->setConvertingFromQuote($data['converting_from_quote']);
        } elseif (\array_key_exists('converting_from_quote', $data) && $data['converting_from_quote'] === null) {
            $object->setConvertingFromQuote(null);
        }
        if (\array_key_exists('customer_balance_amount', $data) && $data['customer_balance_amount'] !== null) {
            $object->setCustomerBalanceAmount($data['customer_balance_amount']);
        } elseif (\array_key_exists('customer_balance_amount', $data) && $data['customer_balance_amount'] === null) {
            $object->setCustomerBalanceAmount(null);
        }
        if (\array_key_exists('customer_balance_invoiced', $data) && $data['customer_balance_invoiced'] !== null) {
            $object->setCustomerBalanceInvoiced($data['customer_balance_invoiced']);
        } elseif (\array_key_exists('customer_balance_invoiced', $data) && $data['customer_balance_invoiced'] === null) {
            $object->setCustomerBalanceInvoiced(null);
        }
        if (\array_key_exists('customer_balance_refunded', $data) && $data['customer_balance_refunded'] !== null) {
            $object->setCustomerBalanceRefunded($data['customer_balance_refunded']);
        } elseif (\array_key_exists('customer_balance_refunded', $data) && $data['customer_balance_refunded'] === null) {
            $object->setCustomerBalanceRefunded(null);
        }
        if (\array_key_exists('customer_balance_total_refunded', $data) && $data['customer_balance_total_refunded'] !== null) {
            $object->setCustomerBalanceTotalRefunded($data['customer_balance_total_refunded']);
        } elseif (\array_key_exists('customer_balance_total_refunded', $data) && $data['customer_balance_total_refunded'] === null) {
            $object->setCustomerBalanceTotalRefunded(null);
        }
        if (\array_key_exists('gift_cards', $data) && $data['gift_cards'] !== null) {
            $values_1 = array();
            foreach ($data['gift_cards'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_4\\Model\\GiftCardAccountDataGiftCardInterface', 'json', $context);
            }
            $object->setGiftCards($values_1);
        } elseif (\array_key_exists('gift_cards', $data) && $data['gift_cards'] === null) {
            $object->setGiftCards(null);
        }
        if (\array_key_exists('gift_cards_amount', $data) && $data['gift_cards_amount'] !== null) {
            $object->setGiftCardsAmount($data['gift_cards_amount']);
        } elseif (\array_key_exists('gift_cards_amount', $data) && $data['gift_cards_amount'] === null) {
            $object->setGiftCardsAmount(null);
        }
        if (\array_key_exists('gift_cards_invoiced', $data) && $data['gift_cards_invoiced'] !== null) {
            $object->setGiftCardsInvoiced($data['gift_cards_invoiced']);
        } elseif (\array_key_exists('gift_cards_invoiced', $data) && $data['gift_cards_invoiced'] === null) {
            $object->setGiftCardsInvoiced(null);
        }
        if (\array_key_exists('gift_cards_refunded', $data) && $data['gift_cards_refunded'] !== null) {
            $object->setGiftCardsRefunded($data['gift_cards_refunded']);
        } elseif (\array_key_exists('gift_cards_refunded', $data) && $data['gift_cards_refunded'] === null) {
            $object->setGiftCardsRefunded(null);
        }
        if (\array_key_exists('gift_message', $data) && $data['gift_message'] !== null) {
            $object->setGiftMessage($this->denormalizer->denormalize($data['gift_message'], 'Kiboko\\Magento\\V2_4\\Model\\GiftMessageDataMessageInterface', 'json', $context));
        } elseif (\array_key_exists('gift_message', $data) && $data['gift_message'] === null) {
            $object->setGiftMessage(null);
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
        if (\array_key_exists('gw_card_base_price_invoiced', $data) && $data['gw_card_base_price_invoiced'] !== null) {
            $object->setGwCardBasePriceInvoiced($data['gw_card_base_price_invoiced']);
        } elseif (\array_key_exists('gw_card_base_price_invoiced', $data) && $data['gw_card_base_price_invoiced'] === null) {
            $object->setGwCardBasePriceInvoiced(null);
        }
        if (\array_key_exists('gw_card_base_price_refunded', $data) && $data['gw_card_base_price_refunded'] !== null) {
            $object->setGwCardBasePriceRefunded($data['gw_card_base_price_refunded']);
        } elseif (\array_key_exists('gw_card_base_price_refunded', $data) && $data['gw_card_base_price_refunded'] === null) {
            $object->setGwCardBasePriceRefunded(null);
        }
        if (\array_key_exists('gw_card_base_tax_amount', $data) && $data['gw_card_base_tax_amount'] !== null) {
            $object->setGwCardBaseTaxAmount($data['gw_card_base_tax_amount']);
        } elseif (\array_key_exists('gw_card_base_tax_amount', $data) && $data['gw_card_base_tax_amount'] === null) {
            $object->setGwCardBaseTaxAmount(null);
        }
        if (\array_key_exists('gw_card_base_tax_invoiced', $data) && $data['gw_card_base_tax_invoiced'] !== null) {
            $object->setGwCardBaseTaxInvoiced($data['gw_card_base_tax_invoiced']);
        } elseif (\array_key_exists('gw_card_base_tax_invoiced', $data) && $data['gw_card_base_tax_invoiced'] === null) {
            $object->setGwCardBaseTaxInvoiced(null);
        }
        if (\array_key_exists('gw_card_base_tax_refunded', $data) && $data['gw_card_base_tax_refunded'] !== null) {
            $object->setGwCardBaseTaxRefunded($data['gw_card_base_tax_refunded']);
        } elseif (\array_key_exists('gw_card_base_tax_refunded', $data) && $data['gw_card_base_tax_refunded'] === null) {
            $object->setGwCardBaseTaxRefunded(null);
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
        if (\array_key_exists('gw_card_price_invoiced', $data) && $data['gw_card_price_invoiced'] !== null) {
            $object->setGwCardPriceInvoiced($data['gw_card_price_invoiced']);
        } elseif (\array_key_exists('gw_card_price_invoiced', $data) && $data['gw_card_price_invoiced'] === null) {
            $object->setGwCardPriceInvoiced(null);
        }
        if (\array_key_exists('gw_card_price_refunded', $data) && $data['gw_card_price_refunded'] !== null) {
            $object->setGwCardPriceRefunded($data['gw_card_price_refunded']);
        } elseif (\array_key_exists('gw_card_price_refunded', $data) && $data['gw_card_price_refunded'] === null) {
            $object->setGwCardPriceRefunded(null);
        }
        if (\array_key_exists('gw_card_tax_amount', $data) && $data['gw_card_tax_amount'] !== null) {
            $object->setGwCardTaxAmount($data['gw_card_tax_amount']);
        } elseif (\array_key_exists('gw_card_tax_amount', $data) && $data['gw_card_tax_amount'] === null) {
            $object->setGwCardTaxAmount(null);
        }
        if (\array_key_exists('gw_card_tax_invoiced', $data) && $data['gw_card_tax_invoiced'] !== null) {
            $object->setGwCardTaxInvoiced($data['gw_card_tax_invoiced']);
        } elseif (\array_key_exists('gw_card_tax_invoiced', $data) && $data['gw_card_tax_invoiced'] === null) {
            $object->setGwCardTaxInvoiced(null);
        }
        if (\array_key_exists('gw_card_tax_refunded', $data) && $data['gw_card_tax_refunded'] !== null) {
            $object->setGwCardTaxRefunded($data['gw_card_tax_refunded']);
        } elseif (\array_key_exists('gw_card_tax_refunded', $data) && $data['gw_card_tax_refunded'] === null) {
            $object->setGwCardTaxRefunded(null);
        }
        if (\array_key_exists('gw_id', $data) && $data['gw_id'] !== null) {
            $object->setGwId($data['gw_id']);
        } elseif (\array_key_exists('gw_id', $data) && $data['gw_id'] === null) {
            $object->setGwId(null);
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
        if (\array_key_exists('gw_items_base_price_invoiced', $data) && $data['gw_items_base_price_invoiced'] !== null) {
            $object->setGwItemsBasePriceInvoiced($data['gw_items_base_price_invoiced']);
        } elseif (\array_key_exists('gw_items_base_price_invoiced', $data) && $data['gw_items_base_price_invoiced'] === null) {
            $object->setGwItemsBasePriceInvoiced(null);
        }
        if (\array_key_exists('gw_items_base_price_refunded', $data) && $data['gw_items_base_price_refunded'] !== null) {
            $object->setGwItemsBasePriceRefunded($data['gw_items_base_price_refunded']);
        } elseif (\array_key_exists('gw_items_base_price_refunded', $data) && $data['gw_items_base_price_refunded'] === null) {
            $object->setGwItemsBasePriceRefunded(null);
        }
        if (\array_key_exists('gw_items_base_tax_amount', $data) && $data['gw_items_base_tax_amount'] !== null) {
            $object->setGwItemsBaseTaxAmount($data['gw_items_base_tax_amount']);
        } elseif (\array_key_exists('gw_items_base_tax_amount', $data) && $data['gw_items_base_tax_amount'] === null) {
            $object->setGwItemsBaseTaxAmount(null);
        }
        if (\array_key_exists('gw_items_base_tax_invoiced', $data) && $data['gw_items_base_tax_invoiced'] !== null) {
            $object->setGwItemsBaseTaxInvoiced($data['gw_items_base_tax_invoiced']);
        } elseif (\array_key_exists('gw_items_base_tax_invoiced', $data) && $data['gw_items_base_tax_invoiced'] === null) {
            $object->setGwItemsBaseTaxInvoiced(null);
        }
        if (\array_key_exists('gw_items_base_tax_refunded', $data) && $data['gw_items_base_tax_refunded'] !== null) {
            $object->setGwItemsBaseTaxRefunded($data['gw_items_base_tax_refunded']);
        } elseif (\array_key_exists('gw_items_base_tax_refunded', $data) && $data['gw_items_base_tax_refunded'] === null) {
            $object->setGwItemsBaseTaxRefunded(null);
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
        if (\array_key_exists('gw_items_price_invoiced', $data) && $data['gw_items_price_invoiced'] !== null) {
            $object->setGwItemsPriceInvoiced($data['gw_items_price_invoiced']);
        } elseif (\array_key_exists('gw_items_price_invoiced', $data) && $data['gw_items_price_invoiced'] === null) {
            $object->setGwItemsPriceInvoiced(null);
        }
        if (\array_key_exists('gw_items_price_refunded', $data) && $data['gw_items_price_refunded'] !== null) {
            $object->setGwItemsPriceRefunded($data['gw_items_price_refunded']);
        } elseif (\array_key_exists('gw_items_price_refunded', $data) && $data['gw_items_price_refunded'] === null) {
            $object->setGwItemsPriceRefunded(null);
        }
        if (\array_key_exists('gw_items_tax_amount', $data) && $data['gw_items_tax_amount'] !== null) {
            $object->setGwItemsTaxAmount($data['gw_items_tax_amount']);
        } elseif (\array_key_exists('gw_items_tax_amount', $data) && $data['gw_items_tax_amount'] === null) {
            $object->setGwItemsTaxAmount(null);
        }
        if (\array_key_exists('gw_items_tax_invoiced', $data) && $data['gw_items_tax_invoiced'] !== null) {
            $object->setGwItemsTaxInvoiced($data['gw_items_tax_invoiced']);
        } elseif (\array_key_exists('gw_items_tax_invoiced', $data) && $data['gw_items_tax_invoiced'] === null) {
            $object->setGwItemsTaxInvoiced(null);
        }
        if (\array_key_exists('gw_items_tax_refunded', $data) && $data['gw_items_tax_refunded'] !== null) {
            $object->setGwItemsTaxRefunded($data['gw_items_tax_refunded']);
        } elseif (\array_key_exists('gw_items_tax_refunded', $data) && $data['gw_items_tax_refunded'] === null) {
            $object->setGwItemsTaxRefunded(null);
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
        if (\array_key_exists('item_applied_taxes', $data) && $data['item_applied_taxes'] !== null) {
            $values_2 = array();
            foreach ($data['item_applied_taxes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\V2_4\\Model\\TaxDataOrderTaxDetailsItemInterface', 'json', $context);
            }
            $object->setItemAppliedTaxes($values_2);
        } elseif (\array_key_exists('item_applied_taxes', $data) && $data['item_applied_taxes'] === null) {
            $object->setItemAppliedTaxes(null);
        }
        if (\array_key_exists('payment_additional_info', $data) && $data['payment_additional_info'] !== null) {
            $values_3 = array();
            foreach ($data['payment_additional_info'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\V2_4\\Model\\PaymentDataPaymentAdditionalInfoInterface', 'json', $context);
            }
            $object->setPaymentAdditionalInfo($values_3);
        } elseif (\array_key_exists('payment_additional_info', $data) && $data['payment_additional_info'] === null) {
            $object->setPaymentAdditionalInfo(null);
        }
        if (\array_key_exists('reward_currency_amount', $data) && $data['reward_currency_amount'] !== null) {
            $object->setRewardCurrencyAmount($data['reward_currency_amount']);
        } elseif (\array_key_exists('reward_currency_amount', $data) && $data['reward_currency_amount'] === null) {
            $object->setRewardCurrencyAmount(null);
        }
        if (\array_key_exists('reward_points_balance', $data) && $data['reward_points_balance'] !== null) {
            $object->setRewardPointsBalance($data['reward_points_balance']);
        } elseif (\array_key_exists('reward_points_balance', $data) && $data['reward_points_balance'] === null) {
            $object->setRewardPointsBalance(null);
        }
        if (\array_key_exists('shipping_assignments', $data) && $data['shipping_assignments'] !== null) {
            $values_4 = array();
            foreach ($data['shipping_assignments'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Kiboko\\Magento\\V2_4\\Model\\SalesDataShippingAssignmentInterface', 'json', $context);
            }
            $object->setShippingAssignments($values_4);
        } elseif (\array_key_exists('shipping_assignments', $data) && $data['shipping_assignments'] === null) {
            $object->setShippingAssignments(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAmazonOrderReferenceId()) {
            $data['amazon_order_reference_id'] = $object->getAmazonOrderReferenceId();
        }
        if (null !== $object->getAppliedTaxes()) {
            $values = array();
            foreach ($object->getAppliedTaxes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['applied_taxes'] = $values;
        }
        if (null !== $object->getBaseCustomerBalanceAmount()) {
            $data['base_customer_balance_amount'] = $object->getBaseCustomerBalanceAmount();
        }
        if (null !== $object->getBaseCustomerBalanceInvoiced()) {
            $data['base_customer_balance_invoiced'] = $object->getBaseCustomerBalanceInvoiced();
        }
        if (null !== $object->getBaseCustomerBalanceRefunded()) {
            $data['base_customer_balance_refunded'] = $object->getBaseCustomerBalanceRefunded();
        }
        if (null !== $object->getBaseCustomerBalanceTotalRefunded()) {
            $data['base_customer_balance_total_refunded'] = $object->getBaseCustomerBalanceTotalRefunded();
        }
        if (null !== $object->getBaseGiftCardsAmount()) {
            $data['base_gift_cards_amount'] = $object->getBaseGiftCardsAmount();
        }
        if (null !== $object->getBaseGiftCardsInvoiced()) {
            $data['base_gift_cards_invoiced'] = $object->getBaseGiftCardsInvoiced();
        }
        if (null !== $object->getBaseGiftCardsRefunded()) {
            $data['base_gift_cards_refunded'] = $object->getBaseGiftCardsRefunded();
        }
        if (null !== $object->getBaseRewardCurrencyAmount()) {
            $data['base_reward_currency_amount'] = $object->getBaseRewardCurrencyAmount();
        }
        if (null !== $object->getCompanyOrderAttributes()) {
            $data['company_order_attributes'] = $this->normalizer->normalize($object->getCompanyOrderAttributes(), 'json', $context);
        }
        if (null !== $object->getConvertingFromQuote()) {
            $data['converting_from_quote'] = $object->getConvertingFromQuote();
        }
        if (null !== $object->getCustomerBalanceAmount()) {
            $data['customer_balance_amount'] = $object->getCustomerBalanceAmount();
        }
        if (null !== $object->getCustomerBalanceInvoiced()) {
            $data['customer_balance_invoiced'] = $object->getCustomerBalanceInvoiced();
        }
        if (null !== $object->getCustomerBalanceRefunded()) {
            $data['customer_balance_refunded'] = $object->getCustomerBalanceRefunded();
        }
        if (null !== $object->getCustomerBalanceTotalRefunded()) {
            $data['customer_balance_total_refunded'] = $object->getCustomerBalanceTotalRefunded();
        }
        if (null !== $object->getGiftCards()) {
            $values_1 = array();
            foreach ($object->getGiftCards() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['gift_cards'] = $values_1;
        }
        if (null !== $object->getGiftCardsAmount()) {
            $data['gift_cards_amount'] = $object->getGiftCardsAmount();
        }
        if (null !== $object->getGiftCardsInvoiced()) {
            $data['gift_cards_invoiced'] = $object->getGiftCardsInvoiced();
        }
        if (null !== $object->getGiftCardsRefunded()) {
            $data['gift_cards_refunded'] = $object->getGiftCardsRefunded();
        }
        if (null !== $object->getGiftMessage()) {
            $data['gift_message'] = $this->normalizer->normalize($object->getGiftMessage(), 'json', $context);
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
        if (null !== $object->getGwCardBasePrice()) {
            $data['gw_card_base_price'] = $object->getGwCardBasePrice();
        }
        if (null !== $object->getGwCardBasePriceInclTax()) {
            $data['gw_card_base_price_incl_tax'] = $object->getGwCardBasePriceInclTax();
        }
        if (null !== $object->getGwCardBasePriceInvoiced()) {
            $data['gw_card_base_price_invoiced'] = $object->getGwCardBasePriceInvoiced();
        }
        if (null !== $object->getGwCardBasePriceRefunded()) {
            $data['gw_card_base_price_refunded'] = $object->getGwCardBasePriceRefunded();
        }
        if (null !== $object->getGwCardBaseTaxAmount()) {
            $data['gw_card_base_tax_amount'] = $object->getGwCardBaseTaxAmount();
        }
        if (null !== $object->getGwCardBaseTaxInvoiced()) {
            $data['gw_card_base_tax_invoiced'] = $object->getGwCardBaseTaxInvoiced();
        }
        if (null !== $object->getGwCardBaseTaxRefunded()) {
            $data['gw_card_base_tax_refunded'] = $object->getGwCardBaseTaxRefunded();
        }
        if (null !== $object->getGwCardPrice()) {
            $data['gw_card_price'] = $object->getGwCardPrice();
        }
        if (null !== $object->getGwCardPriceInclTax()) {
            $data['gw_card_price_incl_tax'] = $object->getGwCardPriceInclTax();
        }
        if (null !== $object->getGwCardPriceInvoiced()) {
            $data['gw_card_price_invoiced'] = $object->getGwCardPriceInvoiced();
        }
        if (null !== $object->getGwCardPriceRefunded()) {
            $data['gw_card_price_refunded'] = $object->getGwCardPriceRefunded();
        }
        if (null !== $object->getGwCardTaxAmount()) {
            $data['gw_card_tax_amount'] = $object->getGwCardTaxAmount();
        }
        if (null !== $object->getGwCardTaxInvoiced()) {
            $data['gw_card_tax_invoiced'] = $object->getGwCardTaxInvoiced();
        }
        if (null !== $object->getGwCardTaxRefunded()) {
            $data['gw_card_tax_refunded'] = $object->getGwCardTaxRefunded();
        }
        if (null !== $object->getGwId()) {
            $data['gw_id'] = $object->getGwId();
        }
        if (null !== $object->getGwItemsBasePrice()) {
            $data['gw_items_base_price'] = $object->getGwItemsBasePrice();
        }
        if (null !== $object->getGwItemsBasePriceInclTax()) {
            $data['gw_items_base_price_incl_tax'] = $object->getGwItemsBasePriceInclTax();
        }
        if (null !== $object->getGwItemsBasePriceInvoiced()) {
            $data['gw_items_base_price_invoiced'] = $object->getGwItemsBasePriceInvoiced();
        }
        if (null !== $object->getGwItemsBasePriceRefunded()) {
            $data['gw_items_base_price_refunded'] = $object->getGwItemsBasePriceRefunded();
        }
        if (null !== $object->getGwItemsBaseTaxAmount()) {
            $data['gw_items_base_tax_amount'] = $object->getGwItemsBaseTaxAmount();
        }
        if (null !== $object->getGwItemsBaseTaxInvoiced()) {
            $data['gw_items_base_tax_invoiced'] = $object->getGwItemsBaseTaxInvoiced();
        }
        if (null !== $object->getGwItemsBaseTaxRefunded()) {
            $data['gw_items_base_tax_refunded'] = $object->getGwItemsBaseTaxRefunded();
        }
        if (null !== $object->getGwItemsPrice()) {
            $data['gw_items_price'] = $object->getGwItemsPrice();
        }
        if (null !== $object->getGwItemsPriceInclTax()) {
            $data['gw_items_price_incl_tax'] = $object->getGwItemsPriceInclTax();
        }
        if (null !== $object->getGwItemsPriceInvoiced()) {
            $data['gw_items_price_invoiced'] = $object->getGwItemsPriceInvoiced();
        }
        if (null !== $object->getGwItemsPriceRefunded()) {
            $data['gw_items_price_refunded'] = $object->getGwItemsPriceRefunded();
        }
        if (null !== $object->getGwItemsTaxAmount()) {
            $data['gw_items_tax_amount'] = $object->getGwItemsTaxAmount();
        }
        if (null !== $object->getGwItemsTaxInvoiced()) {
            $data['gw_items_tax_invoiced'] = $object->getGwItemsTaxInvoiced();
        }
        if (null !== $object->getGwItemsTaxRefunded()) {
            $data['gw_items_tax_refunded'] = $object->getGwItemsTaxRefunded();
        }
        if (null !== $object->getGwPrice()) {
            $data['gw_price'] = $object->getGwPrice();
        }
        if (null !== $object->getGwPriceInclTax()) {
            $data['gw_price_incl_tax'] = $object->getGwPriceInclTax();
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
        if (null !== $object->getItemAppliedTaxes()) {
            $values_2 = array();
            foreach ($object->getItemAppliedTaxes() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['item_applied_taxes'] = $values_2;
        }
        if (null !== $object->getPaymentAdditionalInfo()) {
            $values_3 = array();
            foreach ($object->getPaymentAdditionalInfo() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['payment_additional_info'] = $values_3;
        }
        if (null !== $object->getRewardCurrencyAmount()) {
            $data['reward_currency_amount'] = $object->getRewardCurrencyAmount();
        }
        if (null !== $object->getRewardPointsBalance()) {
            $data['reward_points_balance'] = $object->getRewardPointsBalance();
        }
        if (null !== $object->getShippingAssignments()) {
            $values_4 = array();
            foreach ($object->getShippingAssignments() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['shipping_assignments'] = $values_4;
        }
        return $data;
    }
}
