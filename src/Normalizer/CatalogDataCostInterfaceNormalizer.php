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
class CatalogDataCostInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\CatalogDataCostInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\CatalogDataCostInterface';
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
        $object = new \Kiboko\Magento\Model\CatalogDataCostInterface();
        if (\array_key_exists('cost', $data) && \is_int($data['cost'])) {
            $data['cost'] = (double) $data['cost'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cost', $data) && $data['cost'] !== null) {
            $object->setCost($data['cost']);
        }
        elseif (\array_key_exists('cost', $data) && $data['cost'] === null) {
            $object->setCost(null);
        }
        if (\array_key_exists('store_id', $data) && $data['store_id'] !== null) {
            $object->setStoreId($data['store_id']);
        }
        elseif (\array_key_exists('store_id', $data) && $data['store_id'] === null) {
            $object->setStoreId(null);
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
        $data['cost'] = $object->getCost();
        $data['store_id'] = $object->getStoreId();
        $data['sku'] = $object->getSku();
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\CatalogDataCostInterface' => false);
    }
}