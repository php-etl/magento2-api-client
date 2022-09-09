<?php

namespace Kiboko\Magento\V2_4\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_4\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EavDataAttributeSetInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\EavDataAttributeSetInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\EavDataAttributeSetInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\EavDataAttributeSetInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attribute_set_id', $data) && $data['attribute_set_id'] !== null) {
            $object->setAttributeSetId($data['attribute_set_id']);
        } elseif (\array_key_exists('attribute_set_id', $data) && $data['attribute_set_id'] === null) {
            $object->setAttributeSetId(null);
        }
        if (\array_key_exists('attribute_set_name', $data) && $data['attribute_set_name'] !== null) {
            $object->setAttributeSetName($data['attribute_set_name']);
        } elseif (\array_key_exists('attribute_set_name', $data) && $data['attribute_set_name'] === null) {
            $object->setAttributeSetName(null);
        }
        if (\array_key_exists('entity_type_id', $data) && $data['entity_type_id'] !== null) {
            $object->setEntityTypeId($data['entity_type_id']);
        } elseif (\array_key_exists('entity_type_id', $data) && $data['entity_type_id'] === null) {
            $object->setEntityTypeId(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('sort_order', $data) && $data['sort_order'] !== null) {
            $object->setSortOrder($data['sort_order']);
        } elseif (\array_key_exists('sort_order', $data) && $data['sort_order'] === null) {
            $object->setSortOrder(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAttributeSetId()) {
            $data['attribute_set_id'] = $object->getAttributeSetId();
        }
        $data['attribute_set_name'] = $object->getAttributeSetName();
        if (null !== $object->getEntityTypeId()) {
            $data['entity_type_id'] = $object->getEntityTypeId();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['sort_order'] = $object->getSortOrder();
        return $data;
    }
}
