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

class NegotiableQuoteDataNegotiableQuoteInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_4\\Model\\NegotiableQuoteDataNegotiableQuoteInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_4\\Model\\NegotiableQuoteDataNegotiableQuoteInterface';
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
        $object = new \Kiboko\Magento\v2_4\Model\NegotiableQuoteDataNegotiableQuoteInterface();
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
        if (\array_key_exists('applied_rule_ids', $data)) {
            $object->setAppliedRuleIds($data['applied_rule_ids']);
        }
        if (\array_key_exists('base_negotiated_total_price', $data)) {
            $object->setBaseNegotiatedTotalPrice($data['base_negotiated_total_price']);
        }
        if (\array_key_exists('base_original_total_price', $data)) {
            $object->setBaseOriginalTotalPrice($data['base_original_total_price']);
        }
        if (\array_key_exists('creator_id', $data)) {
            $object->setCreatorId($data['creator_id']);
        }
        if (\array_key_exists('creator_type', $data)) {
            $object->setCreatorType($data['creator_type']);
        }
        if (\array_key_exists('deleted_sku', $data)) {
            $object->setDeletedSku($data['deleted_sku']);
        }
        if (\array_key_exists('email_notification_status', $data)) {
            $object->setEmailNotificationStatus($data['email_notification_status']);
        }
        if (\array_key_exists('expiration_period', $data)) {
            $object->setExpirationPeriod($data['expiration_period']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        if (\array_key_exists('has_unconfirmed_changes', $data)) {
            $object->setHasUnconfirmedChanges($data['has_unconfirmed_changes']);
        }
        if (\array_key_exists('is_address_draft', $data)) {
            $object->setIsAddressDraft($data['is_address_draft']);
        }
        if (\array_key_exists('is_customer_price_changed', $data)) {
            $object->setIsCustomerPriceChanged($data['is_customer_price_changed']);
        }
        if (\array_key_exists('is_regular_quote', $data)) {
            $object->setIsRegularQuote($data['is_regular_quote']);
        }
        if (\array_key_exists('is_shipping_tax_changed', $data)) {
            $object->setIsShippingTaxChanged($data['is_shipping_tax_changed']);
        }
        if (\array_key_exists('negotiated_price_type', $data)) {
            $object->setNegotiatedPriceType($data['negotiated_price_type']);
        }
        if (\array_key_exists('negotiated_price_value', $data)) {
            $object->setNegotiatedPriceValue($data['negotiated_price_value']);
        }
        if (\array_key_exists('negotiated_total_price', $data)) {
            $object->setNegotiatedTotalPrice($data['negotiated_total_price']);
        }
        if (\array_key_exists('notifications', $data)) {
            $object->setNotifications($data['notifications']);
        }
        if (\array_key_exists('original_total_price', $data)) {
            $object->setOriginalTotalPrice($data['original_total_price']);
        }
        if (\array_key_exists('quote_id', $data)) {
            $object->setQuoteId($data['quote_id']);
        }
        if (\array_key_exists('quote_name', $data)) {
            $object->setQuoteName($data['quote_name']);
        }
        if (\array_key_exists('shipping_price', $data)) {
            $object->setShippingPrice($data['shipping_price']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
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
