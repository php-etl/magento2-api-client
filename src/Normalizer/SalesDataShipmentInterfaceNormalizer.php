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
class SalesDataShipmentInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\SalesDataShipmentInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\SalesDataShipmentInterface';
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
        $object = new \Kiboko\Magento\Model\SalesDataShipmentInterface();
        if (\array_key_exists('total_qty', $data) && \is_int($data['total_qty'])) {
            $data['total_qty'] = (double) $data['total_qty'];
        }
        if (\array_key_exists('total_weight', $data) && \is_int($data['total_weight'])) {
            $data['total_weight'] = (double) $data['total_weight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('billing_address_id', $data) && $data['billing_address_id'] !== null) {
            $object->setBillingAddressId($data['billing_address_id']);
        }
        elseif (\array_key_exists('billing_address_id', $data) && $data['billing_address_id'] === null) {
            $object->setBillingAddressId(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt($data['created_at']);
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('customer_id', $data) && $data['customer_id'] !== null) {
            $object->setCustomerId($data['customer_id']);
        }
        elseif (\array_key_exists('customer_id', $data) && $data['customer_id'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('email_sent', $data) && $data['email_sent'] !== null) {
            $object->setEmailSent($data['email_sent']);
        }
        elseif (\array_key_exists('email_sent', $data) && $data['email_sent'] === null) {
            $object->setEmailSent(null);
        }
        if (\array_key_exists('entity_id', $data) && $data['entity_id'] !== null) {
            $object->setEntityId($data['entity_id']);
        }
        elseif (\array_key_exists('entity_id', $data) && $data['entity_id'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('increment_id', $data) && $data['increment_id'] !== null) {
            $object->setIncrementId($data['increment_id']);
        }
        elseif (\array_key_exists('increment_id', $data) && $data['increment_id'] === null) {
            $object->setIncrementId(null);
        }
        if (\array_key_exists('order_id', $data) && $data['order_id'] !== null) {
            $object->setOrderId($data['order_id']);
        }
        elseif (\array_key_exists('order_id', $data) && $data['order_id'] === null) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('packages', $data) && $data['packages'] !== null) {
            $values = array();
            foreach ($data['packages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\SalesDataShipmentPackageInterface', 'json', $context);
            }
            $object->setPackages($values);
        }
        elseif (\array_key_exists('packages', $data) && $data['packages'] === null) {
            $object->setPackages(null);
        }
        if (\array_key_exists('shipment_status', $data) && $data['shipment_status'] !== null) {
            $object->setShipmentStatus($data['shipment_status']);
        }
        elseif (\array_key_exists('shipment_status', $data) && $data['shipment_status'] === null) {
            $object->setShipmentStatus(null);
        }
        if (\array_key_exists('shipping_address_id', $data) && $data['shipping_address_id'] !== null) {
            $object->setShippingAddressId($data['shipping_address_id']);
        }
        elseif (\array_key_exists('shipping_address_id', $data) && $data['shipping_address_id'] === null) {
            $object->setShippingAddressId(null);
        }
        if (\array_key_exists('shipping_label', $data) && $data['shipping_label'] !== null) {
            $object->setShippingLabel($data['shipping_label']);
        }
        elseif (\array_key_exists('shipping_label', $data) && $data['shipping_label'] === null) {
            $object->setShippingLabel(null);
        }
        if (\array_key_exists('store_id', $data) && $data['store_id'] !== null) {
            $object->setStoreId($data['store_id']);
        }
        elseif (\array_key_exists('store_id', $data) && $data['store_id'] === null) {
            $object->setStoreId(null);
        }
        if (\array_key_exists('total_qty', $data) && $data['total_qty'] !== null) {
            $object->setTotalQty($data['total_qty']);
        }
        elseif (\array_key_exists('total_qty', $data) && $data['total_qty'] === null) {
            $object->setTotalQty(null);
        }
        if (\array_key_exists('total_weight', $data) && $data['total_weight'] !== null) {
            $object->setTotalWeight($data['total_weight']);
        }
        elseif (\array_key_exists('total_weight', $data) && $data['total_weight'] === null) {
            $object->setTotalWeight(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt($data['updated_at']);
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values_1 = array();
            foreach ($data['items'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\Model\\SalesDataShipmentItemInterface', 'json', $context);
            }
            $object->setItems($values_1);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('tracks', $data) && $data['tracks'] !== null) {
            $values_2 = array();
            foreach ($data['tracks'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\Model\\SalesDataShipmentTrackInterface', 'json', $context);
            }
            $object->setTracks($values_2);
        }
        elseif (\array_key_exists('tracks', $data) && $data['tracks'] === null) {
            $object->setTracks(null);
        }
        if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
            $values_3 = array();
            foreach ($data['comments'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\Model\\SalesDataShipmentCommentInterface', 'json', $context);
            }
            $object->setComments($values_3);
        }
        elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
            $object->setComments(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('billingAddressId') && null !== $object->getBillingAddressId()) {
            $data['billing_address_id'] = $object->getBillingAddressId();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('customerId') && null !== $object->getCustomerId()) {
            $data['customer_id'] = $object->getCustomerId();
        }
        if ($object->isInitialized('emailSent') && null !== $object->getEmailSent()) {
            $data['email_sent'] = $object->getEmailSent();
        }
        if ($object->isInitialized('entityId') && null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if ($object->isInitialized('incrementId') && null !== $object->getIncrementId()) {
            $data['increment_id'] = $object->getIncrementId();
        }
        $data['order_id'] = $object->getOrderId();
        if ($object->isInitialized('packages') && null !== $object->getPackages()) {
            $values = array();
            foreach ($object->getPackages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['packages'] = $values;
        }
        if ($object->isInitialized('shipmentStatus') && null !== $object->getShipmentStatus()) {
            $data['shipment_status'] = $object->getShipmentStatus();
        }
        if ($object->isInitialized('shippingAddressId') && null !== $object->getShippingAddressId()) {
            $data['shipping_address_id'] = $object->getShippingAddressId();
        }
        if ($object->isInitialized('shippingLabel') && null !== $object->getShippingLabel()) {
            $data['shipping_label'] = $object->getShippingLabel();
        }
        if ($object->isInitialized('storeId') && null !== $object->getStoreId()) {
            $data['store_id'] = $object->getStoreId();
        }
        if ($object->isInitialized('totalQty') && null !== $object->getTotalQty()) {
            $data['total_qty'] = $object->getTotalQty();
        }
        if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
            $data['total_weight'] = $object->getTotalWeight();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
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
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\SalesDataShipmentInterface' => false);
    }
}