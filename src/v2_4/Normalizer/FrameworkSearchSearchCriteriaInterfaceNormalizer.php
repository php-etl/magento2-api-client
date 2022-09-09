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

class FrameworkSearchSearchCriteriaInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\FrameworkSearchSearchCriteriaInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\FrameworkSearchSearchCriteriaInterface';
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
        $object = new \Kiboko\Magento\V2_4\Model\FrameworkSearchSearchCriteriaInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('current_page', $data) && $data['current_page'] !== null) {
            $object->setCurrentPage($data['current_page']);
        } elseif (\array_key_exists('current_page', $data) && $data['current_page'] === null) {
            $object->setCurrentPage(null);
        }
        if (\array_key_exists('filter_groups', $data) && $data['filter_groups'] !== null) {
            $values = array();
            foreach ($data['filter_groups'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\V2_4\\Model\\FrameworkSearchFilterGroup', 'json', $context);
            }
            $object->setFilterGroups($values);
        } elseif (\array_key_exists('filter_groups', $data) && $data['filter_groups'] === null) {
            $object->setFilterGroups(null);
        }
        if (\array_key_exists('page_size', $data) && $data['page_size'] !== null) {
            $object->setPageSize($data['page_size']);
        } elseif (\array_key_exists('page_size', $data) && $data['page_size'] === null) {
            $object->setPageSize(null);
        }
        if (\array_key_exists('request_name', $data) && $data['request_name'] !== null) {
            $object->setRequestName($data['request_name']);
        } elseif (\array_key_exists('request_name', $data) && $data['request_name'] === null) {
            $object->setRequestName(null);
        }
        if (\array_key_exists('sort_orders', $data) && $data['sort_orders'] !== null) {
            $values_1 = array();
            foreach ($data['sort_orders'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Kiboko\\Magento\\V2_4\\Model\\FrameworkSortOrder', 'json', $context);
            }
            $object->setSortOrders($values_1);
        } elseif (\array_key_exists('sort_orders', $data) && $data['sort_orders'] === null) {
            $object->setSortOrders(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCurrentPage()) {
            $data['current_page'] = $object->getCurrentPage();
        }
        $values = array();
        foreach ($object->getFilterGroups() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['filter_groups'] = $values;
        if (null !== $object->getPageSize()) {
            $data['page_size'] = $object->getPageSize();
        }
        $data['request_name'] = $object->getRequestName();
        if (null !== $object->getSortOrders()) {
            $values_1 = array();
            foreach ($object->getSortOrders() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['sort_orders'] = $values_1;
        }
        return $data;
    }
}
