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
class InventoryInStorePickupApiDataSearchRequestInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestInterface';
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
        $object = new \Kiboko\Magento\Model\InventoryInStorePickupApiDataSearchRequestInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('area', $data) && $data['area'] !== null) {
            $object->setArea($this->denormalizer->denormalize($data['area'], 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestAreaInterface', 'json', $context));
        }
        elseif (\array_key_exists('area', $data) && $data['area'] === null) {
            $object->setArea(null);
        }
        if (\array_key_exists('filters', $data) && $data['filters'] !== null) {
            $object->setFilters($this->denormalizer->denormalize($data['filters'], 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestFiltersInterface', 'json', $context));
        }
        elseif (\array_key_exists('filters', $data) && $data['filters'] === null) {
            $object->setFilters(null);
        }
        if (\array_key_exists('page_size', $data) && $data['page_size'] !== null) {
            $object->setPageSize($data['page_size']);
        }
        elseif (\array_key_exists('page_size', $data) && $data['page_size'] === null) {
            $object->setPageSize(null);
        }
        if (\array_key_exists('current_page', $data) && $data['current_page'] !== null) {
            $object->setCurrentPage($data['current_page']);
        }
        elseif (\array_key_exists('current_page', $data) && $data['current_page'] === null) {
            $object->setCurrentPage(null);
        }
        if (\array_key_exists('scope_type', $data) && $data['scope_type'] !== null) {
            $object->setScopeType($data['scope_type']);
        }
        elseif (\array_key_exists('scope_type', $data) && $data['scope_type'] === null) {
            $object->setScopeType(null);
        }
        if (\array_key_exists('scope_code', $data) && $data['scope_code'] !== null) {
            $object->setScopeCode($data['scope_code']);
        }
        elseif (\array_key_exists('scope_code', $data) && $data['scope_code'] === null) {
            $object->setScopeCode(null);
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values = array();
            foreach ($data['sort'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\FrameworkSortOrder', 'json', $context);
            }
            $object->setSort($values);
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->setSort(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestExtensionInterface', 'json', $context));
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
        if ($object->isInitialized('area') && null !== $object->getArea()) {
            $data['area'] = $this->normalizer->normalize($object->getArea(), 'json', $context);
        }
        if ($object->isInitialized('filters') && null !== $object->getFilters()) {
            $data['filters'] = $this->normalizer->normalize($object->getFilters(), 'json', $context);
        }
        if ($object->isInitialized('pageSize') && null !== $object->getPageSize()) {
            $data['page_size'] = $object->getPageSize();
        }
        $data['current_page'] = $object->getCurrentPage();
        $data['scope_type'] = $object->getScopeType();
        $data['scope_code'] = $object->getScopeCode();
        if ($object->isInitialized('sort') && null !== $object->getSort()) {
            $values = array();
            foreach ($object->getSort() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['sort'] = $values;
        }
        if ($object->isInitialized('extensionAttributes') && null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\InventoryInStorePickupApiDataSearchRequestInterface' => false);
    }
}