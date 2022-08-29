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

class SalesDataShipmentItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_4\\Model\\SalesDataShipmentItemInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_4\\Model\\SalesDataShipmentItemInterface';
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
        $object = new \Kiboko\Magento\v2_4\Model\SalesDataShipmentItemInterface();
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (\array_key_exists('row_total', $data) && \is_int($data['row_total'])) {
            $data['row_total'] = (float) $data['row_total'];
        }
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (float) $data['weight'];
        }
        if (\array_key_exists('qty', $data) && \is_int($data['qty'])) {
            $data['qty'] = (float) $data['qty'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additional_data', $data)) {
            $object->setAdditionalData($data['additional_data']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('entity_id', $data)) {
            $object->setEntityId($data['entity_id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('parent_id', $data)) {
            $object->setParentId($data['parent_id']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
        }
        if (\array_key_exists('product_id', $data)) {
            $object->setProductId($data['product_id']);
        }
        if (\array_key_exists('row_total', $data)) {
            $object->setRowTotal($data['row_total']);
        }
        if (\array_key_exists('sku', $data)) {
            $object->setSku($data['sku']);
        }
        if (\array_key_exists('weight', $data)) {
            $object->setWeight($data['weight']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        if (\array_key_exists('order_item_id', $data)) {
            $object->setOrderItemId($data['order_item_id']);
        }
        if (\array_key_exists('qty', $data)) {
            $object->setQty($data['qty']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdditionalData()) {
            $data['additional_data'] = $object->getAdditionalData();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getParentId()) {
            $data['parent_id'] = $object->getParentId();
        }
        if (null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if (null !== $object->getProductId()) {
            $data['product_id'] = $object->getProductId();
        }
        if (null !== $object->getRowTotal()) {
            $data['row_total'] = $object->getRowTotal();
        }
        if (null !== $object->getSku()) {
            $data['sku'] = $object->getSku();
        }
        if (null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['order_item_id'] = $object->getOrderItemId();
        $data['qty'] = $object->getQty();
        return $data;
    }
}
