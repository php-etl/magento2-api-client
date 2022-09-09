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

class NegotiableQuoteDataNegotiableQuoteInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\NegotiableQuoteDataNegotiableQuoteInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\NegotiableQuoteDataNegotiableQuoteInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\NegotiableQuoteDataNegotiableQuoteInterface();
        if (\array_key_exists('base_negotiated_total_price', $data) && \is_int($data['base_negotiated_total_price'])) {
            $data['base_negotiated_total_price'] = (float) $data['base_negotiated_total_price'];
        }
        if (\array_key_exists('base_original_total_price', $data) && \is_int($data['base_original_total_price'])) {
            $data['base_original_total_price'] = (float) $data['base_original_total_price'];
        }
        if (\array_key_exists('negotiated_price_value', $data) && \is_int($data['negotiated_price_value'])) {
            $data['negotiated_price_value'] = (float) $data['negotiated_price_value'];
        }
        if (\array_key_exists('negotiated_total_price', $data) && \is_int($data['negotiated_total_price'])) {
            $data['negotiated_total_price'] = (float) $data['negotiated_total_price'];
        }
        if (\array_key_exists('original_total_price', $data) && \is_int($data['original_total_price'])) {
            $data['original_total_price'] = (float) $data['original_total_price'];
        }
        if (\array_key_exists('shipping_price', $data) && \is_int($data['shipping_price'])) {
            $data['shipping_price'] = (float) $data['shipping_price'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('applied_rule_ids', $data) && $data['applied_rule_ids'] !== null) {
            $object->setAppliedRuleIds($data['applied_rule_ids']);
        } elseif (\array_key_exists('applied_rule_ids', $data) && $data['applied_rule_ids'] === null) {
            $object->setAppliedRuleIds(null);
        }
        if (\array_key_exists('base_negotiated_total_price', $data) && $data['base_negotiated_total_price'] !== null) {
            $object->setBaseNegotiatedTotalPrice($data['base_negotiated_total_price']);
        } elseif (\array_key_exists('base_negotiated_total_price', $data) && $data['base_negotiated_total_price'] === null) {
            $object->setBaseNegotiatedTotalPrice(null);
        }
        if (\array_key_exists('base_original_total_price', $data) && $data['base_original_total_price'] !== null) {
            $object->setBaseOriginalTotalPrice($data['base_original_total_price']);
        } elseif (\array_key_exists('base_original_total_price', $data) && $data['base_original_total_price'] === null) {
            $object->setBaseOriginalTotalPrice(null);
        }
        if (\array_key_exists('creator_id', $data) && $data['creator_id'] !== null) {
            $object->setCreatorId($data['creator_id']);
        } elseif (\array_key_exists('creator_id', $data) && $data['creator_id'] === null) {
            $object->setCreatorId(null);
        }
        if (\array_key_exists('creator_type', $data) && $data['creator_type'] !== null) {
            $object->setCreatorType($data['creator_type']);
        } elseif (\array_key_exists('creator_type', $data) && $data['creator_type'] === null) {
            $object->setCreatorType(null);
        }
        if (\array_key_exists('deleted_sku', $data) && $data['deleted_sku'] !== null) {
            $object->setDeletedSku($data['deleted_sku']);
        } elseif (\array_key_exists('deleted_sku', $data) && $data['deleted_sku'] === null) {
            $object->setDeletedSku(null);
        }
        if (\array_key_exists('email_notification_status', $data) && $data['email_notification_status'] !== null) {
            $object->setEmailNotificationStatus($data['email_notification_status']);
        } elseif (\array_key_exists('email_notification_status', $data) && $data['email_notification_status'] === null) {
            $object->setEmailNotificationStatus(null);
        }
        if (\array_key_exists('expiration_period', $data) && $data['expiration_period'] !== null) {
            $object->setExpirationPeriod($data['expiration_period']);
        } elseif (\array_key_exists('expiration_period', $data) && $data['expiration_period'] === null) {
            $object->setExpirationPeriod(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('has_unconfirmed_changes', $data) && $data['has_unconfirmed_changes'] !== null) {
            $object->setHasUnconfirmedChanges($data['has_unconfirmed_changes']);
        } elseif (\array_key_exists('has_unconfirmed_changes', $data) && $data['has_unconfirmed_changes'] === null) {
            $object->setHasUnconfirmedChanges(null);
        }
        if (\array_key_exists('is_address_draft', $data) && $data['is_address_draft'] !== null) {
            $object->setIsAddressDraft($data['is_address_draft']);
        } elseif (\array_key_exists('is_address_draft', $data) && $data['is_address_draft'] === null) {
            $object->setIsAddressDraft(null);
        }
        if (\array_key_exists('is_customer_price_changed', $data) && $data['is_customer_price_changed'] !== null) {
            $object->setIsCustomerPriceChanged($data['is_customer_price_changed']);
        } elseif (\array_key_exists('is_customer_price_changed', $data) && $data['is_customer_price_changed'] === null) {
            $object->setIsCustomerPriceChanged(null);
        }
        if (\array_key_exists('is_regular_quote', $data) && $data['is_regular_quote'] !== null) {
            $object->setIsRegularQuote($data['is_regular_quote']);
        } elseif (\array_key_exists('is_regular_quote', $data) && $data['is_regular_quote'] === null) {
            $object->setIsRegularQuote(null);
        }
        if (\array_key_exists('is_shipping_tax_changed', $data) && $data['is_shipping_tax_changed'] !== null) {
            $object->setIsShippingTaxChanged($data['is_shipping_tax_changed']);
        } elseif (\array_key_exists('is_shipping_tax_changed', $data) && $data['is_shipping_tax_changed'] === null) {
            $object->setIsShippingTaxChanged(null);
        }
        if (\array_key_exists('negotiated_price_type', $data) && $data['negotiated_price_type'] !== null) {
            $object->setNegotiatedPriceType($data['negotiated_price_type']);
        } elseif (\array_key_exists('negotiated_price_type', $data) && $data['negotiated_price_type'] === null) {
            $object->setNegotiatedPriceType(null);
        }
        if (\array_key_exists('negotiated_price_value', $data) && $data['negotiated_price_value'] !== null) {
            $object->setNegotiatedPriceValue($data['negotiated_price_value']);
        } elseif (\array_key_exists('negotiated_price_value', $data) && $data['negotiated_price_value'] === null) {
            $object->setNegotiatedPriceValue(null);
        }
        if (\array_key_exists('negotiated_total_price', $data) && $data['negotiated_total_price'] !== null) {
            $object->setNegotiatedTotalPrice($data['negotiated_total_price']);
        } elseif (\array_key_exists('negotiated_total_price', $data) && $data['negotiated_total_price'] === null) {
            $object->setNegotiatedTotalPrice(null);
        }
        if (\array_key_exists('notifications', $data) && $data['notifications'] !== null) {
            $object->setNotifications($data['notifications']);
        } elseif (\array_key_exists('notifications', $data) && $data['notifications'] === null) {
            $object->setNotifications(null);
        }
        if (\array_key_exists('original_total_price', $data) && $data['original_total_price'] !== null) {
            $object->setOriginalTotalPrice($data['original_total_price']);
        } elseif (\array_key_exists('original_total_price', $data) && $data['original_total_price'] === null) {
            $object->setOriginalTotalPrice(null);
        }
        if (\array_key_exists('quote_id', $data) && $data['quote_id'] !== null) {
            $object->setQuoteId($data['quote_id']);
        } elseif (\array_key_exists('quote_id', $data) && $data['quote_id'] === null) {
            $object->setQuoteId(null);
        }
        if (\array_key_exists('quote_name', $data) && $data['quote_name'] !== null) {
            $object->setQuoteName($data['quote_name']);
        } elseif (\array_key_exists('quote_name', $data) && $data['quote_name'] === null) {
            $object->setQuoteName(null);
        }
        if (\array_key_exists('shipping_price', $data) && $data['shipping_price'] !== null) {
            $object->setShippingPrice($data['shipping_price']);
        } elseif (\array_key_exists('shipping_price', $data) && $data['shipping_price'] === null) {
            $object->setShippingPrice(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['applied_rule_ids'] = $object->getAppliedRuleIds();
        if (null !== $object->getBaseNegotiatedTotalPrice()) {
            $data['base_negotiated_total_price'] = $object->getBaseNegotiatedTotalPrice();
        }
        if (null !== $object->getBaseOriginalTotalPrice()) {
            $data['base_original_total_price'] = $object->getBaseOriginalTotalPrice();
        }
        $data['creator_id'] = $object->getCreatorId();
        $data['creator_type'] = $object->getCreatorType();
        $data['deleted_sku'] = $object->getDeletedSku();
        $data['email_notification_status'] = $object->getEmailNotificationStatus();
        $data['expiration_period'] = $object->getExpirationPeriod();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['has_unconfirmed_changes'] = $object->getHasUnconfirmedChanges();
        $data['is_address_draft'] = $object->getIsAddressDraft();
        $data['is_customer_price_changed'] = $object->getIsCustomerPriceChanged();
        $data['is_regular_quote'] = $object->getIsRegularQuote();
        $data['is_shipping_tax_changed'] = $object->getIsShippingTaxChanged();
        $data['negotiated_price_type'] = $object->getNegotiatedPriceType();
        $data['negotiated_price_value'] = $object->getNegotiatedPriceValue();
        if (null !== $object->getNegotiatedTotalPrice()) {
            $data['negotiated_total_price'] = $object->getNegotiatedTotalPrice();
        }
        $data['notifications'] = $object->getNotifications();
        if (null !== $object->getOriginalTotalPrice()) {
            $data['original_total_price'] = $object->getOriginalTotalPrice();
        }
        $data['quote_id'] = $object->getQuoteId();
        $data['quote_name'] = $object->getQuoteName();
        $data['shipping_price'] = $object->getShippingPrice();
        $data['status'] = $object->getStatus();
        return $data;
    }
}
