<?php

namespace Kiboko\Magento\V2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_2\Runtime\Normalizer\CheckArray;
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
        return $type === 'Kiboko\\Magento\\V2_2\\Model\\SalesDataShipmentInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_2\\Model\\SalesDataShipmentInterface';
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
        $object = new \Kiboko\Magento\V2_2\Model\SalesDataShipmentInterface();
        if (\array_key_exists('total_qty', $data) && \is_int($data['total_qty'])) {
            $data['total_qty'] = (float) $data['total_qty'];
        }
        if (\array_key_exists('total_weight', $data) && \is_int($data['total_weight'])) {
            $data['total_weight'] = (float) $data['total_weight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('billing_address_id', $data) && $data['billing_address_id'] !== null) {
            $object->setBillingAddressId($data['billing_address_id']);
        } elseif (\array_key_exists('billing_address_id', $data) && $data['billing_address_id'] === null) {
            $object->setBillingAddressId(null);
        }
        if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
            $values = array();
            foreach ($data['comments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_2\\Model\\SalesDataShipmentCommentInterface', 'json', $context);
            }
            $object->setComments($values);
        } elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
            $object->setComments(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt($data['created_at']);
        } elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('customer_id', $data) && $data['customer_id'] !== null) {
            $object->setCustomerId($data['customer_id']);
        } elseif (\array_key_exists('customer_id', $data) && $data['customer_id'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('email_sent', $data) && $data['email_sent'] !== null) {
            $object->setEmailSent($data['email_sent']);
        } elseif (\array_key_exists('email_sent', $data) && $data['email_sent'] === null) {
            $object->setEmailSent(null);
        }
        if (\array_key_exists('entity_id', $data) && $data['entity_id'] !== null) {
            $object->setEntityId($data['entity_id']);
        } elseif (\array_key_exists('entity_id', $data) && $data['entity_id'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_2\\Model\\SalesDataShipmentExtensionInterface', 'json', $context));
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('increment_id', $data) && $data['increment_id'] !== null) {
            $object->setIncrementId($data['increment_id']);
        } elseif (\array_key_exists('increment_id', $data) && $data['increment_id'] === null) {
            $object->setIncrementId(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values_1 = array();
            foreach ($data['items'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_2\\Model\\SalesDataShipmentItemInterface', 'json', $context);
            }
            $object->setItems($values_1);
        } elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('order_id', $data) && $data['order_id'] !== null) {
            $object->setOrderId($data['order_id']);
        } elseif (\array_key_exists('order_id', $data) && $data['order_id'] === null) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('packages', $data) && $data['packages'] !== null) {
            $values_2 = array();
            foreach ($data['packages'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\V2_2\\Model\\SalesDataShipmentPackageInterface', 'json', $context);
            }
            $object->setPackages($values_2);
        } elseif (\array_key_exists('packages', $data) && $data['packages'] === null) {
            $object->setPackages(null);
        }
        if (\array_key_exists('shipment_status', $data) && $data['shipment_status'] !== null) {
            $object->setShipmentStatus($data['shipment_status']);
        } elseif (\array_key_exists('shipment_status', $data) && $data['shipment_status'] === null) {
            $object->setShipmentStatus(null);
        }
        if (\array_key_exists('shipping_address_id', $data) && $data['shipping_address_id'] !== null) {
            $object->setShippingAddressId($data['shipping_address_id']);
        } elseif (\array_key_exists('shipping_address_id', $data) && $data['shipping_address_id'] === null) {
            $object->setShippingAddressId(null);
        }
        if (\array_key_exists('shipping_label', $data) && $data['shipping_label'] !== null) {
            $object->setShippingLabel($data['shipping_label']);
        } elseif (\array_key_exists('shipping_label', $data) && $data['shipping_label'] === null) {
            $object->setShippingLabel(null);
        }
        if (\array_key_exists('store_id', $data) && $data['store_id'] !== null) {
            $object->setStoreId($data['store_id']);
        } elseif (\array_key_exists('store_id', $data) && $data['store_id'] === null) {
            $object->setStoreId(null);
        }
        if (\array_key_exists('total_qty', $data) && $data['total_qty'] !== null) {
            $object->setTotalQty($data['total_qty']);
        } elseif (\array_key_exists('total_qty', $data) && $data['total_qty'] === null) {
            $object->setTotalQty(null);
        }
        if (\array_key_exists('total_weight', $data) && $data['total_weight'] !== null) {
            $object->setTotalWeight($data['total_weight']);
        } elseif (\array_key_exists('total_weight', $data) && $data['total_weight'] === null) {
            $object->setTotalWeight(null);
        }
        if (\array_key_exists('tracks', $data) && $data['tracks'] !== null) {
            $values_3 = array();
            foreach ($data['tracks'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\V2_2\\Model\\SalesDataShipmentTrackInterface', 'json', $context);
            }
            $object->setTracks($values_3);
        } elseif (\array_key_exists('tracks', $data) && $data['tracks'] === null) {
            $object->setTracks(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt($data['updated_at']);
        } elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
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
        $values = array();
        foreach ($object->getComments() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['comments'] = $values;
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
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        if (null !== $object->getIncrementId()) {
            $data['increment_id'] = $object->getIncrementId();
        }
        $values_1 = array();
        foreach ($object->getItems() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['items'] = $values_1;
        $data['order_id'] = $object->getOrderId();
        if (null !== $object->getPackages()) {
            $values_2 = array();
            foreach ($object->getPackages() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['packages'] = $values_2;
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
        $values_3 = array();
        foreach ($object->getTracks() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $data['tracks'] = $values_3;
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        return $data;
    }
}
