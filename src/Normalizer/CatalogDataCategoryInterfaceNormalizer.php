<?php

namespace Kiboko\Magento\V2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CatalogDataCategoryInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Kiboko\\Magento\\V2\\Model\\CatalogDataCategoryInterface';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2\\Model\\CatalogDataCategoryInterface';
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
        $object = new \Kiboko\Magento\V2\Model\CatalogDataCategoryInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('available_sort_by', $data)) {
            $values = array();
            foreach ($data['available_sort_by'] as $value) {
                $values[] = $value;
            }
            $object->setAvailableSortBy($values);
        }
        if (\array_key_exists('children', $data)) {
            $object->setChildren($data['children']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('custom_attributes', $data)) {
            $values_1 = array();
            foreach ($data['custom_attributes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2\\Model\\FrameworkAttributeInterface', 'json', $context);
            }
            $object->setCustomAttributes($values_1);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('include_in_menu', $data)) {
            $object->setIncludeInMenu($data['include_in_menu']);
        }
        if (\array_key_exists('is_active', $data)) {
            $object->setIsActive($data['is_active']);
        }
        if (\array_key_exists('level', $data)) {
            $object->setLevel($data['level']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('parent_id', $data)) {
            $object->setParentId($data['parent_id']);
        }
        if (\array_key_exists('path', $data)) {
            $object->setPath($data['path']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAvailableSortBy()) {
            $values = array();
            foreach ($object->getAvailableSortBy() as $value) {
                $values[] = $value;
            }
            $data['available_sort_by'] = $values;
        }
        if (null !== $object->getChildren()) {
            $data['children'] = $object->getChildren();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getCustomAttributes()) {
            $values_1 = array();
            foreach ($object->getCustomAttributes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['custom_attributes'] = $values_1;
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIncludeInMenu()) {
            $data['include_in_menu'] = $object->getIncludeInMenu();
        }
        if (null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if (null !== $object->getLevel()) {
            $data['level'] = $object->getLevel();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getParentId()) {
            $data['parent_id'] = $object->getParentId();
        }
        if (null !== $object->getPath()) {
            $data['path'] = $object->getPath();
        }
        if (null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        return $data;
    }
}