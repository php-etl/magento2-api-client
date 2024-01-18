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
class TaxDataOrderTaxDetailsItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\TaxDataOrderTaxDetailsItemInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\TaxDataOrderTaxDetailsItemInterface';
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
        $object = new \Kiboko\Magento\Model\TaxDataOrderTaxDetailsItemInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('item_id', $data) && $data['item_id'] !== null) {
            $object->setItemId($data['item_id']);
        }
        elseif (\array_key_exists('item_id', $data) && $data['item_id'] === null) {
            $object->setItemId(null);
        }
        if (\array_key_exists('associated_item_id', $data) && $data['associated_item_id'] !== null) {
            $object->setAssociatedItemId($data['associated_item_id']);
        }
        elseif (\array_key_exists('associated_item_id', $data) && $data['associated_item_id'] === null) {
            $object->setAssociatedItemId(null);
        }
        if (\array_key_exists('applied_taxes', $data) && $data['applied_taxes'] !== null) {
            $values = array();
            foreach ($data['applied_taxes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\TaxDataOrderTaxDetailsAppliedTaxInterface', 'json', $context);
            }
            $object->setAppliedTaxes($values);
        }
        elseif (\array_key_exists('applied_taxes', $data) && $data['applied_taxes'] === null) {
            $object->setAppliedTaxes(null);
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
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('itemId') && null !== $object->getItemId()) {
            $data['item_id'] = $object->getItemId();
        }
        if ($object->isInitialized('associatedItemId') && null !== $object->getAssociatedItemId()) {
            $data['associated_item_id'] = $object->getAssociatedItemId();
        }
        if ($object->isInitialized('appliedTaxes') && null !== $object->getAppliedTaxes()) {
            $values = array();
            foreach ($object->getAppliedTaxes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['applied_taxes'] = $values;
        }
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\TaxDataOrderTaxDetailsItemInterface' => false);
    }
}