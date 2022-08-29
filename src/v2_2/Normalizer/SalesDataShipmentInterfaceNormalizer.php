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

class SalesDataShipmentInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_2\\Model\\SalesDataShipmentInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_2\\Model\\SalesDataShipmentInterface';
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
        $object = new \Kiboko\Magento\v2_2\Model\SalesDataShipmentInterface();
        if (\array_key_exists('total_qty', $data) && \is_int($data['total_qty'])) {
            $data['total_qty'] = (float) $data['total_qty'];
        }
        if (\array_key_exists('total_weight', $data) && \is_int($data['total_weight'])) {
            $data['total_weight'] = (float) $data['total_weight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('billing_address_id', $data)) {
            $object->setBillingAddressId($data['billing_address_id']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('customer_id', $data)) {
            $object->setCustomerId($data['customer_id']);
        }
        if (\array_key_exists('email_sent', $data)) {
            $object->setEmailSent($data['email_sent']);
        }
        if (\array_key_exists('entity_id', $data)) {
            $object->setEntityId($data['entity_id']);
        }
        if (\array_key_exists('increment_id', $data)) {
            $object->setIncrementId($data['increment_id']);
        }
        if (\array_key_exists('order_id', $data)) {
            $object->setOrderId($data['order_id']);
        }
        if (\array_key_exists('packages', $data)) {
            $values = array();
            foreach ($data['packages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\v2_2\\Model\\SalesDataShipmentPackageInterface', 'json', $context);
            }
            $object->setPackages($values);
        }
        if (\array_key_exists('shipment_status', $data)) {
            $object->setShipmentStatus($data['shipment_status']);
        }
        if (\array_key_exists('shipping_address_id', $data)) {
            $object->setShippingAddressId($data['shipping_address_id']);
        }
        if (\array_key_exists('shipping_label', $data)) {
            $object->setShippingLabel($data['shipping_label']);
        }
        if (\array_key_exists('store_id', $data)) {
            $object->setStoreId($data['store_id']);
        }
        if (\array_key_exists('total_qty', $data)) {
            $object->setTotalQty($data['total_qty']);
        }
        if (\array_key_exists('total_weight', $data)) {
            $object->setTotalWeight($data['total_weight']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (\array_key_exists('items', $data)) {
            $values_1 = array();
            foreach ($data['items'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\v2_2\\Model\\SalesDataShipmentItemInterface', 'json', $context);
            }
            $object->setItems($values_1);
        }
        if (\array_key_exists('tracks', $data)) {
            $values_2 = array();
            foreach ($data['tracks'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\v2_2\\Model\\SalesDataShipmentTrackInterface', 'json', $context);
            }
            $object->setTracks($values_2);
        }
        if (\array_key_exists('comments', $data)) {
            $values_3 = array();
            foreach ($data['comments'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\v2_2\\Model\\SalesDataShipmentCommentInterface', 'json', $context);
            }
            $object->setComments($values_3);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\v2_2\\Model\\SalesDataShipmentExtensionInterface', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBillingAddressId()) {
            $data['billing_address_id'] = $object->getBillingAddressId();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getCustomerId()) {
            $data['customer_id'] = $object->getCustomerId();
        }
        if (null !== $object->getEmailSent()) {
            $data['email_sent'] = $object->getEmailSent();
        }
        if (null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if (null !== $object->getIncrementId()) {
            $data['increment_id'] = $object->getIncrementId();
        }
        $data['order_id'] = $object->getOrderId();
        if (null !== $object->getPackages()) {
            $values = array();
            foreach ($object->getPackages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['packages'] = $values;
        }
        if (null !== $object->getShipmentStatus()) {
            $data['shipment_status'] = $object->getShipmentStatus();
        }
        if (null !== $object->getShippingAddressId()) {
            $data['shipping_address_id'] = $object->getShippingAddressId();
        }
        if (null !== $object->getShippingLabel()) {
            $data['shipping_label'] = $object->getShippingLabel();
        }
        if (null !== $object->getStoreId()) {
            $data['store_id'] = $object->getStoreId();
        }
        if (null !== $object->getTotalQty()) {
            $data['total_qty'] = $object->getTotalQty();
        }
        if (null !== $object->getTotalWeight()) {
            $data['total_weight'] = $object->getTotalWeight();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        $values_1 = array();
        foreach ($object->getItems() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['items'] = $values_1;
        $values_2 = array();
        foreach ($object->getTracks() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['tracks'] = $values_2;
        $values_3 = array();
        foreach ($object->getComments() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $data['comments'] = $values_3;
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        return $data;
    }
}
