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

class EavDataAttributeGroupInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\EavDataAttributeGroupInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\EavDataAttributeGroupInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\EavDataAttributeGroupInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attribute_group_id', $data) && $data['attribute_group_id'] !== null) {
            $object->setAttributeGroupId($data['attribute_group_id']);
        } elseif (\array_key_exists('attribute_group_id', $data) && $data['attribute_group_id'] === null) {
            $object->setAttributeGroupId(null);
        }
        if (\array_key_exists('attribute_group_name', $data) && $data['attribute_group_name'] !== null) {
            $object->setAttributeGroupName($data['attribute_group_name']);
        } elseif (\array_key_exists('attribute_group_name', $data) && $data['attribute_group_name'] === null) {
            $object->setAttributeGroupName(null);
        }
        if (\array_key_exists('attribute_set_id', $data) && $data['attribute_set_id'] !== null) {
            $object->setAttributeSetId($data['attribute_set_id']);
        } elseif (\array_key_exists('attribute_set_id', $data) && $data['attribute_set_id'] === null) {
            $object->setAttributeSetId(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_4\\Model\\EavDataAttributeGroupExtensionInterface', 'json', $context));
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
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
        if (null !== $object->getAttributeGroupId()) {
            $data['attribute_group_id'] = $object->getAttributeGroupId();
        }
        if (null !== $object->getAttributeGroupName()) {
            $data['attribute_group_name'] = $object->getAttributeGroupName();
        }
        if (null !== $object->getAttributeSetId()) {
            $data['attribute_set_id'] = $object->getAttributeSetId();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        return $data;
    }
}
