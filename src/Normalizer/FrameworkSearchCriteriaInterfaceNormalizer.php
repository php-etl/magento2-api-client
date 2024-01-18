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
class FrameworkSearchCriteriaInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\FrameworkSearchCriteriaInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\FrameworkSearchCriteriaInterface';
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
        $object = new \Kiboko\Magento\Model\FrameworkSearchCriteriaInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('filter_groups', $data) && $data['filter_groups'] !== null) {
            $values = array();
            foreach ($data['filter_groups'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\FrameworkSearchFilterGroup', 'json', $context);
            }
            $object->setFilterGroups($values);
        }
        elseif (\array_key_exists('filter_groups', $data) && $data['filter_groups'] === null) {
            $object->setFilterGroups(null);
        }
        if (\array_key_exists('sort_orders', $data) && $data['sort_orders'] !== null) {
            $values_1 = array();
            foreach ($data['sort_orders'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\Model\\FrameworkSortOrder', 'json', $context);
            }
            $object->setSortOrders($values_1);
        }
        elseif (\array_key_exists('sort_orders', $data) && $data['sort_orders'] === null) {
            $object->setSortOrders(null);
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
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getFilterGroups() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['filter_groups'] = $values;
        if ($object->isInitialized('sortOrders') && null !== $object->getSortOrders()) {
            $values_1 = array();
            foreach ($object->getSortOrders() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['sort_orders'] = $values_1;
        }
        if ($object->isInitialized('pageSize') && null !== $object->getPageSize()) {
            $data['page_size'] = $object->getPageSize();
        }
        if ($object->isInitialized('currentPage') && null !== $object->getCurrentPage()) {
            $data['current_page'] = $object->getCurrentPage();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\FrameworkSearchCriteriaInterface' => false);
    }
}