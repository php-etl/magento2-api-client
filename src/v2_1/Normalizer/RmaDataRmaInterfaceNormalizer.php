<?php

namespace Kiboko\Magento\V2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_1\Runtime\Normalizer\CheckArray;
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
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\RmaDataRmaInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\RmaDataRmaInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\RmaDataRmaInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
            $values = array();
            foreach ($data['comments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_1\\Model\\RmaDataCommentInterface', 'json', $context);
            }
            $object->setComments($values);
        } elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
            $object->setComments(null);
        }
        if (\array_key_exists('custom_attributes', $data) && $data['custom_attributes'] !== null) {
            $values_1 = array();
            foreach ($data['custom_attributes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_1\\Model\\FrameworkAttributeInterface', 'json', $context);
            }
            $object->setCustomAttributes($values_1);
        } elseif (\array_key_exists('custom_attributes', $data) && $data['custom_attributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('customer_custom_email', $data) && $data['customer_custom_email'] !== null) {
            $object->setCustomerCustomEmail($data['customer_custom_email']);
        } elseif (\array_key_exists('customer_custom_email', $data) && $data['customer_custom_email'] === null) {
            $object->setCustomerCustomEmail(null);
        }
        if (\array_key_exists('customer_id', $data) && $data['customer_id'] !== null) {
            $object->setCustomerId($data['customer_id']);
        } elseif (\array_key_exists('customer_id', $data) && $data['customer_id'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('date_requested', $data) && $data['date_requested'] !== null) {
            $object->setDateRequested($data['date_requested']);
        } elseif (\array_key_exists('date_requested', $data) && $data['date_requested'] === null) {
            $object->setDateRequested(null);
        }
        if (\array_key_exists('entity_id', $data) && $data['entity_id'] !== null) {
            $object->setEntityId($data['entity_id']);
        } elseif (\array_key_exists('entity_id', $data) && $data['entity_id'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('increment_id', $data) && $data['increment_id'] !== null) {
            $object->setIncrementId($data['increment_id']);
        } elseif (\array_key_exists('increment_id', $data) && $data['increment_id'] === null) {
            $object->setIncrementId(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values_2 = array();
            foreach ($data['items'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Kiboko\\Magento\\V2_1\\Model\\RmaDataItemInterface', 'json', $context);
            }
            $object->setItems($values_2);
        } elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('order_id', $data) && $data['order_id'] !== null) {
            $object->setOrderId($data['order_id']);
        } elseif (\array_key_exists('order_id', $data) && $data['order_id'] === null) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('order_increment_id', $data) && $data['order_increment_id'] !== null) {
            $object->setOrderIncrementId($data['order_increment_id']);
        } elseif (\array_key_exists('order_increment_id', $data) && $data['order_increment_id'] === null) {
            $object->setOrderIncrementId(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('store_id', $data) && $data['store_id'] !== null) {
            $object->setStoreId($data['store_id']);
        } elseif (\array_key_exists('store_id', $data) && $data['store_id'] === null) {
            $object->setStoreId(null);
        }
        if (\array_key_exists('tracks', $data) && $data['tracks'] !== null) {
            $values_3 = array();
            foreach ($data['tracks'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Kiboko\\Magento\\V2_1\\Model\\RmaDataTrackInterface', 'json', $context);
            }
            $object->setTracks($values_3);
        } elseif (\array_key_exists('tracks', $data) && $data['tracks'] === null) {
            $object->setTracks(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getComments() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['comments'] = $values;
        if (null !== $object->getCustomAttributes()) {
            $values_1 = array();
            foreach ($object->getCustomAttributes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['custom_attributes'] = $values_1;
        }
        $data['customer_custom_email'] = $object->getCustomerCustomEmail();
        $data['customer_id'] = $object->getCustomerId();
        $data['date_requested'] = $object->getDateRequested();
        $data['entity_id'] = $object->getEntityId();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['increment_id'] = $object->getIncrementId();
        $values_2 = array();
        foreach ($object->getItems() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['items'] = $values_2;
        $data['order_id'] = $object->getOrderId();
        $data['order_increment_id'] = $object->getOrderIncrementId();
        $data['status'] = $object->getStatus();
        $data['store_id'] = $object->getStoreId();
        $values_3 = array();
        foreach ($object->getTracks() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $data['tracks'] = $values_3;
        return $data;
    }
}
