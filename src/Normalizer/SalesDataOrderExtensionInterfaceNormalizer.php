<?php

namespace Kiboko\Magento\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\Runtime\Normalizer\CheckArray;
use Kiboko\Magento\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\SalesDataOrderExtensionInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\SalesDataOrderExtensionInterface';
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
        $object = new \Kiboko\Magento\Model\SalesDataOrderExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shipping_assignments', $data) && $data['shipping_assignments'] !== null) {
            $values = array();
            foreach ($data['shipping_assignments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\SalesDataShippingAssignmentInterface', 'json', $context);
            }
            $object->setShippingAssignments($values);
        }
        elseif (\array_key_exists('shipping_assignments', $data) && $data['shipping_assignments'] === null) {
            $object->setShippingAssignments(null);
        }
        if (\array_key_exists('payment_additional_info', $data) && $data['payment_additional_info'] !== null) {
            $values_1 = array();
            foreach ($data['payment_additional_info'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\Model\\PaymentDataPaymentAdditionalInfoInterface', 'json', $context);
            }
            $object->setPaymentAdditionalInfo($values_1);
        }
        elseif (\array_key_exists('payment_additional_info', $data) && $data['payment_additional_info'] === null) {
            $object->setPaymentAdditionalInfo(null);
        }
        if (\array_key_exists('gift_message', $data) && $data['gift_message'] !== null) {
            $object->setGiftMessage($this->denormalizer->denormalize($data['gift_message'], 'Kiboko\\Magento\\Model\\GiftMessageDataMessageInterface', 'json', $context));
        }
        elseif (\array_key_exists('gift_message', $data) && $data['gift_message'] === null) {
            $object->setGiftMessage(null);
        }
        if (\array_key_exists('applied_taxes', $data) && $data['applied_taxes'] !== null) {
            $values_2 = array();
            foreach ($data['applied_taxes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\Model\\TaxDataOrderTaxDetailsAppliedTaxInterface', 'json', $context);
            }
            $object->setAppliedTaxes($values_2);
        }
        elseif (\array_key_exists('applied_taxes', $data) && $data['applied_taxes'] === null) {
            $object->setAppliedTaxes(null);
        }
        if (\array_key_exists('item_applied_taxes', $data) && $data['item_applied_taxes'] !== null) {
            $values_3 = array();
            foreach ($data['item_applied_taxes'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\Model\\TaxDataOrderTaxDetailsItemInterface', 'json', $context);
            }
            $object->setItemAppliedTaxes($values_3);
        }
        elseif (\array_key_exists('item_applied_taxes', $data) && $data['item_applied_taxes'] === null) {
            $object->setItemAppliedTaxes(null);
        }
        if (\array_key_exists('converting_from_quote', $data) && $data['converting_from_quote'] !== null) {
            $object->setConvertingFromQuote($data['converting_from_quote']);
        }
        elseif (\array_key_exists('converting_from_quote', $data) && $data['converting_from_quote'] === null) {
            $object->setConvertingFromQuote(null);
        }
        if (\array_key_exists('amazon_order_reference_id', $data) && $data['amazon_order_reference_id'] !== null) {
            $object->setAmazonOrderReferenceId($this->denormalizer->denormalize($data['amazon_order_reference_id'], 'Kiboko\\Magento\\Model\\AmazonPaymentDataOrderLinkInterface', 'json', $context));
        }
        elseif (\array_key_exists('amazon_order_reference_id', $data) && $data['amazon_order_reference_id'] === null) {
            $object->setAmazonOrderReferenceId(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('shippingAssignments') && null !== $object->getShippingAssignments()) {
            $values = array();
            foreach ($object->getShippingAssignments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['shipping_assignments'] = $values;
        }
        if ($object->isInitialized('paymentAdditionalInfo') && null !== $object->getPaymentAdditionalInfo()) {
            $values_1 = array();
            foreach ($object->getPaymentAdditionalInfo() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['payment_additional_info'] = $values_1;
        }
        if ($object->isInitialized('giftMessage') && null !== $object->getGiftMessage()) {
            $data['gift_message'] = $this->normalizer->normalize($object->getGiftMessage(), 'json', $context);
        }
        if ($object->isInitialized('appliedTaxes') && null !== $object->getAppliedTaxes()) {
            $values_2 = array();
            foreach ($object->getAppliedTaxes() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['applied_taxes'] = $values_2;
        }
        if ($object->isInitialized('itemAppliedTaxes') && null !== $object->getItemAppliedTaxes()) {
            $values_3 = array();
            foreach ($object->getItemAppliedTaxes() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['item_applied_taxes'] = $values_3;
        }
        if ($object->isInitialized('convertingFromQuote') && null !== $object->getConvertingFromQuote()) {
            $data['converting_from_quote'] = $object->getConvertingFromQuote();
        }
        if ($object->isInitialized('amazonOrderReferenceId') && null !== $object->getAmazonOrderReferenceId()) {
            $data['amazon_order_reference_id'] = $this->normalizer->normalize($object->getAmazonOrderReferenceId(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\SalesDataOrderExtensionInterface' => false);
    }
}