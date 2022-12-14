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

class ConfigurableProductDataOptionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\ConfigurableProductDataOptionInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\ConfigurableProductDataOptionInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\ConfigurableProductDataOptionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attribute_id', $data) && $data['attribute_id'] !== null) {
            $object->setAttributeId($data['attribute_id']);
        } elseif (\array_key_exists('attribute_id', $data) && $data['attribute_id'] === null) {
            $object->setAttributeId(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('is_use_default', $data) && $data['is_use_default'] !== null) {
            $object->setIsUseDefault($data['is_use_default']);
        } elseif (\array_key_exists('is_use_default', $data) && $data['is_use_default'] === null) {
            $object->setIsUseDefault(null);
        }
        if (\array_key_exists('label', $data) && $data['label'] !== null) {
            $object->setLabel($data['label']);
        } elseif (\array_key_exists('label', $data) && $data['label'] === null) {
            $object->setLabel(null);
        }
        if (\array_key_exists('position', $data) && $data['position'] !== null) {
            $object->setPosition($data['position']);
        } elseif (\array_key_exists('position', $data) && $data['position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('product_id', $data) && $data['product_id'] !== null) {
            $object->setProductId($data['product_id']);
        } elseif (\array_key_exists('product_id', $data) && $data['product_id'] === null) {
            $object->setProductId(null);
        }
        if (\array_key_exists('values', $data) && $data['values'] !== null) {
            $values = array();
            foreach ($data['values'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_4\\Model\\ConfigurableProductDataOptionValueInterface', 'json', $context);
            }
            $object->setValues($values);
        } elseif (\array_key_exists('values', $data) && $data['values'] === null) {
            $object->setValues(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAttributeId()) {
            $data['attribute_id'] = $object->getAttributeId();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIsUseDefault()) {
            $data['is_use_default'] = $object->getIsUseDefault();
        }
        if (null !== $object->getLabel()) {
            $data['label'] = $object->getLabel();
        }
        if (null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if (null !== $object->getProductId()) {
            $data['product_id'] = $object->getProductId();
        }
        if (null !== $object->getValues()) {
            $values = array();
            foreach ($object->getValues() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['values'] = $values;
        }
        return $data;
    }
}
