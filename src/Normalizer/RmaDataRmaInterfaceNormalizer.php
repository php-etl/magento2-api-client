<?php

namespace Kiboko\Magento\V2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RmaDataRmaInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2\\Model\\RmaDataRmaInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2\\Model\\RmaDataRmaInterface';
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
        $object = new \Kiboko\Magento\V2\Model\RmaDataRmaInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('increment_id', $data)) {
            $object->setIncrementId($data['increment_id']);
        }
        if (\array_key_exists('entity_id', $data)) {
            $object->setEntityId($data['entity_id']);
        }
        if (\array_key_exists('order_id', $data)) {
            $object->setOrderId($data['order_id']);
        }
        if (\array_key_exists('order_increment_id', $data)) {
            $object->setOrderIncrementId($data['order_increment_id']);
        }
        if (\array_key_exists('store_id', $data)) {
            $object->setStoreId($data['store_id']);
        }
        if (\array_key_exists('customer_id', $data)) {
            $object->setCustomerId($data['customer_id']);
        }
        if (\array_key_exists('date_requested', $data)) {
            $object->setDateRequested($data['date_requested']);
        }
        if (\array_key_exists('customer_custom_email', $data)) {
            $object->setCustomerCustomEmail($data['customer_custom_email']);
        }
        if (\array_key_exists('items', $data)) {
            $values = array();
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2\\Model\\RmaDataItemInterface', 'json', $context);
            }
            $object->setItems($values);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('comments', $data)) {
            $values_1 = array();
            foreach ($data['comments'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2\\Model\\RmaDataCommentInterface', 'json', $context);
            }
            $object->setComments($values_1);
        }
        if (\array_key_exists('tracks', $data)) {
            $values_2 = array();
            foreach ($data['tracks'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\V2\\Model\\RmaDataTrackInterface', 'json', $context);
            }
            $object->setTracks($values_2);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        if (\array_key_exists('custom_attributes', $data)) {
            $values_3 = array();
            foreach ($data['custom_attributes'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\V2\\Model\\FrameworkAttributeInterface', 'json', $context);
            }
            $object->setCustomAttributes($values_3);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['increment_id'] = $object->getIncrementId();
        $data['entity_id'] = $object->getEntityId();
        $data['order_id'] = $object->getOrderId();
        $data['order_increment_id'] = $object->getOrderIncrementId();
        $data['store_id'] = $object->getStoreId();
        $data['customer_id'] = $object->getCustomerId();
        $data['date_requested'] = $object->getDateRequested();
        $data['customer_custom_email'] = $object->getCustomerCustomEmail();
        $values = array();
        foreach ($object->getItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['items'] = $values;
        $data['status'] = $object->getStatus();
        $values_1 = array();
        foreach ($object->getComments() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['comments'] = $values_1;
        $values_2 = array();
        foreach ($object->getTracks() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['tracks'] = $values_2;
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        if (null !== $object->getCustomAttributes()) {
            $values_3 = array();
            foreach ($object->getCustomAttributes() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['custom_attributes'] = $values_3;
        }
        return $data;
    }
}
