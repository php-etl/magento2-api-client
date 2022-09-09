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

class EavDataAttributeOptionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\EavDataAttributeOptionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\EavDataAttributeOptionInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\EavDataAttributeOptionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('is_default', $data) && $data['is_default'] !== null) {
            $object->setIsDefault($data['is_default']);
        } elseif (\array_key_exists('is_default', $data) && $data['is_default'] === null) {
            $object->setIsDefault(null);
        }
        if (\array_key_exists('label', $data) && $data['label'] !== null) {
            $object->setLabel($data['label']);
        } elseif (\array_key_exists('label', $data) && $data['label'] === null) {
            $object->setLabel(null);
        }
        if (\array_key_exists('sort_order', $data) && $data['sort_order'] !== null) {
            $object->setSortOrder($data['sort_order']);
        } elseif (\array_key_exists('sort_order', $data) && $data['sort_order'] === null) {
            $object->setSortOrder(null);
        }
        if (\array_key_exists('store_labels', $data) && $data['store_labels'] !== null) {
            $values = array();
            foreach ($data['store_labels'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_3\\Model\\EavDataAttributeOptionLabelInterface', 'json', $context);
            }
            $object->setStoreLabels($values);
        } elseif (\array_key_exists('store_labels', $data) && $data['store_labels'] === null) {
            $object->setStoreLabels(null);
        }
        if (\array_key_exists('value', $data) && $data['value'] !== null) {
            $object->setValue($data['value']);
        } elseif (\array_key_exists('value', $data) && $data['value'] === null) {
            $object->setValue(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getIsDefault()) {
            $data['is_default'] = $object->getIsDefault();
        }
        $data['label'] = $object->getLabel();
        if (null !== $object->getSortOrder()) {
            $data['sort_order'] = $object->getSortOrder();
        }
        if (null !== $object->getStoreLabels()) {
            $values = array();
            foreach ($object->getStoreLabels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['store_labels'] = $values;
        }
        $data['value'] = $object->getValue();
        return $data;
    }
}
