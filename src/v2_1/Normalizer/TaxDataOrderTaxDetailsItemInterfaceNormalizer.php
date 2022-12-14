<?php

namespace Kiboko\Magento\V2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_1\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\TaxDataOrderTaxDetailsItemInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\TaxDataOrderTaxDetailsItemInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\TaxDataOrderTaxDetailsItemInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('applied_taxes', $data) && $data['applied_taxes'] !== null) {
            $values = array();
            foreach ($data['applied_taxes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_1\\Model\\TaxDataOrderTaxDetailsAppliedTaxInterface', 'json', $context);
            }
            $object->setAppliedTaxes($values);
        } elseif (\array_key_exists('applied_taxes', $data) && $data['applied_taxes'] === null) {
            $object->setAppliedTaxes(null);
        }
        if (\array_key_exists('associated_item_id', $data) && $data['associated_item_id'] !== null) {
            $object->setAssociatedItemId($data['associated_item_id']);
        } elseif (\array_key_exists('associated_item_id', $data) && $data['associated_item_id'] === null) {
            $object->setAssociatedItemId(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('item_id', $data) && $data['item_id'] !== null) {
            $object->setItemId($data['item_id']);
        } elseif (\array_key_exists('item_id', $data) && $data['item_id'] === null) {
            $object->setItemId(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAppliedTaxes()) {
            $values = array();
            foreach ($object->getAppliedTaxes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['applied_taxes'] = $values;
        }
        if (null !== $object->getAssociatedItemId()) {
            $data['associated_item_id'] = $object->getAssociatedItemId();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        if (null !== $object->getItemId()) {
            $data['item_id'] = $object->getItemId();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }
}
