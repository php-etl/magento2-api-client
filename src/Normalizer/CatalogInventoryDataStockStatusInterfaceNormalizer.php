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
class CatalogInventoryDataStockStatusInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\CatalogInventoryDataStockStatusInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\CatalogInventoryDataStockStatusInterface';
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
        $object = new \Kiboko\Magento\Model\CatalogInventoryDataStockStatusInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('product_id', $data) && $data['product_id'] !== null) {
            $object->setProductId($data['product_id']);
        }
        elseif (\array_key_exists('product_id', $data) && $data['product_id'] === null) {
            $object->setProductId(null);
        }
        if (\array_key_exists('stock_id', $data) && $data['stock_id'] !== null) {
            $object->setStockId($data['stock_id']);
        }
        elseif (\array_key_exists('stock_id', $data) && $data['stock_id'] === null) {
            $object->setStockId(null);
        }
        if (\array_key_exists('qty', $data) && $data['qty'] !== null) {
            $object->setQty($data['qty']);
        }
        elseif (\array_key_exists('qty', $data) && $data['qty'] === null) {
            $object->setQty(null);
        }
        if (\array_key_exists('stock_status', $data) && $data['stock_status'] !== null) {
            $object->setStockStatus($data['stock_status']);
        }
        elseif (\array_key_exists('stock_status', $data) && $data['stock_status'] === null) {
            $object->setStockStatus(null);
        }
        if (\array_key_exists('stock_item', $data) && $data['stock_item'] !== null) {
            $object->setStockItem($this->denormalizer->denormalize($data['stock_item'], 'Kiboko\\Magento\\Model\\CatalogInventoryDataStockItemInterface', 'json', $context));
        }
        elseif (\array_key_exists('stock_item', $data) && $data['stock_item'] === null) {
            $object->setStockItem(null);
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
        $data['product_id'] = $object->getProductId();
        $data['stock_id'] = $object->getStockId();
        $data['qty'] = $object->getQty();
        $data['stock_status'] = $object->getStockStatus();
        $data['stock_item'] = $this->normalizer->normalize($object->getStockItem(), 'json', $context);
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\CatalogInventoryDataStockStatusInterface' => false);
    }
}