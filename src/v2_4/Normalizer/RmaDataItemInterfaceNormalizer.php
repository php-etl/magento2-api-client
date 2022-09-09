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

class RmaDataItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\RmaDataItemInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\RmaDataItemInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\RmaDataItemInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('condition', $data) && $data['condition'] !== null) {
            $object->setCondition($data['condition']);
        } elseif (\array_key_exists('condition', $data) && $data['condition'] === null) {
            $object->setCondition(null);
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
        if (\array_key_exists('order_item_id', $data) && $data['order_item_id'] !== null) {
            $object->setOrderItemId($data['order_item_id']);
        } elseif (\array_key_exists('order_item_id', $data) && $data['order_item_id'] === null) {
            $object->setOrderItemId(null);
        }
        if (\array_key_exists('qty_approved', $data) && $data['qty_approved'] !== null) {
            $object->setQtyApproved($data['qty_approved']);
        } elseif (\array_key_exists('qty_approved', $data) && $data['qty_approved'] === null) {
            $object->setQtyApproved(null);
        }
        if (\array_key_exists('qty_authorized', $data) && $data['qty_authorized'] !== null) {
            $object->setQtyAuthorized($data['qty_authorized']);
        } elseif (\array_key_exists('qty_authorized', $data) && $data['qty_authorized'] === null) {
            $object->setQtyAuthorized(null);
        }
        if (\array_key_exists('qty_requested', $data) && $data['qty_requested'] !== null) {
            $object->setQtyRequested($data['qty_requested']);
        } elseif (\array_key_exists('qty_requested', $data) && $data['qty_requested'] === null) {
            $object->setQtyRequested(null);
        }
        if (\array_key_exists('qty_returned', $data) && $data['qty_returned'] !== null) {
            $object->setQtyReturned($data['qty_returned']);
        } elseif (\array_key_exists('qty_returned', $data) && $data['qty_returned'] === null) {
            $object->setQtyReturned(null);
        }
        if (\array_key_exists('reason', $data) && $data['reason'] !== null) {
            $object->setReason($data['reason']);
        } elseif (\array_key_exists('reason', $data) && $data['reason'] === null) {
            $object->setReason(null);
        }
        if (\array_key_exists('resolution', $data) && $data['resolution'] !== null) {
            $object->setResolution($data['resolution']);
        } elseif (\array_key_exists('resolution', $data) && $data['resolution'] === null) {
            $object->setResolution(null);
        }
        if (\array_key_exists('rma_entity_id', $data) && $data['rma_entity_id'] !== null) {
            $object->setRmaEntityId($data['rma_entity_id']);
        } elseif (\array_key_exists('rma_entity_id', $data) && $data['rma_entity_id'] === null) {
            $object->setRmaEntityId(null);
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
        $data['condition'] = $object->getCondition();
        $data['entity_id'] = $object->getEntityId();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['order_item_id'] = $object->getOrderItemId();
        $data['qty_approved'] = $object->getQtyApproved();
        $data['qty_authorized'] = $object->getQtyAuthorized();
        $data['qty_requested'] = $object->getQtyRequested();
        $data['qty_returned'] = $object->getQtyReturned();
        $data['reason'] = $object->getReason();
        $data['resolution'] = $object->getResolution();
        $data['rma_entity_id'] = $object->getRmaEntityId();
        $data['status'] = $object->getStatus();
        return $data;
    }
}
