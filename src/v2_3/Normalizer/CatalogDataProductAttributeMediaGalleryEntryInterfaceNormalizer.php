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

class CatalogDataProductAttributeMediaGalleryEntryInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductAttributeMediaGalleryEntryInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductAttributeMediaGalleryEntryInterface';
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
        $object = new \Kiboko\Magento\V2_3\Model\CatalogDataProductAttributeMediaGalleryEntryInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $object->setContent($this->denormalizer->denormalize($data['content'], 'Kiboko\\Magento\\V2_3\\Model\\FrameworkDataImageContentInterface', 'json', $context));
        } elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('disabled', $data) && $data['disabled'] !== null) {
            $object->setDisabled($data['disabled']);
        } elseif (\array_key_exists('disabled', $data) && $data['disabled'] === null) {
            $object->setDisabled(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2_3\\Model\\CatalogDataProductAttributeMediaGalleryEntryExtensionInterface', 'json', $context));
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('file', $data) && $data['file'] !== null) {
            $object->setFile($data['file']);
        } elseif (\array_key_exists('file', $data) && $data['file'] === null) {
            $object->setFile(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('label', $data) && $data['label'] !== null) {
            $object->setLabel($data['label']);
        } elseif (\array_key_exists('label', $data) && $data['label'] === null) {
            $object->setLabel(null);
        }
        if (\array_key_exists('media_type', $data) && $data['media_type'] !== null) {
            $object->setMediaType($data['media_type']);
        } elseif (\array_key_exists('media_type', $data) && $data['media_type'] === null) {
            $object->setMediaType(null);
        }
        if (\array_key_exists('position', $data) && $data['position'] !== null) {
            $object->setPosition($data['position']);
        } elseif (\array_key_exists('position', $data) && $data['position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('types', $data) && $data['types'] !== null) {
            $values = array();
            foreach ($data['types'] as $value) {
                $values[] = $value;
            }
            $object->setTypes($values);
        } elseif (\array_key_exists('types', $data) && $data['types'] === null) {
            $object->setTypes(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getContent()) {
            $data['content'] = $this->normalizer->normalize($object->getContent(), 'json', $context);
        }
        $data['disabled'] = $object->getDisabled();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        if (null !== $object->getFile()) {
            $data['file'] = $object->getFile();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['label'] = $object->getLabel();
        $data['media_type'] = $object->getMediaType();
        $data['position'] = $object->getPosition();
        $values = array();
        foreach ($object->getTypes() as $value) {
            $values[] = $value;
        }
        $data['types'] = $values;
        return $data;
    }
}
