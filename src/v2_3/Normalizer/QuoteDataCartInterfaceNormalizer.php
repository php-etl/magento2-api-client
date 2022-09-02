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

class QuoteDataCartInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\QuoteDataCartInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\QuoteDataCartInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\QuoteDataCartInterface();
        if (\array_key_exists('items_qty', $data) && \is_int($data['items_qty'])) {
            $data['items_qty'] = (float) $data['items_qty'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('billing_address', $data)) {
            $object->setBillingAddress($this->denormalizer->denormalize($data['billing_address'], 'Kiboko\\Magento\\V2_3\\Model\\QuoteDataAddressInterface', 'json', $context));
        }
        if (\array_key_exists('converted_at', $data)) {
            $object->setConvertedAt($data['converted_at']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($this->denormalizer->denormalize($data['currency'], 'Kiboko\\Magento\\V2_3\\Model\\QuoteDataCurrencyInterface', 'json', $context));
        }
        if (\array_key_exists('customer', $data)) {
            $object->setCustomer($this->denormalizer->denormalize($data['customer'], 'Kiboko\\Magento\\V2_3\\Model\\CustomerDataCustomerInterface', 'json', $context));
        }
        if (\array_key_exists('customer_is_guest', $data)) {
            $object->setCustomerIsGuest($data['customer_is_guest']);
        }
        if (\array_key_exists('customer_note', $data)) {
            $object->setCustomerNote($data['customer_note']);
        }
        if (\array_key_exists('customer_note_notify', $data)) {
            $object->setCustomerNoteNotify($data['customer_note_notify']);
        }
        if (\array_key_exists('customer_tax_class_id', $data)) {
            $object->setCustomerTaxClassId($data['customer_tax_class_id']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_3\\Model\\QuoteDataCartExtensionInterface', 'json', $context));
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('is_active', $data)) {
            $object->setIsActive($data['is_active']);
        }
        if (\array_key_exists('is_virtual', $data)) {
            $object->setIsVirtual($data['is_virtual']);
        }
        if (\array_key_exists('items', $data)) {
            $values = array();
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_3\\Model\\QuoteDataCartItemInterface', 'json', $context);
            }
            $object->setItems($values);
        }
        if (\array_key_exists('items_count', $data)) {
            $object->setItemsCount($data['items_count']);
        }
        if (\array_key_exists('items_qty', $data)) {
            $object->setItemsQty($data['items_qty']);
        }
        if (\array_key_exists('orig_order_id', $data)) {
            $object->setOrigOrderId($data['orig_order_id']);
        }
        if (\array_key_exists('reserved_order_id', $data)) {
            $object->setReservedOrderId($data['reserved_order_id']);
        }
        if (\array_key_exists('store_id', $data)) {
            $object->setStoreId($data['store_id']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBillingAddress()) {
            $data['billing_address'] = $this->normalizer->normalize($object->getBillingAddress(), 'json', $context);
        }
        if (null !== $object->getConvertedAt()) {
            $data['converted_at'] = $object->getConvertedAt();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $this->normalizer->normalize($object->getCurrency(), 'json', $context);
        }
        $data['customer'] = $this->normalizer->normalize($object->getCustomer(), 'json', $context);
        if (null !== $object->getCustomerIsGuest()) {
            $data['customer_is_guest'] = $object->getCustomerIsGuest();
        }
        if (null !== $object->getCustomerNote()) {
            $data['customer_note'] = $object->getCustomerNote();
        }
        if (null !== $object->getCustomerNoteNotify()) {
            $data['customer_note_notify'] = $object->getCustomerNoteNotify();
        }
        if (null !== $object->getCustomerTaxClassId()) {
            $data['customer_tax_class_id'] = $object->getCustomerTaxClassId();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        $data['id'] = $object->getId();
        if (null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if (null !== $object->getIsVirtual()) {
            $data['is_virtual'] = $object->getIsVirtual();
        }
        if (null !== $object->getItems()) {
            $values = array();
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['items'] = $values;
        }
        if (null !== $object->getItemsCount()) {
            $data['items_count'] = $object->getItemsCount();
        }
        if (null !== $object->getItemsQty()) {
            $data['items_qty'] = $object->getItemsQty();
        }
        if (null !== $object->getOrigOrderId()) {
            $data['orig_order_id'] = $object->getOrigOrderId();
        }
        if (null !== $object->getReservedOrderId()) {
            $data['reserved_order_id'] = $object->getReservedOrderId();
        }
        $data['store_id'] = $object->getStoreId();
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        return $data;
    }
}
