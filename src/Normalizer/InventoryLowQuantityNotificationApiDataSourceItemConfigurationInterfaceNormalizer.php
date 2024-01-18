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
class InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface';
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
        $object = new \Kiboko\Magento\Model\InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface();
        if (\array_key_exists('notify_stock_qty', $data) && \is_int($data['notify_stock_qty'])) {
            $data['notify_stock_qty'] = (double) $data['notify_stock_qty'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('source_code', $data) && $data['source_code'] !== null) {
            $object->setSourceCode($data['source_code']);
        }
        elseif (\array_key_exists('source_code', $data) && $data['source_code'] === null) {
            $object->setSourceCode(null);
        }
        if (\array_key_exists('notify_stock_qty', $data) && $data['notify_stock_qty'] !== null) {
            $object->setNotifyStockQty($data['notify_stock_qty']);
        }
        elseif (\array_key_exists('notify_stock_qty', $data) && $data['notify_stock_qty'] === null) {
            $object->setNotifyStockQty(null);
        }
        if (\array_key_exists('sku', $data) && $data['sku'] !== null) {
            $object->setSku($data['sku']);
        }
        elseif (\array_key_exists('sku', $data) && $data['sku'] === null) {
            $object->setSku(null);
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
        if ($object->isInitialized('sourceCode') && null !== $object->getSourceCode()) {
            $data['source_code'] = $object->getSourceCode();
        }
        if ($object->isInitialized('notifyStockQty') && null !== $object->getNotifyStockQty()) {
            $data['notify_stock_qty'] = $object->getNotifyStockQty();
        }
        if ($object->isInitialized('sku') && null !== $object->getSku()) {
            $data['sku'] = $object->getSku();
        }
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface' => false);
    }
}