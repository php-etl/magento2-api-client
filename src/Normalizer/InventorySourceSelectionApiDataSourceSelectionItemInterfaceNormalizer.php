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
class InventorySourceSelectionApiDataSourceSelectionItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\InventorySourceSelectionApiDataSourceSelectionItemInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\InventorySourceSelectionApiDataSourceSelectionItemInterface';
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
        $object = new \Kiboko\Magento\Model\InventorySourceSelectionApiDataSourceSelectionItemInterface();
        if (\array_key_exists('qty_to_deduct', $data) && \is_int($data['qty_to_deduct'])) {
            $data['qty_to_deduct'] = (double) $data['qty_to_deduct'];
        }
        if (\array_key_exists('qty_available', $data) && \is_int($data['qty_available'])) {
            $data['qty_available'] = (double) $data['qty_available'];
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
        if (\array_key_exists('sku', $data) && $data['sku'] !== null) {
            $object->setSku($data['sku']);
        }
        elseif (\array_key_exists('sku', $data) && $data['sku'] === null) {
            $object->setSku(null);
        }
        if (\array_key_exists('qty_to_deduct', $data) && $data['qty_to_deduct'] !== null) {
            $object->setQtyToDeduct($data['qty_to_deduct']);
        }
        elseif (\array_key_exists('qty_to_deduct', $data) && $data['qty_to_deduct'] === null) {
            $object->setQtyToDeduct(null);
        }
        if (\array_key_exists('qty_available', $data) && $data['qty_available'] !== null) {
            $object->setQtyAvailable($data['qty_available']);
        }
        elseif (\array_key_exists('qty_available', $data) && $data['qty_available'] === null) {
            $object->setQtyAvailable(null);
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
        $data['source_code'] = $object->getSourceCode();
        $data['sku'] = $object->getSku();
        $data['qty_to_deduct'] = $object->getQtyToDeduct();
        $data['qty_available'] = $object->getQtyAvailable();
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\InventorySourceSelectionApiDataSourceSelectionItemInterface' => false);
    }
}