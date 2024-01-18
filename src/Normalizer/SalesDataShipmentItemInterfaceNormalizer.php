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
class SalesDataShipmentItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\SalesDataShipmentItemInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\SalesDataShipmentItemInterface';
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
        $object = new \Kiboko\Magento\Model\SalesDataShipmentItemInterface();
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (double) $data['price'];
        }
        if (\array_key_exists('row_total', $data) && \is_int($data['row_total'])) {
            $data['row_total'] = (double) $data['row_total'];
        }
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (double) $data['weight'];
        }
        if (\array_key_exists('qty', $data) && \is_int($data['qty'])) {
            $data['qty'] = (double) $data['qty'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
            $object->setAdditionalData($data['additional_data']);
        }
        elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
            $object->setAdditionalData(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('entity_id', $data) && $data['entity_id'] !== null) {
            $object->setEntityId($data['entity_id']);
        }
        elseif (\array_key_exists('entity_id', $data) && $data['entity_id'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('parent_id', $data) && $data['parent_id'] !== null) {
            $object->setParentId($data['parent_id']);
        }
        elseif (\array_key_exists('parent_id', $data) && $data['parent_id'] === null) {
            $object->setParentId(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($data['price']);
        }
        elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('product_id', $data) && $data['product_id'] !== null) {
            $object->setProductId($data['product_id']);
        }
        elseif (\array_key_exists('product_id', $data) && $data['product_id'] === null) {
            $object->setProductId(null);
        }
        if (\array_key_exists('row_total', $data) && $data['row_total'] !== null) {
            $object->setRowTotal($data['row_total']);
        }
        elseif (\array_key_exists('row_total', $data) && $data['row_total'] === null) {
            $object->setRowTotal(null);
        }
        if (\array_key_exists('sku', $data) && $data['sku'] !== null) {
            $object->setSku($data['sku']);
        }
        elseif (\array_key_exists('sku', $data) && $data['sku'] === null) {
            $object->setSku(null);
        }
        if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
            $object->setWeight($data['weight']);
        }
        elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
            $object->setWeight(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('order_item_id', $data) && $data['order_item_id'] !== null) {
            $object->setOrderItemId($data['order_item_id']);
        }
        elseif (\array_key_exists('order_item_id', $data) && $data['order_item_id'] === null) {
            $object->setOrderItemId(null);
        }
        if (\array_key_exists('qty', $data) && $data['qty'] !== null) {
            $object->setQty($data['qty']);
        }
        elseif (\array_key_exists('qty', $data) && $data['qty'] === null) {
            $object->setQty(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
            $data['additional_data'] = $object->getAdditionalData();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('entityId') && null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('parentId') && null !== $object->getParentId()) {
            $data['parent_id'] = $object->getParentId();
        }
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if ($object->isInitialized('productId') && null !== $object->getProductId()) {
            $data['product_id'] = $object->getProductId();
        }
        if ($object->isInitialized('rowTotal') && null !== $object->getRowTotal()) {
            $data['row_total'] = $object->getRowTotal();
        }
        if ($object->isInitialized('sku') && null !== $object->getSku()) {
            $data['sku'] = $object->getSku();
        }
        if ($object->isInitialized('weight') && null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['order_item_id'] = $object->getOrderItemId();
        $data['qty'] = $object->getQty();
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\SalesDataShipmentItemInterface' => false);
    }
}