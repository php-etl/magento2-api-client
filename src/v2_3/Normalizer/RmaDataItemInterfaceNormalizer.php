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

class RmaDataItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\RmaDataItemInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\RmaDataItemInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\RmaDataItemInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('condition', $data)) {
            $object->setCondition($data['condition']);
        }
        if (\array_key_exists('entity_id', $data)) {
            $object->setEntityId($data['entity_id']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        if (\array_key_exists('order_item_id', $data)) {
            $object->setOrderItemId($data['order_item_id']);
        }
        if (\array_key_exists('qty_approved', $data)) {
            $object->setQtyApproved($data['qty_approved']);
        }
        if (\array_key_exists('qty_authorized', $data)) {
            $object->setQtyAuthorized($data['qty_authorized']);
        }
        if (\array_key_exists('qty_requested', $data)) {
            $object->setQtyRequested($data['qty_requested']);
        }
        if (\array_key_exists('qty_returned', $data)) {
            $object->setQtyReturned($data['qty_returned']);
        }
        if (\array_key_exists('reason', $data)) {
            $object->setReason($data['reason']);
        }
        if (\array_key_exists('resolution', $data)) {
            $object->setResolution($data['resolution']);
        }
        if (\array_key_exists('rma_entity_id', $data)) {
            $object->setRmaEntityId($data['rma_entity_id']);
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
