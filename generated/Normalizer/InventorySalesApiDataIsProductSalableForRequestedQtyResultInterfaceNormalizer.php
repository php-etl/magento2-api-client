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
class InventorySalesApiDataIsProductSalableForRequestedQtyResultInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\InventorySalesApiDataIsProductSalableForRequestedQtyResultInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\InventorySalesApiDataIsProductSalableForRequestedQtyResultInterface';
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
        $object = new \Kiboko\Magento\Model\InventorySalesApiDataIsProductSalableForRequestedQtyResultInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sku', $data) && $data['sku'] !== null) {
            $object->setSku($data['sku']);
        }
        elseif (\array_key_exists('sku', $data) && $data['sku'] === null) {
            $object->setSku(null);
        }
        if (\array_key_exists('stock_id', $data) && $data['stock_id'] !== null) {
            $object->setStockId($data['stock_id']);
        }
        elseif (\array_key_exists('stock_id', $data) && $data['stock_id'] === null) {
            $object->setStockId(null);
        }
        if (\array_key_exists('salable', $data) && $data['salable'] !== null) {
            $object->setSalable($data['salable']);
        }
        elseif (\array_key_exists('salable', $data) && $data['salable'] === null) {
            $object->setSalable(null);
        }
        if (\array_key_exists('errors', $data) && $data['errors'] !== null) {
            $values = array();
            foreach ($data['errors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\InventorySalesApiDataProductSalabilityErrorInterface', 'json', $context);
            }
            $object->setErrors($values);
        }
        elseif (\array_key_exists('errors', $data) && $data['errors'] === null) {
            $object->setErrors(null);
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
        $data['sku'] = $object->getSku();
        $data['stock_id'] = $object->getStockId();
        $data['salable'] = $object->getSalable();
        $values = array();
        foreach ($object->getErrors() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['errors'] = $values;
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\InventorySalesApiDataIsProductSalableForRequestedQtyResultInterface' => false);
    }
}